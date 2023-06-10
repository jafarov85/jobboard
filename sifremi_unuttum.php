
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sifremi Unutdum</title>
</head>
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

    
</body>
</html><form action="sifremi_unuttum.php" method="post">
  
  <div>
    <label for="email">E-posta Adresiniz:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <input type="submit" value="Gönder">
  </div>
</form>

<style>
    *{
        margin: 0;
        padding: 0;
    }
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

<?php include 'footer.php' ; ?>