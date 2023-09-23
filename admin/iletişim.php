<?php
  // Form verilerini al
  $ad = $_POST["isim"];
  $soyad = $_POST["soyisim"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $sirket = $_POST["sirket"];
  $rol = $_POST["rol"];
  $konu = $_POST["konu"];
  $mesaj = $_POST["mesaj"];
  // $dosya = $_POST["dosya"]; 
  // todo: üst tarafta dosya iççin yapılandırma gerek


  // Form verilerini ekrana yazdır
  echo "<p>Sayın $ad $soyad başvunuz için teşeküreler,</p>";
  
?>

<a align='center' href='gelenkutusu.php'>ANA MENU</a><br><br> 
 <!--todo ana menu hrefi düzeltilecek -->
<?php
// Veritabanı bağlantısı için gerekli bilgiler
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "taisat"; // TODO: kendine ait db name eklenmeli: notLive

// Veritabanı bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if($conn-> connect_error){
    die("Veritabanı bağlantısı başarısız oldu: " . $conn->connect_error);
}
// Veritabanına ekle
$sql = "INSERT INTO contacts (isim, soyad, email, tel, sirket,rol, konu, mesaj) VALUES ('$ad', '$soyad', '$email', '$tel', '$sirket', '$rol', '$konu', '$mesaj')";
$sonuc = mysqli_query($conn, $sql);

// Hata kontrolü
if ($sonuc === false) {
  echo "Veritabanına ekleme işlemi başarısız oldu!";
} else {
  echo "Veritabanına ekleme işlemi başarılı!";
}
// Veritabanı bağlantısını kapat
mysqli_close($conn);



?>

