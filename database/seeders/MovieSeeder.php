<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $movies = [
            ['mov_id'=>901,'mov_title'=>'Vertigo','mov_year'=>1958,'mov_time'=>128,'mov_lang'=>'English','mov_dt_rel'=>'1958-08-24','mov_rel_country'=>'UK'],
            ['mov_id'=>902,'mov_title'=>'The Innocents','mov_year'=>1961,'mov_time'=>100,'mov_lang'=>'English','mov_dt_rel'=>'1962-02-19','mov_rel_country'=>'SW'],
            ['mov_id'=>903,'mov_title'=>'Lawrence of Arabia','mov_year'=>1962,'mov_time'=>216,'mov_lang'=>'English','mov_dt_rel'=>'1962-12-11','mov_rel_country'=>'UK'],
            ['mov_id'=>904,'mov_title'=>'The Deer Hunter','mov_year'=>1978,'mov_time'=>183,'mov_lang'=>'English','mov_dt_rel'=>'1979-03-08','mov_rel_country'=>'UK'],
            ['mov_id'=>905,'mov_title'=>'Amadeus','mov_year'=>1984,'mov_time'=>160,'mov_lang'=>'English','mov_dt_rel'=>'1985-01-07','mov_rel_country'=>'UK'],
            ['mov_id'=>906,'mov_title'=>'Blade Runner','mov_year'=>1982,'mov_time'=>117,'mov_lang'=>'English','mov_dt_rel'=>'1982-09-09','mov_rel_country'=>'UK'],
            ['mov_id'=>907,'mov_title'=>'Eyes Wide Shut','mov_year'=>1999,'mov_time'=>159,'mov_lang'=>'English','mov_dt_rel'=>null,'mov_rel_country'=>'UK'],
            ['mov_id'=>908,'mov_title'=>'The Usual Suspects','mov_year'=>1995,'mov_time'=>106,'mov_lang'=>'English','mov_dt_rel'=>'1995-08-25','mov_rel_country'=>'UK'],
            ['mov_id'=>909,'mov_title'=>'Chinatown','mov_year'=>1974,'mov_time'=>130,'mov_lang'=>'English','mov_dt_rel'=>'1974-08-09','mov_rel_country'=>'UK'],
            ['mov_id'=>910,'mov_title'=>'Boogie Nights','mov_year'=>1997,'mov_time'=>155,'mov_lang'=>'English','mov_dt_rel'=>'1998-02-16','mov_rel_country'=>'UK'],
            ['mov_id'=>911,'mov_title'=>'Annie Hall','mov_year'=>1977,'mov_time'=>93,'mov_lang'=>'English','mov_dt_rel'=>'1977-04-20','mov_rel_country'=>'USA'],
            ['mov_id'=>912,'mov_title'=>'Princess Mononoke','mov_year'=>1997,'mov_time'=>134,'mov_lang'=>'Japanese','mov_dt_rel'=>'2001-10-19','mov_rel_country'=>'UK'],
            ['mov_id'=>913,'mov_title'=>'The Shawshank Redemption','mov_year'=>1994,'mov_time'=>142,'mov_lang'=>'English','mov_dt_rel'=>'1995-02-17','mov_rel_country'=>'UK'],
            ['mov_id'=>914,'mov_title'=>'American Beauty','mov_year'=>1999,'mov_time'=>122,'mov_lang'=>'English','mov_dt_rel'=>null,'mov_rel_country'=>'UK'],
            ['mov_id'=>915,'mov_title'=>'Titanic','mov_year'=>1997,'mov_time'=>194,'mov_lang'=>'English','mov_dt_rel'=>'1998-01-23','mov_rel_country'=>'UK'],
            ['mov_id'=>916,'mov_title'=>'Good Will Hunting','mov_year'=>1997,'mov_time'=>126,'mov_lang'=>'English','mov_dt_rel'=>'1998-06-03','mov_rel_country'=>'UK'],
            ['mov_id'=>917,'mov_title'=>'Deliverance','mov_year'=>1972,'mov_time'=>109,'mov_lang'=>'English','mov_dt_rel'=>'1982-10-05','mov_rel_country'=>'UK'],
            ['mov_id'=>918,'mov_title'=>'Trainspotting','mov_year'=>1996,'mov_time'=>94,'mov_lang'=>'English','mov_dt_rel'=>'1996-02-23','mov_rel_country'=>'UK'],
            ['mov_id'=>919,'mov_title'=>'The Prestige','mov_year'=>2006,'mov_time'=>130,'mov_lang'=>'English','mov_dt_rel'=>'2006-11-10','mov_rel_country'=>'UK'],
            ['mov_id'=>920,'mov_title'=>'Donnie Darko','mov_year'=>2001,'mov_time'=>113,'mov_lang'=>'English','mov_dt_rel'=>null,'mov_rel_country'=>'UK'],
            ['mov_id'=>921,'mov_title'=>'Slumdog Millionaire','mov_year'=>2008,'mov_time'=>120,'mov_lang'=>'English','mov_dt_rel'=>'2009-01-09','mov_rel_country'=>'UK'],
            ['mov_id'=>922,'mov_title'=>'Aliens','mov_year'=>1986,'mov_time'=>137,'mov_lang'=>'English','mov_dt_rel'=>'1986-08-29','mov_rel_country'=>'UK'],
            ['mov_id'=>923,'mov_title'=>'Beyond the Sea','mov_year'=>2004,'mov_time'=>118,'mov_lang'=>'English','mov_dt_rel'=>'2004-11-26','mov_rel_country'=>'UK'],
            ['mov_id'=>924,'mov_title'=>'Avatar','mov_year'=>2009,'mov_time'=>162,'mov_lang'=>'English','mov_dt_rel'=>'2009-12-17','mov_rel_country'=>'UK'],
            ['mov_id'=>926,'mov_title'=>'Seven Samurai','mov_year'=>1954,'mov_time'=>207,'mov_lang'=>'Japanese','mov_dt_rel'=>'1954-04-26','mov_rel_country'=>'JP'],
            ['mov_id'=>927,'mov_title'=>'Spirited Away','mov_year'=>2001,'mov_time'=>125,'mov_lang'=>'Japanese','mov_dt_rel'=>'2003-09-12','mov_rel_country'=>'UK'],
            ['mov_id'=>928,'mov_title'=>'Back to the Future','mov_year'=>1985,'mov_time'=>116,'mov_lang'=>'English','mov_dt_rel'=>'1985-12-04','mov_rel_country'=>'UK'],
            ['mov_id'=>925,'mov_title'=>'Braveheart','mov_year'=>1995,'mov_time'=>178,'mov_lang'=>'English','mov_dt_rel'=>'1995-09-08','mov_rel_country'=>'UK'],
      ];

    DB::table('movies')->insert($movies);

    }
}
