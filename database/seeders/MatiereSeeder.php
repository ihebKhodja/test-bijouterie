<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            'Gold',
            'Silver',
            'Platinum',
            'Diamond',
            'Pearl'
        ];

         foreach ($materials as $material) {
            DB::table('matieres')->insert([
                'name' => $material
            ]);
    }
}
}
