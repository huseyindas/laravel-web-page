<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbaoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abaouts')->insert([

            [
                "head_home" => "BİZ NELER YAPIYORUZ?",
                "desc_home" => "Labor Elevator markası ile Doğu ve Güneydoğu başta olmak üzere ülkemizin her noktasına asansör ve yürüyen merdiven sektöründe montaj ve satış sonrası hizmetler alanında faaliyet gösteriyoruz.",
                "head1" => "Biz kimiz?",
                "mini_desc1" => "Emek Elektronik Asansör olarak 2007 yılında resmi olarak hizmete başladık. 2013 yılından beri Labor Elevator markası ile Doğu ve Güneydoğu başta olmak üzere ülkemizin her noktasına asansör ve yürüyen merdiven sektöründe montaj ve satış sonrası hizmetler alanında faaliyet gösterdik ve göstermeye devam ediyoruz.",
                "desc1" => "Emek Elektronik Asansör olarak 2007 yılında resmi olarak hizmete başladık. 2013 yılından beri Labor Elevator markası ile Doğu ve Güneydoğu başta olmak üzere ülkemizin her noktasına asansör ve yürüyen merdiven sektöründe montaj ve satış sonrası hizmetler alanında faaliyet gösterdik ve göstermeye devam ediyoruz.",
                "head2" => "Ne yaparız?",
                "mini_desc2" => "Son iki yıldır özel projeler dışında kamu kurum ihalelerinde müteahhit firmalarımıza çözüm ortağı olarak, daha ziyade faaliyetlerimizi sürdürmekteyiz. Asansör ve yürüyen merdiven imalatı yapan Diyarbakır merkezli firmamızın amacı yüksek kaliteli hizmet anlayışı ile müşteri memnuniyetini karşılayan kalitede, müşteri ve çalışanlarına değer katarak onların memnuniyetini sağlayan, bölgeye faydalı bir şirket olmayı sürdürmekteyiz.",
                "desc2" => "Son iki yıldır özel projeler dışında kamu kurum ihalelerinde müteahhit firmalarımıza çözüm ortağı olarak, daha ziyade faaliyetlerimizi sürdürmekteyiz. Asansör ve yürüyen merdiven imalatı yapan Diyarbakır merkezli firmamızın amacı yüksek kaliteli hizmet anlayışı ile müşteri memnuniyetini karşılayan kalitede, müşteri ve çalışanlarına değer katarak onların memnuniyetini sağlayan, bölgeye faydalı bir şirket olmayı sürdürmekteyiz.",
            ],

        ]);
    }
}
