<?php
session_start();
$title = "Styart - Main Page";
$description = "Welcome to Styart, your go-to platform for all things stylish and artistic.";
$keywords = "Styart, art, style, fashion, creativity";
$author = "Styart Team";
$viewport = "width=device-width, initial-scale=1.0";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="<?php echo $viewport; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="<?php echo $author; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../Styles/MainPage.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $description; ?></p>
        </header>
        <nav>
            <a href="#">Trang chủ</a>
            <a href="#">Bộ sưu tập</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
        </nav>
        <main>
            <!-- Nội dung chính sẽ đặt ở đây -->
            <p>Chào mừng bạn đến với Styart! Hãy khám phá những điều thú vị về nghệ thuật và phong cách.</p>
        </main>
        <footer>
            &copy; <?php echo date("Y"); ?> Styart Team. All rights reserved.
        </footer>
    </div>
</body>
</html>