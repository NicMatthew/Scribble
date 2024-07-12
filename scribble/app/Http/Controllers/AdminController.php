<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use App\Models\Variant;
use App\Models\VoucherProduct;
use App\Models\VoucherShipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function product_delete(){
        // dd(request()->all());
        $ProductID = request()->ProductID;
        $VariantID = Variant::where("VariantName",request()->VariantName)->get()->first()->VariantID;
        // dd($VariantID);
        ProductEntry::where("VariantID",$VariantID)->where("ProductID",$ProductID)->delete();
        // Cek masih ada product ato engga
        $testProduct = ProductEntry::where("ProductID",$ProductID)->get();
        if($testProduct == null){
            Product::where("ProductID",$ProductID)->delete();
        }
        // cek msh ada variant ato engga
        $testVariant = ProductEntry::where("VariantID",$VariantID)->get();
        if($testProduct == null){
            Variant::where("VariantID",$VariantID)->delete();
        }

        return redirect()->route('product_admin');
    }

    protected function countUsers() {
        $userCount = User::all()->count();

        return $userCount;
    }

    public function storeBanner(Request $request) {
        if ($request->hasFile('bannerImage')) {

            // Ambil file gambar yang diunggah
            $banner = $request->file('bannerImage');

            // Konversi gambar ke dalam base64
            $imageBase64 = base64_encode(file_get_contents($banner->getRealPath()));

            $newBanner = new Banner();
            $newBanner->image = 'data:'.$banner->getClientMimeType().';base64,'.$imageBase64;
            $newBanner->save();
        }

        return redirect()->route("admin-dashboard");
    }

    public function removeBanner($id) {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->route("admin-dashboard");
    }

    public function dashboard() {
        $userCount = $this->countUsers();
        $categories = Category::all();
        $banners = Banner::all();
        $voucherProduct = VoucherProduct::all();
        $voucherShipment = VoucherShipment::all();
        $totalSales = Transaction::all()->sum("TotalPrice");

        $sales = TransactionDetail::join("products", "products.ProductID", "=", "transaction_details.ProductID")
                                    ->select("NameProduct", "products.ProductID", DB::raw("sum(Quantity) as SalesQuantity"))
                                    ->groupBy("products.ProductID")
                                    ->get();

        foreach ($sales as $sale) {
            $image = ProductImage::where("product_images.ProductID", $sale->ProductID)->first()->Image;
            $sale->Image = $image;
        }

        return view("admin.dashboard", compact("userCount", "categories", "banners","voucherProduct","voucherShipment", "totalSales", "sales"));
    }
    public function addDiscount(){
        // dd(request()->all());
        // shipment section
        if(request()->DiscountType == "Shipment"){
            $newVoucherShipment = new VoucherShipment();
            $newVoucherShipment->VoucherName = request()->DiscountName;
            $newVoucherShipment->StartDate = request()->StartDate;
            $newVoucherShipment->EndDate = request()->EndDate;
            $newVoucherShipment->Value = request()->DiscountValue;
            $newVoucherShipment->save();
        }else{
            $newVoucherProduct = new VoucherProduct();
            $newVoucherProduct->VoucherName = request()->DiscountName;
            $newVoucherProduct->StartDate = request()->StartDate;
            $newVoucherProduct->EndDate = request()->EndDate;
            $newVoucherProduct->Value = request()->DiscountValue;
            $newVoucherProduct->DiscountCategory = request()->DiscountCategory;
            $newVoucherProduct->save();
        }

        return redirect()->route("admin-dashboard");

    }
    public function deleteDiscount(){
        // dd(request()->all());
        if(request()->VoucherProductID != null){
            // dd(request()->VoucherProductID);
            $voucher = VoucherProduct::where('voucher_products.VoucherProductID',request()->VoucherProductID);
            $voucher->delete();
        }
        if(request()->VoucherShipmentID != null){
            $voucher = VoucherShipment::where('voucher_shipments.VoucherShipmentID',request()->VoucherShipmentID);
            $voucher->delete();
        }
        return redirect()->route("admin-dashboard");
    }
}

