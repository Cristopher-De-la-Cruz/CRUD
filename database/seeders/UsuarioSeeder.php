<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nombre' => 'Ejemplo',
            'apellidos' => 'Ejemploso',
            'dni' => '74872613',
            'fecha_nacimiento' => '14/06/2000',
            'fecha_inicio' => '08/07/2020',
            'gmail' => 'Ejemplito@gmail.com',
            'password' => 'ejemplo123', 
        ]);

        Usuario::create([
            'nombre' => 'Ejemplo2',
            'apellidos' => 'Ejemploso2',
            'dni' => '74672613',
            'fecha_nacimiento' => '14/06/2000',
            'fecha_inicio' => '08/07/2020',
            'gmail' => 'Ejemplito2@gmail.com',
            'password' => 'ejemplo123', 
        ]);

        Usuario::create([
            'nombre' => 'Ejemplo3',
            'apellidos' => 'Ejemploso3',
            'dni' => '74632613',
            'fecha_nacimiento' => '14/06/2000',
            'fecha_inicio' => '08/07/2020',
            'gmail' => 'Ejemplito3@gmail.com',
            'password' => 'ejemplo123', 
        ]);
    }
}
