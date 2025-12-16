<?php
   require_once 'ini.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="login-container">
    <form class="login-box" method="POST" action="addStudent.php">
        <h2>Giriş Yap</h2>
        <p class="subtitle">Hesabınıza giriş yapın</p>

        <div class="input-group">
            <input type="number" min="0" max="20" name="id" required>
            <label>Kullanıcı ID</label>
        </div>
        <div class="input-group">
            <input type="email"  name="email" required>
            <label>Kullanıcı Email</label>
        </div>

        <div class="input-group">
            <input type="text" id="nom"  name="nom" required>
            <label>Isim</label>
        </div>

        <button type="submit">Giriş Yap</button>

        <p class="register-link">
            Ogrenci listesi gormek icin tiklayin? <a href="listeStudent.php">Liste</a>
        </p>
    </form>
</div>
</body>
</html>
