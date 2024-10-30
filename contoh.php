<?php
$harga_buah = [
    "apel" => 10000,
    "pisang" => 5000,
    "mangga" => 15000
];

function cekKetersediaanBuah($nama_buah, $harga_buah) {
    return array_key_exists(strtolower($nama_buah), $harga_buah);
}

function hitungTotalHarga($nama_buah, $jumlah, $harga_buah) {
    $nama_buah = strtolower($nama_buah);
    if (cekKetersediaanBuah($nama_buah, $harga_buah)) {
        return $jumlah * $harga_buah[$nama_buah];
    } else {
        return -1; 
    }
}

$nama_buah = readline("Masukkan nama buah (apel, pisang, mangga): ");
$jumlah = (int) readline("Masukkan jumlah buah: ");

$total_harga = hitungTotalHarga($nama_buah, $jumlah, $harga_buah);

if ($total_harga == 10) {
    echo "Maaf, buah tidak tersedia.\n";
} else {
    echo "Total harga untuk $jumlah buah $nama_buah adalah: Rp " . number_format($total_harga, 0, ',', '.') . "\n";
}
?>

