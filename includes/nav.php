<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="#beranda" class="nav-logo">
            <img
                src="<?= htmlspecialchars($school['logo'] ?? 'assets/images/logo.png') ?>"
                alt="Logo <?= htmlspecialchars($school['name'] ?? 'Sekolah') ?>"
                class="nav-logo-img"
            >
            <?= htmlspecialchars($school['name'] ?? 'Profil Sekolah') ?>
        </a>

        <button class="hamburger" id="hamburger" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="nav-menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item">
                <a href="#beranda" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="#profil" class="nav-link">Profil</a>
            </li>
            <li class="nav-item">
                <a href="#guru" class="nav-link">Guru</a>
            </li>
            <li class="nav-item">
                <a href="#fasilitas" class="nav-link">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a href="#program" class="nav-link">Program</a>
            </li>
            <li class="nav-item">
                <a href="#galeri" class="nav-link">Galeri</a>
            </li>
            <li class="nav-item">
                <a href="#prestasi" class="nav-link">Prestasi</a>
            </li>
            <li class="nav-item">
                <a href="#kontak" class="nav-link">Kontak</a>
            </li>
        </ul>
    </div>

    <!-- Running Text -->
    <div class="marquee-wrapper" aria-label="Pengumuman sekolah">
        <div class="marquee-track" id="marqueeTrack">
            <div class="marquee-content">
                <?php
                $announcements = [
                    '🎓 Selamat datang di ' . htmlspecialchars($school['name'] ?? 'Profil Sekolah'),
                    '📚 Pendaftaran siswa baru tahun ajaran 2025/2026 telah dibuka',
                    '🏆 Juara 1 Olimpiade Matematika Tingkat Nasional 2024',
                    '📅 Kegiatan Pentas Seni Tahunan akan segera dilaksanakan',
                    '🌟 Akreditasi Sekolah: ' . htmlspecialchars($school['profile']['accreditation'] ?? 'A (Unggul)'),
                    '📞 Hubungi kami: ' . htmlspecialchars($school['phone'] ?? ''),
                ];
                $separator = '<span class="marquee-separator">✦</span>';
                $items = array_map(fn($a) => '<span class="marquee-item">' . $a . '</span>', $announcements);
                $text = implode($separator, $items);
                // Duplikat agar seamless loop
                echo $text . $separator . $text . $separator;
                ?>
            </div>
        </div>
    </div>
</nav>
