<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materia::create([
            'nombre' => 'Matematicas'
        ]);

        Materia::create([
            'nombre' => 'Comunicacion'
        ]);
        
        Materia::create([
            'nombre' => 'Ciencias'
        ]);
        
    }
}
