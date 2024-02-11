<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $events = [
    //         [
    //             'name' => 'Fiera dell\'est',
    //             'date' => '2024/01/01',
    //             'available_tickets' => 100
    //         ],
    //         [
    //             'name' => 'Boolweek',
    //             'date' => '2024/01/01',
    //             'available_tickets' => 300
    //         ],
    //         [
    //             'name' => 'Ruggero dei timidi: Il concerto',
    //             'date' => '2024/01/01',
    //             'available_tickets' => 120
    //         ],
    //     ];

    //     foreach ($events as $event) {

    //         $newevent = new Event();
    //         $newevent->fill($event);
    //         $newevent->save();
    //     }
    // }

    public function run($num_eventi, Faker $faker) //funziona se metto $num_eventu = 3 ad esempio
    {
        for ($i = 0; $i < $num_eventi; $i++) {
            $newEvent = new Event();
            $newEvent->user_id = $faker->randomElement($this->getUtentiID());
            $newEvent->name = $faker->sentence(3);
            $newEvent->date = $faker->date();
            $newEvent->available_tickets = $faker->randomNumber(3, false);
            $newEvent->save();
        }
    }

    private function getUtentiID()
    {
        return User::all()->pluck('id');
    }
}
