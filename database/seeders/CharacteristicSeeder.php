<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characteristics = config('data.characteristics');
        foreach ($characteristics as $name => $characteristic) {
            Characteristic::create([
                'name' => $name,
                'description' => $characteristic['description'],
            ]);
        }
    }
}
