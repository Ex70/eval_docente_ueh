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
        $csv = Reader::createFromPath(database_path() . '/csv/ejemplo.csv', 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            DB::table('cuestionarios')->insert([
                'col1' => utf8_encode($record['col1']),
                'col2' => utf8_encode($record['col2']),
                'col3' => utf8_encode($record['col3']),
                'col4' => utf8_encode($record['col4']),
                'col5' => utf8_encode($record['col5']),
                'col6' => utf8_encode($record['col6']),
                'col7' => utf8_encode($record['col7']),
                'col8' => utf8_encode($record['col8']),
                'col9' => utf8_encode($record['col9']),
                'col10' => utf8_encode($record['col10']),
                'col11' => utf8_encode($record['col11']),
                'col12' => utf8_encode($record['col12']),
                'col13' => utf8_encode($record['col13']),
                'col14' => utf8_encode($record['col14']),
                'col15' => utf8_encode($record['col15']),
                'col16' => utf8_encode($record['col16'])
            ]);
        }
    }
}
