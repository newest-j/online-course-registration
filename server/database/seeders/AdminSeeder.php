<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::insert([
            'name' => 'Admin',
            'email' => 'gamexpromaxx@gmail.com',
            'password' => 'Game123#',
            'role' => 'Admin'
        ]);
    }
}
