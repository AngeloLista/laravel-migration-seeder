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
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Monza',
                'departure_time' => '2022-03-21 12:45:29',
                'arrival_time' => '2022-03-21 13:05:29',
                'code_number' => '31319',
                'carriages' => '15',
                'is_on_time' => true,
                'is_canceled' => false
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Roma',
                'arrival_station' => 'Napoli',
                'departure_time' => '2022-03-23 15:47:16',
                'arrival_time' => '2022-03-23 18:47:16',
                'code_number' => '193403',
                'carriages' => '16',
                'is_on_time' => true,
                'is_canceled' => false
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Firenze',
                'arrival_station' => 'Bolzano',
                'departure_time' => '2022-03-25 13:47:16',
                'arrival_time' => '2022-03-25 19:47:16',
                'code_number' => '159047',
                'carriages' => '16',
                'is_on_time' => true,
                'is_canceled' => false
            ]
        ];

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
            $new_train->save();
        }
    }
}
