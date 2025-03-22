<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::create([
            'judul' => 'Panduan Kejang Demam Dasar',
            'pdf_url' => 'https://contoh-domain.com/pdf/panduan-kejang-demam.pdf'
        ]);

        Materi::create([
            'judul' => 'Penanganan Kejang Demam Lanjutan',
            'pdf_url' => 'https://contoh-domain.com/pdf/penanganan-lanjutan.pdf'
        ]);
    }
}
