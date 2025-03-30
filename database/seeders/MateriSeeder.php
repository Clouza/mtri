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
            'jawaban' => "Penyebab utama kejang demam meliputi:<br/>
                        a.	Infeksi virus, seperti flu atau infeksi saluran pernapasan atas.<br/>
                        b.	Sistem saraf anak yang belum matang.<br/>
                        c.	Faktor keturunan dari keluarga yang pernah mengalami kejang demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa Saja Tanda dan Gejala Kejang Demam?',
            'jawaban' => "a. Tubuh anak kaku dan bergetar.<br/>
                        b.	Mata terbelalak atau berputar<br/>
                        c.	Anak kehilangan kesadaran beberapa detik hingga menit.<br/>
                        d.	Wajah anak bisa tampak kebiruan akibat gangguan pernapasan."
        ]);

        Materi::create([
            'pertanyaan' => 'Langkah Pertolongan Pertama Saat Anak Mengalami Kejang Demam',
            'jawaban' => "a. Tetap Tenang! Jangan panik agar bisa menangani situasi dengan baik<br/>
                        b.	Posisikan anak miring untuk mencegah tersedak.<br/>
                        c.	Longgarkan pakaian terutama di sekitar leher untuk membantu pernapasan.<br/>
                        d.	Jangan memasukkan benda ke dalam mulut anak! Ini dapat membahayakan saluran napasnya.<br/>
                        e.	Amati durasi kejang. Jika berlangsung lebih dari 5 menit, segera bawa anak ke fasilitas kesehatan terdekat.<br/>
                        f.	Setelah kejang berhenti, bantu turunkan suhu tubuh anak dengan:<br/>
                        1) Mengompres tubuh dengan air hangat.<br/>
                        2) Memberikan obat penurun panas sesuai dosis."
        ]);
    }
}
