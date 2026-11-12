<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 7</title>
</head>
<body>

<h1>Praktikum 7 - Pemrograman Server-Side PHP</h1>
<hr>

<!-- LATIHAN 1 -->
<h2>Latihan 1 - Menjalankan PHP</h2>
<h1>Belajar PHP</h1>
<?php
echo "<p>PHP berhasil dijalankan.</p>";
echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>";
?>

<hr>

<!-- LATIHAN 2 -->
<h2>Latihan 2 - Variabel, Operator, dan Percabangan</h2>
<?php
$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;
$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}

echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
echo "Predikat: " . $predikat;
?>

<hr>

<!-- LATIHAN 3 -->
<h2>Latihan 3 - Perulangan dan Array</h2>
<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni"];
echo "<h3>Daftar Mahasiswa</h3><ol>";

foreach ($mahasiswa as $mhs) {
    echo "<li>" . htmlspecialchars($mhs) . "</li>";
}

echo "</ol>";
?>

<hr>

<!-- LATIHAN 4 -->
<h2>Latihan 4 - Membuat Function</h2>
<?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

$hargaAkhir = hitungDiskon(150000, 10);
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");
?>

<hr>

<!-- LATIHAN 5 -->
<h2>Latihan 5 - Memproses Form dengan GET</h2>

<form method="GET" action="">
    <label for="kata">Kata kunci:</label>
    <input id="kata" name="kata" type="text">
    <button type="submit">Cari</button>
</form>

<?php
if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
}
?>

<hr>

<!-- LATIHAN 6 -->
<h2>Latihan 6 - Memproses Form dengan POST</h2>

<form method="POST" action="">
    <label for="nama">Nama:</label>
    <input id="nama" name="nama" type="text" required>
    <label for="prodi">Program Studi:</label>
    <input id="prodi" name="prodi" type="text" required>
    <button type="submit" name="kirim">Kirim Data</button>
</form>

<?php
if (isset($_POST["kirim"])) {
    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");

    if ($nama === "" || $prodi === "") {
        echo "<p>Semua kolom wajib diisi.</p>";
    } else {
        echo "<h3>Data diterima</h3>";
        echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
        echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
    }
}
?>

<hr>

<!-- LATIHAN 7 -->
<h2>Latihan 7 - Pengolahan Data Sederhana</h2>

<?php
$hasil = null;
$error = null;
$subtotal = null;
$barang = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["barang"])) {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";

    if ($barang === "" || !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) || (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>

<form method="POST">
    <label>Nama barang <input name="barang" required></label><br>
    <label>Harga <input name="harga" type="number" min="0" step="0.01" required></label><br>
    <label>Jumlah <input name="jumlah" type="number" min="1" step="1" required></label><br>
    <button type="submit">Hitung</button>
</form>

<?php
if (isset($error)) {
    echo "<p>" . htmlspecialchars($error) . "</p>";
} elseif (isset($subtotal)) {
    echo "<p>Barang: " . htmlspecialchars($barang) . "</p>";
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
}
?>

<hr>
<p>Akses: http://localhost/lab7_php/index.php</p>

</body>
</html>