<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Rings',
            'Earrings',
            'Necklaces',
            'Bracelets',
            'Watches',
            'Pendants',
            'Brooches',
            'Charms',
            'Cufflinks',
            'Anklets'
        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
        ]);
    }
}
}