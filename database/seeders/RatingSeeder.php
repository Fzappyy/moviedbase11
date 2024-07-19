<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ratings = [
            ['mov_id'=>901,'rev_id'=>9001,'rev_stars'=>8.40,'num_o_ratings'=>263575],
            ['mov_id'=>902,'rev_id'=>9002,'rev_stars'=>7.90,'num_o_ratings'=>20207],
            ['mov_id'=>903,'rev_id'=>9003,'rev_stars'=>8.30,'num_o_ratings'=>202778],
            ['mov_id'=>906,'rev_id'=>9005,'rev_stars'=>8.20,'num_o_ratings'=>484746],
            ['mov_id'=>924,'rev_id'=>9006,'rev_stars'=>7.30,'num_o_ratings'=>220934],
            ['mov_id'=>908,'rev_id'=>9007,'rev_stars'=>8.60,'num_o_ratings'=>779489],
            ['mov_id'=>909,'rev_id'=>9008,'rev_stars'=>7.80,'num_o_ratings'=>227235],
            ['mov_id'=>910,'rev_id'=>9009,'rev_stars'=>3.00,'num_o_ratings'=>195961],
            ['mov_id'=>911,'rev_id'=>9010,'rev_stars'=>8.10,'num_o_ratings'=>203875],
            ['mov_id'=>912,'rev_id'=>9011,'rev_stars'=>8.40,'num_o_ratings'=>17856],
            ['mov_id'=>914,'rev_id'=>9013,'rev_stars'=>7.00,'num_o_ratings'=>862618],
            ['mov_id'=>915,'rev_id'=>9001,'rev_stars'=>7.70,'num_o_ratings'=>830095],
            ['mov_id'=>916,'rev_id'=>9014,'rev_stars'=>4.00,'num_o_ratings'=>642132],
            ['mov_id'=>925,'rev_id'=>9015,'rev_stars'=>7.70,'num_o_ratings'=>81328],
            ['mov_id'=>918,'rev_id'=>9016,'rev_stars'=>8.30,'num_o_ratings'=>580301],
            ['mov_id'=>920,'rev_id'=>9017,'rev_stars'=>8.10,'num_o_ratings'=>609451],
            ['mov_id'=>921,'rev_id'=>9018,'rev_stars'=>8.00,'num_o_ratings'=>667758],
            ['mov_id'=>922,'rev_id'=>9019,'rev_stars'=>8.40,'num_o_ratings'=>511613],
            ['mov_id'=>923,'rev_id'=>9020,'rev_stars'=>6.70,'num_o_ratings'=>13091]
        ];

        DB::table('ratings')->insert($ratings);
    }
}
