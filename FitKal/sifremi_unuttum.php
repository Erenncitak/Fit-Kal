<?php

include("baglan.php");
include 'PHPMailer/src/SMTP.php';
include 'PHPMailer/src/PHPMailer.php';  
include 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

if(empty($_POST)) die();

print_r($_POST);

$email = $_POST['email'] ?? die();

if($email == "") die();

$stmt = $db->prepare("SELECT * FROM giris WHERE kullanici_mail = ?");
$stmt->bindParam(1, $email, PDO::PARAM_INT);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($stmt->rowCount() == 0) {
    echo "<script>alert('Bu maile ait bir hesap bulunamadı.!!')</script>";
}
else{
    $length = 5;  // Length of the random string
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $onay_kodu = '';

    for ($i = 0; $i < $length; $i++) {
        $onay_kodu .= $characters[rand(0, strlen($characters) - 1)];
    }

    $stmt = $db->prepare("UPDATE giris SET kod = ? WHERE kullanici_mail = ?");
    $stmt->bindParam(1,$onay_kodu, PDO::PARAM_STR);
    $stmt->bindParam(2,$email, PDO::PARAM_STR);

    if($stmt->execute()){
        $gmail = "fitttkall@gmail.com";
        $password = "dmjshdomyhodosjm";
        $mail = new PHPMailer();
        $mail->Host="smtp.gmail.com";
        $mail->Username=$gmail;
        $mail->Password=$password;
        $mail->Port=587;
        $mail->SMTPSecure='tls';
        $mail->isSMTP();
        $mail->SMTPAuth=true;
        $mail->isHTML(true);
        $mail->CharSet="UTF-8";
        $mail->setLanguage('tr','PHPMailer/language/');
        $mail->addAddress($email);
        $mail->setFrom($gmail);
        $mail->Subject='Şifremi Unuttum';
        $mesaj="Şifrenizi değiştirmek için onay kodunuz:".$onay_kodu;
        $mail->MsgHTML($mesaj);
        $mail_gonder = $mail->send();

        if ($mail_gonder) {
            echo "<script>alert('Onay kodunuz girmiş olduğunuz e-posta adresine gönderilmiştir..')</script>";
            header("Location: sifremi_unuttum_onay.php");
        } else {
            echo "<script>alert('Mail gönderiminiz başarısız oldu. Hata: " . $mail->ErrorInfo . "')</script>";
            header("Refresh:1; URL=giris.php");
        }
    }
    else{
        echo "<script>alert('Bir hata oluştu Giriş sayfasına yönlendiriliyorsunuz.!!')</script>";
        header("Location:giris.php");
    }
}


?>