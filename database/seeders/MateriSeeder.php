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
            'pertanyaan' => 'Demam tinggi dapat menyebabkan kejang pada anak.',
            'jawaban' => "Kejang demam biasanya terjadi ketika suhu tubuh anak naik secara cepat dan dapat menyebabkan demam, kejang ini umumnya terjadi pada anak usia 6 bulan hingga 5 tahun, dan paling sering muncul saat suhu tubuh melebihi 38°C. Anak yang memiliki riwayat keluarga dengan kejang demam juga cenderung lebih rentan mengalaminya. Jadi, demam tinggi memang bisa menjadi pemicu kejang demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Kejang demam paling sering terjadi pada bayi dan balita, namun pada kasus yang sangat jarang, kejang juga dapat terjadi di luar rentang usia tersebut.',
            'jawaban' => "Kondisi ini lebih umum dialami oleh anak-anak usia 6 bulan hingga 5 tahun karena perkembangan sistem saraf mereka yang masih belum matang, tetapi tidak sepenuhnya menutup kemungkinan kejang demam terjadi pada usia lebih tua atau lebih muda, tergantung pada faktor risiko individu."
        ]);

        Materi::create([
            'pertanyaan' => 'Serangan kejang dapat terjadi lebih dari satu kali selama anak mengalami demam.',
            'jawaban' => "Hal ini tergantung pada penyebab demam dan respons tubuh anak terhadap kenaikan suhu."
        ]);

        Materi::create([
            'pertanyaan' => 'Anak yang mengalami kejang demam sebaiknya segera dibawa ke rumah sakit untuk mendapatkan penanganan yang tepat.',
            'jawaban' => "Meskipun sebagian besar kejang demam bersifat ringan dan berhenti dengan sendirinya, pemeriksaan medis penting untuk memastikan tidak ada penyebab lain yang lebih serius dan untuk mencegah komplikasi.Kejang demam bisa dicegah agar tidak kambuh kembali. Pencegahan dapat dilakukan dengan pemantauan suhu tubuh dan pemberian obat penurun panas secara tepat."
        ]);

        Materi::create([
            'pertanyaan' => 'Kejang demam dapat dicegah agar tidak kambuh kembali dengan pemantauan suhu tubuh secara rutin dan pemberian obat penurun panas saat anak mulai demam.',
            'jawaban' => "Dalam beberapa kasus, dokter juga dapat meresepkan obat pencegah kejang jika anak memiliki riwayat kejang demam berulang. Pencegahan dini sangat penting untuk mengurangi risiko kekambuhan."
        ]);

        Materi::create([
            'pertanyaan' => 'Mengukur suhu tubuh anak saat demam sangat penting untuk mengantisipasi terjadinya kejang demam.',
            'jawaban' => "Pengukuran yang akurat membantu dalam mengambil tindakan pencegahan lebih dini."
        ]);

        Materi::create([
            'pertanyaan' => 'Kejang demam biasanya timbul ketika suhu tubuh anak mencapai lebih dari 38°C.',
            'jawaban' => "Maka dari itu, penting untuk mengukur suhu tubuh secara berkala saat anak demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Mengukur suhu tubuh anak secara rutin saat demam sangat penting untuk mengantisipasi terjadinya kejang demam.',
            'jawaban' => "Pemantauan suhu yang akurat membantu orang tua mengambil tindakan cepat, seperti memberikan obat penurun panas, sebelum suhu tubuh naik terlalu tinggi dan memicu kejang."
        ]);

        Materi::create([
            'pertanyaan' => 'Anak yang mengalami kejang demam mungkin perlu diberikan obat lain selain obat penurun panas, seperti obat anti kejang, tergantung pada kondisi dan anjuran dokter.',
            'jawaban' => "Pemberian obat tambahan biasanya dipertimbangkan jika anak mengalami kejang yang berlangsung lama, berulang, atau memiliki riwayat kejang kompleks.Kejang demam merupakan kondisi serius yang harus mendapatkan penanganan segera."
        ]);

        Materi::create([
            'pertanyaan' => 'Kejang demam merupakan kondisi yang serius dan harus mendapatkan penanganan secepatnya untuk mencegah komplikasi lebih lanjut.',
            'jawaban' => "Meskipun sebagian besar kejang demam bersifat ringan dan tidak berbahaya, penanganan yang cepat dan tepat tetap penting, terutama jika kejang berlangsung lama atau terjadi berulang."
        ]);

        Materi::create([
            'pertanyaan' => 'Cara paling tepat untuk menilai apakah anak mengalami demam adalah dengan mengukur suhu tubuh menggunakan termometer.',
            'jawaban' => "Meraba kening atau membandingkan suhu tubuh anak dengan orang lain, seperti ibunya, tidak memberikan hasil yang akurat dan sebaiknya tidak dijadikan acuan utama dalam menilai demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Tindakan yang tepat saat anak mengalami demam.',
            'jawaban' => "Tindakan yang tepat adalah memberikan obat penurun panas, mengompres dengan air dingin, serta memastikan anak cukup minum air putih.
Kombinasi langkah-langkah tersebut membantu menurunkan suhu tubuh dan menjaga anak tetap terhidrasi, sehingga dapat mencegah komplikasi seperti kejang demam."
        ]);

        Materi::create([
            'pertanyaan' => 'Yang harus di lakukan ibu saat anak mengalami kejang demam.',
            'jawaban' => "Saat anak mengalami kejang demam, tindakan yang tepat adalah memberikan obat anti kejang jika tersedia dan segera membawa anak ke rumah sakit atau dokter terdekat. Penanganan cepat sangat penting untuk memastikan kejang berhenti dan anak mendapatkan pemeriksaan medis lanjutan guna mencegah risiko berulang atau komplikasi."
        ]);

        Materi::create([
            'pertanyaan' => 'Yang harus di lakukan ibu untuk mencegah kambuhnya kejang saat anak demam.',
            'jawaban' => "Orang tua sebaiknya segera menurunkan panas tubuh anak dan mencari tahu penyebab demam tersebut. Pemberian obat anti kejang tidak selalu diperlukan dan hanya diberikan jika direkomendasikan oleh dokter, terutama pada kasus kejang berulang."
        ]);

        Materi::create([
            'pertanyaan' => 'Yang harus ibu lakukan jika anak masih mengalami kejang meskipun sudah diberikan obat penurun panas dan obat anti kejang.',
            'jawaban' => "Segera membawa anak ke rumah sakit atau dokter terdekat adalah langkah yang tepat, Menunggu kejang berhenti dengan sendirinya dapat berisiko, sehingga penanganan medis segera sangat penting untuk memastikan kondisi anak tidak memburuk."
        ]);
    }
}
