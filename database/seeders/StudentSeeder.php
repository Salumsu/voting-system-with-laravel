<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = ['BSIT', 'BSCS'];
        $faker = Faker::create();

            $student = [
                'studentid' => $faker->numberBetween(31000, 32000),
                'firstname' => $faker->firstName(),
                'middlename' => $faker->lastName(),
                'lastname' => $faker->lastName(),
                'program' => $programs[rand(0, 1)],
                'yearlevel' => rand(1, 4),
                'votestatus' => 0,
                'voterskey' => time() ,
                'active' => 1
            ];
        

        DB::table('tblstudent')->insert($student);
        
    }
}
