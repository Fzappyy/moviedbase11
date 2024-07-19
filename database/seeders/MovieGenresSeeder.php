<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movieGenres = [
            ['mov_id'=>922,'gen_id'=>1001],
            ['mov_id'=>917,'gen_id'=>1002],
            ['mov_id'=>903,'gen_id'=>1002],
            ['mov_id'=>912,'gen_id'=>1003],
            ['mov_id'=>911,'gen_id'=>1005],
            ['mov_id'=>908,'gen_id'=>1006],
            ['mov_id'=>913,'gen_id'=>1006],
            ['mov_id'=>926,'gen_id'=>1007],
            ['mov_id'=>928,'gen_id'=>1007],
            ['mov_id'=>918,'gen_id'=>1007],
            ['mov_id'=>921,'gen_id'=>1007],
            ['mov_id'=>902,'gen_id'=>1008],
            ['mov_id'=>923,'gen_id'=>1009],
            ['mov_id'=>907,'gen_id'=>1010],
            ['mov_id'=>927,'gen_id'=>1010],
            ['mov_id'=>901,'gen_id'=>1010],
            ['mov_id'=>914,'gen_id'=>1011],
            ['mov_id'=>906,'gen_id'=>1012],
            ['mov_id'=>904,'gen_id'=>1013]
        ];

        DB::table('genre_movie')->insert($movieGenres);
    }
}
