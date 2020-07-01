<?php

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
    		DB::table('customevents')->insert([
    			'name' => "event$i",
    			'city' => "city$i",
    			'date' => date("d:m:y"),

    		]);
    	}
    }
}
