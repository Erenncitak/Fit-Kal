<?php
// veritabanı bağlantısını sağlıyorum
include("baglan.php");
// text boxlara girilen verileri veritabanıma aktarıyorum
if (isset($_POST['kayit'])) {
    $kullanici_ad = $_POST['kullanici_ad'];
    $kullanici_soyad = $_POST['kullanici_soyad'];
    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_sifre = $_POST['kullanici_sifre'];
    // texboxlar boş bırakıldığı takdirde bir hata mesajı vermesi için bir if bloğu kullanıyorum
    if (empty($kullanici_ad) || empty($kullanici_soyad) || empty($kullanici_mail) || empty($kullanici_sifre)) {
        echo "<script>alert('Kayıt için doldurulmamış alan bırakmayınız.!!')</script>";
        // mail formatında olup olmadığını kontrol ediyorum
    } elseif (!filter_var($kullanici_mail, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Geçerli bir e-posta adresi giriniz.!!')</script>";
    } else {
        // Kullanıcının şifresini sha256 kullanarak güvenli hale getiriyorum.
        $kullanici_sifre_hash = hash('sha256', $kullanici_sifre);
        // girilen verileri veritabanıma kaydediyorum 
        $sorgu = $db->prepare('INSERT INTO giris SET kullanici_ad = ?, kullanici_soyad = ?, kullanici_mail = ?, kullanici_sifre = ?');
        $ekle = $sorgu->execute([$kullanici_ad, $kullanici_soyad, $kullanici_mail, $kullanici_sifre_hash]);
        
        header("Location: index.php");
        if ($ekle) {
            echo "<script>alert('Kayıt başarılı bir şekilde gerçekleşmiştir.!!')</script>";
            // işlem tamamlandığına anasayfaya yönelendirme işlemi yapıyorum
            header("Location: index.php");
        } else {
            echo "<script>alert('Hata var, kontrol ediniz.!!')</script>";
        }
    }
}

?>
