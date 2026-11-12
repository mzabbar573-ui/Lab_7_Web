<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama       = trim($_POST["nama"] ?? "");
    $nim        = trim($_POST["nim"] ?? "");
    $prodi      = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email      = trim($_POST["email"] ?? "");

    // Validasi server-side
    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "")  $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    // Jika tidak ada error, simpan data
    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
</head>
<body>

<h1>Formulir Data Mahasiswa</h1>

<form method="POST" action="">
    <label for="nama">Nama Lengkap:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="nim">NIM:</label><br>
    <input type="text" id="nim" name="nim" required><br><br>

    <label for="prodi">Program Studi:</label><br>
    <input type="text" id="prodi" name="prodi" required><br><br>

    <label for="semester">Semester (1–14):</label><br>
    <input type="number" id="semester" name="semester" min="1" max="14" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <button type="submit">Kirim Data</button>
</form>

<hr>

<?php if ($error): ?>
    <h3>Terdapat kesalahan:</h3>
    <ul>
        <?php foreach ($error as $pesan): ?>
            <li><?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?></li>
        <?php endforeach; ?>
    </ul>
<?php elseif ($data): ?>
    <h3>Ringkasan Data Mahasiswa</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <td><?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td><?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></td>
        </tr>
        <tr>
            <th>Semester</th>
            <td><?= (int)$data["semester"] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></td>
        </tr>
    </table>
<?php endif; ?>

</body>
</html>