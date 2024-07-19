<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieCastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $roles = [
            ['act_id'=>101,'mov_id'=>901,'role'=>'John Scottie Ferguson'],
            ['act_id'=>102,'mov_id'=>902,'role'=>'Miss Giddens'],
            ['act_id'=>103,'mov_id'=>903,'role'=>'T.E. Lawrence'],
            ['act_id'=>104,'mov_id'=>904,'role'=>'Michael'],
            ['act_id'=>105,'mov_id'=>905,'role'=>'Antonio Salieri'],
            ['act_id'=>106,'mov_id'=>906,'role'=>'Rick Deckard'],
            ['act_id'=>107,'mov_id'=>907,'role'=>'Alice Harford'],
            ['act_id'=>108,'mov_id'=>908,'role'=>'McManus'],
            ['act_id'=>110,'mov_id'=>910,'role'=>'Eddie Adams'],
            ['act_id'=>111,'mov_id'=>911,'role'=>'Alvy Singer'],
            ['act_id'=>112,'mov_id'=>912,'role'=>'San'],
            ['act_id'=>113,'mov_id'=>913,'role'=>'Andy Dufresne'],
            ['act_id'=>114,'mov_id'=>914,'role'=>'Lester Burnham'],
            ['act_id'=>115,'mov_id'=>915,'role'=>'Rose DeWitt Bukater'],
            ['act_id'=>116,'mov_id'=>916,'role'=>'Sean Maguire'],
            ['act_id'=>117,'mov_id'=>917,'role'=>'Ed'],
            ['act_id'=>118,'mov_id'=>918,'role'=>'Renton'],
            ['act_id'=>120,'mov_id'=>920,'role'=>'Elizabeth Darko'],
            ['act_id'=>121,'mov_id'=>921,'role'=>'Older Jamal'],
            ['act_id'=>122,'mov_id'=>922,'role'=>'Ripley'],
            ['act_id'=>114,'mov_id'=>923,'role'=>'Bobby Darin'],
            ['act_id'=>109,'mov_id'=>909,'role'=>'J.J. Gittes'],
            ['act_id'=>119,'mov_id'=>909,'role'=>'Alfred Borden'],
            // ['act_id'=>119,'mov_id'=>919,'role'=>'Alfred Borden'],

      ];

      DB::table('actor_movie')->insert($roles);
    }
}
