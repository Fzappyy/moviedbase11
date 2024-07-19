<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $directors = [
            ['dir_id'=>201,'dir_fname'=>'Alfred','dir_lname'=>'Hitchcock'],
            ['dir_id'=>202,'dir_fname'=>'Jack','dir_lname'=>'Clayton'],
            ['dir_id'=>203,'dir_fname'=>'David','dir_lname'=>'Lean'],
            ['dir_id'=>204,'dir_fname'=>'Michael','dir_lname'=>'Cimino'],
            ['dir_id'=>205,'dir_fname'=>'Milos','dir_lname'=>'Forman'],
            ['dir_id'=>206,'dir_fname'=>'Ridley','dir_lname'=>'Scott'],
            ['dir_id'=>207,'dir_fname'=>'Stanley','dir_lname'=>'Kubrick'],
            ['dir_id'=>208,'dir_fname'=>'Bryan','dir_lname'=>'Singer'],
            ['dir_id'=>209,'dir_fname'=>'Roman','dir_lname'=>'Polanski'],
            ['dir_id'=>210,'dir_fname'=>'Paul','dir_lname'=>'Thomas Anderson'],
            ['dir_id'=>211,'dir_fname'=>'Woody','dir_lname'=>'Allen'],
            ['dir_id'=>212,'dir_fname'=>'Hayao','dir_lname'=>'Miyazaki'],
            ['dir_id'=>213,'dir_fname'=>'Frank','dir_lname'=>'Darabont'],
            ['dir_id'=>214,'dir_fname'=>'Sam','dir_lname'=>'Mendes'],
            ['dir_id'=>215,'dir_fname'=>'James','dir_lname'=>'Cameron'],
            ['dir_id'=>216,'dir_fname'=>'Gus','dir_lname'=>'Van Sant'],
            ['dir_id'=>217,'dir_fname'=>'John','dir_lname'=>'Boorman'],
            ['dir_id'=>218,'dir_fname'=>'Danny','dir_lname'=>'Boyle'],
            ['dir_id'=>219,'dir_fname'=>'Christopher','dir_lname'=>'Nolan'],
            ['dir_id'=>220,'dir_fname'=>'Richard','dir_lname'=>'Kelly'],
            ['dir_id'=>221,'dir_fname'=>'Kevin','dir_lname'=>'Spacey'],
            ['dir_id'=>222,'dir_fname'=>'Andrei','dir_lname'=>'Tarkovsky'],
            ['dir_id'=>223,'dir_fname'=>'Peter','dir_lname'=>'Jackson']
       ];

    DB::table('directors')->insert($directors);

    }
}
