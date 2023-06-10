<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0062cc;
        }

        .jobseeker-fields,
        .employer-fields {
            display: none;
        }
    </style>
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

    <form action="kayit_ol.php" method="POST">
        <h2>Kayıt Ol</h2>
        <label for="name">Adınız:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">E-posta Adresiniz:</label>
        <input type="text" name="email" id="email" required>

        <label for="password">Şifreniz:</label>
        <input type="password" name="password" id="password" required>

        <label for="usertype">Kullanıcı Türünüz:</label>
        <select name="usertype" id="usertype" required>
            <option value="">Seçiniz</option>
            <option value="jobseeker">İş Arayan</option>
            <option value="employer">İşveren</option>
        </select>

        <div class="jobseeker-fields">
            <label for="jobtitle">İş Başlığı:</label>
            <input type="text" name="jobtitle" id="jobtitle">
        </div>

        <div class="employer-fields">
            <label for="company">Şirket Adı:</label>
            <input type="text" name="company" id="company">
        </div>

        <input type="submit" value="Kayıt Ol">

        <script>
            var usertypeSelect = document.getElementById('usertype');
            var jobseekerFields = document.querySelector('.jobseeker-fields');
            var employerFields = document.querySelector('.employer-fields');

            usertypeSelect.addEventListener('change', function() {
                if (usertypeSelect.value === 'jobseeker') {
                    jobseekerFields.style.display = 'block';
                    employerFields.style.display = 'none';
                } else if (usertypeSelect.value === 'employer') {
                    jobseekerFields.style.display = 'none';
                    employerFields.style.display = 'block';
                } else {
                    jobseekerFields.style.display = 'none';
                    employerFields.style.display = 'none';
                }
            });
        </script>
        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kayıt işlemi burada gerçekleştirilir
    // ...

    // Kullanıcının rolünü formdan alınan veriye göre ayarlayın
    $_SESSION['kullanici_rolu'] = $_POST['kullanici_rolu'];
    
}
?>

    </form>
    <?php include 'footer.php'; ?>

</body>
</html>
