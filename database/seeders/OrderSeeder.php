<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        for($i=0;$i<10;$i++){
            Order::create([
                'status'=>$faker->randomElement(['pending','confirmed','delivered']),
                'pickup_delivery_date_time'=>$faker->dateTimeBetween('now','+1 month'),
                'user_id'=>$faker->numberBetween(1,9),
                'total_amount'=>$faker->randomFloat(2,10,100),
            ]);
        }
    }
}
