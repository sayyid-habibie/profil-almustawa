<?php
/**
 * Hero Section
 * Requirements: 1.1, 1.2, 1.3
 */
$heroImage  = htmlspecialchars($school['hero_image'] ?? 'assets/images/hero.jpg');
$schoolName = htmlspecialchars($school['name'] ?? 'Nama Sekolah');
$tagline    = htmlspecialchars($school['tagline'] ?? '');
?>
<section id="beranda" class="hero" style="background-image: url('<?= $heroImage ?>');">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title"><?= $schoolName ?></h1>
        <?php if ($tagline): ?>
            <p class="hero-tagline"><?= $tagline ?></p>
        <?php endif; ?>
        <a href="#kontak" class="btn btn-primary">Hubungi Kami</a>
    </div>
</section>
