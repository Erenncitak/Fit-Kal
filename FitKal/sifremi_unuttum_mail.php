<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <div>
    <input type="password" name="yeni_sifre" placeholder="Yeni Şifreniz"></input>
    <br>
    <input type="password" name="yeni_sifre2" placeholder="Yeni Şifrenizin Tekrarı"></input>
    </div>
    <button name="sifre_degis">Şifreyi Değiştir</button>

    </form>
</body>
</html>

<?php

session_start();

include("baglan.php");

if(isset($_POST["sifre_degis"])){

    $yeni_sifre1=$_POST["yeni_sifre"];
    $yeni2_sifre=$_POST["yeni_sifre2"];
    if($yeni_sifre1!="" && $yeni_sifre2!=""){

        if($yeni2_sifre==$yeni_sifre1){

            $db->query("UPDATE giris SET kullanici_sifre='".hash('sha256', $yeni_sifre1)."', kod='' where kullanici_mail='".$eposta."'");

        }
        else{
            echo "<script>alert('Şifreler bir birleri ile uyuşmuyor.!!')</script>";
        }
    }
    else{
        echo "<script>alert('Doldurulmamış alan bırakmayınız.!!')</script>";
    }
    

}
?>
