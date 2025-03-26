<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        echo "<script>
                alert('Terima kasih, $name! Pesan Anda telah dikirim ke $phone.');
                window.location.href='home.html';
            </script>";
    } else {
        echo "<script>
                alert('Harap isi semua kolom!');
                window.location.href='home.html';
            </script>";
    }
} else {
    header("Location: home.html");
    exit;
}
?>
