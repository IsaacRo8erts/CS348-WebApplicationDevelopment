<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p1 = new Profile;

        $p1->pNum = 1;
        $p1->firstName = "Matt";
        $p1->surname = "Thomas" ;
        $p1->age = 25;
        $p1->favouriteTeam = "Bulls";
        $p1->email = "matt.thomas@gmail.com";
        $p1->save();

    }
}
