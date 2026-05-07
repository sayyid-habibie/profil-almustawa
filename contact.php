<?php
/**
 * Contact Form Handler
 * Requirements: 8.2, 8.3, 8.4, 8.5, 8.6
 */

// Tolak request non-POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

require_once 'config/school_data.php';
require_once __DIR__ . '/src/contact_functions.php';

// Ambil input dari POST
$rawInput = [
    'full_name' => $_POST['full_name'] ?? '',
    'email'     => $_POST['email']     ?? '',
    'phone'     => $_POST['phone']     ?? '',
    'subject'   => $_POST['subject']   ?? '',
    'message'   => $_POST['message']   ?? '',
];

// Validasi
$errors = validateContactForm($rawInput);

if (!empty($errors)) {
    header('Location: index.php?error=1#kontak');
    exit;
}

// Sanitasi
$data = sanitizeContactInput($rawInput);

// Kirim email
$to      = $school['email'];
$subject = 'Pesan dari Formulir Kontak: ' . $data['subject'];
$body    = "Nama    : {$data['full_name']}\n"
         . "Email   : {$data['email']}\n"
         . "Telepon : {$data['phone']}\n\n"
         . "Pesan:\n{$data['message']}";

$headers  = "From: {$data['full_name']} <{$data['email']}>\r\n";
$headers .= "Reply-To: {$data['email']}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $body, $headers)) {
    header('Location: index.php?sent=1#kontak');
} else {
    header('Location: index.php?error=1#kontak');
}
exit;
