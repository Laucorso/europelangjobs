<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Breed;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dog>
 */
class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $br = Breed::create([
            'name'=>'Golden Terr',
        ]);
        return [
            'breed_id'=>$br->id,
            'size'=>'Mediano/Grande',
            'origin'=>'England',
            'photo'=>'',
            'hair_color'=>'Brown'
        ];
    }
}
