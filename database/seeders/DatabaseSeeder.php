<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Anggota::create([
            'nama' => 'Sopian Aji',
            'hp' => '085123456781',
        ]);
        Anggota::create([
            'nama' => 'Husni Faqih',
            'hp' => '085123456782',
        ]);
        Anggota::create([
            'nama' => 'Roustyati',
            'hp' => '085123456783',
        ]);
    }
}
