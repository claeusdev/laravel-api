<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class FarmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            DB::table('farms')->insert([
            'name' => str_random(10),
            'description' => str_random(50)
	        ]);
        }
    }
}
