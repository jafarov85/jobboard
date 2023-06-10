<!DOCTYPE html>
<html>
<head>
    <title>İş Bulma Sitesi - İş İlanı Ekle</title>
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
            margin: 20px; 
   }

        nav {
    background-color: #333;
   
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
        }

        input[type="text"],
        textarea,
        input[type="date"] {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
        }

        /* Ek CSS stillerini burada tanımlayabilirsiniz */
    </style>
</head>
<body>
    <header>
        <!-- Sayfa başlığı, menü vb. bileşenler burada yer alabilir -->
    </header>

    <main>
       

        <form action="ilan_kaydet.php" method="post">
            <label for="baslik">Başlık:</label>
            <input type="text" id="baslik" name="baslik" required>

          

            <label for="sirket">Şirket:</label>
            <input type="text" id="sirket" name="sirket" required>

            <label for="sehir">Şehir:</label>
            <input type="text" id="sehir" name="sehir" required>

            <label for="maas">Maaş:</label>
            <input type="text" id="maas" name="maas" required>

            <label for="basvuru_sonu">Başvuru Sonu:</label>
            <input type="date" id="basvuru_sonu" name="basvuru_sonu" required>

            <label for="aciklama">Açıklama:</label>
            <textarea id="aciklama" name="aciklama" rows="4" required></textarea>
            

            <input type="submit" value="İlanı Kaydet">
        </form>
    </main>

    <footer>
        <!-- Sayfa alt bilgisi burada yer alabilir -->
    </footer>
</body>
</html>
