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
            'pertanyaan' => 'Apa yang dimaksud dengan kejang demam?',
            'jawaban' => "Kejang demam adalah bangkitan kejang yang terjadi saat suhu tubuh anak meningkat (di atas 38ºC), biasanya akibat infeksi, tanpa adanya gangguan pada otak. Umumnya terjadi pada anak usia 6 bulan hingga 5 tahun. Sekitar 3% anak di bawah usia 5 tahun pernah mengalaminya."
        ]);

        Materi::create([
            'pertanyaan' => 'Anak usia berapa saja yang rentan mengalami kejang demam?',
            'jawaban' => "Kejang demam paling sering terjadi pada anak usia 6 bulan hingga 5 tahun. Beberapa definisi dari organisasi medis menyebut usia mulai dari 1 bulan hingga 5 tahun."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa penyebab kejang demam?',
            'jawaban' => "Penyebabnya multifaktorial, meliputi:<br/>
                        - Infeksi virus (90% kasus), seperti Rotavirus, Parainfluenza, dll.<br/>
                        - Infeksi saluran pernapasan atas, otitis media, roseola, infeksi saluran kemih, saluran cerna.<br/>
                        - Respon otak yang belum matang terhadap demam.<br/>
                        - Faktor genetik dan lingkungan."
        ]);

        Materi::create([
            'pertanyaan' => 'Bagaimana kejang demam bisa terjadi pada anak?',
            'jawaban' => "Demam menyebabkan peningkatan metabolisme dan kebutuhan oksigen otak. Suhu tinggi dapat menyebabkan pelepasan muatan listrik abnormal di otak akibat gangguan keseimbangan ion sel saraf. Hal ini memicu kejang. Ambang kejang tiap anak berbeda, ada yang kejang di suhu 38ºC, ada yang baru kejang di atas 40ºC."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa tanda-tanda anak mengalami kejang demam?',
            'jawaban' => "- Suhu tubuh tinggi (bisa mencapai 39°C).<br/>
                        - Wajah pucat atau kebiruan.<br/>
                        - Mata melirik atau berputar.<br/>
                        - Tubuh kaku atau kejang hebat.<br/>
                        - Anak bisa kehilangan kesadaran.<br/>
                        - Napas tersengal atau terganggu."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa yang harus dilakukan saat anak kejang demam?',
            'jawaban' => "1. Tetap tenang.<br/>
                        2. Longgarkan pakaian, terutama di leher.<br/>
                        3. Miringkan tubuh anak untuk mencegah tersedak muntah.<br/>
                        4. Jauhkan benda tajam atau keras dari sekitar anak.<br/>
                        5. Jangan memasukkan apa pun ke mulut anak.<br/>
                        6. Catat durasi dan jenis kejang.<br/>
                        7. Jika kejang lebih dari 5 menit, segera bawa ke fasilitas kesehatan.<br/>
                        8. Berikan diazepam rektal hanya jika sudah dianjurkan dokter dan kejang masih berlangsung >5 menit."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa yang harus dilakukan saat anak demam agar tidak kejang?',
            'jawaban' => "- Berikan antipiretik (penurun panas) seperti paracetamol.<br/>
                        - Kompres dengan air hangat di dahi, ketiak, dan lipatan paha.<br/>
                        - Jangan membungkus anak dengan pakaian/sarung tebal.<br/>
                        - Beri cairan cukup: air, susu, jus, teh, dll.<br/>
                        - Jaga suhu ruangan tetap sejuk dan nyaman."
        ]);

        Materi::create([
            'pertanyaan' => 'Kapan saya harus membawa anak ke dokter?',
            'jawaban' => "- Jika kejang berlangsung lebih dari 5 menit.<br/>
                        - Jika anak mengalami kesulitan bernapas.<br/>
                        - Jika kejang terjadi untuk pertama kali.<br/>
                        - Jika anak sulit sadar setelah kejang.<br/>
                        - Jika kejang berulang dalam waktu singkat."
        ]);

        Materi::create([
            'pertanyaan' => 'Apa saja hal yang tidak boleh dilakukan saat anak kejang?',
            'jawaban' => "- Jangan panik atau berteriak.<br/>
                        - Jangan memasukkan sendok/obat ke mulut saat kejang.<br/>
                        - Jangan menahan tubuh anak agar berhenti kejang secara paksa.<br/>
                        - Jangan memandikan dengan air dingin (bisa memicu menggigil)."
        ]);

        Materi::create([
            'pertanyaan' => 'Mengapa penting mengetahui penanganan kejang demam?',
            'jawaban' => "Dengan pengetahuan yang benar:<br/>
                        - Orang tua lebih siap menangani kejang.<br/>
                        - Menghindari tindakan salah yang membahayakan.<br/>
                        - Mampu membedakan kondisi darurat.<br/>
                        - Mengurangi kecemasan dan panik.<br/>
                        - Mencegah komplikasi jangka panjang."
        ]);

        Materi::create([
            'pertanyaan' => 'Apakah ada cara modern untuk belajar tentang kejang demam?',
            'jawaban' => "Ya! Chatbot edukatif bisa digunakan untuk:<br/>
                        - Memberi panduan langkah-langkah pertolongan.<br/>
                        - Memberikan pengingat minum obat.<br/>
                        - Menjawab pertanyaan seputar kejang demam kapan pun.<br/>
                        - Membantu orang tua merasa lebih percaya diri."
        ]);
    }
}
