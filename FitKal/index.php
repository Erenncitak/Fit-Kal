<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/snackbar.css">
    <title>Ana Sayfa</title>
</head>

<body>
    <div id="snackbar"></div>
    <?php
    include("navbar.php");
    ?>
    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" style="height: 100vh">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100 d-flex">
            <div class="carousel-item">
                <img src="https://i.hizliresim.com/4ljs2vm.png" class="d-block w-100 h-100 object-fit-cover" alt="GYM" />
            </div>
            <div class="carousel-item active">
                <img src="https://i.hizliresim.com/iydvx7n.jpg" class="d-block w-100 h-100 object-fit-cover" alt="GYM" />
            </div>
            <div class="carousel-item">
                <img src="https://i.hizliresim.com/n4ee6jh.png" class="d-block w-100 h-100 object-fit-cover" alt="GYM" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- hakkımızda ana sayfa -->
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-photo/healthy-food-with-exercise-equipment-measuring-tape-stethoscope_23-2147882202.jpg?w=1380&t=st=1691431398~exp=1691431998~hmac=a6da755acb985ec5dd0fc8297b1f39e1c90f1857453cebc2d3ff4aef70f9565c" class="img-fluid" alt="GYM" />
                </div>
                <div class="col-md-6 main-about-us">
                    <h1 class="text-center">Fit Kal</h1>
                    <p class="text-center">
                        Merhaba ve fitness dünyasına hoş geldiniz! Biz, sağlıklı yaşamı ve
                        fiziksel kondisyonu önemseyen bireylerin ihtiyaçlarına yönelik bir
                        kaynak sunmak amacıyla bu platformu oluşturduk. Fit Kal adını
                        taşıyan bu web sitesi, sağlıklı yaşam tarzını benimseyen herkes
                        için güvenilir bilgi kaynağı, hesaplamalar ve topluluk etkileşimi
                        alanıdır. Amacımız, fitness yolculuğunuzu daha anlamlı ve bilinçli
                        hale getirmenize yardımcı olmak ve bu yolda size rehberlik
                        etmektir. Fit Kal, fitness dünyasına giriş yapmak isteyen bireyler
                        için de bir başlangıç noktasıdır.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn-main-about">Hakkımızda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hesaplama kartları -->
    <div class="container-calc">
        <h1>Hesaplamalarımız</h1>
        <div class="squares">
            <div class="square">
                <a href="./vucut-kitle.php">
                    <img src="https://i.hizliresim.com/61iv6nv.png" alt="calculation">
                    <p>
                        Vücut Kitle Endeksi Hesaplama
                    </p>
                </a>
            </div>
            <div class="square">
                <a href="./bazal-metobolizma.php">
                    <img src="https://i.hizliresim.com/61iv6nv.png" alt="calculation">
                    <p>
                        Bazal Metabolizma Hızı Hesaplama
                    </p>
                </a>
            </div>
            <div class="square">
                <a href="./kreatindozu.php">
                    <img src="https://i.hizliresim.com/61iv6nv.png" alt="calculation">
                    <p>
                        Günlük Kreatin Dozu Hesaplama
                    </p>
                </a>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <?= require_once 'checkSessionMessage.php'; ?>
</body>

</html>