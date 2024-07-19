<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieDirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $movieDirections = [
            ['dir_id'=>201,'mov_id'=>901],
            ['dir_id'=>202,'mov_id'=>902],
            ['dir_id'=>203,'mov_id'=>903],
            ['dir_id'=>204,'mov_id'=>904],
            ['dir_id'=>205,'mov_id'=>905],
            ['dir_id'=>206,'mov_id'=>906],
            ['dir_id'=>207,'mov_id'=>907],
            ['dir_id'=>208,'mov_id'=>908],
            ['dir_id'=>209,'mov_id'=>909],
            ['dir_id'=>210,'mov_id'=>910],
            ['dir_id'=>211,'mov_id'=>911],
            ['dir_id'=>212,'mov_id'=>912],
            ['dir_id'=>213,'mov_id'=>913],
            ['dir_id'=>214,'mov_id'=>914],
            ['dir_id'=>215,'mov_id'=>915],
            ['dir_id'=>216,'mov_id'=>916],
            ['dir_id'=>217,'mov_id'=>917],
            ['dir_id'=>218,'mov_id'=>918],
            ['dir_id'=>219,'mov_id'=>919],
            ['dir_id'=>220,'mov_id'=>920],
            ['dir_id'=>218,'mov_id'=>921],
            ['dir_id'=>215,'mov_id'=>922],
            ['dir_id'=>221,'mov_id'=>923]
       ];

    DB::table('director_movie')->insert($movieDirections);

    }
}
