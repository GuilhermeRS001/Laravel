<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('contacts')->insert([
            'nome' => 'John Doe',
            'email' => 'john@example.com',
            'telefone' => '123456789',
            'data_nascimento' => '2006-09-09',
        ]);
        
        DB::table('contacts')->insert([
            'nome' => 'Lucas Fernando',
            'email' => 'lucas@example.com',
            'telefone' => '987654321',
            'data_nascimento' => '2015-12-19',
        ]);
    }
}
