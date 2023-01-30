<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

private static $blog_posts = [

    [   "release"=>"12/12/2022",
        "title"=>"Kota Tokyo",
        "image" => "Tokyo.jpg",
        "slug"=>"kota-tokyo",
        "author"=>"Jhon Doe",
        "body"=>"Tokyo (東京 Tōkyō, bahasa Jepang: [tokʲo] ( simak); lit. Ibu kota Timur), nama resminya Metropolis Tokyo (東京都 Tōkyō-to), adalah salah satu dari 47 prefektur Jepang yang menjadi ibu kota Jepang sejak 1869.[6][7] Hingga 2018, Tokyo Raya menempati peringkat pertama sebagai wilayah metropolitan terpadat di dunia.[8] Tokyo menjadi tempat bertakhtanya Kaisar Jepang, pemerintah Jepang, dan Parlemen Jepang. Tokyo mencakup sebagian dari wilayah Kanto, Kepulauan Izu, dan Kepulauan Ogasawara.[9] Tokyo dulunya bernama Edo ketika Shōgun Tokugawa Ieyasu menjadikan kota ini sebagai markas besarnya pada 1603. Kota ini berganti nama menjadi Tokyo setelah Kaisar Meiji menjadikannya sebagai ibu kota dan memindahkan takhtanya dari Kyoto pada tahun 1868. Metropolis Tokyo dibentuk pada tahun 1943 dari penggabungan bekas Prefektur Tokyo (東京府 Tōkyō-fu) dan Kota Tokyo (東京市 Tōkyō-shi). Tokyo sering kali disebut sebagai sebuah kota, padahal secara resmi Tokyo merupakan sebuah prefektur metropolitan yang sangat berbeda dari kota biasa dan menggabungkan unsur-unsur kota dan prefektur."
        ],
        [   "release"=>"12/12/2022",
            "title"=>"Kota London",
            "image" => "London.jpg",
         "slug"=>"kota-london",
         "author"=>"Arthur Lacjk",
         "body"=>"London (bahasa Inggris: -/lʌndən/ ( simak)) adalah ibu kota Inggris dan Britania Raya, merupakan wilayah metropolitan terbesar di Britania Raya.[catatan 1] Berlokasi di sepanjang Sungai Thames, London telah menjadi permukiman utama selama dua milenium sejak didirikan oleh Romawi pada abad ke-1 dengan nama Londinium.[9] Pusat dari London kuno, yaitu City of London, sebagian besar masih tetap mempertahankan batas-batas abad pertengahannya. Sejak abad ke-19, nama London juga digunakan untuk menyebut kota metropolitan yang berkembang di sekitar pusat ini.[10] Konurbasi dari wilayah-wilayah urban ini pada akhirnya membentuk Region London dan wilayah administratif London Raya.[11][12] Wilayah ini diatur dan dibawahi oleh wali kota London dan Majelis London yang dipilih melalui pemilihan umum.[13]
    
         London adalah kota global terkemuka yang unggul dalam bidang seni, bisnis, pendidikan, hiburan, mode, keuangan, kesehatan, media, layanan profesional, penelitian dan pengembangan, pariwisata, serta transportasi.[14] London, bersama dengan New York City, merupakan pusat keuangan terkemuka di dunia,[15][16][17] dan menjadi kota dengan PDB terbesar kelima di dunia, atau yang tertinggi di Eropa.[18]"
        ],
        
        // [   "release"=>"12/12/2022",
        //     "title"=>"Kota Mekkah",
        //     "image" => "Mekkah.jpg",
        //  "slug"=>"kota-mekkah",
        //  "author"=>"Joseph Yusuf",
        //  "body"=>"Makkah[1][a], secara resmi bernama Makkah al-Mukarramah (bahasa Arab: مكة المكرمة, translit. Makkat al-Mukarramah, har. 'Makkah, Kota yang Mulia, adalah salah satu kota suci Islam dan ibukota Provinsi Makkah, Arab Saudi.[3] Kota ini terletak 70 km (43 mi) ke daratan dari Jeddah di Laut Merah, di sebuah lembah kecil 277 m (909 ft) di atas permukaan laut. Populasi terakhir yang tercatat berjumlah 1.578.722 jiwa pada tahun 2015.[4] Diperkirakan populasi metro pada tahun 2020 adalah 2,042 juta jiwa, membuat Makkah sebagai kota terpadat ketiga di kerajaan. Peziarah yang berdatangan berjumlah tiga kali lipat dari penduduk setempat selama ibadah Haji setiap bulan Zulhijah.
    
        //  Makkah merupakan tempat lahir dari Muhammad. Gua Hira yang terletak di atas Jabal an-Nur berada di kota Makkah dan gua tersebut merupakan lokasi yang umat Islam percaya bahwa al-Qur'an pertama kali diturunkan kepada Muhammad.[5][6] Mengunjungi Makkah untuk ibadah Haji merupakan kewajiban bagi umat Islam yang mampu (pemenuhan rukun Islam). Masjidil Haram merupakan rumah bagi Ka'bah—diyakini oleh umat Islam telah dibangun oleh Ibrahim dan Isma'il—yang merupakan salah satu situs suci Islam dan patokan arah salat bagi umat Islam (kiblat), yang memperkuat makna kota Makkah bagi umat Islam.[ "
        //     ],    

        ];


 
    public static function all()
        {
    return collect(self::$blog_posts);
        }
    

        public static function find($slug)
        {
            $posts = self::$blog_posts;
            $post = [];
            foreach($posts as $p) {
                if($p["slug"]===$slug) {
        $post = $p;
            
            }
        }
        return $post;
    
}
}