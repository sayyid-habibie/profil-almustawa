<?php
/**
 * Fungsi validasi dan sanitasi formulir kontak.
 * File ini diekstrak dari contact.php agar dapat diuji secara unit
 * tanpa memerlukan header() atau mail().
 *
 * Requirements: 8.2, 8.3, 8.4
 */

/**
 * Validasi input formulir kontak.
 *
 * @param array $input Array input mentah dari $_POST.
 * @return array Array error; kosong jika semua valid.
 */
function validateContactForm(array $input): array
{
    $errors = [];

    $requiredFields = [
        'full_name' => 'Nama lengkap',
        'email'     => 'Alamat email',
        'subject'   => 'Subjek',
        'message'   => 'Pesan',
    ];

    foreach ($requiredFields as $field => $label) {
        $value = $input[$field] ?? '';
        if (empty(trim($value))) {
            $errors[$field] = "{$label} wajib diisi.";
        }
    }

    // Validasi format email hanya jika field tidak kosong
    if (empty($errors['email'])) {
        $email = $input['email'] ?? '';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Format alamat email tidak valid.';
        }
    }

    return $errors;
}

/**
 * Sanitasi input formulir kontak.
 *
 * @param array $input Array input mentah dari $_POST.
 * @return array Array input yang telah disanitasi.
 */
function sanitizeContactInput(array $input): array
{
    $sanitized = [];

    foreach ($input as $key => $value) {
        // Terapkan filter sanitasi terlebih dahulu, lalu escape HTML entities
        $filtered          = filter_var((string) $value, FILTER_SANITIZE_SPECIAL_CHARS);
        $sanitized[$key]   = htmlspecialchars($filtered, ENT_QUOTES, 'UTF-8');
    }

    return $sanitized;
}
