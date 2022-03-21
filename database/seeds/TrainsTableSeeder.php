<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('trains');

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->company = $train['company'];
            $new_train->departure_station = $train['departure_station'];
            $new_train->arrival_station = $train['arrival_station'];
            $new_train->departure_time = $train['departure_time'];
            $new_train->arrival_time = $train['arrival_time'];
            $new_train->code_number = $train['code_number'];
            $new_train->carriages = $train['carriages'];
            $new_train->is_on_time = $train['is_on_time'];
            $new_train->is_canceled = $train['is_canceled'];
        }
    }
}
