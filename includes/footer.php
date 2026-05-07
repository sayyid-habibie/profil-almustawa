<footer class="footer">
    <div class="footer-container">
        <div class="footer-brand">
            <h3 class="footer-school-name">
                <?= htmlspecialchars($school['name'] ?? 'Profil Sekolah') ?>
            </h3>
            <p class="footer-tagline">
                <?= htmlspecialchars($school['tagline'] ?? '') ?>
            </p>
            <address class="footer-address">
                <?= htmlspecialchars($school['address'] ?? '') ?>
            </address>
        </div>

        <nav class="footer-nav" aria-label="Navigasi footer">
            <h4 class="footer-nav-title">Navigasi</h4>
            <ul class="footer-nav-list">
                <li><a href="#beranda" class="footer-nav-link">Beranda</a></li>
                <li><a href="#profil" class="footer-nav-link">Profil</a></li>
                <li><a href="#fasilitas" class="footer-nav-link">Fasilitas</a></li>
                <li><a href="#program" class="footer-nav-link">Program</a></li>
                <li><a href="#galeri" class="footer-nav-link">Galeri</a></li>
                <li><a href="#guru" class="footer-nav-link">Guru</a></li>
                <li><a href="#prestasi" class="footer-nav-link">Prestasi</a></li>
                <li><a href="#kontak" class="footer-nav-link">Kontak</a></li>
            </ul>
        </nav>

        <div class="footer-contact">
            <h4 class="footer-contact-title">Kontak</h4>
            <ul class="footer-contact-list">
                <?php if (!empty($school['phone'] ?? '')): ?>
                <li>
                    <a href="tel:<?= htmlspecialchars($school['phone'] ?? '') ?>" class="footer-contact-link">
                        <?= htmlspecialchars($school['phone'] ?? '') ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php if (!empty($school['email'] ?? '')): ?>
                <li>
                    <a href="mailto:<?= htmlspecialchars($school['email'] ?? '') ?>" class="footer-contact-link">
                        <?= htmlspecialchars($school['email'] ?? '') ?>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p class="footer-copyright">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($school['name'] ?? 'Profil Sekolah') ?>. Hak cipta dilindungi.
        </p>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
