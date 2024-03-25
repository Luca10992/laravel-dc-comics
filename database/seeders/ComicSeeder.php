<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(__DIR__ . "/../csv/comics.csv","r");

        $first_line = true;
        while (!feof($file)) {
            $comic_data = fgetcsv($file);
            if (!$first_line) {
                $comic = new Comic;

                $comic->title = $comic_data[0];
                $comic->description = $comic_data[1];
                $comic->thumb = $comic_data[2];
                $comic->price = $comic_data[3];
                $comic->series = $comic_data[4];
                $comic->sale_date = $comic_data[5];
                $comic->type = $comic_data[6];
                
                $comic->save();
            }

            $first_line = false;
        }
    }
}