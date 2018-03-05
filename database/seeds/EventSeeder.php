<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(App\Event::class, 50)->create()->each(function ($u) {
        	$u->events()->save(factory(App\Event::class)->make());
    	}); 
    }
}
