<?php

namespace Database\Seeders;

use App\Models\ContractCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $contract = 
        //     ['name' => 'Decison maker'],
        //     ['name' => 'Prospect'],
        //     ['name' => 'Influencer'],
        //     ['name' => 'Special']
        ContractCategory::factory()->count(5)->create();
    }
}
