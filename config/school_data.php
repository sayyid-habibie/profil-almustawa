<?php

/**
 * Konfigurasi Data Sekolah
 *
 * File ini adalah satu-satunya sumber data untuk seluruh landing page.
 * Edit nilai-nilai di bawah ini untuk memperbarui konten halaman.
 *
 * Tidak ada database — semua data disimpan sebagai array PHP statis.
 */

$school = [

    // =========================================================================
    // Identitas Utama
    // =========================================================================
    'name'       => 'MI AL Mustawa',
    'tagline'    => 'Unggul dalam Prestasi, Berkarakter Mulia, Berwawasan Global',
    'logo'       => 'assets/images/logo.png',
    'hero_image' => 'assets/images/hero.png',

    // =========================================================================
    // Pimpinan Sekolah
    // =========================================================================
    'leaders' => [
        [
            'role'  => 'Ketua Yayasan',
            'name'  => 'KH Ahmad Fuadi',
            'photo' => 'assets/images/leaders/abi.jpeg',
        ],
        [
            'role'  => 'Kepala Sekolah',
            'name'  => 'Rusmiati, S.Ag',
            'photo' => 'assets/images/leaders/bu-rus.jpeg',
        ],
    ],

    // =========================================================================
    // Kontak
    // =========================================================================
    'email'      => 'info@sman1nusantara.sch.id',
    'phone'      => '+62 882-9338-8849',
    'address'    => 'Jl. Atma Asnawi Rt.02/Rw.10 Desa Gunung Sindur, Kecamatan Gunung Sindur, Kabupaten Bogor. 16340',
    'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.075716046414!2d106.6608624505527!3d-6.384229167845617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e42705ba66ad%3A0x84fe7482b87e4895!2smasjid%20baitur%20rahim!5e0!3m2!1sen!2sid!4v1778036788590!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

    // =========================================================================
    // Profil Sekolah
    // =========================================================================
'profile' => [
    'history' => [
            'Madrasah Ibtidaiyah (MI) Al-Mustawa didirikan pada tahun 2017 sebagai upaya menyediakan pendidikan dasar yang berkualitas serta berlandaskan nilai-nilai keislaman. Pada angkatan pertama, jumlah siswa tercatat sebanyak 13 orang. Seiring berjalannya waktu, jumlah peserta didik terus mengalami perkembangan, dengan rincian angkatan kedua sebanyak 29 siswa yang terbagi menjadi dua kelas, angkatan ketiga 22 siswa, angkatan keempat 9 siswa, angkatan kelima 9 siswa, angkatan keenam 23 siswa, angkatan ketujuh 13 siswa, angkatan kedelapan 26 siswa, dan angkatan kesembilan sebanyak 36 siswa yang juga terbagi menjadi dua kelas.',
            'Dalam perjalanannya, angkatan keenam menjadi angkatan resmi pertama yang menandai semakin matangnya sistem pendidikan di MI Al-Mustawa. Hingga saat ini, MI Al-Mustawa terus berkomitmen untuk mencetak generasi yang berakhlak mulia, berilmu, serta mampu bersaing di masa depan.',
        ],
        'vision'  => '“Menjadi madrasah yang mampu membentuk generasi muslim yang berilmu, beramal sholeh, berakhlaqul karimah, terampil, kreatif dan berbudaya.”',
        'mission' => [
            'Menyelenggarakan pendidikan umum dan agama yang mengedepankan peningkatan kualitas guru dan siswa dalam bidang IPTEK dan IMTAQ.',
            'Mengembangkan dan mengamalkan nilai-nilai akhlaqul karimah yang sesuai dengan ajaran Islam dalam kehidupan sehari-hari.',
            'Mendorong penerapan dan pengembangan nilai-nilai akhlak mulia yang selaras dengan ajaran Islam, serta membimbing siswa untuk mengembangkan potensi mereka agar menjadi individu yang terampil dan kreatif dalam menghadapi tantangan zaman.',
            'Meningkatkan kebiasaan berperilaku disiplin dan bertanggung jawab dalam kehidupan bermasyarakat baik dalam lingkungan keluarga, madrasah, maupun masyarakat.',
        ],
        'accreditation' => 'A (Unggul)',
    ],

    // =========================================================================
    // Fasilitas
    // =========================================================================
    'facilities' => [
        [
            'name'        => 'Laboratorium Komputer',
            'icon'        => '💻',
            'description' => 'Dilengkapi 40 unit komputer terbaru dengan koneksi internet fiber optik berkecepatan tinggi untuk mendukung pembelajaran berbasis teknologi.',
        ],
        [
            'name'        => 'Laboratorium IPA',
            'icon'        => '🔬',
            'description' => 'Tiga laboratorium terpisah untuk Fisika, Kimia, dan Biologi dengan peralatan praktikum lengkap sesuai standar nasional.',
        ],
        [
            'name'        => 'Perpustakaan Digital',
            'icon'        => '📚',
            'description' => 'Koleksi lebih dari 15.000 judul buku fisik dan akses ke ribuan e-book serta jurnal ilmiah melalui sistem perpustakaan digital terintegrasi.',
        ],
        [
            'name'        => 'Lapangan Olahraga',
            'icon'        => '⚽',
            'description' => 'Lapangan multifungsi untuk sepak bola, basket, voli, dan atletik. Dilengkapi tribun penonton dan lampu penerangan untuk kegiatan malam.',
        ],
        [
            'name'        => 'Aula Serbaguna',
            'icon'        => '🎭',
            'description' => 'Aula berkapasitas 500 orang dengan sistem audio-visual modern, panggung permanen, dan AC sentral untuk berbagai kegiatan sekolah.',
        ],
        [
            'name'        => 'Kantin Sehat',
            'icon'        => '🍱',
            'description' => 'Kantin bersih dan higienis dengan 12 stan makanan yang menyajikan menu bergizi dan terjangkau, diawasi oleh tim kesehatan sekolah.',
        ],
        [
            'name'        => 'Ruang Seni & Musik',
            'icon'        => '🎵',
            'description' => 'Studio musik kedap suara dengan berbagai instrumen lengkap dan ruang seni rupa yang mendukung pengembangan bakat siswa di bidang seni.',
        ],
        [
            'name'        => 'Klinik Sekolah',
            'icon'        => '🏥',
            'description' => 'Klinik kesehatan dengan tenaga medis terlatih, tersedia setiap hari sekolah untuk memberikan pertolongan pertama dan konsultasi kesehatan siswa.',
        ],
    ],

    // =========================================================================
    // Program Unggulan
    // =========================================================================
    'programs' => [
        [
            'name'        => 'Program MIPA Unggulan',
            'description' => 'Program intensif Matematika dan Ilmu Pengetahuan Alam yang dirancang untuk mempersiapkan siswa menghadapi olimpiade sains nasional dan internasional. Didukung oleh guru-guru berpengalaman dan modul pembelajaran eksklusif.',
            'image'       => 'assets/images/program-mipa.png',
        ],
        [
            'name'        => 'Program IPS Terapan',
            'description' => 'Program Ilmu Pengetahuan Sosial yang mengintegrasikan studi kasus nyata, kunjungan industri, dan simulasi bisnis untuk membekali siswa dengan pemahaman ekonomi dan sosial yang aplikatif.',
            'image'       => 'assets/images/program-ips.jpg',
        ],
        [
            'name'        => 'Program Bahasa & Budaya',
            'description' => 'Program khusus yang memperdalam kemampuan bahasa Indonesia, Inggris, dan Mandarin, disertai pengenalan budaya lokal dan global melalui pertukaran pelajar dan festival budaya tahunan.',
            'image'       => 'assets/images/program-bahasa.jpg',
        ],
        [
            'name'        => 'Kelas Akselerasi Digital',
            'description' => 'Program inovatif yang memadukan kurikulum reguler dengan literasi digital, coding dasar, dan kecerdasan buatan, mempersiapkan siswa untuk era industri 4.0 dan Society 5.0.',
            'image'       => 'assets/images/program-digital.jpg',
        ],
    ],

    // =========================================================================
    // Galeri Foto
    // =========================================================================
    'gallery' => [
        [
            'path' => 'assets/images/gallery/bahasa.png',
            'alt'  => 'Dokumentasi kegiatan Berbahasa Arab siswa di lingkungan MI Al Mustawa.',
        ],
        [
            'path' => 'assets/images/gallery/drumband.png',
            'alt'  => 'Tim drumband siswa/i MI Al Mustawa yang penuh semangat dan kompak.',
        ],
        [
            'path' => 'assets/images/gallery/lomba_olimpiade.png',
            'alt'  => 'Tim tari MI Al Mustawa yang menampilkan kreativitas dan kekompakan siswa.',
        ],
        [
            'path' => 'assets/images/gallery/pramuka.png',
            'alt'  => 'Kegiatan Pramuka sebagai sarana pembentukan karakter, keberanian, dan tanggung jawab siswa MI.',
        ],
        [
            'path' => 'assets/images/gallery/silat.png',
            'alt'  => 'Kegiatan silat siswa MI yang melatih disiplin, keberanian, dan percaya diri.',
        ],
        [
            'path' => 'assets/images/gallery/tahfidz.png',
            'alt'  => 'Prestasi tahfidz siswa/i MI sebagai bentuk semangat dalam menghafal Al-Qur’an.',
        ],
        [
            'path' => 'assets/images/gallery/marawis.png',
            'alt'  => 'Momen kebersamaan tim marawis siswa MI dalam menampilkan kreativitas dan bakat seni.',
        ],
        [
            'path' => 'assets/images/gallery/doa.png',
            'alt'  => 'Kegiatan doa dhuha bersama siswa MI dalam membiasakan ibadah sejak dini.',
        ],
        [
            'path' => 'assets/images/gallery/kunjungan-industri.jpg',
            'alt'  => 'Kunjungan industri siswa program IPS ke perusahaan manufaktur',
        ],
    ],

    // =========================================================================
    // Tenaga Pengajar
    // =========================================================================
    'teachers' => [
        [
            'name'    => 'Muhammad Sayyid Habibie',
            'subject' => 'Guru Agama Kelas 3 & 4',
            'photo'   => 'assets/images/teachers/sayyid.jpeg',
        ],
        [
            'name'    => 'Siti Komariah, S.Pd',
            'subject' => 'Guru Kelas 1 As Shafa',
            'photo'   => 'assets/images/teachers/bu-ria.png',
        ],
        [
            'name'    => 'Irma, S.Ag',
            'subject' => 'Guru kelas 2 Nabawi',
            'photo'   => 'assets/images/teachers/bu-ir.png',
        ],
        [
            'name'    => 'Eti kurniawati, S.Pd',
            'subject' => 'Guru kelas 5 Muzdalifah',
            'photo'   => 'assets/images/teachers/bu-et.jpeg',
        ],
        [
            'name'    => 'Nur Azmi Laila, S.Pd',
            'subject' => 'Guru Bahasa Inggris',
            'photo'   => 'assets/images/teachers/bu-az.jpeg',
        ],
        [
            'name'    => 'Lina Suniarsih',
            'subject' => 'Guru Kelas 1 Al-Marwah',
            'photo'   => 'assets/images/teachers/bu-lin.jpeg',
        ],
        [
            'name'    => 'Agus Prasetyo, S.Pd.',
            'subject' => 'Guru Biologi',
            'photo'   => 'assets/images/teachers/placeholder.svg',
        ],
        [
            'name'    => 'Nurul Hidayah, S.E., M.Pd.',
            'subject' => 'Guru Ekonomi',
            'photo'   => 'assets/images/teachers/placeholder.svg',
        ],
        [
            'name'    => 'Wahyu Setiawan, S.Pd.',
            'subject' => 'Guru Sejarah',
            'photo'   => 'assets/images/teachers/placeholder.svg',
        ],
        [
            'name'    => 'Fitri Handayani, S.Pd.',
            'subject' => 'Guru Seni Budaya',
            'photo'   => 'assets/images/teachers/placeholder.svg',
        ],
        [
            'name'    => 'Doni Kurniawan, S.Kom.',
            'subject' => 'Guru Informatika',
            'photo'   => 'assets/images/teachers/placeholder.svg',
        ],
        [
            'name'    => 'Yuli Astuti, S.Pd.',
            'subject' => 'Guru Pendidikan Jasmani',
            'photo'   => 'assets/images/teachers/placeholder.svg',
        ],
    ],

    // =========================================================================
    // Prestasi
    // =========================================================================
    'achievements' => [
        [
            'name'  => 'Juara 1 Olimpiade Matematika',
            'year'  => 2024,
            'level' => 'Nasional',
        ],
        [
            'name'  => 'Juara 2 Lomba Karya Ilmiah Remaja (LKIR)',
            'year'  => 2024,
            'level' => 'Nasional',
        ],
        [
            'name'  => 'Medali Perunggu International Science Olympiad (ISO)',
            'year'  => 2023,
            'level' => 'Internasional',
        ],
        [
            'name'  => 'Juara 1 Debat Bahasa Inggris',
            'year'  => 2023,
            'level' => 'Nasional',
        ],
        [
            'name'  => 'Sekolah Adiwiyata Mandiri',
            'year'  => 2023,
            'level' => 'Nasional',
        ],
        [
            'name'  => 'Juara Umum Pekan Olahraga Pelajar Daerah (POPDA)',
            'year'  => 2023,
            'level' => 'Lokal',
        ],
        [
            'name'  => 'Juara 1 Festival Seni Pelajar Jawa Barat',
            'year'  => 2022,
            'level' => 'Lokal',
        ],
        [
            'name'  => 'Penghargaan Sekolah Inovatif Kemendikbudristek',
            'year'  => 2022,
            'level' => 'Nasional',
        ],
        [
            'name'  => 'Juara 3 Olimpiade Fisika Tingkat Internasional (IPhO)',
            'year'  => 2022,
            'level' => 'Internasional',
        ],
        [
            'name'  => 'Juara 1 Lomba Cerdas Cermat Sejarah Nasional',
            'year'  => 2021,
            'level' => 'Nasional',
        ],
    ],

];
