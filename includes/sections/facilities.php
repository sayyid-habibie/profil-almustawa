<?php
/**
 * Facilities Section
 * Requirements: 4.1, 4.3
 */
$facilities = $school['facilities'] ?? [];
?>
<section id="fasilitas" class="section section-facilities">
    <div class="container">
        <h2 class="section-title">Fasilitas Sekolah</h2>
        <p class="section-subtitle">Sarana dan prasarana lengkap untuk mendukung proses belajar mengajar</p>

        <?php if (!empty($facilities)): ?>
            <div class="facilities-grid">
                <?php foreach ($facilities as $facility): ?>
                    <div class="facility-card">
                        <div class="facility-icon" aria-hidden="true">
                            <?= htmlspecialchars($facility['icon'] ?? '') ?>
                        </div>
                        <h3 class="facility-name"><?= htmlspecialchars($facility['name'] ?? 'Fasilitas') ?></h3>
                        <p class="facility-description"><?= htmlspecialchars($facility['description'] ?? '') ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="placeholder-text">Informasi fasilitas belum tersedia.</p>
        <?php endif; ?>
    </div>
</section>
