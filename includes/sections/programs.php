<?php
/**
 * Programs Section
 * Requirements: 5.1, 10.2, 10.3
 */
$programs = $school['programs'] ?? [];
?>
<section id="program" class="section section-programs">
    <div class="container">
        <h2 class="section-title">Program Unggulan</h2>
        <p class="section-subtitle">Pilihan program pendidikan berkualitas untuk masa depan cerah</p>

        <?php if (!empty($programs)): ?>
            <div class="programs-grid">
                <?php foreach ($programs as $program): ?>
                    <?php
                    $programName  = htmlspecialchars($program['name'] ?? 'Program');
                    $programDesc  = htmlspecialchars($program['description'] ?? '');
                    $programImage = htmlspecialchars($program['image'] ?? '');
                    ?>
                    <div class="program-card">
                        <?php if ($programImage): ?>
                            <img
                                src="<?= $programImage ?>"
                                alt="<?= $programName ?>"
                                loading="lazy"
                                class="program-image"
                            >
                        <?php endif; ?>
                        <div class="program-content">
                            <h3 class="program-name"><?= $programName ?></h3>
                            <p class="program-description"><?= $programDesc ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="placeholder-text">Informasi program unggulan belum tersedia.</p>
        <?php endif; ?>
    </div>
</section>
