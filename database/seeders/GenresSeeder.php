<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['gen_id'=>1001,'gen_title'=>'Action'],
            ['gen_id'=>1002,'gen_title'=>'Adventure'],
            ['gen_id'=>1003,'gen_title'=>'Animation'],
            ['gen_id'=>1004,'gen_title'=>'Biography'],
            ['gen_id'=>1005,'gen_title'=>'Comedy'],
            ['gen_id'=>1006,'gen_title'=>'Crime'],
            ['gen_id'=>1007,'gen_title'=>'Drama'],
            ['gen_id'=>1008,'gen_title'=>'Horror'],
            ['gen_id'=>1009,'gen_title'=>'Music'],
            ['gen_id'=>1010,'gen_title'=>'Mystery'],
            ['gen_id'=>1011,'gen_title'=>'Romance'],
            ['gen_id'=>1012,'gen_title'=>'Thriller'],
            ['gen_id'=>1013,'gen_title'=>'War']
        ];

        DB::table('genres')->insert($genres);
    }
}
