<?php

namespace Database\Seeders;

use App\Models\Lab;
use App\Constants\LabTypes;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (LabTypes::toArray() as $lab) {
            $selectedlab = LabTypes::from($lab);

           
            Lab::create([
                'name' => $lab,
            ]);
        }
    }
}
