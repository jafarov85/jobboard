
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php"; // Bağlantı bilgilerini içeren dosyayı dahil edin

// Bağlantıyı oluşturun
$conn = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol edin
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

// Diğer veritabanı işlemlerini gerçekleştirin

// Bağlantıyı kapatın
mysqli_close($conn);



// Formdan gelen verileri alalım
$adi = $_POST['adi'];
$soyadi = $_POST['soyadi'];
$baba_adi = $_POST['baba_adi'];
$cinsiyet = $_POST['cinsiyet'];
$dogum_yili = $_POST['dogum_yili'];
$sehir = $_POST['sehir'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$ilan = $_POST['ilan'];
$mezuniyet = $_POST['mezuniyet'];
$maas = $_POST['maas'];
$is_tecrubesi = $_POST['is_tecrubesi'];
$aciklama = $_POST['aciklama'];

// Veritabanına kaydetme veya başka işlemleri gerçekleştirme işlemlerini burada yapabilirsiniz

// Örnek olarak, form verilerini ekrana yazdıralım
echo "Adı: " . $adi . "<br>";
echo "Soyadı: " . $soyadi . "<br>";
echo "Baba Adı: " . $baba_adi . "<br>";
echo "Cinsiyet: " . $cinsiyet . "<br>";
echo "Doğum Yılı: " . $dogum_yili . "<br>";
echo "Yaşadığı Şehir: " . $sehir . "<br>";
echo "E-posta: " . $email . "<br>";
echo "Telefon Numarası: " . $telefon . "<br>";
echo "Başvurduğu İş İlanı: " . $ilan . "<br>";
echo "Mezuniyet Durumu: " . $mezuniyet . "<br>";
echo "Talep Edilen Maaş: " . $maas . "<br>";
echo "İş Tecrübesi: " . $is_tecrubesi . "<br>";
echo "Kendiniz Hakkında Daha Fazla Bilgi: " . $aciklama . "<br>";
?>

<style>
    /* Formun genel stilini ayarlayalım */
form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

/* Form elemanlarının stilini ayarlayalım */
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

select {
  width: 100%;
  padding: 8px;
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

</style>