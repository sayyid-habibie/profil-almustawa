<?php
/**
 * Gallery Section
 * Requirements: 6.1, 6.2, 10.2, 10.3
 */
$gallery = $school['gallery'] ?? [];
?>
<section id="galeri" class="section section-gallery">
    <div class="container">
        <h2 class="section-title">Galeri Foto</h2>
        <p class="section-subtitle">Momen dan kegiatan bersama di SMA Negeri 1 Nusantara</p>

        <?php if (!empty($gallery)): ?>
            <div class="gallery-grid">
                <?php foreach ($gallery as $item): ?>
                    <?php
                    $imgPath = htmlspecialchars($item['path'] ?? '');
                    $imgAlt  = htmlspecialchars($item['alt'] ?? 'Foto kegiatan sekolah');
                    ?>
                    <div class="gallery-item-wrapper">
                        <img
                            src="<?= $imgPath ?>"
                            alt="<?= $imgAlt ?>"
                            loading="lazy"
                            class="gallery-item"
                            data-src="<?= $imgPath ?>"
                        >
                        <div class="gallery-caption">
                            <p><?= $imgAlt ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="placeholder-text">Galeri foto belum tersedia.</p>
        <?php endif; ?>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Tampilan foto besar" hidden>
    <div class="lightbox-backdrop"></div>
    <div class="lightbox-container">
        <button class="lightbox-close" aria-label="Tutup lightbox">&times;</button>
        <img id="lightbox-img" src="" alt="" class="lightbox-image">
    </div>
</div>
