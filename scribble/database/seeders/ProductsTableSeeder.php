<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //pen
        DB::table('products')->insert([
            // ballpoints
            ['NameProduct' => 'Uni-Ball One P Limited Edition Amber Color Gel Pen', 'Rating' => 4.5, 'DescriptionProduct' => 'Pulpen gel limited edition dengan warna amber yang elegan dari Uni-Ball, menawarkan pengalaman menulis yang halus dan presisi.', 'SubCategoryProductID' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Faber Castell Gel Pen Fast DRY 0.5mm', 'Rating' => 4.7, 'DescriptionProduct' => 'Pulpen gel dari Faber Castell dengan teknologi pengeringan cepat dan ketebalan 0.5mm, sempurna untuk menulis tanpa noda.', 'SubCategoryProductID' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pulpen Gel Motif Fluffy Cartoon Pens Ball Pen Warna Hitam 0.5', 'Rating' => 4.2, 'DescriptionProduct' => 'Pulpen gel dengan motif kartun lucu dan tinta hitam berukuran 0.5mm, cocok untuk menambah keceriaan pada alat tulis Anda.', 'SubCategoryProductID' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pulpen Joyko Gel Cetek Q Gel G P-265', 'Rating' => 4.8, 'DescriptionProduct' => 'Pulpen gel dari Joyko dengan model cetek dan kode G P-265, menawarkan kualitas tinggi dan kenyamanan dalam menulis.', 'SubCategoryProductID' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Typo - Gel Pens 7Pk - Pastel', 'Rating' => 4.9, 'DescriptionProduct' => 'Set pulpen gel dari Typo yang terdiri dari 7 warna pastel, ideal untuk membuat catatan yang penuh warna dan kreatif.', 'SubCategoryProductID' => 1, 'created_at' => now(), 'updated_at' => now()],
            //fountain
            ['NameProduct' => 'MONTEVERDE Ritma Fountain Pen', 'Rating' => 3.9, 'DescriptionProduct' => 'MONTEVERDE Ritma Fountain Pen adalah pulpen mewah dengan desain minimalis dan modern yang terinspirasi dari bentuk geometris. Pulpen ini menawarkan keseimbangan sempurna dan kenyamanan menulis yang luar biasa. Dilengkapi dengan nib berkualitas tinggi, pulpen ini cocok untuk kolektor maupun profesional.', 'SubCategoryProductID' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Parker 15 Energy Blue', 'Rating' => 4.2, 'DescriptionProduct' => 'Parker 15 Energy Blue adalah pulpen yang memadukan keanggunan dengan kinerja. Dengan desain yang ramping dan warna biru yang mencolok, pulpen ini memberikan pengalaman menulis yang halus dan konsisten. Ideal untuk penggunaan sehari-hari maupun sebagai hadiah eksklusif.', 'SubCategoryProductID' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Diamine 30ml Fountain Pen Ink', 'Rating' => 3.5, 'DescriptionProduct' => 'Diamine 30ml Fountain Pen Ink adalah tinta berkualitas tinggi yang cocok untuk berbagai jenis pulpen fountain. Dengan konsistensi yang sempurna dan pilihan warna yang beragam, tinta ini memastikan tulisan yang jelas dan bebas dari noda. Tinta ini juga ramah lingkungan dan tidak mudah kering.', 'SubCategoryProductID' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pulpen Pilot Fountain Pen Birdie S70SS Medium Original Jepang', 'Rating' => 4.5, 'DescriptionProduct' => 'Pulpen Pilot Fountain Pen Birdie S70SS Medium Original Jepang adalah pilihan terbaik bagi pecinta alat tulis Jepang. Dikenal dengan kualitasnya yang superior, pulpen ini menawarkan tulisan yang halus dan tahan lama. Desainnya yang elegan dan ringan membuatnya nyaman digunakan sepanjang hari.', 'SubCategoryProductID' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Kaweco Perkeo Fountain Pen', 'Rating' => 4.1, 'DescriptionProduct' => 'Kaweco Perkeo Fountain Pen adalah pulpen dengan desain klasik dan ergonomis. Terbuat dari bahan berkualitas tinggi, pulpen ini menawarkan pengalaman menulis yang nyaman dan stabil. Tersedia dalam berbagai warna, pulpen ini cocok untuk pelajar, profesional, dan kolektor.', 'SubCategoryProductID' => 2, 'created_at' => now(), 'updated_at' => now()],
            //marker
            ['NameProduct' => 'Joyko Marker Penanda Spidol', 'Rating' => 2.9, 'DescriptionProduct' => 'Joyko Marker Penanda Spidol adalah spidol serbaguna yang ideal untuk berbagai kebutuhan penandaan. Dengan tinta yang cepat kering dan tahan lama, spidol ini sangat cocok untuk digunakan di berbagai permukaan seperti kertas, karton, dan plastik. Desainnya yang ergonomis memastikan kenyamanan dalam penggunaan jangka panjang.', 'SubCategoryProductID' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Outline Markers Double line Outline Pen Drawing Marker Pen', 'Rating' => 2.8, 'DescriptionProduct' => 'Outline Markers Double line Outline Pen Drawing Marker Pen adalah alat yang sempurna untuk menambahkan sentuhan kreatif pada proyek seni Anda. Spidol ini memiliki dua garis tinta yang memberikan efek outline otomatis, membuat gambar dan tulisan Anda terlihat lebih menarik dan unik.', 'SubCategoryProductID' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Spidol Permanent SNOWMAN', 'Rating' => 4.9, 'DescriptionProduct' => 'Spidol Permanent SNOWMAN adalah pilihan terbaik untuk kebutuhan penandaan permanen. Dengan tinta yang tahan air dan cepat kering, spidol ini dapat digunakan di berbagai permukaan seperti plastik, logam, dan kaca. Kualitas tinggi dari tinta memastikan hasil yang tajam dan jelas.', 'SubCategoryProductID' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Spidol Penanda Kain / Water Erasable Pen / Fabric Marker', 'Rating' => 4.5, 'DescriptionProduct' => 'Spidol Penanda Kain / Water Erasable Pen / Fabric Marker adalah alat yang sempurna untuk proyek menjahit dan kerajinan tangan. Tinta yang dapat dihapus dengan air memudahkan Anda dalam membuat tanda sementara pada kain tanpa meninggalkan noda permanen. Ideal untuk penjahit dan pengrajin.', 'SubCategoryProductID' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'ZEBRA MILDLINER BRUSH PEN & MARKER DOUBLE ENDED HIGHLIGHT', 'Rating' => 4.9, 'DescriptionProduct' => 'ZEBRA MILDLINER BRUSH PEN & MARKER DOUBLE ENDED HIGHLIGHT adalah alat tulis yang menawarkan dua fungsi dalam satu produk. Satu ujung berupa brush pen yang fleksibel untuk membuat garis tebal dan tipis, sementara ujung lainnya berupa highlighter untuk penandaan. Tersedia dalam berbagai warna pastel yang lembut, spidol ini sempurna untuk perencanaan kreatif dan jurnal.', 'SubCategoryProductID' => 3, 'created_at' => now(), 'updated_at' => now()],
            //specialty 
            ['NameProduct' => 'Zebra Prestige Fineliner', 'Rating' => 3.9, 'DescriptionProduct' => 'Zebra Prestige Fineliner adalah pulpen fineliner berkualitas tinggi yang ideal untuk menulis, menggambar, dan sketsa. Dengan ujung yang halus dan tinta yang tahan lama, fineliner ini menawarkan garis yang konsisten dan tajam setiap kali digunakan. Desainnya yang elegan dan ergonomis membuatnya nyaman untuk digunakan dalam jangka waktu lama.', 'SubCategoryProductID' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Haile 4Size STA Waterproof Calligraphy Pen', 'Rating' => 3.4, 'DescriptionProduct' => 'Haile 4Size STA Waterproof Calligraphy Pen adalah set pena kaligrafi dengan empat ukuran berbeda, dirancang untuk memenuhi kebutuhan seni tulis tangan dan kaligrafi Anda. Tinta tahan air memastikan hasil tulisan yang tahan lama dan tidak luntur. Pena ini sempurna untuk menciptakan karya kaligrafi yang indah dan detail.', 'SubCategoryProductID' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Baru Calligraphy Pens - 4 Sizes Calligraphy', 'Rating' => 4.7, 'DescriptionProduct' => 'Baru Calligraphy Pens - 4 Sizes Calligraphy adalah set pena kaligrafi yang terdiri dari empat ukuran berbeda untuk berbagai gaya tulisan. Set ini ideal untuk pemula maupun profesional yang ingin menghasilkan karya kaligrafi yang menakjubkan. Tinta berkualitas tinggi memastikan setiap goresan terlihat jelas dan tajam.', 'SubCategoryProductID' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'KENKO - Pulpen Gel Bisa Dihapus T-Gel Erasable KE-303ER', 'Rating' => 4.3, 'DescriptionProduct' => 'KENKO - Pulpen Gel Bisa Dihapus T-Gel Erasable KE-303ER adalah pulpen gel inovatif yang memungkinkan Anda menghapus tinta dengan mudah tanpa meninggalkan bekas. Ideal untuk menulis catatan dan dokumen yang memerlukan koreksi. Desain ergonomis dan tinta yang halus membuat pengalaman menulis menjadi lebih menyenangkan.', 'SubCategoryProductID' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'PILOT FRIXION CLICKER 3 IN 1 ERASABLE PEN', 'Rating' => 3.6, 'DescriptionProduct' => 'PILOT FRIXION CLICKER 3 IN 1 ERASABLE PEN adalah pulpen multifungsi dengan tiga warna tinta yang dapat dihapus. Ideal untuk membuat catatan berwarna, mengorganisir dokumen, dan menandai kalender. Teknologi penghapusan unik memungkinkan Anda mengoreksi kesalahan dengan mudah, menjadikannya alat yang sangat berguna untuk pelajar dan profesional.', 'SubCategoryProductID' => 4, 'created_at' => now(), 'updated_at' => now()],

            
            [
                'NameProduct' => 'KENKO SCISSOR KS-838N Medium',
                'Rating' => 3.7,
                'DescriptionProduct' => 'Gunting berukuran medium berkualitas profesional dari Kenko, ideal untuk tugas pemotongan yang presisi. Desain ergonomis untuk kenyamanan penggunaan yang optimal. Terbuat dari bahan berkualitas tinggi untuk ketajaman potongan yang luar biasa. Cocok digunakan di berbagai situasi, baik di rumah maupun di tempat kerja.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'FABER-CASTELL Pocket Scissors Pink',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Gunting saku berwarna pink dari Faber-Castell, sangat kompak dan mudah dibawa. Desain yang stylish cocok untuk pemotongan detail dan presisi di mana saja. Terbuat dari bahan berkualitas untuk ketajaman dan keawetan yang optimal. Ideal untuk digunakan di kantor, sekolah, atau saat bepergian.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Papier Tigre Scissors',
                'Rating' => 4.9,
                'DescriptionProduct' => 'Gunting elegan dan ergonomis dari Papier Tigre, sempurna untuk penggunaan sehari-hari. Desain yang ringan dan mudah digenggam memberikan kenyamanan maksimal. Terbuat dari bahan berkualitas tinggi untuk hasil potongan yang presisi dan tahan lama. Cocok untuk digunakan di kantor, sekolah, atau di rumah.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'HAKO-AKE 2 Way Portable Scissors / Kokuyo',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Gunting portabel serbaguna dari Hako-Ake, dirancang untuk pengguna tangan kanan dan kiri. Bahan dan pisau tajam stainless steel untuk potongan yang akurat dan presisi. Desain ringkas dan ringan, mudah dibawa dan disimpan di tas atau kantong. Cocok untuk pemotongan di kantor, sekolah, atau saat bepergian.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Midori XS Compact Scissors',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Gunting ultra-kompak dari Midori, mudah dibawa dan digunakan untuk tugas pemotongan kecil. Desain ergonomis untuk kenyamanan penggunaan yang maksimal. Terbuat dari bahan berkualitas tinggi untuk ketajaman potongan yang optimal. Ideal untuk digunakan di kantor, sekolah, atau di rumah.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Gunting Scissors Joyko SC-828~848 - SC-838',
                'Rating' => 4.1,
                'DescriptionProduct' => 'Gunting seri Joyko SC dengan pegangan ergonomis dan pisau tajam stainless steel. Dirancang untuk pemotongan yang presisi dan tahan lama. Cocok digunakan untuk berbagai kebutuhan pemotongan di kantor, sekolah, atau di rumah. Dapat diandalkan untuk tugas pemotongan sehari-hari.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Gunting Kain Textile BAZIC Stainless 8 Inch Fabric Scissors',
                'Rating' => 3.5,
                'DescriptionProduct' => 'Gunting kain stainless steel berkualitas tinggi dari BAZIC, sempurna untuk memotong tekstil. Pisau tajam dan tahan lama untuk hasil potongan yang presisi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Ideal untuk pengrajin tekstil dan proyek jahitan.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Staedtler Noris Club Scissors 17cm',
                'Rating' => 5.0,
                'DescriptionProduct' => 'Gunting Staedtler Noris Club dengan panjang 17cm, cocok untuk berbagai kebutuhan pemotongan. Bahan dan desain ergonomis untuk kenyamanan penggunaan yang maksimal. Pisau tajam untuk hasil potongan yang presisi dan rapi. Ideal untuk penggunaan di kantor, sekolah, atau di rumah.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'SCAIKTIG Pinking Shears',
                'Rating' => 4.6,
                'DescriptionProduct' => 'Gunting zigzag SCAIKTIG dengan pisau bergigi, ideal untuk pemotongan dekoratif pada kain. Terbuat dari bahan berkualitas tinggi untuk tahan lama dan hasil potongan yang presisi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk pengrajin kain dan proyek DIY.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Joyko Gunting Prakarya Gerigi ZZ65',
                'Rating' => 4.4,
                'DescriptionProduct' => 'Gunting khusus ZZ65 dari Joyko, dirancang untuk proyek kerajinan dan DIY yang detail. Pisau tajam dengan hasil potongan yang presisi dan rapi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Ideal untuk digunakan di sekolah, rumah, atau untuk hobi kreatif.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'School Smart Paper Edger Scissor Set, Assorted Designs, Pack of 6',
                'Rating' => 3.6,
                'DescriptionProduct' => 'Paket gunting kertas School Smart Paper Edger dengan 6 desain berbeda, ideal untuk scrapbooking. Bahan dan pisau tajam untuk pemotongan yang presisi dan kreatif. Cocok untuk digunakan di kelas, acara seni, atau untuk proyek DIY di rumah. Dapatkan hasil potongan kertas yang unik dan menarik.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli W60001 Zig Zag School Scissor',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Gunting sekolah zigzag Deli W60001 dengan pisau yang tahan lama untuk pemotongan yang presisi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk penggunaan di sekolah, rumah, atau untuk kegiatan kreatif. Dapatkan potongan kertas zigzag yang rapi dan menarik.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Hilitand Pinking Shears BLACK',
                'Rating' => 4.0,
                'DescriptionProduct' => 'Gunting bergigi Hilitand dengan pegangan hitam, sempurna untuk menjahit profesional dan kerajinan tangan. Pisau tajam dan presisi untuk hasil potongan yang akurat dan rapi. Desain ergonomis untuk penggunaan yang nyaman dan mudah dioperasikan. Cocok untuk pemotongan kain dan proyek jahitan.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Marco 2 Paper Craft Scissors Pink',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Gunting kertas Marco 2 berwarna pink, dirancang untuk kegiatan seni dan kerajinan dengan detail dan presisi. Desain yang ringan dan ergonomis untuk penggunaan yang nyaman. Pisau tajam untuk hasil potongan yang rapi dan presisi. Cocok untuk digunakan di sekolah, rumah, atau acara seni.',
                'SubCategoryProductID' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'WORKPRO Premium Utility Knife Retractable Snap-off blade, Pack of 3',
                'Rating' => 3.5,
                'DescriptionProduct' => 'Paket 3 pisau utilitas premium WORKPRO dengan pisau snap-off yang dapat ditarik, ideal untuk berbagai tugas pemotongan. Bahan dan pisau yang tajam untuk hasil potongan yang akurat dan presisi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk digunakan di kantor, rumah, atau bengkel.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Ingenuity Precision Cutter SDI 0443C 9mm',
                'Rating' => 4.4,
                'DescriptionProduct' => 'Cutter presisi Ingenuity SDI 0443C berukuran 9mm, dilengkapi dengan pisau tajam untuk pemotongan yang presisi pada berbagai material. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Ideal untuk pemotongan detail di kantor, rumah, atau di tempat kerja.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Cutter Pemotong Joyko CU-0511',
                'Rating' => 3.8,
                'DescriptionProduct' => 'Cutter Joyko CU-0511, ideal untuk memotong kertas dan material ringan lainnya dengan mudah. Pisau tajam dan presisi untuk hasil potongan yang akurat. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk digunakan di kantor, rumah, atau untuk kegiatan DIY.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Mini Cutter Pemotong Joyko CU-505',
                'Rating' => 3.9,
                'DescriptionProduct' => 'Mini cutter Joyko CU-505 yang kompak dan portabel, sempurna untuk tugas pemotongan yang presisi. Desain ringkas dengan pegangan yang nyaman untuk penggunaan yang mudah. Pisau tajam untuk hasil potongan yang akurat dan rapi. Cocok untuk digunakan di kantor, rumah, atau saat bepergian.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Maped Cutting Blade',
                'Rating' => 5.0,
                'DescriptionProduct' => 'Pisau potong Maped, dirancang untuk pemotongan yang mudah dan efisien dalam proyek kerajinan dan kantor. Pisau tajam dan presisi untuk hasil potongan yang akurat. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk pemotongan kertas, kain, atau material lainnya.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'SDI Pen Type Cutter',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Cutter tipe pena SDI, dilengkapi dengan pisau yang dapat ditarik untuk pemotongan yang aman dan presisi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Ideal untuk pemotongan detail di kantor, rumah, atau saat bepergian.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Midori XS Cutter Handheld Extra Small',
                'Rating' => 4.9,
                'DescriptionProduct' => 'Cutter Midori XS, alat kecil yang mudah digenggam untuk pemotongan yang presisi dan detail. Pisau tajam untuk hasil potongan yang akurat. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk pemotongan kertas, kain, atau proyek DIY.',
                'SubCategoryProductID' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Brustro Pencil Sharpener',
                'Rating' => 5.0,
                'DescriptionProduct' => 'Penghapus pensil Brustro, dilengkapi dengan pisau tajam dan desain kompak untuk mengasah pensil dengan mudah. Cocok untuk penggunaan di sekolah, kantor, atau di rumah. Hasil rautan pensil yang halus dan presisi untuk kebutuhan menulis atau seni lukis.',
                'SubCategoryProductID' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Plus Japan Pencil Sharpener',
                'Rating' => 5.0,
                'DescriptionProduct' => 'Penghapus pensil Plus Japan, dirancang untuk mengasah pensil dengan halus dan presisi. Pisau tajam untuk hasil rautan yang akurat. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk kebutuhan menulis, seni, atau penggunaan sehari-hari di kantor atau sekolah.',
                'SubCategoryProductID' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli Electric Pencil Sharpener / Rautan Otomatis Edisi One Piece EH507',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Rautan pensil listrik Deli EH507, dilengkapi dengan operasi otomatis untuk pengasahan yang nyaman dan efisien. Pisau tajam untuk hasil rautan yang akurat dan halus. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk penggunaan di sekolah, kantor, atau di rumah.',
                'SubCategoryProductID' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli E0616B Rautan Meja-Rotary Pencil Sharpener',
                'Rating' => 4.0,
                'DescriptionProduct' => 'Rautan pensil meja rotary Deli E0616B, ideal untuk mengasah pensil dengan mudah dan presisi di meja kerja. Pisau tajam untuk hasil rautan yang akurat dan rapi. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk penggunaan di kantor atau di ruang belajar.',
                'SubCategoryProductID' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Faber Castell Sharpener Triangular / Segitiga',
                'Rating' => 4.0,
                'DescriptionProduct' => 'Rautan pensil segitiga Faber Castell, dirancang dengan bentuk unik untuk pegangan yang nyaman dan pengasahan yang efektif. Pisau tajam untuk hasil rautan yang akurat. Desain ergonomis untuk penggunaan yang mudah di tangan. Cocok untuk penggunaan sehari-hari di sekolah, kantor, atau di rumah.',
                'SubCategoryProductID' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KOKUYO RAKUAKE 2 Hole Punch Handy',
                'Rating' => 4.1,
                'DescriptionProduct' => 'Pembolong kertas KOKUYO RAKUAKE 2 lubang, alat praktis untuk membuat lubang yang presisi di kertas dengan mudah dan efisien. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk penggunaan di kantor, sekolah, atau di rumah.',
                'SubCategoryProductID' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Pembolong Kertas - Joyko Heavy Duty Punch No. 85B',
                'Rating' => 3.4,
                'DescriptionProduct' => 'Pembolong kertas Joyko Heavy Duty Punch No. 85B, alat kuat yang dirancang untuk tugas penembusan berat dengan konstruksi yang tahan lama. Ideal untuk pemakaian di kantor atau sekolah. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah.',
                'SubCategoryProductID' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KOKUYO Posity Puncher with stopper',
                'Rating' => 4.1,
                'DescriptionProduct' => 'Pembolong kertas KOKUYO Posity Puncher dengan stopper, dilengkapi dengan desain unik untuk pembolongan yang presisi dan stopper untuk kemudahan penggunaan. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk penggunaan di kantor, sekolah, atau di rumah.',
                'SubCategoryProductID' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'FABER - CASTELL Puncher 2-hole Green Box of 1',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Pembolong kertas FABER - CASTELL 2 lubang, sebuah set pembolong berwarna hijau ideal untuk penggunaan kantor dan sekolah. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk pembolongan di berbagai proyek kertas.',
                'SubCategoryProductID' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'MUJI - 2 Hole Punch',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Pembolong kertas MUJI 2 lubang, alat kantor berkualitas tinggi yang dirancang untuk pembolongan dua lubang di kertas dengan presisi dan mudah. Desain ergonomis dengan pegangan yang nyaman untuk penggunaan yang mudah. Cocok untuk penggunaan di kantor, sekolah, atau di rumah.',
                'SubCategoryProductID' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            









        ]);
    }
}
