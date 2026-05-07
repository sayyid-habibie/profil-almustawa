<?php
/**
 * Teachers Section — Daftar Tenaga Pengajar
 */
$teachers = $school['teachers'] ?? [];
$defaultPhoto = 'assets/images/teachers/placeholder.svg';
?>
<section id="guru" class="section section-teachers">
    <div class="container">
        <h2 class="section-title">Tenaga Pengajar</h2>
        <p class="section-subtitle">Guru-guru berpengalaman dan berdedikasi kami</p>

        <?php if (!empty($teachers)): ?>
            <div class="teachers-grid">
                <?php foreach ($teachers as $teacher): ?>
                    <?php
                    $name    = htmlspecialchars($teacher['name']    ?? 'Nama Guru');
                    $subject = htmlspecialchars($teacher['subject'] ?? '');
                    $photo   = htmlspecialchars(!empty($teacher['photo']) ? $teacher['photo'] : $defaultPhoto);
                    ?>
                    <div class="teacher-card">
                        <div class="teacher-photo-wrapper">
                            <img
                                src="<?= $photo ?>"
                                alt="Foto <?= $name ?>"
                                loading="lazy"
                                class="teacher-photo"
                                onerror="this.src='<?= htmlspecialchars($defaultPhoto) ?>'"
                            >
                        </div>
                        <div class="teacher-info">
                            <h3 class="teacher-name"><?= $name ?></h3>
                            <?php if ($subject): ?>
                                <p class="teacher-subject"><?= $subject ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="placeholder-text">Informasi tenaga pengajar belum tersedia.</p>
        <?php endif; ?>
    </div>
</section>
