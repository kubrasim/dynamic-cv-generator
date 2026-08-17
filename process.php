<?php
include('config.php'); // 'dahil et' yerine 'include'

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = mysqli_real_escape_string($baglanti, $_POST['ad']);
    $email = mysqli_real_escape_string($baglanti, $_POST['email']);
    $telefon = mysqli_real_escape_string($baglanti, $_POST['telefon']);
    $egitim = mysqli_real_escape_string($baglanti, $_POST['egitim']);
    $deneyim = mysqli_real_escape_string($baglanti, $_POST['deneyim']);
    $yetenekler = mysqli_real_escape_string($baglanti, $_POST['yetenekler']);

    // Fotoğraf Yükleme İşlemi
    $foto_adi = "default.png";
    if(isset($_FILES['profil_foto']) && $_FILES['profil_foto']['error'] == 0){
        $dosya_adi = $_FILES['profil_foto']['name']; // 'isim' yerine 'name'
        $gecici_yol = $_FILES['profil_foto']['tmp_name'];
        $foto_adi = time() . "_" . $dosya_adi; // 'zaman()' yerine 'time()'
        move_uploaded_file($gecici_yol, "uploads/" . $foto_adi); // 'yüklenenler' klasör adın 'uploads' olmalı
    }

    // SQL Sorgusu (İngilizce komutlar: INSERT INTO ... VALUES)
    $sql = "INSERT INTO cv (ad, email, telefon, egitim, deneyim, yetenekler, fotograf) 
            VALUES ('$ad', '$email', '$telefon', '$egitim', '$deneyim', '$yetenekler', '$foto_adi')";

    if (mysqli_query($baglanti, $sql)) {
        $son_id = mysqli_insert_id($baglanti);
        header("Location: view.php?id=$son_id"); // 'başlık' yerine 'header'
    } else { // 'başka' yerine 'else'
        echo "Hata: " . mysqli_error($baglanti);
    }
}
?>