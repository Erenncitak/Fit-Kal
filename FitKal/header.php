<?php
 
require_once 'database.php';

session_start();

// Oturumun zaten açılıp açılmadığını kontrol et
// SESSION'da UserId varsa zaten giriş yapılıdır,
// Yoksa beni hatırla için cookie'yi kontrol eder
if(!isset($_SESSION['UserID'])){
    // Eğer beni hatırla çerezi var ise.
    if (isset($_COOKIE['rmb']) && $_COOKIE['rmb'] != 'false') {
        $CookieToken = $_COOKIE['rmb']; // Çerez kodu.
        $Browser     = md5($_SERVER['HTTP_USER_AGENT']); // Tarayıcı bilgisi.
        $time        = time(); // Unix zaman.

        $query = $db->query("SELECT * FROM remember_me WHERE remember_token = '{$CookieToken}' and user_browser = '$Browser' and expired_time > $time ")->fetch(PDO::FETCH_ASSOC);

        // Eğer çerez kodu geçerli ise ve max oturum süresi 7 gün aşılmamış ise.
        if ($query) {
            $CookieUser = $query['user_id']; // Çereze ait kullanıcı id'si.

            // Çerezdeki kullanıcı id'sini veri tabanımızda sorguluyoruz.
            $CheckUser = $db->query("SELECT * FROM giris WHERE kullanici_mail = '{$CookieUser}' ")->fetch(PDO::FETCH_ASSOC);

            if ($CheckUser) {
                // Çerezdeki kullanıcı doğrulandıysa
                // SESSION değişkenine kullanıcıyı ata
                $_SESSION['Oturum'] = 'active';
                $_SESSION['UserID'] = $CheckUser['kullanici_mail'];
                $_SESSION['UserRealId'] = $CheckUser['kullanici_id'];
            }else{
                // Çerez geçersiz, çerezi sıfırla ve giriş sayfasına yönlendir.
                setcookie("rmb", 'false', time() -3600,'/');
            }
        }else{
            // Çerez geçersiz, çerezi sıfırla ve giriş sayfasına yönlendir.
            setcookie("rmb", 'false', time() -3600,'/');
        }
    }
}
