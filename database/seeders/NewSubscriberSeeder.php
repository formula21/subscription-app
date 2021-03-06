<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NewSubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // subscribing both of them to website id = 1
        DB::table('mailing_list')->insert([
            [
                'website_id'=>1,
                'name'=>'Anweshan Roy Chowdhury',
                'email'=>'anweshanrc15@gmail.com',
            ],
            [
                'website_id'=>2,
                'name'=>'Anweshan Roy Chowdhury',
                'email'=>'anweshanrc15@gmail.com',
            ],
            [
                'website_id'=>1,
                'name'=>'Anweshan Roy Chowdhury',
                'email'=>'arcbackupper@gmail.com',
            ],
        ]);
    }
}
