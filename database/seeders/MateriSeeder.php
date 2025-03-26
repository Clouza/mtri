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
            'pertanyaan' => 'Apa Itu Kejang Demam?',
            'jawaban' => "Kejang demam adalah kejang yang terjadi akibat demam tinggi pada anak tanpa adanya gangguan di otak. Biasanya terjadi pada anak usia 6 bulan hingga 5 tahun, ketika suhu tubuh naik lebih dari 38°C."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa Penyebab Kejang Demam?',
            'jawaban' => "Penyebab utama kejang demam meliputi:\n
                        a.	Infeksi virus, seperti flu atau infeksi saluran pernapasan atas.\n
                        b.	Sistem saraf anak yang belum matang.\n
                        c.	Faktor keturunan dari keluarga yang pernah mengalami kejang demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa Saja Tanda dan Gejala Kejang Demam?',
            'jawaban' => "a. Tubuh anak kaku dan bergetar.\n
                        b.	Mata terbelalak atau berputar\n
                        c.	Anak kehilangan kesadaran beberapa detik hingga menit.\n
                        d.	Wajah anak bisa tampak kebiruan akibat gangguan pernapasan."
        ]);

        Materi::create([
            'pertanyaan' => 'Langkah Pertolongan Pertama Saat Anak Mengalami Kejang Demam',
            'jawaban' => "a. Tetap Tenang! Jangan panik agar bisa menangani situasi dengan baik\n
                        b.	Posisikan anak miring untuk mencegah tersedak.\n
                        c.	Longgarkan pakaian terutama di sekitar leher untuk membantu pernapasan.\n
                        d.	Jangan memasukkan benda ke dalam mulut anak! Ini dapat membahayakan saluran napasnya.\n
                        e.	Amati durasi kejang. Jika berlangsung lebih dari 5 menit, segera bawa anak ke fasilitas kesehatan terdekat.\n
                        f.	Setelah kejang berhenti, bantu turunkan suhu tubuh anak dengan:\n
                        1) Mengompres tubuh dengan air hangat.\n
                        2) Memberikan obat penurun panas sesuai dosis."
        ]);
    }
}
