<?php

include("baglan.php");
if(empty($_POST)) die();

$onay_kodu = $_POST["onay_kodu"] ?? die();
$yeni_sifre = $_POST["yeni_sifre"] ?? die();

$stmt = $db->prepare("SELECT * FROM giris WHERE kod = ?");
$stmt->bindParam(1, $onay_kodu);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$userId = null;

session_start();

if ($stmt->rowCount() == 0) {
    $_SESSION["message"] = 'Geçersiz kod!';
}else {
    $userId = $results[0]["kullanici_id"];

    $newPass = hash('sha256', $yeni_sifre);

    $stmt = $db->prepare("UPDATE giris SET kullanici_sifre = ? WHERE kullanici_id = ?");
    $stmt->bindParam(1, $newPass);
    $stmt->bindParam(2, $userId, PDO::PARAM_INT);

    if($stmt->execute())
    {
        $_SESSION["message"] = 'Şifreniz değiştirildi!';
        header("Location: index.php");
        die();
    }else {
        $_SESSION["message"] = 'Şifre değiştirilemedi!';
        header("Location: sifremi_unuttum_onay.php");
        die();
    }
}

header("Location: sifremi_unuttum_onay.php");

