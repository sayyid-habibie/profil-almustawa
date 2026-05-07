<?php
/**
 * Contact Section
 * Requirements: 8.1, 8.2, 8.3, 8.5, 8.6, 8.7
 */
$address    = htmlspecialchars($school['address'] ?? '');
$phone      = htmlspecialchars($school['phone'] ?? '');
$email      = htmlspecialchars($school['email'] ?? '');
$mapsEmbed  = $school['maps_embed'] ?? '';

$isSent  = isset($_GET['sent']);
$isError = isset($_GET['error']);
?>
<section id="kontak" class="section section-contact">
    <div class="container">
        <h2 class="section-title">Hubungi Kami</h2>
        <p class="section-subtitle">Kami siap membantu menjawab pertanyaan Anda</p>

        <!-- Pesan Status -->
        <?php if ($isSent): ?>
            <div class="alert alert-success" role="alert">
                <strong>Pesan terkirim!</strong> Terima kasih telah menghubungi kami. Kami akan segera merespons pesan Anda.
            </div>
        <?php elseif ($isError): ?>
            <div class="alert alert-error" role="alert">
                <strong>Gagal mengirim pesan.</strong> Maaf, pesan Anda gagal terkirim. Silakan coba lagi atau hubungi kami langsung melalui telepon atau email.
            </div>
        <?php endif; ?>

        <div class="contact-columns">

            <!-- Kolom Kiri: Info Kontak -->
            <div class="contact-info">
                <h3 class="contact-info-title">Informasi Kontak</h3>

                <ul class="contact-details">
                    <?php if ($address): ?>
                        <li class="contact-detail-item">
                            <span class="contact-icon" aria-hidden="true">📍</span>
                            <div>
                                <strong>Alamat</strong>
                                <p><?= $address ?></p>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if ($phone): ?>
                        <li class="contact-detail-item">
                            <span class="contact-icon" aria-hidden="true">📞</span>
                            <div>
                                <strong>Telepon</strong>
                                <p><a href="tel:<?= htmlspecialchars($school['phone'] ?? '') ?>"><?= $phone ?></a></p>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if ($email): ?>
                        <li class="contact-detail-item">
                            <span class="contact-icon" aria-hidden="true">✉️</span>
                            <div>
                                <strong>Email</strong>
                                <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>

                <!-- Embed Google Maps -->
                <?php if (!empty($mapsEmbed)): ?>
                    <div class="maps-embed">
                        <iframe
                            src="<?= htmlspecialchars($mapsEmbed) ?>"
                            width="100%"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Lokasi <?= htmlspecialchars($school['name'] ?? 'Sekolah') ?> di Google Maps"
                        ></iframe>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Kolom Kanan: Formulir Kontak -->
            <div class="contact-form-wrapper">
                <h3 class="contact-form-title">Kirim Pesan</h3>

                <form
                    action="contact.php"
                    method="POST"
                    class="contact-form"
                    novalidate
                >
                    <div class="form-group">
                        <label for="full_name">Nama Lengkap <span class="required" aria-hidden="true">*</span></label>
                        <input
                            type="text"
                            id="full_name"
                            name="full_name"
                            class="form-control"
                            placeholder="Masukkan nama lengkap Anda"
                            required
                            autocomplete="name"
                        >
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email <span class="required" aria-hidden="true">*</span></label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="contoh@email.com"
                            required
                            autocomplete="email"
                        >
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor Telepon <span class="optional">(opsional)</span></label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            class="form-control"
                            placeholder="Contoh: 08123456789"
                            autocomplete="tel"
                        >
                    </div>

                    <div class="form-group">
                        <label for="subject">Subjek <span class="required" aria-hidden="true">*</span></label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            class="form-control"
                            placeholder="Topik pesan Anda"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan <span class="required" aria-hidden="true">*</span></label>
                        <textarea
                            id="message"
                            name="message"
                            class="form-control"
                            rows="5"
                            placeholder="Tuliskan pesan Anda di sini..."
                            required
                        ></textarea>
                    </div>

                    <p class="form-note"><span class="required" aria-hidden="true">*</span> Wajib diisi</p>

                    <button type="submit" class="btn btn-primary btn-submit">
                        Kirim Pesan
                    </button>
                </form>
            </div>

        </div><!-- .contact-columns -->
    </div>
</section>
