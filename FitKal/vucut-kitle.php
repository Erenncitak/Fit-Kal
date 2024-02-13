<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <link rel="stylesheet" href="./styles/vucut-kitle.css" />
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <?php
  include("navbar.php");
  ?>
    <!-- navbar end -->
    <main>
        <div class="container-fluid header-con">
            <h1 class="text-center">Vücut Kitle Endeksi Hesaplama</h1>
        </div>
    </main>
    <!-- vücut kitle endeksi -->
    <section class="v-kitle-hesap">
        <div class="container">
            <label for="gender">Cinsiyet:</label>
            <select id="gender">
                <option value="male">Erkek</option>
                <option value="female">Kadın</option>
            </select>
            <label for="weight">Kilo (kg):</label>
            <input type="number" id="weight" step="0.01" />
            <label for="height">Boy (cm):</label>
            <input type="number" id="height" step="0.01" />
            <button id="calculate">Hesapla</button>
            <div id="result"></div>
        </div>
    </section>

    <!-- footer -->
    <?php
  include("footer.php");
  ?>
    <!-- footer end -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- bootstrap js end -->

    <!-- vücut kitle endeksi js -->
    <script src="v-kitle.js"></script>
</body>

</html>