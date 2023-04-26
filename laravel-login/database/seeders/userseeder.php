<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rafa Prayata',
            'email' => 'rafa@gmail.com',
            'password' =>Hash::make('12345'),
            'level'  =>'masyarakat'

        ]);
        DB::table('users')->insert([
            'name' => 'afif',
            'email' => 'afif@gmail.com',
            'password' =>Hash::make('12345'),
            'level'  =>'admin'

        ]);
    }
}
