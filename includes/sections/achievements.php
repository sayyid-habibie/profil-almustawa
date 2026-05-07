<?php
/**
 * Achievements Section
 * Requirements: 7.1
 */
$achievements = $school['achievements'] ?? [];

/**
 * Mengembalikan CSS class badge berdasarkan level prestasi.
 */
function getAchievementBadgeClass(string $level): string
{
    switch ($level) {
        case 'Lokal':
            return 'badge badge-lokal';
        case 'Nasional':
            return 'badge badge-nasional';
        case 'Internasional':
            return 'badge badge-internasional';
        default:
            return 'badge';
    }
}
?>
<section id="prestasi" class="section section-achievements">
    <div class="container">
        <h2 class="section-title">Prestasi Sekolah</h2>
        <p class="section-subtitle">Penghargaan dan pencapaian membanggakan yang telah diraih</p>

        <?php if (!empty($achievements)): ?>
            <ul class="achievements-list">
                <?php foreach ($achievements as $achievement): ?>
                    <?php
                    $name  = htmlspecialchars($achievement['name'] ?? 'Prestasi');
                    $year  = (int) ($achievement['year'] ?? 0);
                    $level = htmlspecialchars($achievement['level'] ?? '');
                    $badgeClass = getAchievementBadgeClass($achievement['level'] ?? '');
                    ?>
                    <li class="achievement-item">
                        <div class="achievement-info">
                            <span class="achievement-name"><?= $name ?></span>
                            <?php if ($year > 0): ?>
                                <span class="achievement-year"><?= $year ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if ($level): ?>
                            <span class="<?= htmlspecialchars($badgeClass) ?>"><?= $level ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="placeholder-text">Informasi prestasi belum tersedia.</p>
        <?php endif; ?>
    </div>
</section>
