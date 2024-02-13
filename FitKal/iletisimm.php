<?php

include 'PHPMailer/src/SMTP.php';
include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

if (isset($_POST['gonder'])) {

$gmail = "fitttkall@gmail.com";             // EMAIL HESABINIZ örnek@gmail.com
$password = "dmjshdomyhodosjm";          // GMAIL'in oluşturduğu app password
$fromName = "Fit Kal";   // Gönderen İsim

$kullanici_ad_soyad = $_POST['kullanici_ad_soyad'];
$kullanici_mail = $_POST['kullanici_mail'];
$kullanici_konu = $_POST['kullanici_konu'];
$kullanici_mesaj = $_POST['kullanici_mesaj'];


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
$mail->addAddress($gmail, $fromName);
$mail->setFrom($kullanici_mail , $kullanici_ad_soyad);
$mail->Subject='İletişim Formu';
$icerik="Ad ve Soyad: ".$kullanici_ad_soyad."<br>".
        "E-mail: ".$kullanici_mail."<br>".
        "Konu: ".$kullanici_konu."<br>".
        "Mesaj: ".$kullanici_mesaj."<br>";
$mail->MsgHTML($icerik);

$mail_gonder = $mail->send();

if ($mail_gonder) {
    echo "<script>alert('Mailiniz başarılı bir şekilde tarafımıza iletilmiştir.')</script>";
    header("Location:index.php");
} else {
    echo "<script>alert('Mail gönderiminiz başarısız oldu. Hata: " . $mail->ErrorInfo . "')</script>";
    header("Refresh:2; URL=giris.php");
}
/*


Mail gönderiminiz başarısız oldu. Hata: SMTP connect() fonksiyonu başarısız. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
*/
}
?>