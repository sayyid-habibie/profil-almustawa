<?php
/**
 * Profile Section
 * Requirements: 3.1, 3.3
 */
$historyRaw    = $school['profile']['history'] ?? 'Informasi sejarah belum tersedia.';
$vision        = htmlspecialchars($school['profile']['vision'] ?? 'Informasi visi belum tersedia.');
$mission       = $school['profile']['mission'] ?? [];
$accreditation = htmlspecialchars($school['profile']['accreditation'] ?? 'Belum terakreditasi');
?>
<section id="profil" class="section section-profile">
    <div class="container">
        <h2 class="section-title">Profil Sekolah</h2>

        <!-- Pimpinan Sekolah -->
        <?php $leaders = $school['leaders'] ?? []; ?>
        <?php if (!empty($leaders)): ?>
        <div class="profile-block">
            <h3 class="profile-subtitle">Pimpinan Sekolah</h3>
            <div class="leaders-grid">
                <?php foreach ($leaders as $leader): ?>
                    <?php
                    $leaderName  = htmlspecialchars($leader['name']  ?? '');
                    $leaderRole  = htmlspecialchars($leader['role']  ?? '');
                    $leaderPhoto = htmlspecialchars(!empty($leader['photo']) ? $leader['photo'] : 'assets/images/leaders/placeholder.svg');
                    ?>
                    <div class="leader-card">
                        <img
                            src="<?= $leaderPhoto ?>"
                            alt="Foto <?= $leaderRole ?> <?= $leaderName ?>"
                            loading="lazy"
                            class="leader-photo"
                            onerror="this.src='assets/images/leaders/placeholder.svg'"
                        >
                        <div class="leader-info">
                            <p class="leader-role"><?= $leaderRole ?></p>
                            <h4 class="leader-name"><?= $leaderName ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Sejarah -->
        <div class="profile-block">
            <h3 class="profile-subtitle">Sejarah Sekolah</h3>
            <?php if (is_array($historyRaw)): ?>
                <?php foreach ($historyRaw as $paragraph): ?>
                    <p class="profile-history"><?= htmlspecialchars($paragraph) ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="profile-history"><?= htmlspecialchars($historyRaw) ?></p>
            <?php endif; ?>
        </div>

        <!-- Visi -->
        <div class="profile-block">
            <h3 class="profile-subtitle">Visi</h3>
            <blockquote class="profile-vision">
                <p><?= $vision ?></p>
            </blockquote>
        </div>

        <!-- Misi -->
        <div class="profile-block">
            <h3 class="profile-subtitle">Misi</h3>
            <?php if (!empty($mission)): ?>
                <ul class="profile-mission-list">
                    <?php foreach ($mission as $item): ?>
                        <li><?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="placeholder-text">Informasi misi belum tersedia.</p>
            <?php endif; ?>
        </div>

        <!-- Akreditasi -->
        <div class="profile-block">
            <h3 class="profile-subtitle">Akreditasi</h3>
            <div class="accreditation-badge">
                <span class="badge badge-accreditation"><?= $accreditation ?></span>
                <p class="accreditation-label">Status Akreditasi Sekolah</p>
            </div>
        </div>
    </div>
</section>
