<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'name' => 'Fiera dell\'est',
                'date' => '2024/01/01',
                'available_tickets' => 100
            ],
            [
                'name' => 'Boolweek',
                'date' => '2024/01/01',
                'available_tickets' => 300
            ],
            [
                'name' => 'Ruggero dei timidi: Il concerto',
                'date' => '2024/01/01',
                'available_tickets' => 120
            ],
        ];

        foreach ($events as $event) {

            $newevent = new Event();
            $newevent->fill($event);
            $newevent->save();
        }
    }
}
