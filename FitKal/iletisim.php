<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/./navbar-footer.css" />
    <link rel="stylesheet" href="./styles/./iletisim.css" />
</head>

<body>
    <!-- navbar -->
    <?php
    include("navbar.php");
    ?>
    <div class="container-fluid header-con">
        <h1 class="text-center">İletişim</h1>
    </div>

    <div class="contact-form">
        <form action="iletisimm.php" method="POST" name="iletisim">
            <input type="text" name="kullanici_ad_soyad" id="ad" placeholder="Ad Soyad" />

            <input type="email" name="kullanici_mail" id="email" placeholder="E-mail" />

            <input type="text" name="kullanici_konu" id="konu" placeholder="Konu" />

            <textarea name="kullanici_mesaj" id="mesaj" cols="30" rows="10" placeholder="Mesajınız..."></textarea>

            <button type="submit" name="gonder">Gönder</button>
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

</html>