<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $links = factory('App\Link', 96)->create();
    }
}
