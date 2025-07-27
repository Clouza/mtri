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
            'pertanyaan' => 'Posisi Anak Saat Kejang',
            'jawaban' => "Penjelasan tentang posisi yang aman untuk anak saat kejang (posisi miring untuk mencegah aspirasi)."
        ]);

        Materi::create([
            'pertanyaan' => 'Hal yang Tidak Boleh Dilakukan Saat Kejang',
            'jawaban' => "Bahaya menahan gerakan anak saat kejang. <br> Bahaya memasukkan benda ke dalam mulut anak."
        ]);

        Materi::create([
            'pertanyaan' => 'Langkah Pertama yang Harus Dilakukan',
            'jawaban' => "Pentingnya tetap tenang. <br> Mencatat durasi kejang."
        ]);

        Materi::create([
            'pertanyaan' => 'Tindakan Setelah Kejang Berhenti',
            'jawaban' => "Penggunaan kompres hangat (bukan dingin) untuk menurunkan demam. <br> Pemberian obat penurun panas seperti paracetamol setelah kejang berhenti."
        ]);

        Materi::create([
            'pertanyaan' => 'Obat Kejang di Rumah',
            'jawaban' => "Penggunaan diazepam rektal bila diresepkan oleh dokter. <br> Edukasi penggunaan yang aman dan indikasinya."
        ]);

        Materi::create([
            'pertanyaan' => 'Kapan Harus Segera Dibawa ke Fasilitas Kesehatan',
            'jawaban' => "Kejang berlangsung >5 menit. <br> Kejang pertama kali. <br> Kesadaran anak tidak kembali setelah kejang."
        ]);

        Materi::create([
            'pertanyaan' => 'Kejang demam biasanya timbul ketika suhu tubuh anak mencapai lebih dari 38°C.',
            'jawaban' => "Maka dari itu, penting untuk mengukur suhu tubuh secara berkala saat anak demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Mitos dan Fakta Penanganan Kejang',
            'jawaban' => "Klarifikasi tentang mitos menggosokkan bawang merah/minyak kayu putih untuk menghentikan kejang."
        ]);

        Materi::create([
            'pertanyaan' => 'Tindakan Berbahaya Saat Anak Kejang',
            'jawaban' => "Larangan memberi minum/makanan saat kejang karena risiko aspirasi."
        ]);

        Materi::create([
            'pertanyaan' => 'Pemantauan Anak yang Pernah Kejang Demam',
            'jawaban' => "Edukasi pentingnya pemantauan suhu anak yang pernah mengalami kejang demam."
        ]);
    }
}
