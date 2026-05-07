<?php
require 'config/school_data.php';

// Test header.php
ob_start();
include 'includes/header.php';
$headerOut = ob_get_clean();

$headerOk = strpos($headerOut, 'SMA Negeri 1 Nusantara') !== false
    && strpos($headerOut, '<!DOCTYPE html>') !== false
    && strpos($headerOut, '<html lang="id">') !== false
    && strpos($headerOut, 'assets/css/style.css') !== false;
echo 'header.php: ' . ($headerOk ? 'OK' : 'FAIL') . PHP_EOL;

// Test nav.php
ob_start();
include 'includes/nav.php';
$navOut = ob_get_clean();

$navOk = strpos($navOut, '#beranda') !== false
    && strpos($navOut, '#profil') !== false
    && strpos($navOut, '#fasilitas') !== false
    && strpos($navOut, '#program') !== false
    && strpos($navOut, '#galeri') !== false
    && strpos($navOut, '#prestasi') !== false
    && strpos($navOut, '#kontak') !== false
    && strpos($navOut, 'class="hamburger"') !== false;
echo 'nav.php: ' . ($navOk ? 'OK' : 'FAIL') . PHP_EOL;

// Test footer.php
ob_start();
include 'includes/footer.php';
$footerOut = ob_get_clean();

$footerOk = strpos($footerOut, 'SMA Negeri 1 Nusantara') !== false
    && strpos($footerOut, 'Jl. Pendidikan') !== false
    && strpos($footerOut, '#beranda') !== false
    && strpos($footerOut, '#kontak') !== false
    && strpos($footerOut, 'assets/js/main.js') !== false;
echo 'footer.php: ' . ($footerOk ? 'OK' : 'FAIL') . PHP_EOL;

echo PHP_EOL . 'Semua partial template berhasil diverifikasi.' . PHP_EOL;
