<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'name'=> "White",
            'hexadecimal' => "#ffffff",
            'nameCatCast' => "Blanc/Blanco"
        ]);

        Color::create([
            'name'=> "Black",
            'hexadecimal' => "#000000",
            'nameCatCast' => "Negre/Negro"
        ]);

        Color::create([
            'name'=> "Blue",
            'hexadecimal' => "#2b43f5",
            'nameCatCast' => "Blau/Azul"
        ]);

        Color::create([
            'name'=> "Red",
            'hexadecimal' => "#f90e0e",
            'nameCatCast' => "Vermell/Rojo"
        ]);
    }
}
