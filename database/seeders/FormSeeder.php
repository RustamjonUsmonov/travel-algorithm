<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
            'name'=>'form1',
        ]);
        DB::table('forms')->insert([
            'name'=>'form2',
        ]);
        /* DB::table('forms')->insert([
             'name'=>'form3',
         ]);*/
    }
}
