<?php
include('config.php');

// Silme işlemi
if(isset($_GET['sil'])) {
    $sil_id = intval($_GET['sil']);
    mysqli_query($baglanti, "DELETE FROM cv WHERE id = $sil_id");
    header("Location: list.php");
}

$sorgu = mysqli_query($baglanti, "SELECT * FROM cv ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>CV Yönetim Paneli</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; border-radius: 8px; overflow: hidden; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #1a2a3a; color: white; }
        .btn { padding: 5px 10px; border-radius: 4px; text-decoration: none; color: white; font-size: 13px; }
        .btn-view { background: #3498db; }
        .btn-delete { background: #e74c3c; margin-left: 5px; }
    </style>
</head>
<body>
    <div style="max-width: 1000px; margin: 50px auto;">
        <h2>Daha Önce Oluşturulan CV'ler</h2>
        <a href="index.html" style="color: #3498db;">+ Yeni CV Oluştur</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Ad Soyad</th>
                <th>E-posta</th>
                <th>İşlemler</th>
            </tr>
            <?php while($satir = mysqli_fetch_assoc($sorgu)) { ?>
            <tr>
                <td>#<?php echo $satir['id']; ?></td>
                <td><?php echo $satir['ad']; ?></td>
                <td><?php echo $satir['email']; ?></td>
                <td>
                    <a href="view.php?id=<?php echo $satir['id']; ?>" class="btn btn-view">Görüntüle</a>
                    <a href="list.php?sil=<?php echo $satir['id']; ?>" class="btn btn-delete" onclick="return confirm('Silmek istediğine emin misin?')">Sil</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>