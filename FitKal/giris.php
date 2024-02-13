<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
require 'redirectIfLoggedIn.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <link rel="stylesheet" href="./styles/log-res.css" />
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <?php
    include("navbar.php");
    ?>

    <div class="container-fluid header-con">
        <h1 class="text-center">Giriş Yap</h1>
    </div>
    <!-- login -->
    <div class="container log-res-container">
        <form action="giriss.php" method="POST" name="giris">
            <fieldset>
                <input type="text" name="kullanici_mail" placeholder="E-mail" />
                <input type="password" name="kullanici_sifre" placeholder="Şifre" />
                <span class="benihatırla">
                    <span>
                        <label for="beni-hatirla">Beni Hatırla</label>
                        <input type="checkbox" id="beni-hatirla" class="form-checkbox" name="beni_hatirla" />
                    </span>
                </span>
                <button name="giris" type="submit" class="btn-login-register">Giriş Yap</button>
            </fieldset>
        </form>
        <form action="deneme.php" method="POST">
            <fieldset>
                <button name="sifremi_unuttum" type="submit">Şifremi Unuttum</button>
            </fieldset>
        </form>
    </div>

    <!-- footer -->
    <style>
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
    <?php
    include("footer.php");
    ?>
    <!-- navbar hide  -->
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-100px";
            }
            prevScrollpos = currentScrollPos;
        };
    </script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

<?php

if(isset($_SESSION["message"]))
{
    $message = $_SESSION["message"];
?>

    <script>window.alert('<?= $message ?>')</script>

<?php
    unset($_SESSION["message"]);
}
?>

</html>