<?php

use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	for ($i=0; $i < 5; $i++) { 
    		DB::table('members')->insert([
    		'event_id' => $i,
    		'first_name' => "name$i",
    		'second_name' => "sirname$i",
    		'email' => Str::random(10).'@gmail.com',
    	]);
    	}
    	
    }
}
