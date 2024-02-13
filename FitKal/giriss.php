<?php

include("baglan.php");

// Oturum anahtarını doğrulama fonksiyonu
function verifySessionKeyDB($session_key) {
    global $db;
    $sorgu = $db->prepare('SELECT * FROM giris WHERE hatirlama_anahtari = ?');
    $sorgu->execute([$session_key]);
    return $sorgu->fetch(PDO::FETCH_ASSOC);
}

// Rastgele oturum anahtarı oluşturma fonksiyonu
function generateRandomKey() {
    return bin2hex(random_bytes(32));
}

session_start();

if (isset($_POST['giris'])) {
    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_sifre = $_POST['kullanici_sifre'];
    $kullanici_numarasi = $_POST['kullanici_mail'];

    if (empty($kullanici_mail) || empty($kullanici_sifre))
    {
        $_SESSION["message"] = 'Giriş için doldurulmamış alan bırakmayınız.!!';
        header("Location: giris.php");
        die();
    }
    else {

        $kullanici_sifre_hash = hash('sha256', $kullanici_sifre);

        $admin_sorgu = $db->prepare('SELECT * FROM adminler WHERE username = ?');
        $admin_sorgu->execute([$kullanici_mail]);
        $admin = $admin_sorgu->fetch(PDO::FETCH_ASSOC);

        if (!$admin) {
            $kullanici_sorgu = $db->prepare('SELECT * FROM giris WHERE kullanici_mail = ?');
            $kullanici_sorgu->execute([$kullanici_mail]);
            $kullanici = $kullanici_sorgu->fetch(PDO::FETCH_ASSOC);

            if (!$kullanici || $kullanici_sifre_hash !== $kullanici['kullanici_sifre']) {
                if (!$kullanici) {
                    $_SESSION["message"] = 'Kullanıcı bulunamadı. Lütfen e-posta adresinizi kontrol edin.!!';
                } else {
                    $_SESSION["message"] = 'Hatalı şifre girdiniz. Lütfen şifrenizi kontrol edin.!!';
                }
                header("Location: giris.php");
                die();
            }

            $isAdmin = false;
            $setUserID = $kullanici["kullanici_mail"];
            $setUserRealID = $kullanici["kullanici_id"];
        }else {

            if ($kullanici_sifre_hash !== $admin['password']) {
                $_SESSION["message"] = 'Hatalı şifre girdiniz. Lütfen şifrenizi kontrol edin.!!';
                header("Location: giris.php");
                die();
            }

            $isAdmin = true;
            $adminLogin = $admin['username'];
        }



        if($isAdmin) {
            $_SESSION['adminLogin'] = $adminLogin;
        }else {
            $_SESSION['UserID'] = $setUserID;
            $_SESSION['UserRealID'] = $setUserRealID;
        }


        if (isset($_POST['beni_hatirla'])) {
            if($isAdmin) {
                $NewToken = bin2hex(openssl_random_pseudo_bytes(32));
                $Insert2 = $db->prepare("INSERT INTO remember_me SET
            user_id = :bir,
            remember_token = :iki,
            expired_time = :uc,
            user_browser = :dort");
                $insert = $Insert2->execute(array(
                    "bir" => $adminLogin,
                    "iki" => $NewToken,
                    "uc" => time()+604800,
                    'dort' => md5($_SERVER['HTTP_USER_AGENT'])
                ));

                setcookie("rmbAdmin", $NewToken, time() + (86400 * 30), "/");
            }else {
                $NewToken = bin2hex(openssl_random_pseudo_bytes(32));
                $Insert2 = $db->prepare("INSERT INTO remember_me SET
                    user_id = :bir,
                    remember_token = :iki,
                    expired_time = :uc,
                    user_browser = :dort");
                $insert = $Insert2->execute(array(
                    "bir" => $kullanici_numarasi,
                    "iki" => $NewToken,
                    "uc" => time()+604800,
                    'dort' => md5($_SERVER['HTTP_USER_AGENT'])
                ));

                setcookie("rmb", $NewToken, time() + (86400 * 30), "/");
            }
        } else {
            setcookie("rmb", "", time() - 3600, "/");
            setcookie("rmbAdmin", "", time() - 3600, "/");
        }

        header("Location: index.php");
        exit;
    }
}
?>
