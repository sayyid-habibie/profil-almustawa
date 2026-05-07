<?php
require 'config/school_data.php';

$required_keys = ['name','tagline','logo','hero_image','email','phone','address','maps_embed','profile','facilities','programs','gallery','achievements'];
$missing = [];
foreach ($required_keys as $key) {
    if (!array_key_exists($key, $school)) $missing[] = $key;
}
if (empty($missing)) {
    echo 'Semua kunci wajib tersedia.' . PHP_EOL;
} else {
    echo 'Kunci yang hilang: ' . implode(', ', $missing) . PHP_EOL;
}

$profile_keys = ['history','vision','mission','accreditation'];
foreach ($profile_keys as $k) {
    if (!array_key_exists($k, $school['profile'])) echo 'Profile key missing: ' . $k . PHP_EOL;
}

echo 'Jumlah fasilitas: ' . count($school['facilities']) . PHP_EOL;
echo 'Jumlah program: ' . count($school['programs']) . PHP_EOL;
echo 'Jumlah galeri: ' . count($school['gallery']) . PHP_EOL;
echo 'Jumlah prestasi: ' . count($school['achievements']) . PHP_EOL;
echo 'Jumlah misi: ' . count($school['profile']['mission']) . PHP_EOL;
echo 'Nama sekolah: ' . $school['name'] . PHP_EOL;
echo 'Akreditasi: ' . $school['profile']['accreditation'] . PHP_EOL;
