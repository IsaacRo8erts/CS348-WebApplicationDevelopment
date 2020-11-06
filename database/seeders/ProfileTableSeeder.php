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
    use App\Models\Profile;

    public function run()
    {
        
        //factory(App\Models\Profile::class, 50)->create();
        $profile = Profile::factory()->count(50)->make();

    }
}
