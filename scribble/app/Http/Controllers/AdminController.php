<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Variant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product_admin(){
        $products = ProductEntry::join('products','products.ProductID','=','product_entries.ProductID')
        ->join('variants','variants.VariantID','=','product_entries.VariantID')
        ->join('sub_categories','sub_categories.SubCategoryProductID','=','products.SubCategoryProductID')
        ->join('categories','categories.CategoryProductID','=','sub_categories.CategoryProductID')
        ->get();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $product = null;
        return view('/admin/product-admin',
        [
            'products' =>$products,
            'subcategories' => $subcategories,
            "product_edit" => $product
        ]);
    }
    public function product_add(){

        // dd(request()->hasFile('ProductImages'));
        // dd(request()->file('ProductImages'));

        $products = request()->all();
        $newProduct = new Product();
        $newProductEntry = new ProductEntry();
        $newVariants = new Variant();

        // dd($products['ProductSubCategory']);

        $testProduct = Product::select("NameProduct")
        ->where("products.NameProduct","=",$products["ProductName"])->get()->first();

        if($testProduct == null){
            $newProduct->NameProduct= $products["ProductName"];
            $newProduct->Rating= 0;
            $newProduct->DescriptionProduct = $products["ProductDescription"];
            $newProduct->SubCategoryProductID = SubCategory::select("SubCategoryProductID")
            ->where("sub_categories.NameSubCategory","=",$products['ProductSubCategory'])->get()->value('SubCategoryProductID');
            // harus save new product dulu baru bisa lanjut
            $newProduct->save();
        }

        $testVariant = Variant::select("VariantName")
        ->where("variants.VariantName","=",$products["ProductVariant"])->get()->first();
        // dd($testVariant);

        if($testVariant == null){
            // variant baru
            $newVariants->VariantName = $products["ProductVariant"];
            // $newVariants->DescriptionVariant = $products["ProductDescription"];
            $newVariants->save();
        }
        else{
            // variant udah ada

        }
        $newProductEntry->ProductID = Product::select("ProductID")
        ->where("products.NameProduct","=",$products['ProductName'])->get()->value("ProductID");
        // dd($products["ProductName"]);
        $newProductEntry->VariantID = Variant::select("VariantID")
        ->where("variants.VariantName","=",$products["ProductVariant"])->get()->value("VariantID");


        // dd($newProductEntry->VariantID);

        $newProductEntry->Stock = $products["ProductStock"];
        $newProductEntry->Price = $products["ProductPrice"];

        $newProductEntry->save();

        if(request()->hasFile('ProductImages')){
            $images = request()->file('ProductImages');
            foreach($images as $image){
                $newProductImage = new ProductImage();
                $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
                $newProductImage->Image = 'data:'.$image->getClientMimeType().';base64,'.$imageBase64;

                $newProductImage->ProductID = Product::select("ProductID")
                ->where("products.NameProduct","=",$products['ProductName'])->get()->value("ProductID");
                $newProductImage->VariantID = Variant::select("VariantID")
                ->where("variants.VariantName","=",$products["ProductVariant"])->get()->value("VariantID");
                $newProductImage->save();
            }
        }

        return $this->product_admin();
    }
    public function product_find(){
        $ProductID = request()->ProductID;
        $VariantName = request()->VariantName;
        $product = null;

        if($ProductID !=null && $VariantName!=null){
            $product = ProductEntry::join('products','products.ProductID','=','product_entries.ProductID')
            ->join('variants','variants.VariantID','=','product_entries.VariantID')
            ->join('sub_categories','sub_categories.SubCategoryProductID','=','products.SubCategoryProductID')
            ->join('categories','categories.CategoryProductID','=','sub_categories.CategoryProductID')
            ->where("products.ProductID", $ProductID)
            ->where("VariantName",$VariantName)
            ->get()->first();
        }
        // dd($product);

        $products = ProductEntry::join('products','products.ProductID','=','product_entries.ProductID')
        ->join('variants','variants.VariantID','=','product_entries.VariantID')
        ->join('sub_categories','sub_categories.SubCategoryProductID','=','products.SubCategoryProductID')
        ->join('categories','categories.CategoryProductID','=','sub_categories.CategoryProductID')
        ->get();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        // dd($product);
        return view('/admin/product-admin',
        [
            'products' =>$products,
            'subcategories' => $subcategories,
            "product_edit" => $product
        ]);

    }

    public function product_edit(){
        // dd(request()->all());
        // updating product
        $newsubcategoryid = SubCategory::where("NameSubCategory", request()->ProductSubCategory)->get()->first()->SubCategoryProductID;
        // dd($newsubcategoryid);
        Product::where("ProductID",request()->ProductID)
        ->update(["NameProduct" => request()->ProductName,
                "DescriptionProduct" => request()->ProductDescription,
                "SubCategoryProductID" => $newsubcategoryid,
            
        ]);
        // updating variant
        Variant::where("VariantID",request()->VariantID)
        ->update(["VariantName" => request()->ProductVariant]);

        // updating stock and price
        ProductEntry::where("ProductID",request()->ProductID)
        ->where("VariantID",request()->VariantID)
        ->update(["Stock" => request()->ProductStock,
                "Price" => request()->ProductPrice,
    ]);


        return redirect()->route('product_admin');
    }
}
