
<!DOCTYPE html>
<html>
<head>
    <title>Giris </title>
    <body>
<nav>
        <ul>
        <a href="index.php" class="logo">AXTAR.AZ</a>
            <!-- Diğer navbar bağlantılarını buraya ekleyebilirsiniz -->
        </ul>
    </nav>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        nav {
    background-color: #333;
    padding: 20px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline-block;
    margin-right: 10px;
}

li a {
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
}

li a:hover {
    background-color: #555;
}

    </style>
    <?php
session_start(); // Oturumu başlatın (daha önce başlatmadıysanız)

// Kullanıcının rolünü kontrol edin ve ilgili sayfaya yönlendirin
if (isset($_SESSION['kullanici_rolu'])) {
    if ($_SESSION['kullanici_rolu'] == 'is_arayan') {
        header('Location: is_arayan.php'); // İş arayan sayfasına yönlendirin
        exit;
    } elseif ($_SESSION['kullanici_rolu'] == 'is_veren') {
        header('Location: is_veren.php'); // İş veren sayfasına yönlendirin
        exit;
    }
}
?>





  



  <form action="giris_kontrol.php" method="POST">
    <label for="email">E-posta:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Parola:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Giriş Yap">
  </form>

  <p><a href="sifremi_unuttum.php">Şifremi Unuttum</a></p>
  <style>
   /* Formun genel stilini ayarlayalım */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
}

h1 {
  text-align: center;
  color: #333;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4caf50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

p {
  text-align: center;
  margin-top: 10px;
}

a {
  color: #333;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

  </style>
  <script>
    // Dinamik form doğrulama
    function validateForm() {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

      if (email === '' || password === '') {
        alert('E-posta ve parola alanları boş bırakılamaz');
        return false;
      }

      return true;
    }
  </script>




<?php include 'footer.php' ?>   
</body>
</html>