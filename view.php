<?php
include('config.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sorgu = mysqli_query($baglanti, "SELECT * FROM cv WHERE id = $id");
$veri = mysqli_fetch_assoc($sorgu);

if (!$veri) { 
    die("Hata: CV bulunamadı. Lütfen list.php üzerinden geçerli bir kayıt seçin."); 
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($veri['ad']); ?> - CV</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style id="theme-style">
        :root { --main-color: #1a2a3a; }
        body { background: #f0f2f5; font-family: 'Poppins', sans-serif; margin: 0; padding: 40px; }
        
        /* CV Kağıt Yapısı */
        .cv-main { width: 210mm; background: white; display: flex; min-height: 297mm; margin: 0 auto; box-shadow: 0 0 20px rgba(0,0,0,0.1); position: relative; }
        
        /* Sol Sütun */
        .left-col { width: 35%; background: var(--main-color); color: white; padding: 40px 30px; transition: 0.3s; }
        .profile-img { width: 160px; height: 160px; background: white; border-radius: 50%; margin: 0 auto 30px; overflow: hidden; border: 5px solid #fff; }
        .profile-img img { width: 100%; height: 100%; object-fit: cover; }
        .left-col h2 { font-size: 18px; border-bottom: 1px solid #ffffff44; padding-bottom: 5px; margin-top: 30px; text-transform: uppercase; }
        .left-col p { font-size: 13px; line-height: 1.6; color: #ced4da; margin-bottom: 10px; }
        
        /* Sağ Sütun */
        .right-col { width: 65%; padding: 50px; color: #333; }
        .right-col h1 { font-size: 36px; margin: 0; color: var(--main-color); text-transform: uppercase; font-weight: 600; }
        .section-title { font-size: 18px; color: var(--main-color); border-bottom: 2px solid var(--main-color); padding-bottom: 5px; margin-top: 40px; margin-bottom: 15px; font-weight: 600; text-transform: uppercase; }
        .content { font-size: 14px; line-height: 1.6; color: #555; white-space: pre-line; padding: 5px; min-height: 20px; }
        
        /* Düzenleme Modu Efekti */
        [contenteditable="true"]:hover { background: rgba(0,0,0,0.02); outline: 1px dashed #ccc; cursor: text; }

        /* Araç Çubuğu */
        .toolbar { position: fixed; top: 20px; right: 20px; display: flex; gap: 10px; z-index: 100; }
        .btn { padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; color: white; font-weight: bold; font-size: 12px; text-decoration: none; }
        .btn-print { background: #27ae60; }
        .btn-blue { background: #1a2a3a; }
        .btn-red { background: #c0392b; }
        .btn-list { background: #7f8c8d; }
        
        @media print { 
            .toolbar { display: none; } 
            body { padding: 0; background: white; } 
            .cv-main { box-shadow: none; width: 100%; margin: 0; } 
        }
    </style>
</head>
<body>

<div class="toolbar">
    <button class="btn btn-blue" onclick="changeColor('#1a2a3a')">Lacivert Tema</button>
    <button class="btn btn-red" onclick="changeColor('#c0392b')">Kırmızı Tema</button>
    <button class="btn btn-print" onclick="window.print()">PDF OLARAK İNDİR</button>
    <a href="list.php" class="btn btn-list">Yönetim Paneli</a>
</div>

<div class="cv-main">
    <!-- Sol Sütun -->
    <div class="left-col">
        <div class="profile-img">
            <img src="uploads/<?php echo $veri['fotograf']; ?>" alt="Profil">
        </div>
        
        <h2>İletişim</h2>
        <p contenteditable="true">📞 <?php echo htmlspecialchars($veri['telefon']); ?></p>
        <p contenteditable="true">📧 <?php echo htmlspecialchars($veri['email']); ?></p>
        <p contenteditable="true">📍 Konum: Şehir, Türkiye</p>
        
        <h2>Eğitim</h2>
        <div class="content" contenteditable="true"><?php echo nl2br(htmlspecialchars($veri['egitim'])); ?></div>

        <h2>Yetenekler</h2>
        <div class="content" contenteditable="true"><?php echo str_replace(',', '<br>• ', htmlspecialchars($veri['yetenekler'])); ?></div>
    </div>

    <!-- Sağ Sütun -->
    <div class="right-col">
        <h1 contenteditable="true"><?php echo htmlspecialchars($veri['ad']); ?></h1>
        
        <div class="section-title">Profil</div>
        <div class="content" contenteditable="true">Profesyonel gelişimine önem veren, takım çalışmasına yatkın ve çözüm odaklı biriyim. Kendimi sürekli geliştirmeyi ve yeni teknolojilere adapte olmayı vizyon edindim.</div>

        <div class="section-title">İş & Staj Deneyimleri</div>
        <div class="content" contenteditable="true"><?php echo nl2br(htmlspecialchars($veri['deneyim'])); ?></div>

        <!-- Referans Bölümü: Kullanıcı istemezse içeriği silince başlık da kaybolabilir veya direkt buradan silebilir -->
        <div id="ref-section">
            <div class="section-title" contenteditable="true">Referanslar</div>
            <div class="content" contenteditable="true">İstek üzerine sunulacaktır.</div>
        </div>
    </div>
</div>

<script>
    // Tema Rengini Değiştirme Fonksiyonu
    function changeColor(color) {
        document.documentElement.style.setProperty('--main-color', color);
    }

    // Küçük bir ipucu: Eğer Referanslar başlığına tıklayıp içini tamamen silersen 
    // PDF alırken o kısım boş görünür.
</script>
</body>
</html>