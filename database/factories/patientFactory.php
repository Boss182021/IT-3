<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\patient;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\patientModel>
 */
class patientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected
        $model = patient::class;
    public function definition(): array
    {
        return [ 
            'Fname'=>'Jonel',
            'Lname'=>'Busa',
            'birth_date'=>now(),
            'gender'=>'Male',
            'contact_no'=>'09933393590',
            'addressed'=>'Purok 2 Gingoog City',
            'created_at' => now(),
            'updated_at' => now (),
            
        ];
    }
}
