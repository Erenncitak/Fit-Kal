<?php

require_once "../database.php";

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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
}

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
    echo "<script>alert('Giriş için doldurulmamış alan bırakmayınız.!!')</script>";
} else {
    $password_hash = hash('sha256', $password);

    $kullanici_sorgu = $db->prepare('SELECT * FROM adminler WHERE username = ?');
    $kullanici_sorgu->execute([$username]);
    $kullanici = $kullanici_sorgu->fetch(PDO::FETCH_ASSOC);

    if (!$kullanici || $password_hash !== $kullanici['password']) {
        if (!$kullanici) {
            echo "<script>alert('Kullanıcı bulunamadı. Lütfen e-posta adresinizi kontrol edin.!!')</script>";
        } else {
            echo "<script>alert('Hatalı şifre girdiniz. Lütfen şifrenizi kontrol edin.!!')</script>";
        }
        header("Refresh:5; URL=giriss.php");
    } else {
        session_start();
        $_SESSION['adminLogin'] = $kullanici['username'];

        if (isset($_POST['beni_hatirla'])) {
            $NewToken = bin2hex(openssl_random_pseudo_bytes(32));
            $Insert2 = $db->prepare("INSERT INTO remember_me SET
                user_id = :bir,
                remember_token = :iki,
                expired_time = :uc,
                user_browser = :dort");
            $insert = $Insert2->execute(array(
                "bir" => $username,
                "iki" => $NewToken,
                "uc" => time()+604800,
                'dort' => md5($_SERVER['HTTP_USER_AGENT'])
            ));

            setcookie("rmbAdmin", $NewToken, time() + (86400 * 30), "/");
        } else {
            setcookie("rmbAdmin", "", time() - 3600, "/");
        }

        header("Location: index.php");
        exit;
    }
}

?>
