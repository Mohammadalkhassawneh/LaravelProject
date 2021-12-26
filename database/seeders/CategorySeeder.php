<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([[
            'category_name' => 'irbid',
            'category_desc' => 'Irbid (Arabic: إِربِد), known in ancient times as Arabella or Arbela (Άρβηλα in Ancient Greek), is the capital and largest city of the Irbid Governorate. It also has the second largest metropolitan population in Jordan after Amman',
            'category_img' => asset('uploads/1640456236-اربد.jpg')
            
        ],
        [
    
        'category_name' => Str::random(10),
        'category_desc' => Str::random(10).'@gmail.com',
        'category_img' => Hash::make('password'),
        ]

        ]);
    
           
            
    
    }
}
