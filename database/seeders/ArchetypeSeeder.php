<?php

namespace Database\Seeders;

use App\Models\Archetype;
use Illuminate\Database\Seeder;

class ArchetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $archetypes = config('data.archetypes');
        foreach ($archetypes as $name => $archetype) {
            Archetype::create([
                'name' => $name,
                'brawn' => $archetype['brawn'],
                'agility' => $archetype['agility'],
                'intellect' => $archetype['intellect'],
                'cunning' => $archetype['cunning'],
                'willpower' => $archetype['willpower'],
                'presence' => $archetype['presence'],
                'wound_threshold' => $archetype['wound_threshold'],
                'strain_threshold' => $archetype['strain_threshold'],
                'starting_experience' => $archetype['starting_experience'],
                'special_abilities' => $archetype['special_abilities'],
                'other_abilities_json' => json_encode($archetype['other_abilities']),
                'description' => $archetype['description'],
            ]);
        }
    }
}
