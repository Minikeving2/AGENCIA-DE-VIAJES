<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paquete;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
    }
}
