<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Applicant;
use App\Models\Application;

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
       
        Company::create([
            'name' => 'melati',
            'email' => 'owner@gmail.com',
            'phone' => '081234567890',
            'city' => 'Jakarta',
            'address' => 'Jl. Kebon Jeruk No.1',
            'description' => 'test owner',
            'photo' => 'images/test/test.jpg',
            'password' => bcrypt('owner') 
        ]);
    
        
        Company::factory(10)->create();
        Job::factory(50)->create();
        Applicant::factory(10)->create();
        Application::factory(200)->create();
        Admin::factory(1)->create();



    }
}
