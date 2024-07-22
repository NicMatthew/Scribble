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

        DB::table('products')->insert([
            //pen
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


            //cutting tools
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
            ],


            //pencils
            //woodcase pencils
            ['NameProduct' => 'Faber-Castell 9000 Pencil B', 'Rating' => 5.0, 'DescriptionProduct' => 'Faber-Castell 9000 Pencil B adalah pensil berkualitas tinggi yang cocok untuk berbagai keperluan, mulai dari menulis hingga menggambar. Dengan inti grafit yang halus dan kokoh, pensil ini memberikan hasil tulisan yang jelas dan tahan lama. Desain ergonomis dan kualitas bahan terbaik membuatnya nyaman digunakan dalam jangka waktu lama.', 'SubCategoryProductID' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Lyra Pensil Ujian Alat Tulis 2B', 'Rating' => 4.1, 'DescriptionProduct' => 'Lyra Pensil Ujian Alat Tulis 2B adalah pilihan terbaik untuk keperluan ujian dan menulis sehari-hari. Dengan grafit berkualitas tinggi, pensil ini menghasilkan garis yang jelas dan konsisten. Desainnya yang ergonomis dan mudah diraut memastikan kenyamanan maksimal selama penggunaan.', 'SubCategoryProductID' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'LYRA Graphite Pencil Art Design Seri B', 'Rating' => 3.4, 'DescriptionProduct' => 'LYRA Graphite Pencil Art Design Seri B adalah pensil seni yang dirancang khusus untuk para seniman dan desainer. Dengan grafit yang halus dan berkualitas tinggi, pensil ini memungkinkan Anda membuat sketsa dan gambar dengan detail yang luar biasa. Cocok untuk berbagai teknik menggambar, pensil ini adalah alat yang wajib dimiliki oleh setiap seniman.', 'SubCategoryProductID' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Staedtler Mars Lumograph Pencils - Pencil Graphite', 'Rating' => 4.8, 'DescriptionProduct' => 'Staedtler Mars Lumograph Pencils - Pencil Graphite adalah pensil grafit premium yang ideal untuk menulis, menggambar, dan sketsa. Dengan kualitas grafit yang luar biasa dan ketahanan yang tinggi, pensil ini memberikan hasil yang tajam dan konsisten. Desain elegan dan ergonomis membuatnya nyaman digunakan dalam berbagai proyek seni dan pekerjaan teknis.', 'SubCategoryProductID' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Deli Graphite Pencil 2B', 'Rating' => 3.9, 'DescriptionProduct' => 'Deli Graphite Pencil 2B adalah pensil grafit serbaguna yang ideal untuk keperluan sekolah, kantor, dan seni. Dengan grafit berkualitas tinggi dan tekstur halus, pensil ini memastikan tulisan yang jelas dan gambar yang detail. Pensil ini juga mudah diraut dan memiliki desain ergonomis yang nyaman digunakan.', 'SubCategoryProductID' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Joyko P-8136 2B 1 BOX 12pcs', 'Rating' => 3.2, 'DescriptionProduct' => 'Joyko P-8136 2B 1 BOX 12pcs adalah set pensil berkualitas tinggi yang cocok untuk berbagai keperluan menulis dan menggambar. Dengan inti grafit yang halus dan kuat, pensil ini memberikan hasil yang tajam dan konsisten. Set ini sangat ideal untuk pelajar, seniman, dan profesional yang memerlukan pensil berkualitas tinggi dalam jumlah banyak.', 'SubCategoryProductID' => 5, 'created_at' => now(), 'updated_at' => now()],
            //mechanical pencils
            ['NameProduct' => 'Pentel Pensil Mekanik New Technicklik PD107T', 'Rating' => 4.2, 'DescriptionProduct' => 'Pentel Pensil Mekanik New Technicklik PD107T adalah pensil mekanik berkualitas tinggi yang dirancang untuk kebutuhan menulis dan menggambar sehari-hari. Dengan mekanisme klik yang halus dan presisi, pensil ini memastikan distribusi grafit yang konsisten. Desain ergonomis dan ringan membuatnya nyaman digunakan untuk sesi menulis yang panjang.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Faber-Castell Mechanical Pencil', 'Rating' => 4.7, 'DescriptionProduct' => 'Faber-Castell Mechanical Pencil adalah pensil mekanik dengan kualitas premium yang cocok untuk berbagai keperluan menulis dan menggambar. Dengan mekanisme isi ulang yang mudah dan ujung yang halus, pensil ini menawarkan kenyamanan dan keakuratan dalam setiap goresan. Desainnya yang elegan dan ergonomis memastikan pengalaman menulis yang menyenangkan.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pentel EnerGize Mechanical Pencil', 'Rating' => 4.4, 'DescriptionProduct' => 'Pentel EnerGize Mechanical Pencil adalah pensil mekanik yang dirancang untuk memberikan kenyamanan maksimal dengan genggaman yang lembut dan nyaman. Dilengkapi dengan teknologi canggih untuk menulis halus tanpa macet, pensil ini ideal untuk penggunaan sehari-hari. Desainnya yang stylish dan fungsional membuatnya cocok untuk pelajar dan profesional.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pilot Dr. Grip Play Border Mechanical Pencil', 'Rating' => 4.5, 'DescriptionProduct' => 'Pilot Dr. Grip Play Border Mechanical Pencil adalah pensil mekanik dengan desain ergonomis yang mengurangi tekanan pada tangan saat menulis. Dengan teknologi terbaru yang memastikan aliran grafit yang mulus, pensil ini sangat ideal untuk menulis panjang dan pekerjaan detail. Dilengkapi dengan fitur penghapus yang praktis, pensil ini menjadi pilihan utama bagi mereka yang mencari kenyamanan dan efisiensi.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pilot Dr. Grip Play Border San-X Sumikko Gurashi Mechanical Pencil Limited Edition', 'Rating' => 4.0, 'DescriptionProduct' => 'Pilot Dr. Grip Play Border San-X Sumikko Gurashi Mechanical Pencil Limited Edition adalah pensil mekanik edisi terbatas dengan desain karakter Sumikko Gurashi yang lucu. Selain tampilannya yang menarik, pensil ini juga menawarkan kenyamanan menulis dengan pegangan yang lembut dan mekanisme yang halus. Cocok untuk koleksi maupun penggunaan sehari-hari.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Uni Kuru Toga Kurutoga Disney Princess Rapunzel Belle Ariel Limited Edition', 'Rating' => 4.9, 'DescriptionProduct' => 'Uni Kuru Toga Kurutoga Disney Princess Rapunzel Belle Ariel Limited Edition adalah pensil mekanik edisi terbatas dengan desain karakter Disney Princess yang menawan. Dilengkapi dengan teknologi Kurutoga yang memastikan ujung grafit selalu tajam dan rata, pensil ini ideal untuk menulis dan menggambar. Desainnya yang eksklusif menjadikannya hadiah sempurna untuk penggemar Disney.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Uni Kuru Toga Kurutoga Sanrio Mechanical Pencil Limited Edition', 'Rating' => 4.9, 'DescriptionProduct' => 'Uni Kuru Toga Kurutoga Sanrio Mechanical Pencil Limited Edition adalah pensil mekanik dengan desain karakter Sanrio yang menggemaskan. Teknologi Kurutoga yang inovatif memastikan ujung pensil tetap tajam sepanjang waktu, memberikan pengalaman menulis yang optimal. Pensil ini adalah pilihan ideal bagi mereka yang mencari alat tulis yang fungsional dan penuh gaya.', 'SubCategoryProductID' => 6, 'created_at' => now(), 'updated_at' => now()],
            //coloured pencils
            ['NameProduct' => 'Staedtler Luna Water Color Colored Pencil 12', 'Rating' => 4.2, 'DescriptionProduct' => 'Staedtler Luna Water Color Colored Pencil 12 adalah set pensil warna air berkualitas tinggi yang ideal untuk seniman dan pelajar. Pensil ini memungkinkan Anda untuk menciptakan efek cat air yang indah dengan menggabungkan teknik menggambar dan melukis. Set ini terdiri dari 12 warna cerah dan kaya yang mudah diaplikasikan dan dicampur. Desain ergonomis dan kualitas bahan terbaik memastikan kenyamanan maksimal selama penggunaan.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Faber-Castell Classic Colour Pencil 12', 'Rating' => 4.8, 'DescriptionProduct' => 'Faber-Castell Classic Colour Pencil 12 adalah set pensil warna klasik yang dirancang untuk berbagai kebutuhan seni dan kerajinan. Dengan inti pigmen berkualitas tinggi, pensil ini memberikan warna yang tajam dan hidup. Set ini sangat cocok untuk menggambar, mewarnai, dan proyek kreatif lainnya. Setiap pensil dirancang dengan bentuk heksagonal yang ergonomis untuk kenyamanan penggunaan jangka panjang.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Faber-Castell Classic Colour Pencil 24', 'Rating' => 4.9, 'DescriptionProduct' => 'Faber-Castell Classic Colour Pencil 24 adalah set pensil warna yang menawarkan palet warna yang lebih luas untuk kreativitas tanpa batas. Dengan 24 warna yang kaya dan beragam, set ini memungkinkan Anda untuk menciptakan karya seni yang detail dan penuh warna. Pensil ini memiliki inti pigmen yang halus dan kuat, serta desain heksagonal yang nyaman digenggam.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Faber-Castell Classic Colour Pencil 48', 'Rating' => 4.7, 'DescriptionProduct' => 'Faber-Castell Classic Colour Pencil 48 adalah set pensil warna yang ideal untuk seniman yang mencari berbagai pilihan warna. Dengan 48 warna yang intens dan mudah dicampur, set ini cocok untuk menciptakan karya seni yang kompleks dan detail. Setiap pensil dirancang dengan kualitas tinggi dan bentuk heksagonal yang ergonomis, memastikan kenyamanan dan keakuratan dalam setiap goresan.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pentel Colour Pencil 12 warna', 'Rating' => 4.2, 'DescriptionProduct' => 'Pentel Colour Pencil 12 warna adalah set pensil warna yang praktis dan serbaguna untuk berbagai kebutuhan seni dan kreatif. Dengan 12 warna cerah dan pigmen yang kaya, pensil ini ideal untuk mewarnai, menggambar, dan sketsa. Desainnya yang ergonomis dan kualitas bahan yang tahan lama memastikan pensil ini nyaman digunakan dalam jangka waktu yang lama.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pentel Colour Pencil 36 warna', 'Rating' => 4.2, 'DescriptionProduct' => 'Pentel Colour Pencil 36 warna menawarkan pilihan warna yang lebih luas untuk ekspresi seni yang lebih bebas. Set ini terdiri dari 36 pensil warna dengan pigmen yang kaya dan tahan lama. Desain ergonomis dan kualitas bahan terbaik membuat pensil ini nyaman digunakan untuk berbagai proyek seni dan kerajinan. Cocok untuk pelajar, seniman, dan hobi.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Pentel Colour Pencil 48 warna', 'Rating' => 4.1, 'DescriptionProduct' => 'Pentel Colour Pencil 48 warna adalah set pensil warna premium dengan berbagai pilihan warna yang kaya dan beragam. Set ini dirancang untuk seniman yang membutuhkan fleksibilitas dan intensitas warna dalam karya mereka. Pensil ini memiliki inti pigmen yang halus dan tahan lama, serta desain ergonomis yang nyaman digunakan untuk sesi menggambar yang panjang.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Aimilo High Grade Oil Pencil Color 24 Warna', 'Rating' => 3.6, 'DescriptionProduct' => 'Aimilo High Grade Oil Pencil Color 24 Warna adalah set pensil warna minyak berkualitas tinggi yang dirancang untuk memberikan hasil warna yang tajam dan hidup. Set ini terdiri dari 24 warna yang kaya dan mudah dicampur, ideal untuk berbagai proyek seni dan kerajinan. Pensil ini memiliki inti pigmen yang halus dan kuat, serta desain yang ergonomis untuk kenyamanan penggunaan.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'OBOS Oil Pencil Color 72', 'Rating' => 4.5, 'DescriptionProduct' => 'OBOS Oil Pencil Color 72 adalah set pensil warna minyak yang menawarkan berbagai pilihan warna untuk kreativitas tanpa batas. Dengan 72 warna yang intens dan mudah dicampur, set ini cocok untuk menciptakan karya seni yang detail dan penuh warna. Pensil ini memiliki inti pigmen yang halus dan kuat, serta desain ergonomis yang nyaman digunakan dalam jangka waktu lama.', 'SubCategoryProductID' => 7, 'created_at' => now(), 'updated_at' => now()],
            //charcoal pencils
            ['NameProduct' => 'Maries Paper Wrapped Charcoal Pencil', 'Rating' => 4.8, 'DescriptionProduct' => 'Staedtler Luna Water Color Colored Pencil 12 adalah set pensil warna air berkualitas tinggi yang ideal untuk seniman dan pelajar. Pensil ini memungkinkan Anda untuk menciptakan efek cat air yang indah dengan menggabungkan teknik menggambar dan melukis. Set ini terdiri dari 12 warna cerah dan kaya yang mudah diaplikasikan dan dicampur. Desain ergonomis dan kualitas bahan terbaik memastikan kenyamanan maksimal selama penggunaan.', 'SubCategoryProductID' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Maries White Charcoal Pencil', 'Rating' => 4.9, 'DescriptionProduct' => 'Faber-Castell Classic Colour Pencil 12 adalah set pensil warna klasik yang dirancang untuk berbagai kebutuhan seni dan kerajinan. Dengan inti pigmen berkualitas tinggi, pensil ini memberikan warna yang tajam dan hidup. Set ini sangat cocok untuk menggambar, mewarnai, dan proyek kreatif lainnya. Setiap pensil dirancang dengan bentuk heksagonal yang ergonomis untuk kenyamanan penggunaan jangka panjang.', 'SubCategoryProductID' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'NYONI charcoal pencil', 'Rating' => 4.3, 'DescriptionProduct' => 'Faber-Castell Classic Colour Pencil 24 adalah set pensil warna yang menawarkan palet warna yang lebih luas untuk kreativitas tanpa batas. Dengan 24 warna yang kaya dan beragam, set ini memungkinkan Anda untuk menciptakan karya seni yang detail dan penuh warna. Pensil ini memiliki inti pigmen yang halus dan kuat, serta desain heksagonal yang nyaman digenggam.', 'SubCategoryProductID' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Faber Castell goldfaber charcoal pencil', 'Rating' => 4.9, 'DescriptionProduct' => 'Faber-Castell Classic Colour Pencil 48 adalah set pensil warna yang ideal untuk seniman yang mencari berbagai pilihan warna. Dengan 48 warna yang intens dan mudah dicampur, set ini cocok untuk menciptakan karya seni yang kompleks dan detail. Setiap pensil dirancang dengan kualitas tinggi dan bentuk heksagonal yang ergonomis, memastikan kenyamanan dan keakuratan dalam setiap goresan.', 'SubCategoryProductID' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'Samoyed Charcoal Pencil PCC-FV', 'Rating' => 3.7, 'DescriptionProduct' => 'Pentel Colour Pencil 12 warna adalah set pensil warna yang praktis dan serbaguna untuk berbagai kebutuhan seni dan kreatif. Dengan 12 warna cerah dan pigmen yang kaya, pensil ini ideal untuk mewarnai, menggambar, dan sketsa. Desainnya yang ergonomis dan kualitas bahan yang tahan lama memastikan pensil ini nyaman digunakan dalam jangka waktu yang lama.', 'SubCategoryProductID' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['NameProduct' => 'MARKART Professional Charcoal Pencils Drawing Set - 10 Pieces', 'Rating' => 4.6, 'DescriptionProduct' => 'Pentel Colour Pencil 36 warna menawarkan pilihan warna yang lebih luas untuk ekspresi seni yang lebih bebas. Set ini terdiri dari 36 pensil warna dengan pigmen yang kaya dan tahan lama. Desain ergonomis dan kualitas bahan terbaik membuat pensil ini nyaman digunakan untuk berbagai proyek seni dan kerajinan. Cocok untuk pelajar, seniman, dan hobi.', 'SubCategoryProductID' => 8, 'created_at' => now(), 'updated_at' => now()],


            //markers
            [
                'NameProduct' => 'Sharpie Fine Point Permanent Marker',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Spidol permanen Sharpie Fine Point adalah pilihan sempurna untuk menandai dan menuliskan catatan penting. Dengan ujung yang tajam dan tahan lama, produk ini ideal untuk penggunaan sehari-hari di kantor atau di rumah.',
                'SubCategoryProductID' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'PENTEL Extra Broad Point Permanent Marker (Black) N50XL-A',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Spidol permanen PENTEL Extra Broad Point memiliki ujung yang lebar dan tinta hitam pekat yang ideal untuk menulis pada berbagai jenis permukaan. Cocok untuk penggunaan di kantor atau untuk proyek seni kreatif.',
                'SubCategoryProductID' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Spidol Permanent Paint Marker 1,5mm Tipis ATK Anti Luntur Biru Satuan',
                'Rating' => 4.1,
                'DescriptionProduct' => 'Spidol permanent Paint Marker dengan ujung tipis 1,5mm ini dirancang khusus untuk menulis dan menggambar dengan detail halus. Tersedia dalam warna biru yang intens, cocok untuk kebutuhan kantor dan industri.',
                'SubCategoryProductID' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Spidol Permanen Sakura Pen Touch Paint Marker Pigment Color',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Spidol Permanen Sakura Pen Touch Paint Marker Pigment Color adalah pilihan terbaik untuk seniman dan pengguna yang mencari kualitas tinggi. Tersedia dalam berbagai warna, mudah diaplikasikan dan tahan lama.',
                'SubCategoryProductID' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Kiedler White Board Dry Erase Marker 12pcs Spidol Wipe Clean',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Spidol White Board Kiedler adalah alat yang sangat berguna untuk papan tulis kering. Dengan kemampuan menghapus yang mudah dan tahan lama, cocok untuk digunakan di kantor atau di rumah.',
                'SubCategoryProductID' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Spidol Papan Tulis Quartet Marker Glass Board Premium Dry Erase Set',
                'Rating' => 4.6,
                'DescriptionProduct' => 'Spidol Papan Tulis Quartet Marker Glass Board adalah pilihan terbaik untuk penggunaan papan tulis kaca premium. Dengan kekuatan dan daya hapus yang luar biasa, cocok untuk ruang rapat atau kelas yang modern.',
                'SubCategoryProductID' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Bazic Bright Color Magnetic Dry-Erase Markers (6/Pack) - Spidol',
                'Rating' => 4.4,
                'DescriptionProduct' => 'Bazic Bright Color Magnetic Dry-Erase Markers adalah pilihan yang tepat untuk ruang kelas atau kantor yang membutuhkan papan tulis magnetik dengan warna cerah. Mudah dihapus dan tahan lama.',
                'SubCategoryProductID' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli Spidol Papan Tulis / Dry Erase Marker Tinta Hitam EU00620',
                'Rating' => 4.8,
                'DescriptionProduct' => 'Spidol Papan Tulis Deli dengan tinta hitam EU00620 adalah pilihan yang sempurna untuk papan tulis yang memerlukan penulisan yang jelas dan tahan lama. Cocok untuk penggunaan di kantor atau di ruang kelas.',
                'SubCategoryProductID' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli Dry Erase Marker EU00230 EU00220 EU00240',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Deli Dry Erase Marker adalah pilihan yang efisien dan ekonomis untuk papan tulis kering. Dengan tinta berkualitas dan ujung yang halus, produk ini cocok untuk kebutuhan sehari-hari di kantor atau sekolah.',
                'SubCategoryProductID' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Stabilo/Highlighter BOSS',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Stabilo Highlighter BOSS adalah pilihan terbaik untuk menyoroti teks dan catatan penting. Dengan ujung tahan lama dan tinta yang cerah, produk ini cocok untuk penggunaan di kantor, rumah, atau di sekolah.',
                'SubCategoryProductID' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'CY Set Highlighter 2 Sisi Warna Warni',
                'Rating' => 4.2,
                'DescriptionProduct' => 'CY Set Highlighter 2 Sisi Warna Warni adalah pilihan yang bagus untuk menyoroti dan mewarnai. Dengan desain 2 sisi, produk ini cocok untuk kebutuhan kreatif di kantor atau untuk siswa yang kreatif.',
                'SubCategoryProductID' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Highlighter Penanda Joyko HL-55 1 Set 12 Pcs 12 Warna',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Highlighter Joyko HL-55 1 Set 12 Pcs dengan 12 warna adalah pilihan yang sempurna untuk kebutuhan menyoroti dan mencatat yang berwarna-warni. Cocok untuk penggunaan di sekolah, kantor, atau untuk kegiatan seni.',
                'SubCategoryProductID' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Zebra Midliner Series Conan Satuan / Highlighter Karakter',
                'Rating' => 4.1,
                'DescriptionProduct' => 'Zebra Midliner Series Conan adalah highlighter karakter dengan kualitas terbaik. Dengan ujung dua sisi dan tinta yang tahan lama, produk ini cocok untuk penggunaan sehari-hari di kantor atau untuk seniman yang kreatif.',
                'SubCategoryProductID' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Uni Posca Paint Marker PC-5M - Medium Point',
                'Rating' => 4.9,
                'DescriptionProduct' => 'Uni Posca Paint Marker PC-5M adalah pilihan terbaik untuk seniman dan pengguna yang membutuhkan marker cat dengan kualitas tinggi. Tersedia dalam medium point, cocok untuk berbagai jenis media dan permukaan.',
                'SubCategoryProductID' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Spidol Warna Spidol Ban TOYO Paint Marker Original Spidol Nat Keramik',
                'Rating' => 4.4,
                'DescriptionProduct' => 'Spidol Warna Spidol Ban TOYO Paint Marker Original adalah pilihan terbaik untuk seniman dan pengguna yang mencari kualitas terbaik. Cocok untuk berbagai jenis permukaan termasuk ban dan keramik.',
                'SubCategoryProductID' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],



            //others
            [
                'NameProduct' => 'Tempat Pensil Kulit Waterproof',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Tempat pensil kulit waterproof adalah pilihan yang tepat untuk menyimpan pensil dan alat tulis lainnya dengan aman dan nyaman. Desainnya yang tahan air menjaga barang-barang di dalamnya tetap kering dalam cuaca buruk atau kecelakaan.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Kotak Tempat Pensil Pencil Case Onscript',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Kotak tempat pensil Pencil Case Onscript adalah solusi penyimpanan yang stylish dan fungsional untuk peralatan tulis Anda. Didesain dengan material berkualitas dan ruang penyimpanan yang cukup luas untuk berbagai kebutuhan.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Kotak Pensil Transparant Matte Dove Multifungsi Pencil Case',
                'Rating' => 4.1,
                'DescriptionProduct' => 'Kotak pensil transparan matte Dove adalah pilihan yang serbaguna untuk menyimpan pensil dan alat tulis Anda. Desain transparan memudahkan Anda untuk melihat isinya tanpa perlu membuka kotaknya, praktis dan efisien.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Tempat Pensil Bulu Halus model Jahitan Kotak',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Tempat pensil bulu halus dengan model jahitan kotak adalah pilihan yang elegan untuk menemani kegiatan menulis Anda. Didesain dengan bahan yang halus dan tahan lama, memberikan perlindungan maksimal untuk alat tulis favorit Anda.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KOTAK PENCIL PANJANG SANRIO KUROMI MELODY CINNAMOROLL MAGNET',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Kotak pencil panjang Sanrio Kuromi Melody Cinnamoroll Magnet adalah pilihan yang lucu dan fungsional untuk menyimpan pensil dan alat tulis. Dengan desain magnetik, dapat ditempelkan di berbagai permukaan logam, sangat praktis digunakan di mana saja.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KENSHO Rosy Pouch Makeup Handle Pastel',
                'Rating' => 4.4,
                'DescriptionProduct' => 'KENSHO Rosy Pouch Makeup Handle Pastel adalah tempat pensil yang multifungsi, cocok digunakan tidak hanya untuk pensil tetapi juga untuk menyimpan alat makeup atau keperluan pribadi lainnya. Didesain dengan warna pastel yang menawan, memberikan sentuhan elegan pada meja Anda.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KALIDI Grid Mesh Pencil Case Large Capacity',
                'Rating' => 4.9,
                'DescriptionProduct' => 'KALIDI Grid Mesh Pencil Case dengan kapasitas besar adalah solusi penyimpanan yang ideal untuk kebutuhan tulis Anda. Didesain dengan material mesh berkualitas tinggi, memberikan sirkulasi udara yang baik untuk menjaga keawetan alat tulis di dalamnya.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Kipling 100 Pens Metallic Case',
                'Rating' => 4.6,
                'DescriptionProduct' => 'Kipling 100 Pens Metallic Case adalah kotak pensil yang elegan dan tahan lama. Didesain untuk menyimpan hingga 100 pensil atau alat tulis lainnya dengan rapi, cocok untuk penggunaan di sekolah, kantor, atau untuk keperluan pribadi.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'TEMPAT PENSIL BULU SANRIO',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Tempat pensil bulu Sanrio adalah pilihan yang lucu dan fungsional untuk anak-anak maupun dewasa. Didesain dengan motif bulu yang menarik perhatian, cocok digunakan sebagai koleksi atau hadiah spesial.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Beige Pencil Case',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Beige Pencil Case adalah pilihan yang elegan dan minimalis untuk menyimpan pensil dan alat tulis Anda. Dengan warna netral yang cocok untuk semua kesempatan, memberikan kesan yang bersih dan teratur di meja kerja atau sekolah Anda.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Yeong Vegan Leather Pencil Case',
                'Rating' => 4.8,
                'DescriptionProduct' => 'Yeong Vegan Leather Pencil Case adalah kotak pensil yang terbuat dari kulit sintetis ramah lingkungan. Dengan desain yang elegan dan kualitas tinggi, memberikan perlindungan maksimal untuk alat tulis favorit Anda.',
                'SubCategoryProductID' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Acrylic Ruler Penggaris Akrilik Joyko RL-302',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Acrylic Ruler Penggaris Akrilik Joyko RL-302 adalah penggaris yang kuat dan tahan lama. Didesain dari bahan akrilik berkualitas tinggi, memberikan akurasi dan ketahanan yang dibutuhkan untuk kebutuhan mengukur Anda.',
                'SubCategoryProductID' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Penggaris Kristal Segitiga',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Penggaris Kristal Segitiga adalah pilihan yang tepat untuk mengukur dan melukis dengan presisi. Dengan bentuk segitiga yang ergonomis, mudah digunakan untuk membuat garis lurus atau sudut yang sempurna.',
                'SubCategoryProductID' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli Foldable Ruler',
                'Rating' => 4.6,
                'DescriptionProduct' => 'Deli Foldable Ruler adalah penggaris lipat yang praktis dan mudah disimpan. Didesain dengan material yang fleksibel namun kokoh, cocok untuk kebutuhan di sekolah, kantor, atau untuk kegiatan di luar ruangan.',
                'SubCategoryProductID' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Penggaris Jahit Lentur Pola Lengkung',
                'Rating' => 4.4,
                'DescriptionProduct' => 'Penggaris Jahit Lentur Pola Lengkung adalah alat yang tepat untuk kebutuhan menyusun pola atau mengukur dengan bentuk lengkung. Didesain dengan material yang fleksibel dan tahan lama, cocok untuk para pengrajin atau pengguna yang membutuhkan akurasi tinggi.',
                'SubCategoryProductID' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Joyko Penggaris Busur Ruler Set RL-PS3',
                'Rating' => 4.9,
                'DescriptionProduct' => 'Joyko Penggaris Busur Ruler Set RL-PS3 adalah set penggaris lengkap untuk kebutuhan teknis dan artistik. Dengan berbagai bentuk busur yang berbeda, memungkinkan Anda untuk membuat desain yang kompleks dan detail.',
                'SubCategoryProductID' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Deli PENGGARIS RULER ALUMUNIUM GEOMETRY DRAWING',
                'Rating' => 4.3,
                'DescriptionProduct' => 'Deli Penggaris Aluminium Geometry Drawing adalah penggaris yang kuat dan presisi untuk menggambar dan membuat desain teknis. Didesain dari bahan aluminium berkualitas tinggi, memberikan ketahanan dan akurasi yang dibutuhkan.',
                'SubCategoryProductID' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Stapler Staples Besar JOYKO HD-50',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Stapler Staples Besar JOYKO HD-50 adalah stapler yang kuat dan handal untuk penggunaan sehari-hari di kantor atau sekolah. Dengan kemampuan men-stapler dokumen besar dengan mudah, menjadikan pekerjaan Anda lebih efisien.',
                'SubCategoryProductID' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Max Stapler HD-10',
                'Rating' => 4.2,
                'DescriptionProduct' => 'Max Stapler HD-10 adalah stapler ringan dan ergonomis untuk kebutuhan penggunaan ringan di kantor atau di rumah. Didesain dengan bahan yang kuat dan tahan lama, memberikan kenyamanan dan kehandalan dalam penggunaan sehari-hari.',
                'SubCategoryProductID' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Bantex Mini Stapler Hello Kitty White - 9330A07HK',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Bantex Mini Stapler Hello Kitty White adalah stapler mini yang lucu dan fungsional. Dengan desain Hello Kitty yang menggemaskan, cocok untuk anak-anak maupun dewasa yang menginginkan alat tulis yang menyenangkan.',
                'SubCategoryProductID' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Bantex Pocket Stapler 9332',
                'Rating' => 4.8,
                'DescriptionProduct' => 'Bantex Pocket Stapler 9332 adalah stapler ringan dan portabel yang dapat dibawa ke mana-mana. Didesain untuk kebutuhan penggunaan ringan, cocok digunakan di sekolah, kantor, atau untuk keperluan pribadi di luar ruangan.',
                'SubCategoryProductID' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Stapler / Staples Kenko HD-10',
                'Rating' => 4.4,
                'DescriptionProduct' => 'Stapler Kenko HD-10 adalah stapler ringan dan handal untuk penggunaan sehari-hari di kantor atau di rumah. Dengan desain yang ergonomis dan kemampuan men-stapler dengan presisi, membuat pekerjaan Anda lebih mudah.',
                'SubCategoryProductID' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KOKUYO Desktop File Organizer 1 set',
                'Rating' => 4.6,
                'DescriptionProduct' => 'KOKUYO Desktop File Organizer adalah solusi penyimpanan yang efisien untuk berbagai dokumen dan kertas di meja kerja Anda. Dengan desain yang ringkas dan fungsional, membantu menjaga ruang kerja tetap teratur dan terorganisir.',
                'SubCategoryProductID' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'IKEA TJENA File Organizers White',
                'Rating' => 4.3,
                'DescriptionProduct' => 'IKEA TJENA File Organizers White adalah pilihan yang cerdas untuk menyimpan berkas dan dokumen di rumah atau kantor. Didesain dengan bahan yang tahan lama dan warna putih yang bersih, cocok untuk ruang kerja minimalis.',
                'SubCategoryProductID' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Joyko Expanding File A4 25 POCKETS Organizer / Map Harmonika EF-7A4',
                'Rating' => 4.9,
                'DescriptionProduct' => 'Joyko Expanding File A4 25 Pockets Organizer adalah map harmonika dengan kapasitas besar untuk menyimpan berkas dan dokumen dalam jumlah besar. Didesain dengan kantong yang kuat dan tahan lama, memberikan perlindungan optimal untuk berkas Anda.',
                'SubCategoryProductID' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'KOKUYO special A4 file organizer folder set file case WSG-FUS820',
                'Rating' => 4.4,
                'DescriptionProduct' => 'KOKUYO Special A4 File Organizer adalah set folder file dengan desain yang elegan dan fungsional. Didesain dari bahan berkualitas tinggi, memberikan perlindungan dan organisasi yang baik untuk berkas dan dokumen penting Anda.',
                'SubCategoryProductID' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Bantex folder organizer kertas order PVC A5 kwitansi 1452',
                'Rating' => 4.7,
                'DescriptionProduct' => 'Bantex Folder Organizer PVC A5 adalah solusi penyimpanan yang kuat dan tahan lama untuk berkas, kwitansi, atau dokumen penting lainnya. Didesain dengan material PVC yang kuat, menjaga keawetan berkas Anda dari debu dan kelembaban.',
                'SubCategoryProductID' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'NameProduct' => 'Kalor Cutting Mat',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Kalor Cutting Mat adalah alas pemotong yang ideal untuk kebutuhan kerajinan dan kreatif Anda. Didesain dari material yang tahan lama dan anti-slip, memberikan keamanan dan presisi saat memotong kain, kertas, atau bahan lainnya.',
                'SubCategoryProductID' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],




            //Books & Paper
            //Writing Paper
            ['NameProduct' => 'Kertas Binder B5 100 Sheet (Garis/Line)',
            'Rating' => 4.5,
            'DescriptionProduct' => 'Isi : 100 Lembar dengan motif garis-garis
            Ukuran : 182 x 257 mm
            Untuk binder 26 Holes (Lubang) dengan kualitas kertas yang tebal beda dari merk lain.
            ',
            'SubCategoryProductID' => 13,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'Loose Leaf Kertas Binder BIGBOSS B5 Garis Lined Polos',
            'Rating' => 4.8,
            'DescriptionProduct' => 'Merk: Big Boss
            Warna: Putih
            Jenis: Kertas Binder/ Loose Leaf
            Ukuran: B5
            ',
            'SubCategoryProductID' => 13,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'Lined Blank Paper Refills',
            'Rating' => 4.5,
            'DescriptionProduct' => 'Tingkatkan pengalaman mencatat Anda dengan Lined Blank Paper Refills premium kami. Dirancang untuk cocok dengan sebagian besar notebook dan binder ukuran standar, refill ini menawarkan solusi serbaguna untuk pelajar, profesional, dan kreatif. Setiap pak berisi 100 lembar kertas berkualitas tinggi bebas asam, memastikan catatan, sketsa, dan rencana Anda tetap terjaga dengan baik dari waktu ke waktu.',
            'SubCategoryProductID' => 13,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => ' Colorplus Loose Leaf Binder Paper 100gsm',
            'Rating' => 4.9,
            'DescriptionProduct' => 'Dengan tiga pilihan warna kertas, seri terbaru loose leaf panmomo: panmomo Colorplus Loose Leaf, menghadirkan permukaan kertas yang halus dan nyaman untuk menulis catatan atau membuat to-do list.


Gunakan warna pastel leaf green, sakura pink, dan sky blue untuk mengkategorikan catatanmu dengan mudah atau sekedar untuk menulis di atas warna favoritmu. Bahan kertas berkualitas tinggi 100 gsm lebih tahan terhadap bleeding dan feathering, membuatnya cocok ditulisi dengan berbagai variasi alat tulis seperti pensil, pena, brush pen, dan marker Ukuran:
- A5: 14 x 21 cm (20 ring)
Spacing bergaris 8 mm.


Isi: 60 lembar (120 halaman).
Gramasi kertas 100 gsm. Lebih tebal dibanding loose leaf standar.',
            'SubCategoryProductID' => 13,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'Mini Loose Leaf 3 Rings Pastel Color - Grid',
            'Rating' => 4,
            'DescriptionProduct' => 'Isi loose leaf / kertas untuk Mini Binder 3 Rings


Ukuran : 6x8cm
Ketebalan : 100gsm
Jumlah : 60 lembar
',
            'SubCategoryProductID' => 13,
            'created_at' => now(),
            'updated_at' => now()],


            //Printing Paper
            ['NameProduct' => 'PaperOne Kertas A4 80gr All Purpose 1 Box (2500 lembar) Kertas HVS',
            'Rating' => 4.5,
            'DescriptionProduct' => 'Ukuran : A4
Gramasi : 80 gsm ( All Purpose )
Size CM : 21,0 X 29,7
5 Ream = 1 Box',
            'SubCategoryProductID' => 14,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'PaperOne Kertas A4 100gr Digital 1 Box (2000 lembar) Kertas HVS',
            'Rating' => 4.5,
            'DescriptionProduct' => 'Tingkat keputihan kertas yang tinggi - Kontras dengan kejelasan cetak yang tajam
             Sangat cocok digunakan untuk laporan kantor, buletin, salinan proposal, grafik, memo, resume, tesis, esai dan surat, dll.
             Ukuran : A4
Gramasi : 100 gsm ( Digital )
Size CM : 21,0 X 29,7
4 Ream = 1 Box',
            'SubCategoryProductID' => 14,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'PaperOne Kertas A4 75gr Copier 1 Box (2500 lembar) Kertas HVS',
            'Rating' => 4.5,
            'DescriptionProduct' => "Ukuran : A4 \n
Gramasi : 75 gsm ( Copier Paper ) \n
Size CM : 21,0 X 29,7 \n
5 Ream = 1 Box",
            'SubCategoryProductID' => 14,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'Kertas HVS A4 80 gr Bola Dunia',
            'Rating' => 4.7,
            'DescriptionProduct' => 'KERTAS PRINT FOTOCOPY HVS A4 DAN F4 70 GRAM - Warna putih cerah - hasil cetak tajam
- Kertas untuk cetak dan copy kecepatan tinggi
- Teknologi TRUTONE - memberikan kualitas gambar dan cetak maksimal serta reproduksi garis yang jelas dan warna yang cerah
- Bahan baku kertas diproduksi dari sumber yang bertanggung jawab yang telah bersertifikasi PEFC atau Program Pengesahan Sertifikasi Hutan (info lengkap www.pefc.org)
- Cocok untuk digunakan di kantor/perusahaan (laporan, memo, proposal) , rumah tangga, pelajar (surat, tugas, skripsi, CV) serta copy centre
- Pilihan tepat untuk segala jenis mesin Laser & Inkjet Print, Fax dan mesin Photocopy',
            'SubCategoryProductID' => 14,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'Kertas hvs A4 75gr Copypaper',
            'Rating' => 4.5,
            'DescriptionProduct' => 'Kertas HVS ukuran A4 Copy paper dengan tebal 75gsm',
            'SubCategoryProductID' => 14,
            'created_at' => now(),
            'updated_at' => now()],


            //Specialty Paper
            ['NameProduct' => 'Faber Castell 50 Origami Washi Paper Animal Series 15x15cm',
            'Rating' => 4,
            'DescriptionProduct' => 'Merek: Faber Castell
            Tipe: Animal Series

            Keterangan:
            - Origami 15x15cm
            - Warna dan corak yang menarik
            - Isi 50 pcs
            - Nyaman dipakai
            - Superior quality',
            'SubCategoryProductID' => 15,
            'created_at' => now(),
            'updated_at' => now()],


            ['NameProduct' => 'Sidu Origami Paper 16x16 100pcs',
            'Rating' => 4.5,
            'DescriptionProduct' => '[Sidu Origami Paper 16x16 100pcs]

            Merek: Sinar Dunia
            Tipe: 16x16cm
            Harga diatas merupakan harga 1 item

            Keterangan:
            - Origami 16x16cm
            - Warna warni
            - Isi 100 pcs
            - Nyaman dipakai
            - Superior quality
            - Dengan harga terjangkau dan kualitas baik banyak user senang menggunakan ini.',
            'SubCategoryProductID' => 15,
            'created_at' => now(),
            'updated_at' => now()],


                [
                'NameProduct' => 'Sidu Origami Paper 12x12cm',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Kertas origami SIDU dengan ukuran 12x12 cm ini sangat cocok untuk berbagai proyek kerajinan tangan. Terbuat dari bahan berkualitas tinggi, kertas ini mudah dilipat dan tidak mudah robek. Hadir dengan berbagai warna menarik yang akan memperindah hasil karya Anda.',
                'SubCategoryProductID' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'NameProduct' => 'Kertas Lipat Origami Asturo 16 x 16 cm isi 50 lembar',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Kertas lipat origami Asturo dengan ukuran 16 x 16 cm ini berisi 50 lembar dalam satu pak. Sangat cocok untuk membuat berbagai macam bentuk origami. Kertas ini memiliki ketebalan yang pas, sehingga mudah dibentuk dan tahan lama.',
                'SubCategoryProductID' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'NameProduct' => 'Mideer origami paper middle level',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Kertas origami Mideer tingkat menengah ini dirancang khusus untuk para penggemar origami yang ingin meningkatkan keterampilan mereka. Kertas ini mudah dilipat dan tersedia dalam berbagai warna cerah, sehingga setiap karya Anda akan terlihat menarik.',
                'SubCategoryProductID' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],

            //Sticky Notes
            [
                'NameProduct' => '200 Lembar Sticky Notes Set',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Set sticky notes berisi 200 lembar ini sangat praktis untuk mencatat hal-hal penting. Tersedia dalam berbagai warna cerah yang akan membantu Anda mengorganisir catatan dengan lebih baik. Mudah ditempel dan dilepas tanpa meninggalkan bekas.',
                'SubCategoryProductID' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'NameProduct' => 'Transparent Flag / Sticky Notes Panah Tom & Jerry TJ P-7A',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Sticky notes panah transparan Tom & Jerry TJ P-7A ini sangat ideal untuk menandai halaman atau bagian penting dalam dokumen Anda. Desainnya yang unik dan transparan tidak akan menutupi teks di bawahnya, dan mudah dipindahkan tanpa merusak kertas.',
                'SubCategoryProductID' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'NameProduct' => 'Deli Sticky Note Pad Notes 4x100Sheets',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Deli Sticky Note Pad dengan 4x100 lembar ini adalah pilihan sempurna untuk kebutuhan catatan harian Anda. Setiap pad terdiri dari 4 warna berbeda, yang memudahkan Anda dalam mengkategorikan catatan. Tempelkan pada berbagai permukaan dan lepas tanpa meninggalkan residu.',
                'SubCategoryProductID' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'NameProduct' => 'Deli Memo Tempel / Sticky Notes 80 Lembar Warna Putih BT1XX',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Deli Memo Tempel / Sticky Notes dengan 80 lembar ini hadir dalam warna putih yang elegan. Sangat cocok untuk mencatat pesan penting atau pengingat. Kertas berkualitas tinggi memastikan catatan Anda tetap terlihat jelas dan rapi.',
                'SubCategoryProductID' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'NameProduct' => 'Joyko Sticky Notes',
                'Rating' => 4.5,
                'DescriptionProduct' => 'Joyko Sticky Notes menawarkan kemudahan dalam mencatat dan mengingat hal-hal penting. Tersedia dalam berbagai warna cerah, sticky notes ini mudah ditempelkan pada berbagai permukaan dan dapat dilepas tanpa merusak kertas.',
                'SubCategoryProductID' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],

            //Books
            //Notebooks
                [
                    'NameProduct' => 'Joyko Notebook A5 NB-700/ Diary Agenda Buku Catatan',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Joyko Notebook A5 NB-700 adalah buku catatan yang sempurna untuk keperluan sehari-hari. Dengan cover yang kuat dan halaman berkualitas, notebook ini ideal untuk mencatat agenda, jurnal, atau catatan penting lainnya. Ukurannya yang kompak memudahkan Anda membawa notebook ini ke mana saja.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Exquisite Life Clear Cover Notebook B5 (Ruled, Grid)',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Exquisite Life Clear Cover Notebook B5 hadir dengan pilihan halaman bergaris dan grid, cocok untuk menulis dan menggambar. Cover transparannya memberikan kesan elegan dan modern, serta melindungi isi notebook dengan baik. Ideal untuk penggunaan sekolah, kantor, atau pribadi.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'BUKU TULIS BIG BOSS 50 LEMBAR CAMPUS NOTEBOOK 36 SHEET B5 BOXY [10PCS] - 36 Lembar',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Buku Tulis Big Boss dengan 50 lembar ini sangat cocok untuk kebutuhan sekolah atau kuliah. Terdiri dari 10 buku dengan masing-masing 36 lembar, buku ini menawarkan kualitas kertas yang baik untuk tulisan yang rapi dan bersih.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Deli Leather Cover Notebook/Buku Catatan A5',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Deli Leather Cover Notebook A5 adalah buku catatan dengan cover kulit yang elegan dan profesional. Ideal untuk mencatat meeting, jurnal harian, atau catatan penting lainnya. Kertas berkualitas tinggi memastikan tulisan Anda tetap terlihat jelas dan rapi.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Cinnamoroll B6 Notebook - Adinata / Buku Catatan / Memo',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Cinnamoroll B6 Notebook adalah buku catatan yang lucu dan menarik, cocok untuk anak-anak maupun remaja. Dengan desain karakter Cinnamoroll yang menggemaskan, notebook ini ideal untuk mencatat tugas sekolah, jurnal harian, atau memo penting.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Kokuyo Campus Binder notebook L-NP704 2x2 Ring B5',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Kokuyo Campus Binder Notebook L-NP704 dengan 2x2 ring ukuran B5 adalah pilihan yang sempurna untuk kebutuhan catatan sekolah atau kuliah. Binder ini memungkinkan Anda menambah atau mengurangi halaman dengan mudah sesuai kebutuhan. Kertas berkualitas tinggi memastikan kenyamanan menulis.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'KOKUYO Noritake binder notebook B5 WSG-RU2XP61',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Kokuyo Noritake Binder Notebook B5 WSG-RU2XP61 adalah notebook dengan desain elegan dan fungsional. Binder ini memudahkan Anda untuk mengatur halaman sesuai kebutuhan, membuatnya ideal untuk penggunaan sekolah, kuliah, atau pekerjaan kantor.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Notebook Kampus Semi-B5 dengan Lapisan Souffle Warna Mineral Bertitik',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Notebook Kampus Semi-B5 dengan lapisan souffle warna mineral bertitik ini sangat cocok untuk mencatat di kelas atau saat rapat. Kertas bertitik memudahkan Anda untuk menulis dan menggambar dengan rapi. Cover yang kuat dan elegan melindungi isi notebook dengan baik.',
                    'SubCategoryProductID' => 17,
                    'created_at' => now(),
                    'updated_at' => now()
                ],

            //  Planners

                [
                    'NameProduct' => 'Campus Diary PLANNER KOKUYO Size A6',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Campus Diary Planner KOKUYO ukuran A6 ini adalah pilihan sempurna untuk mengatur jadwal harian Anda. Dengan desain yang ringkas dan halaman yang terorganisir dengan baik, planner ini memudahkan Anda mencatat kegiatan sehari-hari, catatan penting, dan to-do list. Cover yang kokoh dan halaman berkualitas tinggi memastikan planner ini tahan lama.',
                    'SubCategoryProductID' => 18,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Buku Planner Hobonichi',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Buku Planner Hobonichi adalah planner yang populer dengan desain yang minimalis dan fungsional. Dilengkapi dengan halaman yang fleksibel untuk mencatat jadwal harian, mingguan, dan bulanan, serta halaman tambahan untuk catatan pribadi. Ideal untuk Anda yang ingin mengatur waktu dengan lebih efektif.',
                    'SubCategoryProductID' => 18,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Memo Kojikoji A6 B',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Memo Kojikoji A6 B adalah memo pad praktis dengan ukuran yang kecil dan mudah dibawa. Cocok untuk mencatat hal-hal penting secara cepat, membuat to-do list, atau sekadar mencatat ide-ide kreatif. Desain yang simpel namun menarik membuat memo ini menjadi favorit untuk penggunaan sehari-hari.',
                    'SubCategoryProductID' => 18,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Weekly block B6 Shimaenaga Dango Yuki',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Weekly block B6 Shimaenaga Dango Yuki adalah planner mingguan yang ideal untuk mengatur jadwal mingguan Anda dengan lebih teratur. Dengan ukuran B6 yang pas di tas, planner ini mudah dibawa ke mana saja. Desainnya yang menarik dengan ilustrasi Shimaenaga Dango Yuki menambah kesan manis pada setiap catatan Anda.',
                    'SubCategoryProductID' => 18,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Blue Sky 2024-2025 Academic Year Weekly and Monthly Planner, 5" x 8"',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Blue Sky Academic Year Weekly and Monthly Planner 2024-2025 adalah planner yang ideal untuk pelajar dan profesional. Dengan ukuran 5" x 8", planner ini menawarkan halaman mingguan dan bulanan yang terstruktur dengan baik. Cover fleksibel dan desain wirebound membuatnya mudah digunakan dan dibawa ke mana saja.',
                    'SubCategoryProductID' => 18,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Crispin Finn The List Shopping Planner Pad',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Crispin Finn The List Shopping Planner Pad adalah pad planner yang dirancang khusus untuk membuat daftar belanja. Dengan tampilan yang bersih dan terorganisir, planner ini memudahkan Anda mencatat semua kebutuhan belanja dengan rapi. Cocok untuk membantu mengatur belanja harian atau mingguan dengan lebih efisien.',
                    'SubCategoryProductID' => 18,
                    'created_at' => now(),
                    'updated_at' => now()
                ],


            //SketchBook
                [
                    'NameProduct' => 'LYRA Sketch Book A4/A5 30 Sheets',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'LYRA Sketch Book tersedia dalam ukuran A4 dan A5 dengan 30 lembar kertas berkualitas tinggi. Buku gambar ini cocok untuk berbagai jenis sketsa dan gambar, baik menggunakan pensil, arang, atau pensil warna. Ideal untuk seniman profesional maupun pemula.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Itoya Kids Sketchbook Navy (Penguin)',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Itoya Kids Sketchbook Navy dengan desain lucu penguin adalah pilihan sempurna untuk anak-anak yang gemar menggambar. Dengan kertas berkualitas tinggi, buku sketsa ini memberikan pengalaman menggambar yang menyenangkan dan menginspirasi kreativitas anak.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Deli Sketch Book / Buku Gambar Sketsa A4 160GSM 60 Lembar EC27X - B5, 40 Lembar',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Deli Sketch Book hadir dengan pilihan ukuran A4 dan B5, menawarkan kertas 160GSM yang tebal dan tahan lama. Buku gambar ini cocok untuk berbagai teknik menggambar, termasuk pensil, tinta, dan cat air. Ideal untuk penggunaan di sekolah atau hobi seni.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Canson XL Series Mixed Media Pad, Side Wire, 9x12 inches, 60 Sheets - Heavyweight Art Paper for Watercolor, Gouache, Marker, Painting, Drawing, Sketching',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Canson XL Series Mixed Media Pad adalah buku gambar serbaguna dengan kertas berat yang cocok untuk berbagai media, termasuk cat air, gouache, marker, dan cat akrilik. Ukuran 9x12 inci dan 60 lembar kertas berkualitas tinggi menjadikan buku ini pilihan ideal untuk seniman yang menggunakan berbagai teknik.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Canson XL Series Pen & Ink, white, 7x10',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Canson XL Series Pen & Ink adalah buku gambar khusus untuk tinta dan pena. Dengan ukuran 7x10 inci, buku ini menawarkan kertas putih yang halus dan tahan lama, ideal untuk menghasilkan detail yang tajam dan jelas dalam karya seni Anda.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Canson XL Series Sketchbook, Recycled, Foldover Pad, 9x12 inches, 100 Sheets (50lb/74g) - Artist Paper for Adults and Students - Graphite, Charcoal, Pencil, Colored Pencil',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Canson XL Series Sketchbook adalah buku gambar yang ramah lingkungan dengan kertas daur ulang. Ukuran 9x12 inci dan 100 lembar kertas berkualitas tinggi membuatnya sempurna untuk seniman dewasa dan pelajar. Cocok untuk berbagai media seperti grafit, arang, pensil, dan pensil warna.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Bianyo Mixed Media Paper Sketchbook, 11" X 14", 60 Sheets/Each, 123 LBS/200 GSM, Spiral-Bound Pad, Micro-Perforated, Ideal for Wet & Dry Media Like Marker, Watercolor, Acrylic, Pastel, Pencil',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Bianyo Mixed Media Paper Sketchbook adalah buku gambar yang ideal untuk media basah dan kering. Dengan ukuran 11" x 14", 60 lembar kertas 200 GSM, dan spiral-bound yang kokoh, buku ini cocok untuk marker, cat air, akrilik, pastel, dan pensil. Desain micro-perforated memudahkan Anda merobek lembaran tanpa merusaknya.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Ankkol Sketch Book 9x12 Inch Artist Sketch Pad, 100 Sheets (68lb/100gsm) Top Spiral Bound Sketchbook, Acid-Free Drawing Paper Pad, Art Supplies for Colored and Graphite Pencils, Charcoal & Soft Pastel',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Ankkol Sketch Book adalah buku gambar ukuran 9x12 inci dengan 100 lembar kertas bebas asam. Desain spiral atas membuatnya mudah digunakan dan ideal untuk berbagai media seperti pensil berwarna, grafit, arang, dan pastel lembut. Kertas berkualitas tinggi memastikan karya seni Anda tetap terlihat sempurna.',
                    'SubCategoryProductID' => 19,
                    'created_at' => now(),
                    'updated_at' => now()
                ],



            //Guest Book

                [
                    'NameProduct' => 'Joyko Buku Tamu GB-2030-5 Pink / Buku Tamu Warna Pink',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Joyko Buku Tamu GB-2030-5 berwarna pink ini adalah pilihan sempurna untuk mencatat kehadiran tamu di acara-acara penting Anda. Dengan desain yang elegan dan warna pink yang menawan, buku tamu ini sangat cocok untuk acara pernikahan, ulang tahun, atau acara resmi lainnya. Kualitas kertas yang baik memastikan setiap tulisan terlihat rapi dan jelas.',
                    'SubCategoryProductID' => 20,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'ZICOTO Beautiful Wedding Guest Book',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'ZICOTO Beautiful Wedding Guest Book adalah buku tamu yang indah dan elegan untuk acara pernikahan Anda. Dengan cover yang cantik dan halaman yang dirancang khusus untuk ucapan dan tanda tangan tamu, buku tamu ini akan menjadi kenang-kenangan yang berharga dari hari istimewa Anda.',
                    'SubCategoryProductID' => 20,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Lamare Funeral Guest Book for Memorial Service',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Lamare Funeral Guest Book adalah buku tamu yang dirancang khusus untuk upacara peringatan dan pemakaman. Dengan desain yang tenang dan penuh hormat, buku tamu ini memungkinkan para tamu untuk meninggalkan pesan dukungan dan kenangan bagi keluarga yang berduka. Kualitas kertas yang tinggi memastikan catatan tetap terbaca dengan baik.',
                    'SubCategoryProductID' => 20,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'ZICOTO Beautiful Linen Wedding Guest Book - Simply Elegant Guestbook to Sign in and Add Polaroid Photos',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'ZICOTO Beautiful Linen Wedding Guest Book adalah buku tamu pernikahan yang elegan dengan cover linen. Buku ini dirancang tidak hanya untuk tanda tangan, tetapi juga untuk menambahkan foto Polaroid, menciptakan kenangan indah dari hari pernikahan Anda. Setiap halaman memiliki ruang yang cukup untuk pesan dan foto dari tamu.',
                    'SubCategoryProductID' => 20,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Forever And Always Wedding Guest Book',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Forever And Always Wedding Guest Book adalah buku tamu pernikahan yang dirancang dengan elegan dan romantis. Buku ini menyediakan ruang untuk tamu menulis pesan, ucapan, dan kenangan spesial. Desain yang indah dan bahan berkualitas tinggi menjadikan buku tamu ini sebagai suvenir yang tak terlupakan dari hari pernikahan Anda.',
                    'SubCategoryProductID' => 20,
                    'created_at' => now(),
                    'updated_at' => now()
                ],


            // Correcting Tools
            // 28 Correction tape

                [
                    'NameProduct' => 'Tipex Roll JOYKO Correction Tape CT-522',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Tipex Roll JOYKO Correction Tape CT-522 adalah alat koreksi yang praktis dan mudah digunakan. Dengan desain roll yang memudahkan aplikasi, tape ini memungkinkan Anda untuk memperbaiki kesalahan tulisan dengan rapi dan cepat. Ukurannya yang pas di tangan membuatnya nyaman untuk digunakan sehari-hari.',
                    'SubCategoryProductID' => 28,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Tombow Correction Tape Refillable CT-CX Free CT-CR',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Tombow Correction Tape Refillable CT-CX adalah solusi sempurna untuk perbaikan kesalahan tulisan. Tape ini dapat diisi ulang, sehingga lebih ramah lingkungan dan ekonomis. Desainnya yang ergonomis dan mudah dipegang membuat koreksi tulisan menjadi lebih nyaman dan efisien.',
                    'SubCategoryProductID' => 28,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'SDI Correction Tape CT-105',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'SDI Correction Tape CT-105 menawarkan solusi praktis untuk memperbaiki kesalahan tulisan. Dengan tape yang halus dan tahan lama, alat koreksi ini memastikan hasil yang rapi dan tidak meninggalkan bekas. Ukurannya yang kompak memudahkan Anda membawa dan menggunakannya kapan saja.',
                    'SubCategoryProductID' => 28,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Faber-Castell Mini Correction Tape',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Faber-Castell Mini Correction Tape adalah alat koreksi yang kecil namun efektif. Desain mini membuatnya mudah dibawa dalam tas atau kotak pensil. Tape ini memberikan hasil yang rapi dan bersih, ideal untuk penggunaan sehari-hari di sekolah atau kantor.',
                    'SubCategoryProductID' => 28,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Tombow CAX5C MONO AIR Ultra-Effortless Limited Edition',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Tombow CAX5C MONO AIR Ultra-Effortless adalah correction tape edisi terbatas yang menawarkan pengalaman koreksi yang sangat mudah dan efisien. Dengan teknologi MONO AIR, tape ini meluncur dengan lancar di atas kertas, menghasilkan koreksi yang rapi dan tidak mengganggu tulisan asli.',
                    'SubCategoryProductID' => 28,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Japan KOKUYO Correction Belt Noritake Co-branded Limited Cat and Teenager Stand Can Be Belted Japanese Texture Stationery',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Japan KOKUYO Correction Belt Noritake adalah correction tape edisi terbatas dengan desain unik yang menampilkan gambar kucing dan remaja. Alat koreksi ini tidak hanya berfungsi dengan baik, tetapi juga menambah sentuhan gaya pada perlengkapan alat tulis Anda. Tekstur khas Jepang memastikan hasil yang rapi dan profesional.',
                    'SubCategoryProductID' => 28,
                    'created_at' => now(),
                    'updated_at' => now()
                ],

            // 29 Correction fluid

                [
                    'NameProduct' => 'Tip Ex Cair Correction Fluid Pen JOYKO JK-01',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Tip Ex Cair Correction Fluid Pen JOYKO JK-01 adalah alat koreksi cair yang praktis dengan ujung pena untuk aplikasi yang presisi. Cocok untuk memperbaiki kesalahan tulisan dengan hasil yang rapi dan cepat kering. Ideal digunakan di rumah, sekolah, maupun kantor.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Kenko Correction Pen Cairan Koreksi Tinta Pena Koreksi FN-301',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Kenko Correction Pen FN-301 adalah pena koreksi dengan cairan koreksi berkualitas tinggi. Ujung pena yang halus memudahkan aplikasi, memberikan hasil yang rapi dan tahan lama. Ideal untuk memperbaiki kesalahan tulisan dengan cepat dan efisien.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'BAZIC Correction Fluid Tipe-x Kuas / Penghapus Kertas Fluid BAZIC 1612',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'BAZIC Correction Fluid 1612 adalah cairan koreksi dengan kuas yang memudahkan aplikasi pada area yang lebih luas. Cairan ini cepat kering dan memberikan hasil yang rapi tanpa meninggalkan bekas. Cocok untuk digunakan di rumah, sekolah, atau kantor.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Correction Fluid / Cairan Koreksi / Penghapus Cair Joyko CF-S209',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Correction Fluid Joyko CF-S209 adalah cairan koreksi yang efektif untuk memperbaiki kesalahan tulisan. Dengan aplikator yang mudah digunakan, cairan ini cepat kering dan menghasilkan koreksi yang rapi. Sangat cocok untuk digunakan di sekolah, kantor, atau di rumah.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Pentel Correction Pen ZL62-W Blue',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Pentel Correction Pen ZL62-W adalah pena koreksi berwarna biru yang menawarkan cairan koreksi berkualitas tinggi. Dengan ujung pena yang presisi, alat ini memudahkan koreksi tulisan dengan hasil yang rapi dan profesional. Ideal untuk penggunaan sehari-hari.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'GREEBEL CORRECTION PEN GBC 120702',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'GREEBEL CORRECTION PEN GBC 120702 adalah pena koreksi dengan cairan koreksi yang cepat kering. Ujung pena yang presisi memudahkan aplikasi pada area yang kecil dan memberikan hasil yang rapi. Alat ini sangat berguna untuk memperbaiki kesalahan tulisan di sekolah, kantor, atau di rumah.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Correction Fluid Cairan Koreksi Penghapus Cair Joyko CF-P236',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Correction Fluid Joyko CF-P236 adalah cairan koreksi yang dirancang untuk memperbaiki kesalahan tulisan dengan mudah dan cepat. Dengan aplikator yang praktis, cairan ini memberikan hasil yang rapi dan tidak meninggalkan bekas. Ideal untuk penggunaan sehari-hari di sekolah, kantor, atau rumah.',
                    'SubCategoryProductID' => 29,
                    'created_at' => now(),
                    'updated_at' => now()
                ],

            // 30 Erasers

                [
                    'NameProduct' => 'Eraser / Penghapus Joyko ER-111',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Penghapus Joyko ER-111 adalah penghapus berkualitas tinggi yang efektif menghilangkan noda pensil tanpa merusak kertas. Desainnya yang ergonomis membuatnya nyaman digunakan dan mudah digenggam.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'ERASER / PENGHAPUS STAEDTLER 526',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Penghapus STAEDTLER 526 adalah penghapus berkualitas yang dirancang untuk menghapus coretan pensil dengan bersih dan rapi. Penghapus ini tahan lama dan tidak mudah hancur saat digunakan.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Stabilo Exam Grade Small Eraser - Peralatan Tulis',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Stabilo Exam Grade Small Eraser adalah penghapus kecil yang ideal untuk ujian dan penggunaan sehari-hari. Penghapus ini memberikan hasil yang bersih dan tidak merusak kertas, sangat cocok untuk pelajar dan profesional.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Faber-Castell - Penghapus Dust-Free Hitam',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Penghapus Faber-Castell Dust-Free Hitam adalah penghapus yang dirancang untuk mengurangi debu saat digunakan. Penghapus ini memberikan hasil yang bersih dan rapi tanpa meninggalkan residu berlebih.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Lyra Kneadable Eraser',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Penghapus Lyra Kneadable adalah penghapus yang dapat dibentuk sesuai kebutuhan. Ideal untuk seni dan ilustrasi, penghapus ini tidak meninggalkan residu dan sangat efektif untuk menghapus detail kecil.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'Tombow Mono Zero Eraser Fine Circle Rectangle / Penghapus Pensil Mekanik Refill',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'Tombow Mono Zero Eraser adalah penghapus pensil mekanik dengan ujung yang sangat presisi. Ideal untuk detail kecil dan koreksi akurat, penghapus ini dapat diisi ulang sehingga lebih ekonomis dan ramah lingkungan.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'NameProduct' => 'DERWENT Battery-Operated Eraser',
                    'Rating' => 4.5,
                    'DescriptionProduct' => 'DERWENT Battery-Operated Eraser adalah penghapus yang dioperasikan dengan baterai, memberikan kemudahan dan efisiensi dalam menghapus. Penghapus ini ideal untuk seni, ilustrasi, dan penggunaan profesional lainnya, memberikan hasil yang rapi dan cepat.',
                    'SubCategoryProductID' => 30,
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                //sticking tools
                //glue stick(25)
                ['NameProduct' => 'Lem Kenko Glue Stick', 'Rating' => 4.9, 'DescriptionProduct' => 'Lem Kenko Glue Stick adalah lem stik berkualitas tinggi yang dirancang untuk keperluan sehari-hari. Lem ini memiliki daya rekat yang kuat dan cepat kering, sehingga sangat cocok untuk digunakan di sekolah, kantor, maupun untuk kerajinan tangan. Desainnya yang praktis dan mudah digunakan membuatnya nyaman untuk diaplikasikan pada berbagai permukaan seperti kertas, karton, dan foto. Kenko Glue Stick juga aman digunakan oleh anak-anak karena bebas dari bahan berbahaya.', 'SubCategoryProductID' => 25, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Deli Animal Shape Glue Sticks 9g', 'Rating' => 4.1, 'DescriptionProduct' => 'Deli Animal Shape Glue Sticks 9g adalah lem stik dengan bentuk hewan yang lucu dan menarik, membuat aktivitas menempel menjadi lebih menyenangkan. Setiap stik lem memiliki daya rekat yang kuat dan aman digunakan untuk berbagai keperluan seperti kerajinan tangan, proyek sekolah, dan kegiatan DIY. Desain yang ramah anak dan mudah digenggam memastikan penggunaannya nyaman dan praktis.', 'SubCategoryProductID' => 25, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Elmers Glue Stick - Glue All, 0.21 oz Stick', 'Rating' => 4.7, 'DescriptionProduct' => 'Elmers Glue Stick - Glue All, 0.21 oz Stick adalah lem stik serbaguna yang menawarkan kekuatan rekat yang luar biasa. Ideal untuk berbagai keperluan menempel seperti kertas, foto, dan kain. Lem ini cepat kering dan mudah diaplikasikan, membuatnya sempurna untuk proyek seni, kerajinan, dan tugas sekolah. Elmers Glue Stick juga tidak beracun dan aman digunakan oleh anak-anak.', 'SubCategoryProductID' => 25, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Avery Permanent Glue Stic, 1.27 Oz, Applies Purple, Dries Clear', 'Rating' => 4.6, 'DescriptionProduct' => 'Avery Permanent Glue Stic, 1.27 Oz, Applies Purple, Dries Clear adalah lem stik permanen yang diaplikasikan dengan warna ungu dan mengering dengan jelas, memudahkan Anda untuk melihat area yang telah diberi lem. Daya rekat yang kuat dan tahan lama menjadikan lem ini ideal untuk proyek-proyek penting seperti presentasi, scrapbook, dan berbagai kegiatan DIY. Lem ini juga mudah digunakan dan aman untuk anak-anak.', 'SubCategoryProductID' => 25, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Avery Permanent Glue Stic Value Pack 1.27 oz', 'Rating' => 4.8, 'DescriptionProduct' => 'Avery Permanent Glue Stic Value Pack 1.27 oz adalah paket nilai lem stik permanen yang menawarkan kekuatan rekat yang luar biasa dan pengeringan cepat. Lem ini diaplikasikan dengan warna ungu dan mengering dengan jelas, sehingga mudah untuk mengontrol aplikasi lem. Ideal untuk proyek-proyek besar dan kegiatan DIY, lem ini juga aman digunakan oleh anak-anak dan tidak beracun.', 'SubCategoryProductID' => 25, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'UHU Stic', 'Rating' => 4.9, 'DescriptionProduct' => 'UHU Stic adalah lem stik berkualitas premium yang dirancang untuk keperluan rumah, sekolah, dan kantor. Lem ini memiliki daya rekat yang sangat kuat dan kering dengan cepat, sehingga sangat cocok untuk proyek seni, kerajinan tangan, dan keperluan menempel sehari-hari. UHU Stic juga mudah digunakan dan tidak beracun, membuatnya aman untuk digunakan oleh anak-anak. Dengan desain yang ergonomis, UHU Stic memberikan kenyamanan dalam setiap penggunaannya.', 'SubCategoryProductID' => 25, 'created_at' => now(), 'updated_at' => now()],

                //liquid glue(26)
                ['NameProduct' => 'Lem Cair Joyko 50 ML', 'Rating' => 4.1, 'DescriptionProduct' => 'Lem Cair Joyko 50 ML adalah lem cair serbaguna yang ideal untuk berbagai keperluan di rumah, sekolah, dan kantor. Lem ini memiliki daya rekat yang kuat dan cepat kering, sehingga sangat cocok untuk menempel kertas, karton, foto, dan bahan lainnya. Dengan botol berukuran 50 ml yang mudah digenggam dan digunakan, Lem Cair Joyko memberikan kenyamanan dan efisiensi dalam setiap penggunaannya. Aman digunakan oleh anak-anak dan tidak beracun, lem ini adalah pilihan tepat untuk proyek seni dan kerajinan tangan.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Elmers 4oz Glue-All Multi-Purpose Liquid Glue', 'Rating' => 4.9, 'DescriptionProduct' => 'Elmers 4oz Glue-All Multi-Purpose Liquid Glue adalah lem cair serbaguna dengan kekuatan rekat yang luar biasa, dirancang untuk memenuhi berbagai kebutuhan menempel. Lem ini sangat cocok untuk proyek sekolah, kerajinan tangan, dan perbaikan rumah ringan. Botol berukuran 4 oz (118 ml) mudah digunakan dan dilengkapi dengan tutup yang mencegah kebocoran. Lem ini cepat kering, tidak beracun, dan aman digunakan oleh anak-anak, membuatnya menjadi alat yang sempurna untuk keluarga dan profesional.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Elmers E305 School Glue Washable Clear, 5 oz, Clear', 'Rating' => 4.8, 'DescriptionProduct' => 'Elmers E305 School Glue Washable Clear adalah lem cair bening yang dapat dicuci, ideal untuk kegiatan sekolah dan proyek seni. Botol berukuran 5 oz (148 ml) mudah diaplikasikan dan tidak meninggalkan noda. Lem ini memiliki kekuatan rekat yang baik dan dapat dicuci dengan mudah dari tangan dan pakaian, sehingga aman digunakan oleh anak-anak. Lem ini juga cepat kering dan tidak beracun, menjadikannya pilihan tepat untuk berbagai aktivitas kreatif dan pendidikan.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'DELI Lem Cair Putih 40 ml', 'Rating' => 3.9, 'DescriptionProduct' => 'DELI Lem Cair Putih 40 ml adalah lem cair yang dirancang untuk kebutuhan sehari-hari, baik di rumah, sekolah, maupun kantor. Dengan daya rekat yang kuat dan cepat kering, lem ini sangat efektif untuk menempel kertas, karton, dan bahan lainnya. Botol berukuran 40 ml nyaman digenggam dan mudah digunakan. Lem ini juga aman untuk digunakan oleh anak-anak karena tidak mengandung bahan berbahaya.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Lem Fox Stik PVAc / Lem Kertas Anak Sekolah 60 gr', 'Rating' => 4.5, 'DescriptionProduct' => 'Lem Fox Stik PVAc / Lem Kertas Anak Sekolah 60 gr adalah lem stik berkualitas yang dirancang khusus untuk kebutuhan sekolah. Lem ini memiliki daya rekat yang kuat dan cepat kering, sangat cocok untuk menempel kertas, karton, dan proyek seni. Dengan formula PVAc yang aman dan tidak beracun, lem ini dapat digunakan oleh anak-anak dengan aman. Botol berukuran 60 gr mudah digunakan dan disimpan, menjadikannya pilihan ideal untuk pelajar dan guru.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Lem Cair UHU', 'Rating' => 4.9, 'DescriptionProduct' => 'Lem Cair UHU adalah lem cair serbaguna dengan kualitas premium, cocok untuk berbagai aplikasi di rumah, sekolah, dan kantor. Lem ini memiliki daya rekat yang sangat kuat dan cepat kering, sehingga sangat efektif untuk proyek seni, kerajinan tangan, dan perbaikan ringan. Botol yang ergonomis memastikan penggunaan yang mudah dan tepat. Lem ini juga aman digunakan oleh anak-anak karena tidak beracun dan bebas dari bahan berbahaya.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Lem Fox Putih', 'Rating' => 4.8, 'DescriptionProduct' => 'Lem Fox Putih adalah lem cair serbaguna yang sangat populer untuk keperluan rumah tangga dan kerajinan. Lem ini memiliki daya rekat yang kuat dan cepat kering, sehingga sangat efektif untuk menempel kertas, kayu, kain, dan bahan lainnya. Botol yang praktis dan mudah digunakan memastikan aplikasi yang tepat dan efisien. Lem Fox Putih juga aman digunakan oleh anak-anak karena tidak mengandung bahan berbahaya.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Lem Fox Slime 350 gr', 'Rating' => 4.4, 'DescriptionProduct' => 'Lem Fox Slime 350 gr adalah lem cair berkualitas tinggi yang ideal untuk membuat slime dan berbagai proyek kerajinan. Lem ini memiliki daya rekat yang kuat dan konsistensi yang tepat untuk menghasilkan slime yang lembut dan elastis. Dengan botol berukuran 350 gr, lem ini cukup untuk berbagai eksperimen dan kegiatan kreatif. Aman digunakan oleh anak-anak karena tidak beracun dan bebas dari bahan berbahaya.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Alligator Liquid Glue 70 ml', 'Rating' => 4.1, 'DescriptionProduct' => 'Alligator Liquid Glue 70 ml adalah lem cair serbaguna yang dirancang untuk berbagai keperluan menempel di rumah, sekolah, dan kantor. Lem ini memiliki daya rekat yang kuat dan cepat kering, sehingga sangat cocok untuk proyek seni, kerajinan tangan, dan tugas sehari-hari. Botol berukuran 70 ml mudah digunakan dan disimpan. Lem ini juga aman untuk digunakan oleh anak-anak karena tidak mengandung bahan berbahaya.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'White Liquid Glue Lem Putih Cair Kertas Joyko GL-W01', 'Rating' => 3.8, 'DescriptionProduct' => 'White Liquid Glue Lem Putih Cair Kertas Joyko GL-W01 adalah lem cair yang ideal untuk kebutuhan sekolah dan rumah tangga. Dengan daya rekat yang kuat dan cepat kering, lem ini sangat cocok untuk menempel kertas, karton, dan proyek kerajinan. Botol yang mudah digunakan memastikan aplikasi yang bersih dan tepat. Lem ini juga aman digunakan oleh anak-anak karena tidak beracun dan bebas dari bahan berbahaya.', 'SubCategoryProductID' => 26, 'created_at' => now(), 'updated_at' => now()],

                //tape(27)
                ['NameProduct' => 'Double Tape/Pita Perekat Dua Sisi Ukuran 6m X 6mm', 'Rating' => 4.7, 'DescriptionProduct' => 'Double Tape/Pita Perekat Dua Sisi Ukuran 6m X 6mm adalah pita perekat serbaguna yang ideal untuk berbagai keperluan. Dengan ukuran 6 meter panjang dan 6 mm lebar, pita ini sangat cocok untuk proyek seni, kerajinan tangan, dan perbaikan rumah tangga. Pita perekat ini memiliki daya rekat yang kuat di kedua sisinya, memungkinkan Anda untuk menempelkan berbagai macam bahan dengan mudah dan efisien. Selain itu, pita perekat ini juga mudah dipotong sesuai kebutuhan dan tidak meninggalkan residu saat dilepas, menjadikannya pilihan sempurna untuk aplikasi yang bersih dan rapi.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'KOKUYO DOTLINER LONG Tape glue GLUE TA-DM4400 TA-D4400', 'Rating' => 4.1, 'DescriptionProduct' => 'KOKUYO DOTLINER LONG Tape glue GLUE TA-DM4400 TA-D4400 adalah lem pita berkualitas tinggi yang dirancang untuk memberikan kemudahan dan kecepatan dalam menempel. Dengan desain panjang, lem ini sangat cocok untuk penggunaan yang lebih intensif di rumah, kantor, atau sekolah. Teknologi DOTLINER memastikan aplikasi lem yang bersih dan presisi tanpa berantakan. Lem ini juga memiliki daya rekat yang kuat dan tahan lama, serta tidak meninggalkan bekas saat dilepas, menjadikannya pilihan ideal untuk berbagai proyek kreatif dan tugas harian.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Double Sided Tape Perekat 2 Sisi Joyko', 'Rating' => 4.9, 'DescriptionProduct' => 'Double Sided Tape Perekat 2 Sisi Joyko adalah solusi perekat serbaguna yang menawarkan kekuatan rekat superior di kedua sisinya. Pita perekat ini sangat ideal untuk proyek DIY, seni, dan kerajinan tangan. Dengan kemampuan menempel yang kuat, Anda dapat dengan mudah memasang foto, poster, dan bahan dekoratif lainnya tanpa harus khawatir tentang kekuatan rekat. Pita ini mudah dipotong sesuai kebutuhan dan tidak meninggalkan residu lengket saat dilepas, sehingga sangat praktis dan efisien untuk digunakan di berbagai situasi.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'KOKUYO DOTLINER COMPACT Tape glue GLUE TA-DM4500 TA-D4500 4550 4520 4510', 'Rating' => 4.2, 'DescriptionProduct' => 'KOKUYO DOTLINER COMPACT Tape glue GLUE TA-DM4500 TA-D4500 4550 4520 4510 adalah lem pita kompak yang dirancang untuk kepraktisan dan kemudahan penggunaan. Ideal untuk keperluan sekolah, kantor, dan rumah, lem ini menawarkan aplikasi yang cepat dan bersih. Teknologi DOTLINER memastikan distribusi lem yang merata tanpa berantakan. Meskipun dalam ukuran kompak, lem ini memiliki daya rekat yang kuat dan tahan lama, cocok untuk menempelkan kertas, foto, dan bahan ringan lainnya dengan mudah dan efisien.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Multifunctional Double Sided Tape Pita Perekat Dua Sisi Joyko MDST-8', 'Rating' => 4.5, 'DescriptionProduct' => 'Multifunctional Double Sided Tape Pita Perekat Dua Sisi Joyko MDST-8 adalah pita perekat serbaguna yang menawarkan solusi rekat yang kuat untuk berbagai kebutuhan. Dengan daya rekat yang tinggi di kedua sisinya, pita ini sangat ideal untuk proyek kerajinan tangan, dekorasi, dan perbaikan ringan. Pita ini mudah dipotong dan diaplikasikan sesuai kebutuhan Anda. Selain itu, tidak meninggalkan residu saat dilepas, sehingga menjaga kebersihan dan tampilan yang rapi pada permukaan yang ditempel.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Nano Double Sided Tape Pita Perekat Dua Sisi Joyko NDST-7', 'Rating' => 4.4, 'DescriptionProduct' => 'Nano Double Sided Tape Pita Perekat Dua Sisi Joyko NDST-7 adalah pita perekat inovatif yang menawarkan kekuatan rekat superior dengan teknologi nano. Pita ini sangat ideal untuk menempelkan berbagai bahan seperti kertas, plastik, kaca, dan logam. Dengan kemampuan rekat yang luar biasa dan tidak meninggalkan bekas saat dilepas, pita ini sangat praktis untuk digunakan dalam proyek DIY, dekorasi rumah, dan keperluan kantor. Pita ini juga tahan terhadap kelembaban dan suhu tinggi, memastikan ketahanan yang optimal dalam berbagai kondisi.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Double Sided Foam Tape Pita Busa Dua Sisi Joyko', 'Rating' => 4.4, 'DescriptionProduct' => 'Double Sided Foam Tape Pita Busa Dua Sisi Joyko adalah pita perekat busa yang menawarkan daya rekat yang kuat dan fleksibilitas tinggi. Pita ini sangat cocok untuk menempelkan bahan dengan permukaan yang tidak rata atau tekstur kasar. Dengan kemampuan rekat di kedua sisinya, pita ini sangat ideal untuk proyek kerajinan tangan, pemasangan aksesori, dan keperluan dekoratif. Pita busa ini juga menyerap guncangan dan getaran, menjadikannya pilihan sempurna untuk aplikasi yang membutuhkan stabilitas tambahan.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => '3M™ Scotch® Double-Sided Mouting Tape 25mm x 1.5m', 'Rating' => 4.2, 'DescriptionProduct' => '3M™ Scotch® Double-Sided Mounting Tape 25mm x 1.5m adalah pita perekat dua sisi yang menawarkan kekuatan rekat yang luar biasa untuk keperluan pemasangan yang berat. Dengan ukuran 25 mm x 1,5 m, pita ini sangat ideal untuk memasang cermin, gambar, dan dekorasi lainnya di dinding tanpa memerlukan paku atau sekrup. Teknologi perekat dari 3M memastikan ketahanan yang kuat dan tahan lama, bahkan pada permukaan yang kasar. Pita ini juga mudah diaplikasikan dan tidak meninggalkan residu saat dilepas.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()],
                ['NameProduct' => 'Deli double sided tape, dua sisi transparan EA35201', 'Rating' => 4.9, 'DescriptionProduct' => 'Deli Double Sided Tape EA35201 adalah pita perekat dua sisi transparan yang menawarkan solusi rekat yang tak terlihat untuk berbagai keperluan. Pita ini sangat ideal untuk proyek seni, kerajinan tangan, dan dekorasi rumah. Dengan daya rekat yang kuat di kedua sisinya, pita ini memastikan objek tetap terpasang dengan aman tanpa terlihat. Selain itu, pita ini tidak meninggalkan residu saat dilepas, menjaga kebersihan dan estetika permukaan yang ditempel. Mudah digunakan dan dipotong sesuai kebutuhan, menjadikannya pilihan yang praktis dan efisien.', 'SubCategoryProductID' => 27, 'created_at' => now(), 'updated_at' => now()]

        ]);
    }
}
