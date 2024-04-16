<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            array(
                'nombre' => "Cerveza Artesanal 'Cerveza de barrio' 500ml",
                'precio' => 130,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Artesanal 'Cerveza de barrio' PACK x2 500ml",
                'precio' => 350,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Artesanal 'Cerveza de barrio' 1Lt",
                'precio' => 200,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Brahma x1",
                'precio' => 55,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Brahma x12",
                'precio' => 650,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Budweiser 330ml x1",
                'precio' => 65,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Budweiser 330ml x24",
                'precio' => 1480,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Budweiser 330ml x6",
                'precio' => 380,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Botella 500ml x1",
                'precio' => 140,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Botella 500ml x6",
                'precio' => 780,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Doble Ipa Botella 500ml x6",
                'precio' => 900,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Doble Ipa Botella 500ml x1",
                'precio' => 160,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Ipa/Apa Lata 473ml x1",
                'precio' => 105,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Ipa/Apa Lata 473ml x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Patria Lata 473ml x1",
                'precio' => 80,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Cabesas Bier Patria Lata 473ml x6",
                'precio' => 450,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Clausthaler limon Sin alcohol 330ml x1",
                'precio' => 85,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Clausthaler limon Sin alcohol 330ml x24",
                'precio' => 1980,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Clausthaler Sin alcohol orginal /limon lata 500ml",
                'precio' => 95,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Clausthaler Sin alcohol orginal /limon lata 500ml x24",
                'precio' => 2100,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Corona 330ml x24",
                'precio' => 1680,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Corona 330ml x6",
                'precio' => 420,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Corona 710ml x1",
                'precio' => 160,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Corona 710ml x12",
                'precio' => 1860,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Escudo silver x1",
                'precio' => 60,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Escudo silver x24",
                'precio' => 1300,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Escudo silver x6",
                'precio' => 340,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella damm 500ml x1",
                'precio' => 100,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella damm 500ml x6 + Hielera",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia 0.0 x1",
                'precio' => 70,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia 0.0 x24",
                'precio' => 1450,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia 0.0 x6",
                'precio' => 380,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia 269ml x12 lata",
                'precio' => 499,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia 330ml x24",
                'precio' => 1700,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia 330ml x6",
                'precio' => 430,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella Galicia 473ml x1",
                'precio' => 65,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella Galicia 473ml x12",
                'precio' => 780,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella Galicia 600ml x1",
                'precio' => 100,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella Galicia 600ml x6",
                'precio' => 550,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella Galicia sin gluten x1",
                'precio' => 95,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia sin gluten x24",
                'precio' => 2140,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia sin gluten x6",
                'precio' => 560,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia tostada 0.0 x1",
                'precio' => 75,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Estrella galicia tostada 0.0 x6",
                'precio' => 420,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Faxe s/a 500ml x1",
                'precio' => 95,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Faxe s/a 500ml x24",
                'precio' => 2120,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Faxe s/a 500ml x4",
                'precio' => 545,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 1l x1",
                'precio' => 180,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 330ml x1",
                'precio' => 80,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 330ml x24",
                'precio' => 1750,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 330ml x6",
                'precio' => 450,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 473ml x1",
                'precio' => 105,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 473ml x24",
                'precio' => 2450,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 473ml x6",
                'precio' => 630,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 710ml x1",
                'precio' => 135,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 710ml x24",
                'precio' => 3090,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Heineken 710ml x6",
                'precio' => 790,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial 473ml x1",
                'precio' => 80,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial 473ml x6",
                'precio' => 460,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial Apa e Ipa 473ml x1",
                'precio' => 90,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial Apa e Ipa 473ml x6",
                'precio' => 520,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial Golden 473ml x1",
                'precio' => 80,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial Golden 473ml x6",
                'precio' => 460,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial Stout 473ml x1",
                'precio' => 90,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Imperial Stout 473ml x6",
                'precio' => 520,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Ipanema 500ml x12",
                'precio' => 480,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Itaipava 500ml x12",
                'precio' => 520,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Japi beer",
                'precio' => 180,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Kotayk 600 ml",
                'precio' => 120,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Malta x1",
                'precio' => 75,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Malta x6",
                'precio' => 430,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Norteña 1l x1",
                'precio' => 130,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Norteña 1l x12",
                'precio' => 1480,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Norteña 473 x1",
                'precio' => 60,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Norteña 473 x6",
                'precio' => 340,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza OPA Bier 500ml x1",
                'precio' => 45,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza OPA Bier 500ml x12",
                'precio' => 520,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia 24.7 500ml x1",
                'precio' => 110,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia 24.7 500ml x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia 710ml x1",
                'precio' => 170,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia 710ml x6",
                'precio' => 960,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia Amber 500ml x1",
                'precio' => 110,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia Amber 500ml x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia Bohemian Pilsener 500ml x1",
                'precio' => 110,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia Bohemian Pilsener 500ml x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia Weisse 500ml x1",
                'precio' => 110,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patagonia Weisse 500ml x1",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia 1Lt x1",
                'precio' => 150,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia 1Lt x12",
                'precio' => 1700,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia Dunkel 500ml x1",
                'precio' => 90,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia Porter 500ml x1",
                'precio' => 90,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia Porter Lt x1",
                'precio' => 150,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia Porter Lt x12",
                'precio' => 1740,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia Porter x6",
                'precio' => 540,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Pilsen 1Lt x1",
                'precio' => 135,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Pilsen 1Lt x12",
                'precio' => 1580,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Rebelion 330ml",
                'precio' => 160,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Rebelion 500ml",
                'precio' => 200,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Rocco beer",
                'precio' => 135,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Rocco beer neipa",
                'precio' => 170,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Rocco beer x2 + Vaso Regalo",
                'precio' => 550,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Samba 500ml x1",
                'precio' => 40,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Samba 500ml x12",
                'precio' => 470,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 1lt x1",
                'precio' => 130,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 1lt x6",
                'precio' => 750,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 500ml x1",
                'precio' => 70,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 500ml x24",
                'precio' => 1550,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 500ml x6",
                'precio' => 400,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 710ml x1",
                'precio' => 100,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Schneider 710ml x6",
                'precio' => 570,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Skol 500ml x 12",
                'precio' => 520,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Skol 500ml x1",
                'precio' => 50,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Smith44 330ml x1",
                'precio' => 50,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Smith44 330ml x24",
                'precio' => 1080,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Smith44 330ml x6",
                'precio' => 280,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Stella Artois 1Lt x1",
                'precio' => 165,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Stella Artois 1Lt x12",
                'precio' => 1920,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Stella Artois 500ml x1",
                'precio' => 95,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Stella Artois 500ml x6",
                'precio' => 540,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Stella Artois Noire 500ml x1",
                'precio' => 95,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock 1Lt x1",
                'precio' => 145,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock 1Lt x6",
                'precio' => 840,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock 250ml x24",
                'precio' => 1020,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock 500ml x1",
                'precio' => 75,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock 500ml x24",
                'precio' => 1650,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock 500ml x6",
                'precio' => 420,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock limon 330ml x1",
                'precio' => 70,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock limon 330ml x24",
                'precio' => 1560,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock limon 330ml x6",
                'precio' => 400,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock Sin Alcohol 330ml x1",
                'precio' => 70,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock Sin Alcohol 330ml x24",
                'precio' => 1560,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Superbock Sin Alcohol 330ml x6",
                'precio' => 400,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Valenciana 330ml x1",
                'precio' => 55,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Valenciana 330ml x24",
                'precio' => 1150,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Valenciana 330ml x6",
                'precio' => 300,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Wendeler x1",
                'precio' => 60,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Wendeler x24",
                'precio' => 1340,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Wendeler x6",
                'precio' => 350,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Zillertal 1Lt x1",
                'precio' => 165,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Zillertal 1Lt x12",
                'precio' => 1920,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Zillertal 500ml APA x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Zillertal 500ml IPA x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Zillertal 500ml Scottish x6",
                'precio' => 600,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Cerveza Patricia 500ml x1",
                'precio' => 85,
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Baly x1",
                'precio' => 85,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Baly x6",
                'precio' => 500,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Mangoloco x1",
                'precio' => 95,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Mangoloco x6",
                'precio' => 540,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Original x1",
                'precio' => 95,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Original x6",
                'precio' => 540,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Ultra (blanca) x1",
                'precio' => 95,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Ultra (blanca) x6",
                'precio' => 540,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Redbull x1",
                'precio' => 105,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Redbull x4",
                'precio' => 400,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Redbull x24",
                'precio' => 2340,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Speed 250ml x1",
                'precio' => 80,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Speed 250ml x24",
                'precio' => 1850,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Speed 473ml x1",
                'precio' => 95,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Speed 473ml x12",
                'precio' => 1080,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Ultra Paradise (manzana) x1",
                'precio' => 95,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Ultra Paradise (manzana) x6",
                'precio' => 540,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Ultra Sunrise x1",
                'precio' => 95,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Energizante Monster Ultra Sunrise x6",
                'precio' => 540,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon 187 aperitif 187 ml",
                'precio' => 240,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon 187 brut 187ml",
                'precio' => 240,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon 187 rose",
                'precio' => 240,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon 375ml",
                'precio' => 430,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon Aperitif",
                'precio' => 800,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon Brut",
                'precio' => 800,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon Demi Sec",
                'precio' => 800,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chandon Extra Brut",
                'precio' => 860,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chateau Thierry 473ml x1",
                'precio' => 185,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chateau Thierry 473ml x6",
                'precio' => 1080,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Chateu terry",
                'precio' => 320,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Codorniu clasico",
                'precio' => 1150,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Federico De Alvear Extra Brut",
                'precio' => 480,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Federico De Alvear Extra Dulce",
                'precio' => 480,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Fond de cave",
                'precio' => 550,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Freixenet Carta Nevada",
                'precio' => 730,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Freixenet Cordon Negro",
                'precio' => 770,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Miller 330ml x 1",
                'precio' => 75,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Miller 330ml x 24",
                'precio' => 1700,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Miller 330ml x 6",
                'precio' => 440,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Miller 710ml x 1",
                'precio' => 110,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Miller 710ml x 24",
                'precio' => 2490,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Miller 710ml x 6",
                'precio' => 640,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Mini Freixenet",
                'precio' => 210,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Mumm",
                'precio' => 599,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Mumm Extra brut",
                'precio' => 599,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Pizzorno Espumoso Clasico",
                'precio' => 720,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Pizzorno Espumoso Reserva",
                'precio' => 850,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Pizzorno Espumoso Rose",
                'precio' => 780,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Prosecco Tremendo",
                'precio' => 409,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Prosecco Tremendo 375ml",
                'precio' => 235,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Stagnari Natural Brut",
                'precio' => 550,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Stagnari Natural Extra Brut",
                'precio' => 590,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Stagnari Natural Nature",
                'precio' => 720,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Espumante Stagnari Natural Rose",
                'precio' => 550,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet 1882",
                'precio' => 390,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet 1882 lata",
                'precio' => 110,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet branca 1lt",
                'precio' => 540,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet branca 750ml",
                'precio' => 450,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet menta",
                'precio' => 480,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet Nero53 Berries",
                'precio' => 500,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet Nero53 Citrus",
                'precio' => 500,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet Nero53 Maracuya",
                'precio' => 500,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet Nero53 Premium",
                'precio' => 500,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Fernet Stock",
                'precio' => 550,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Fernet Lata Fernet y Coca",
                'precio' => 110,
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Beefeater",
                'precio' => 800,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Beefeater saborizado",
                'precio' => 800,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Beefeater24",
                'precio' => 1900,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Bombay Bramble",
                'precio' => 915,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Bombay Sapphire",
                'precio' => 915,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Bosford",
                'precio' => 405,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Gin Puerto de indias + Copa",
                'precio' => 990,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Gordons",
                'precio' => 560,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin History",
                'precio' => 250,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Mare",
                'precio' => 2600,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Masters",
                'precio' => 670,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Masters pink",
                'precio' => 720,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Merle",
                'precio' => 620,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Mg",
                'precio' => 778,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Mg Rosa",
                'precio' => 859,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Patrimonio",
                'precio' => 960,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Pinares Botanico",
                'precio' => 1000,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Pinares Dry",
                'precio' => 850,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Pinares Pinky",
                'precio' => 1220,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Sacro",
                'precio' => 980,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Seagers",
                'precio' => 415,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Siberia",
                'precio' => 320,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Tanqueray",
                'precio' => 800,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Tanqueray Rangpur",
                'precio' => 879,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Tanqueray Royale",
                'precio' => 879,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Tanqueray Sevilla",
                'precio' => 879,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Gin Tanqueray Ten",
                'precio' => 1320,
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapa Grapa Piave",
                'precio' => 740,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapa Grapa Pompeya",
                'precio' => 300,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapa Grapa Valdi",
                'precio' => 340,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapa Grapa Valleviejo",
                'precio' => 600,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapamiel Grapamiel Valdi",
                'precio' => 400,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapamiel Grapamiel Vesubio",
                'precio' => 240,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapamiel Rosa Negra café 375ml",
                'precio' => 470,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapamiel Rosa Negra café 750ml",
                'precio' => 780,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapamiel Rosa Negra comun 375ml",
                'precio' => 440,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Grapamiel Rosa Negra comun 750ml",
                'precio' => 690,
                'categoria_id' => 6,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Altmeister",
                'precio' => 700,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Anis Carabanchel",
                'precio' => 310,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Baileys",
                'precio' => 940,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Bianca Villa Limoncello",
                'precio' => 1590,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Brandy Alfonso",
                'precio' => 480,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Granadina Gerardin",
                'precio' => 300,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Granadina Syrup",
                'precio' => 250,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Granadina Syrup",
                'precio' => 820,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Licor Bottega Crema de Limoncino",
                'precio' => 1100,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Licor Bottega Gianduia",
                'precio' => 1100,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Licor Bottega Limoncino",
                'precio' => 890,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Licor Bottega Panna Cotta",
                'precio' => 1100,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Licor Bottega Sambuca",
                'precio' => 890,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Sheridans",
                'precio' => 1200,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Tres Plumas cafe",
                'precio' => 449,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Tres Plumas Chocolate",
                'precio' => 489,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Tres Plumas Chocolate a la menta",
                'precio' => 489,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Tres Plumas Dulce de leche",
                'precio' => 489,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Tres Plumas Huevo",
                'precio' => 489,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Tres plumas Lemoncello",
                'precio' => 449,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Deep frutal",
                'precio' => 409,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Licores Licor coco leon de alvarado",
                'precio' => 270,
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos 500 linea coca",
                'precio' => 60,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca 1l x 1",
                'precio' => 80,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos coca 1l x 12",
                'precio' => 900,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca 2lt retornable x 1",
                'precio' => 120,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca 2lt retornable x 9",
                'precio' => 1050,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola 1.5 x1",
                'precio' => 125,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola 1.5 x6",
                'precio' => 720,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola 2.25 x1",
                'precio' => 150,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola 2.25 x6",
                'precio' => 870,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola 3lts x1",
                'precio' => 190,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola 3lts x6",
                'precio' => 1122,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola light 1.5 x1",
                'precio' => 125,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola light 1.5 x6",
                'precio' => 720,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola light 2.25 x1",
                'precio' => 160,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola light 2.25 x6",
                'precio' => 930,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola light 3LT x1",
                'precio' => 190,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca Cola light 3LT x4",
                'precio' => 740,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola light 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola mini x1",
                'precio' => 30,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola mini x12",
                'precio' => 330,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 1.5 x1",
                'precio' => 125,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 1.5 x6",
                'precio' => 720,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 2.25 x1",
                'precio' => 150,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 2.25 x6",
                'precio' => 870,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 3LT x1",
                'precio' => 190,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 3LT x4",
                'precio' => 740,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola S/A 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola sin azucar mini x1",
                'precio' => 30,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Coca cola sin azucar mini x6",
                'precio' => 180,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Crush 2,25 x1",
                'precio' => 70,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Crush 2,25 x6",
                'precio' => 360,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Fanta 1.5 x1",
                'precio' => 125,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Fanta 1.5 x6",
                'precio' => 720,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Fanta 2,25",
                'precio' => 150,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Fanta 2.25 x6",
                'precio' => 870,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Linea Pepsi 500ml",
                'precio' => 550,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Pomelo Paso de los toros 1.5",
                'precio' => 115,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Pomelo Paso de los toros 1.5 x6",
                'precio' => 660,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Pomelo Paso de los toros 2,25l x1",
                'precio' => 140,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Pomelo Paso de los toros 2,25l x6",
                'precio' => 780,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 1.5 x1",
                'precio' => 105,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 1.5 x6",
                'precio' => 600,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 2,25 x1",
                'precio' => 120,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 2,25 x6",
                'precio' => 680,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 3lt x1",
                'precio' => 150,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 3lt x4",
                'precio' => 560,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Pomelo 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Tonica 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Tonica s/a 1,5 x1",
                'precio' => 105,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Schweppes Tonica s/a 1.5 x6",
                'precio' => 600,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite 1.5 x1",
                'precio' => 125,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite 1.5 x6",
                'precio' => 720,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite 2.25 x1",
                'precio' => 150,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite 2.25 x6",
                'precio' => 870,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite cero 1.5 x1",
                'precio' => 125,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite cero 1.5 x6",
                'precio' => 720,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite cero 2.25 x1",
                'precio' => 150,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite cero 2.25 x6",
                'precio' => 840,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite cero 600ml x12",
                'precio' => 670,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite sin azucar mini x1",
                'precio' => 30,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Sprite sin azucar mini x6",
                'precio' => 160,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Tonica Paso de los toros 1.5",
                'precio' => 115,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Refrescos Tonica Paso de los toros 1.5 x6",
                'precio' => 660,
                'categoria_id' => 8,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Bacardi Blanco",
                'precio' => 590,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Bacardi Dorado",
                'precio' => 650,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Bacardi mojito",
                'precio' => 530,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Bacardi Spiced",
                'precio' => 590,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Barcelo Blanco",
                'precio' => 629,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Barcelo Dark",
                'precio' => 960,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Barcelo Dorado",
                'precio' => 629,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Barcelo Gran añejo",
                'precio' => 849,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Barcelo Gran añejo chico",
                'precio' => 450,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Botran 12 años",
                'precio' => 1300,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Botran 5 años",
                'precio' => 500,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Botran 8 años",
                'precio' => 780,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Capitan Morgan",
                'precio' => 620,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Carabelas Blanco",
                'precio' => 355,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Carabelas Dorado",
                'precio' => 355,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Diplomatico Mantuano",
                'precio' => 1480,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Havana Blanco",
                'precio' => 620,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Havana dorado añejo",
                'precio' => 640,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Malibu",
                'precio' => 709,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Ron Ron Diplomático",
                'precio' => 3050,
                'categoria_id' => 9,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Bruta Artesanal",
                'precio' => 180,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Gijonesa 1.5 lt",
                'precio' => 65,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Gijonesa 330ml",
                'precio' => 60,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Gijonesa Anana Fizz 1.5lt",
                'precio' => 75,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Gijonesa Vidrio 1.5lt",
                'precio' => 170,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Herosa 1.5 lt",
                'precio' => 65,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Santa rosa 473ml x1",
                'precio' => 100,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Santa rosa 473ml x6",
                'precio' => 570,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Santa rosa 910ml",
                'precio' => 180,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Santa Rosa Anana Fizz 750CC",
                'precio' => 190,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Sidra Santa Rosa Durazno Fizz 750CC",
                'precio' => 190,
                'categoria_id' => 10,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Tequila Charro",
                'precio' => 680,
                'categoria_id' => 11,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Tequila José Cuervo",
                'precio' => 900,
                'categoria_id' => 11,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Tequila Sierra",
                'precio' => 870,
                'categoria_id' => 11,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Flores blanco",
                'precio' => 499,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Flores Rojo",
                'precio' => 499,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Flores Rosado",
                'precio' => 499,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Martini bianco",
                'precio' => 435,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Martini extra dry",
                'precio' => 530,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Martini Fiero",
                'precio' => 670,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Martini Rosso",
                'precio' => 435,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Oyama blanco",
                'precio' => 285,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Oyama rojo",
                'precio' => 285,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster 3 litros",
                'precio' => 1790,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster Bianco",
                'precio' => 480,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster Extra Dry",
                'precio' => 480,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster Mandarina",
                'precio' => 680,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster Rose Dry",
                'precio' => 480,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster Rosso",
                'precio' => 480,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Rooster Tinto Dry",
                'precio' => 480,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Vermouth La Fuerza",
                'precio' => 780,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vermouth Vermouth Yzaguirre",
                'precio' => 720,
                'categoria_id' => 12,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Alma Mora Cabernet Sauvignon",
                'precio' => 320,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Alma Mora Malbec",
                'precio' => 320,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Antigal 1 Malbec",
                'precio' => 600,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouchon Reserva Rose",
                'precio' => 350,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Canelon chico merlot",
                'precio' => 1150,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Canelon chico tannat",
                'precio' => 1150,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Merlot 2020",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Pan de azucar Merlot 2019",
                'precio' => 1500,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Pan de azucar pinot noir 2019",
                'precio' => 1500,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Pinot noir 2020",
                'precio' => 1500,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Tannat 2020",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bouza Tempranillo Tannat 2022",
                'precio' => 870,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bresesti corte 1",
                'precio' => 680,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bresesti corte 2",
                'precio' => 680,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bresesti corte 3",
                'precio' => 680,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cafayates Dulce",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Casa de Herrero Cabernet Franc",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Casa de Herrero Malbec",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Casa de Herrero Rose Pinot Noir",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Concha y Toro Casillero del Diablo Cabernet",
                'precio' => 499,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Concha y Toro Casillero del Diablo Carmenere",
                'precio' => 499,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Concha y Toro Casillero del Diablo Red Blend",
                'precio' => 280,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Concha y Toro Reservado Carmenere",
                'precio' => 280,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Concha y Toro Reservado Malbec",
                'precio' => 280,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Concha y Toro Reservado Merlot",
                'precio' => 280,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cosecha Tardia Blanco",
                'precio' => 300,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cosecha Tardia Rosado",
                'precio' => 300,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cuchillo de Palo Cabernet Franc",
                'precio' => 300,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cuchillo de Palo Malbec",
                'precio' => 1300,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cuna de Piedra Cabernet",
                'precio' => 460,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cuna de Piedra Malbec",
                'precio' => 460,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Cuna de Piedra Merlot",
                'precio' => 460,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Dada Vainilla",
                'precio' => 350,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Cabernet Sauvignon Reserve",
                'precio' => 399,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Cabernet Sauvignon Roble",
                'precio' => 249,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Chardonay Reserve",
                'precio' => 249,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Merlot Roble",
                'precio' => 249,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Pinot Noir Premium",
                'precio' => 599,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Syrah",
                'precio' => 249,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos De Lucca Tannat Roble",
                'precio' => 249,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 187ml blanco ",
                'precio' => 120,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 187ml Cabernet merlot",
                'precio' => 120,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 187ml malbec marcelan",
                'precio' => 120,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 187ml tannat merlot",
                'precio' => 120,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 375ml Cabernet Sauvignon",
                'precio' => 199,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 375ml Chardonay",
                'precio' => 199,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual 375ml Tannat",
                'precio' => 199,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don pascual Bivarietal Malbec Marselan",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don pascual Bivarietal Tannat Merlot",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual Blanc de blancs",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual Blanc de noirs",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don pascual Coastal Cabernet",
                'precio' => 360,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don pascual Coastal Dark Blend",
                'precio' => 299,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual Varietal Cabernet",
                'precio' => 270,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Pascual Varietal Tannat",
                'precio' => 270,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don prospero Cabernet Sauvignon",
                'precio' => 509,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don prospero Sauvignon blanc",
                'precio' => 409,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don prospero Tannat-Malbec",
                'precio' => 409,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don prospero Tannat-Merlot",
                'precio' => 409,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Don Valentin",
                'precio' => 290,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Faisan 1l",
                'precio' => 110,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Faisan 3lt",
                'precio' => 320,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Faisan Bib 5lts ",
                'precio' => 480,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Faisan botella 700ml",
                'precio' => 140,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Familia Deicas Albariño",
                'precio' => 540,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Federico de Alvear Blanco Dulce",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Federico de Alvear Rosé Dulce",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Federico de Alvear Tinto RedBlend",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Federico de Alvear White Blend",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Finca Las moras Barrel Select Cabernet Sauvignon",
                'precio' => 400,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Finca Las moras Barrel Select Malbec",
                'precio' => 400,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Finca Las moras Cabernet Sauvignon",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Finca Las moras Malbec",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Finca Las moras Syrah",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Cabernet Sauvignon de corte",
                'precio' => 450,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon cosecha tardía 500ml",
                'precio' => 1500,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzón Marselan Reserva",
                'precio' => 720,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Petit Clos con estuche",
                'precio' => 2750,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Pinot Noir Rose",
                'precio' => 700,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Sauvignon Blanc de corte",
                'precio' => 450,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Single Vineyard Petit Verdot",
                'precio' => 1250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Single Vineyard Tannat",
                'precio' => 1250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzon Tannat de corte",
                'precio' => 450,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Garzón Tannat Reserva",
                'precio' => 720,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Hacienda San jose",
                'precio' => 240,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La Posta Armando Bonarda",
                'precio' => 930,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La Posta Blanco",
                'precio' => 790,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La Posta Fazzio Malbec",
                'precio' => 930,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La posta Glorieta Pinot Noir",
                'precio' => 930,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La Posta Paulucci Malbec",
                'precio' => 930,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La posta Pizzella Malbec",
                'precio' => 930,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos La Posta Tinto Red Blend",
                'precio' => 790,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Las moras Sauvignon Blanco",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Luca Syrah Double Select",
                'precio' => 1700,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Luigi Bosca Cabernet",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Luigi Bosca Malbec",
                'precio' => 850,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Luigi Bosca Blanco",
                'precio' => 790,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Mayuscula Marselan",
                'precio' => 410,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Mayuscula Tannat Mac. Carbónica",
                'precio' => 410,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Medio y Medio",
                'precio' => 150,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Medio y Medio Pizzorno ",
                'precio' => 315,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Medio y Medio x6",
                'precio' => 780,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Mia Blanco",
                'precio' => 800,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Mia Rosado",
                'precio' => 800,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos New age",
                'precio' => 280,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Novecento Cabernet Sauvignon",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Novecento Chardonay",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Novecento Malbec",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Novecento NTVG Marselan",
                'precio' => 300,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Novecento NTVG Pinot noir rosado",
                'precio' => 300,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Ojo de buen cubero Malbec",
                'precio' => 720,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Oveja negra ",
                'precio' => 450,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Pizzorno Merlot Tannat",
                'precio' => 630,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Pizzorno Pinot Noire",
                'precio' => 630,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Pizzorno Sauvignon blanc reserva",
                'precio' => 589,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Pizzorno Select Blend",
                'precio' => 889,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Pizzorno Tannat Reserva",
                'precio' => 765,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Profecía Cabernet Sauvignon",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Profecía Merlot Rosé",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Profecía Sauvignon Blanc",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Profecía Tannat",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Rebel Blanco",
                'precio' => 350,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Rebel Rosé",
                'precio' => 380,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Rebel Tannat",
                'precio' => 280,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Rooster 3 litros",
                'precio' => 215,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Roses BIB 5LTS",
                'precio' => 540,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Roses Tetra 1 Lt",
                'precio' => 120,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Roses Tetra 500ml",
                'precio' => 72,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Saint Felicien",
                'precio' => 790,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Santa Julia Chardonnay",
                'precio' => 485,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Santa Julia Chenin Dulce Natural",
                'precio' => 485,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Santa Julia Malbec",
                'precio' => 485,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Santa Julia Reserva Malbec",
                'precio' => 745,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Blue",
                'precio' => 350,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Blush",
                'precio' => 350,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Cabernet 1x1",
                'precio' => 550,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Cabernet Premier",
                'precio' => 340,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Dayman",
                'precio' => 970,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Dinastía Tinto",
                'precio' => 1380,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Gewurztraminer",
                'precio' => 375,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Gran Guarda Tannat Cabernet",
                'precio' => 360,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari La Puebla Chardonnay",
                'precio' => 360,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari La Puebla Marselan",
                'precio' => 360,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari La Puebla Syrah",
                'precio' => 360,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari para compartir 2lts cabernet y tannat",
                'precio' => 360,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Pura Sangre",
                'precio' => 410,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Tannat Añejo 2lts",
                'precio' => 380,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Tannat Añejo 3lts",
                'precio' => 540,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Tannat Premier",
                'precio' => 340,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Stagnari Tannat Viejo",
                'precio' => 550,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Tio Pepe Jerez",
                'precio' => 1000,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Trapiche Cabernet",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Trapiche Malbec",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Trapiche Reserva cabernet",
                'precio' => 450,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Trapiche Reserva malbec",
                'precio' => 450,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Trapiche Sauvignon Blanc",
                'precio' => 250,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Cabernet Franc",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Cabernet Roble",
                'precio' => 240,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Cabernet Sauvignon",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Chardonnay",
                'precio' => 240,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa con copa",
                'precio' => 470,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Sauvignon Blanc",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Tannat",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Tannat Merlot",
                'precio' => 200,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Traversa Tannat Roble",
                'precio' => 240,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Vino de pico Santa Rosa",
                'precio' => 120,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Viña las brujas Cabernet",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Viña las brujas Malbec",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Viña las moras Sauvignon Blanc",
                'precio' => 295,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Bertolini Suavignon blanc",
                'precio' => 299,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Quinta Santero Marselan Roble",
                'precio' => 420,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Quinta Santero Tanat",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Quinta Santero Tinto Marselan",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Santa Rosa 473ml x1",
                'precio' => 110,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Santo Rosa 473ml x6",
                'precio' => 600,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Zenit Blanco lorena",
                'precio' => 290,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Zenit Frutos del bosque",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Zenit lata 350 ml",
                'precio' => 150,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Zenit mango",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vinos Zenit Maracuya",
                'precio' => 260,
                'categoria_id' => 13,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Ciroc Peach",
                'precio' => 1520,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Ciroc Red Berry",
                'precio' => 1520,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Eristoff",
                'precio' => 460,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka History",
                'precio' => 200,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka PL",
                'precio' => 470,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Sacro",
                'precio' => 830,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Siberia + 1 energizante",
                'precio' => 390,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Smirnoff",
                'precio' => 500,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Vodka 1906",
                'precio' => 320,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Vodka Wyborowa",
                'precio' => 449,
                'categoria_id' => 14,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky 100 Pipers",
                'precio' => 670,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Akashi Red",
                'precio' => 3999,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Ballantines",
                'precio' => 890,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Ballantines 12 años",
                'precio' => 1750,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Black and White",
                'precio' => 640,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Buchanans",
                'precio' => 2150,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Cattos",
                'precio' => 850,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Chivas",
                'precio' => 1960,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Sir Edwards",
                'precio' => 590,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Chivas 18 años",
                'precio' => 5199,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Criadores",
                'precio' => 599,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Dunbar",
                'precio' => 489,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Glendfiddich 12",
                'precio' => 3450,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Glendfiddich 15",
                'precio' => 7199,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Grants",
                'precio' => 780,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Gregson",
                'precio' => 420,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Hallmark",
                'precio' => 399,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jack Daniels",
                'precio' => 1990,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jack Daniels Fire",
                'precio' => 1990,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jack Daniels Honey",
                'precio' => 1990,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jack Daniels Ed Especial Guitarra",
                'precio' => 2800,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jameson",
                'precio' => 1149,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jameson Black Barrel",
                'precio' => 1499,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jim beam honey",
                'precio' => 1350,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Jim beam white",
                'precio' => 1350,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Black",
                'precio' => 1990,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Blue",
                'precio' => 15999,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie walker collection x4",
                'precio' => 4699,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Double Black",
                'precio' => 2400,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Gold 18 años",
                'precio' => 5600,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Gold Reserve",
                'precio' => 3300,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Green",
                'precio' => 3700,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Johnnie Walker Red",
                'precio' => 950,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Mac Arthur's",
                'precio' => 500,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Old parr",
                'precio' => 1599,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Old Times",
                'precio' => 500,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Sandy Mac",
                'precio' => 910,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Something Special",
                'precio' => 799,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Speyburn 15 años",
                'precio' => 6599,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Speyburn Bradan",
                'precio' => 2899,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Vat69",
                'precio' => 620,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky White Horse",
                'precio' => 780,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky William Lawson",
                'precio' => 610,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'nombre' => "Whisky Ye Monks",
                'precio' => 615,
                'categoria_id' => 15,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        ];

        DB::table('productos')->insert($datos);
    }
}
