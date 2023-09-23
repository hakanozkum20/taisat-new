<?php
// Veritabanı bağlantısı için gerekli bilgiler
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "taisat"; // TODO: kendine ait db name eklenmeli

// Veritabanı bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if($conn-> connect_error){
    die("Veritabanı bağlantısı başarısız oldu: " . $conn->connect_error);
}



// Tablodan verileri seç
$sql = "SELECT * FROM contacts";
$sonuc = mysqli_query($conn, $sql);

// Veritabanındaki verileri ekrana yazdır
if ($sonuc) {
    while ($satir = mysqli_fetch_assoc($sonuc)) {
      echo "<tr>";
      echo "<td>İd: {$satir['id']}</td><br>";
      echo "<td>İsim: {$satir['isim']}</td><br>";
      echo "<td>Soyisim: {$satir['soyad']}</td><br>";
      echo "<td>E-mail: {$satir['email']}</td><br>";
      echo "<td>Telefon no: {$satir['tel']}</td><br>";
      echo "<td>Şirket Adı: {$satir['sirket']}</td><br>";
      echo "<td>Rol: {$satir['rol']}</td><br>";
      echo "<td>Konu: {$satir['konu']}</td><br>";
      echo "<td>Mesaj: {$satir['mesaj']}</td><br>";
      echo "</tr><hr>";
    }
  } else {
    echo "Veritabanında herhangi bir kayıt bulunamadı!";
  }

  // Veritabanı bağlantısını kapat
  mysqli_close($conn);

?>
