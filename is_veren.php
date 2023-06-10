<!DOCTYPE html>
<html>
<head>
    <title>İş Bulma Sitesi - İşverenler</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        main {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        h1, h2, h3 {
            margin-top: 0;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 400px;
            max-width: 100%;
        }

        label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">AXTAR.AZ</a>
    </header>

    <main>
        <h1>İşverenler</h1>

        <form action="ilan_kaydet.php" method="post">
            <label for="is_pozisyonu">İş Pozisyonu:</label>
            <input type="text" id="is_pozisyonu" name="is_pozisyonu" required>

            <label for="is_aciklamasi">İş Açıklaması:</label>
            <textarea id="is_aciklamasi" name="is_aciklamasi" rows="4" required></textarea>

            <label for="sirket">Şirket:</label>
            <input type="text" id="sirket" name="sirket" required>

            <label for="sehir">Şehir:</label>
            <input type="text" id="sehir" name="sehir" required>

            <label for="maas">Maaş:</label>
            <input type="text" id="maas" name="maas" required>

            <label for="basvuru_sonu">Başvuru Sonu:</label>
            <input type="date" id="basvuru_sonu" name="basvuru_sonu" required>

            <input type="submit" value="İlan Ver">
        </form>
    </main>
</body>
</html>
