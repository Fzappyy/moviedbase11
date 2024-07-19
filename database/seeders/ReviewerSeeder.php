<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviewers = [
            ['rev_id'=>9001,'rev_name'=>'Righty Sock'],
            ['rev_id'=>9002,'rev_name'=>'Jack Malvern'],
            ['rev_id'=>9003,'rev_name'=>'Flagrant Baronessa'],
            ['rev_id'=>9004,'rev_name'=>'Alec Shaw'],
            ['rev_id'=>9005,'rev_name'=>'Kim Newman'],
            ['rev_id'=>9006,'rev_name'=>'Victor Woeltjen'],
            ['rev_id'=>9007,'rev_name'=>'Simon Wright'],
            ['rev_id'=>9008,'rev_name'=>'Neal Wruck'],
            ['rev_id'=>9009,'rev_name'=>'Paul Monks'],
            ['rev_id'=>9010,'rev_name'=>'Mike Salvati'],
            ['rev_id'=>9011,'rev_name'=>'Wesley Morris'],
            ['rev_id'=>9012,'rev_name'=>'Wesley S. Walker'],
            ['rev_id'=>9013,'rev_name'=>'Sasha Goldshtein'],
            ['rev_id'=>9014,'rev_name'=>'Josh Cates'],
            ['rev_id'=>9015,'rev_name'=>'Krug Stillo'],
            ['rev_id'=>9016,'rev_name'=>'Scott LeBrun'],
            ['rev_id'=>9017,'rev_name'=>'Hannah Steele'],
            ['rev_id'=>9018,'rev_name'=>'Vincent Cadena'],
            ['rev_id'=>9019,'rev_name'=>'Brandt Sponseller'],
            ['rev_id'=>9020,'rev_name'=>'Richard Adams']
        ];

   DB::table('reviewers')->insert($reviewers);

    }
}
