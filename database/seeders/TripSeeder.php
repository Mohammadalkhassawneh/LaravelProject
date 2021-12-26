<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('trips')->insert([
            ['name' => 'Jerash',
            'description' => 'Jerash is a city in northern Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            'date' => '2022-01-29 00:00:00',
            'days' => 5,
            'category_id' => 2,
            'price' => 200,
            'max_visitors' => 20,
            'minimum_age' => 18,
            'image' => '1640524517-87b26947ee3c3031-1024x681.jpg',
            'guide_id' => 3],
            [
            'name' => 'Irbid',
            'description' => 'Irbid is a city in northern Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            'date' => '2021-12-29 00:00:00',
            'days' => 5,
            'category_id' => 2,
            'price' => 50,
            'max_visitors' => 20,
            'minimum_age' => 18,
            'image' => '1640512926-10ca49f84d0c1812874f5772e648125c.jpg',
            'guide_id' => 4], 
            [
            'name' => 'Zarqa',
            'description' => 'Zarqa is a city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            'date' => '2022-01-13 00:00:00',
            'days' => 10,
            'category_id' => 1,
            'price' => 500,
            'max_visitors' => 20,
            'minimum_age' => 18,
            'image' => '1640515979-17_Del+Mar+Plaza_Photoshoot_R1-94.jpg',
            'guide_id' => 3
            ], 
            ['name' => 'Amman',
            'description' => 'Amman is a city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            'date' => '2022-01-13 00:00:00',
            'days' => 10,
            'category_id' => 1,
            'price' => 500,
            'max_visitors' => 20,
            'minimum_age' => 18,
            'image' => 'public\trip_images\1640516464-58.jpg',
            'guide_id' => 4
            ], [
            'name' => 'Madapa',
            'description' => 'Madapa is a city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            'date' => '2022-02-01 00:00:00',
            'days' => 3,
            'category_id' => 1,
            'price' => 150,
            'max_visitors' => 20,
            'minimum_age' => 18,
            'image' => '1640524517-87b26947ee3c3031-1024x681.jpg',
            'guide_id' => 4
            ], [
            'name' => 'Azraq',
            'description' => 'Azraq is a city in the middle of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            'date' => '2022-02-10 00:00:00',
            'days' => 1,
            'category_id' => 1,
            'price' => 50,
            'max_visitors' => 20,
            'minimum_age' => 18,
            'image' => '1640518521-9f5a2fda5921f1c9cd0ca1213df96637.jpg',
            'guide_id' => 4
            ]
        ]);
    }
}
