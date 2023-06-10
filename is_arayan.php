<!DOCTYPE html>
<html>
<head>
    <title>İş Arayanlar</title>
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

        .job-list {
            margin-top: 20px;
        }

        .job-list-item {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .job-list-item h3 {
            margin-top: 0;
        }

        .job-list-item p {
            margin-bottom: 5px;
        }

        .job-list-item .apply-btn {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .job-list-item .apply-btn:hover {
            background-color: #0062cc;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">AXTAR.AZ</a>
        <nav>
            <ul>
                <li><a href="giris_yap.php" class="btn">Giriş Yap</a></li>
                <li><a href="kayit_ol.php" class="btn">Kayıt Ol</a></li>
                <li><a href="elan_ekle.php" class="btn"> +ELAN</a></li>

                
            </ul>
        </nav>
    </header>
    <style>
    /* ... diğer stiller ... */

    .post-job-btn {
        background-color: #007bff;
        color: #fff;
        padding: 6px 16px;
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin-top: 20px;
        cursor: pointer;
    }

    .post-job-btn:hover {
        background-color: #0062cc;
    }
</style>

            
            <!-- İş arayanların ilanları listesi veya diğer içerikler buraya gelebilir -->
            <div class="job-list">
                <div class="job-list-item">
                    <h3>Web Developer</h3>
                    <p>Firma: ABC Company</p>
                    <p>Lokasyon: İstanbul</p>
                    <p>Pozisyon: Tam Zamanlı</p>
                    <button class="apply-btn">Başvur</button>
                </div>
                <div class="job-list-item">
                    <h3>Grafik Tasarımcı</h3>
                    <p>Firma: XYZ Agency</p>
                    <p>Lokasyon: Ankara</p>
                    <p>Pozisyon: Yarı Zamanlı</p>
                    <button class="apply-btn">Başvur</button>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
