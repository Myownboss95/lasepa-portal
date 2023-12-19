<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Lab;
use App\Models\User;
use App\Models\Stage;
use App\Models\Service;
use App\Models\SubService;
use App\Constants\LabTypes;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Constants\StageTypes;
use App\Models\PaymentChannel;
use App\Constants\ServiceTypes;
use Illuminate\Database\Seeder;
use App\Constants\PaymentChannels;
use App\Constants\SubServicesTypes;
use App\Constants\TransactionTypes;
use App\Constants\TransactionStatusTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SampleTransactionResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::where('role_id', 1)->each( function ($user) {
           
            $faker = Faker::create();

            $staff = User::where('role_id', 2)->first();
            $stagetype = $faker->randomElement(StageTypes::toArray());
            $stage = Stage::where('name', $stagetype)->first();

            $labtype = $faker->randomElement(LabTypes::toArray());
            $selectedlabtype = LabTypes::from($labtype);
            $lab = Lab::where('name', $labtype)->first();

            for ($i = 0; $i < 3; $i++) {
                $sample = $user->samples()->create([ 
                        'title' => strtoupper(Str::random(8)),
                        'stage_id' => $stage->id,
                        'approved_by' => $staff->id,
                        'entered_by' => $staff->id,
                ]);

                $transaction = $user->transactions()->create([ 
                    'amount' => $faker->randomElement([100000,200000,30000,75000,100000,500000,230400]),
                    'status' => $faker->randomElement(TransactionStatusTypes::toArray()),
                    'reference' => strtoupper(Str::random(10)),
                    'sample_id' => $sample->id,
            ]);

                foreach($selectedlabtype->parameters() as $parameters) {
                    $result = $sample->results()->create([ 
                        'lab_id' => $lab->id,
                        'parameters' =>  $parameters,
                        'test_level' => $faker->randomElement(['low 0kg', 'low 1mm', 'medium 5.0', 'high 20.0', 'medium 7.0']),
                        'result' => $faker->randomElement(['low', 'medium', 'high'])
                    ]);
            }



            }
            
        });
    }
}
