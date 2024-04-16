<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            'Cerveza',
            'Energizante',
            'Espumante',
            'Fernet',
            'Gin',
            'Grapamiel',
            'Licor',
            'Refresco',
            'Ron',
            'Sidra',
            'Tequila',
            'Vermouth',
            'Vino',
            'Vodka',
            'Whisky',
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
