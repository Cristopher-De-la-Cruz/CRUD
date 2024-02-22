<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grado;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grado::create([
            'nombre' => 'Primero'
        ]);
        
        Grado::create([
            'nombre' => 'Segundo'
        ]);
        
        Grado::create([
            'nombre' => 'Tercero'
        ]);
        
        Grado::create([
            'nombre' => 'Cuarto'
        ]);
        
        Grado::create([
            'nombre' => 'Quinto'
        ]);
        
        Grado::create([
            'nombre' => 'Egresado'
        ]);
        
    }
}
