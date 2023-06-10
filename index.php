<!DOCTYPE html>
<html>
<head>
    <title>İş Bulma Sitesi</title>
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

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        nav ul li {
            margin-right: 10px;
        }

        nav ul li:first-child {
            margin-right: auto;
        }

        nav ul li:last-child {
            margin-left: auto;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #fff;
            color: #333;
        }

        nav ul li a.jobseekers {
            background-color: #007bff;
        }

        nav ul li a.employers {
            background-color: #007bff;
        }

        nav ul li a.jobseekers:hover,
        nav ul li a.employers:hover {
            background-color: #0062cc;
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

        
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">AXTAR.AZ</a>
        <nav>
            <ul>
                <li><a href="giris_yap.php" class="btn">Giriş Yap</a></li>
                <li><a href="kayit_ol.php" class="btn">Kayıt Ol</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <nav>
            <ul>
                <li style="margin-right: 15px;"><a href="is_arayan.php" class="jobseekers">İş Arayanlar</a></li>
                <li style="margin-left: 15px;"><a href="is_veren.php" class="employers">İşverenler</a></li>
            </ul>
        </nav>

        <section id="jobseekers">
            
            <!-- İş arayanlar için ilanlar listesi veya diğer içerikler buraya gelebilir -->
        </section>

        <section id="employers">
           
            <!-- İşverenler için ilanlar listesi veya diğer içerikler buraya gelebilir -->
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
