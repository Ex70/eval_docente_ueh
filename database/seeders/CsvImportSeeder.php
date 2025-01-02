<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class CsvImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path() . '/csv/ejemplo2.csv', 'r');
        $csv->setDelimiter(';');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            DB::table('cuestionarios')->insert([
                'marca_temporal' => utf8_encode($record['marca_temporal']),
                'correo' => utf8_encode($record['correo']),
                'docente' => utf8_encode($record['docente']),
                'pregunta1' => utf8_encode($record['pregunta1']),
                'pregunta2' => utf8_encode($record['pregunta2']),
                'pregunta3' => utf8_encode($record['pregunta3']),
                'pregunta4' => utf8_encode($record['pregunta4']),
                'pregunta5' => utf8_encode($record['pregunta5']),
                'pregunta6' => utf8_encode($record['pregunta6']),
                'pregunta7' => utf8_encode($record['pregunta7']),
                'pregunta8' => utf8_encode($record['pregunta8']),
                'pregunta9' => utf8_encode($record['pregunta9']),
                'pregunta10' => utf8_encode($record['pregunta10']),
                'pregunta11' => utf8_encode($record['pregunta11']),
                'pregunta12' => utf8_encode($record['pregunta12'])
            ]);
        }
    }
}
