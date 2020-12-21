<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Redmi Y2',
            'price'=>'9999',
            'description'=> 'It sports a 5.99-inch HD+ display with a resolution of 720x1440 pixels and an 18:9 aspect ratio. Xiaomi has opted for the Snapdragon 625 SoC along with 3GB of RAM and 32GB of internal storage. The Redmi Y2 is a dual SIM device and has two nano SIM slots.',
            'category'=> 'smartphone',
            'gallery'=> 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT6gjFrQJzktQHGbh4Dm8vAqbVOvPsiKhY9qPhLUmggdhISEA1JH6cYUQAo_Tz9U80KYFdqX69I6g&usqp=CAc',
            
            ],
            [
            'name'=>'Redmi Y3',
            'price'=>'10,999',
            'description'=> '12MP+2MP dual rear camera | 32MP front facing camera · 15.9004 centimeters (6.26-inch) with 1520 x 720 pixels resolution, 269 ppi pixel density.',
            'category'=> 'smartphone',
            'gallery'=> 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQEE8bWkezXsLVcMyyREccJanJ2mt8KJDV0WCyVm3YDh687WuDswSmV4kf1fVexZqTbwoNkbve1cg',
            
            ],
            [
            'name'=>'Redmi Note 9 Pro',
            'price'=>'12,999',
            'description'=> 'Redmi Note 9 Pro (Champagne Gold, 4GB RAM, 64GB Storage) - Latest 8nm Snapdragon 720G & Alexa Hands-Free .',
            'category'=> 'smartphone',
            'gallery'=> 'https://i01.appmifile.com/webfile/globalimg/in/cms/A0F36EF9-A32C-FF2F-E2D5-1FE5124589C2.jpg',
            
            ],
            
        ]);
    }
}
