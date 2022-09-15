<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
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
            'name' =>'Admin',
            'email' =>'admin@admin.com',
            'password' =>(Hash::make('password')),
            'phone'=>'01620565780',
            'address'=>'Dhaka',
        ]);
       
    
        
    }}