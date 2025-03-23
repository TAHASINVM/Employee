<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $language_datas = [
            'english', 'arabic', 'hindi', 'malayalam'
        ];

        foreach ($language_datas as $language) {
            Language::insert([
                'language_name' => $language
            ]);
        }
    }
}
