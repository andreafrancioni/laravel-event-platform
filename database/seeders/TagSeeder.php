<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Concerto',
            ],
            [
                'name' => 'LunaPark',
            ],
            [
                'name' => 'Videogiochi',
            ],
            [
                'name' => 'Musica',
            ],
            [
                'name' => 'Inaugurazione',
            ],
            [
                'name' => 'Cibo',
            ],
        ];

        foreach ($tags as $tag) {
            $newtag = new Tag();
            $newtag->fill($tag);
            $newtag->save();
        }
    }
}
