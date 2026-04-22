<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$idUser = $_SESSION['user_id'];

if (isset($_POST['update'])) {
    $newUsername = $_POST['new_username'];
    $stmt = $conn->prepare("UPDATE users SET username = :username WHERE id = :id");
    $stmt->bindParam(':username', $newUsername);
    $stmt->bindParam(':id', $idUser);
    if ($stmt->execute()) {
        $_SESSION['username'] = $newUsername;
        echo "Profil berhasil diperbarui!<br>";
    }
}

if (isset($_POST['delete'])) {
    $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $idUser);
    if ($stmt->execute()) {
        session_destroy();
        header("Location: register.php");
        exit;
    }
}
?>

<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>

<h3>Ubah Profil</h3>
<form method="POST">
    Username Baru: <input type="text" name="new_username" required>
    <button type="submit" name="update">Update</button>
</form>

<h3>Hapus Akun</h3>
<form method="POST" onsubmit="return confirm('Yakin ingin menghapus akun?');">
    <button type="submit" name="delete" style="color: red;">Hapus Akun Saya</button>
</form>

<br>
<a href="logout.php">Logout</a>