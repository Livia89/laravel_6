<?php

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tour::class, 100)->create();
    }
}
