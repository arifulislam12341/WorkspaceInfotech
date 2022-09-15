<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =Admin::create([
            'id'=>2,
            'name' =>'Touser',
            'email' =>'admin@admin.com',
            'password' =>('password'),
            'phone'=>'01620565780',
            'address'=>'Dhaka',
        ]);
        
    }
}
