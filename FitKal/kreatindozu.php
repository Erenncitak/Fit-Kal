<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <link rel="stylesheet" href="./styles/bazal-m.css" />
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
            <h1 class="text-center">Günlük Kreatin Dozu Hesaplama
            </h1>
        </div>
    </main>
    <div class="form-container">
        <form id="bmr-form" class="container">
            <div class="form-group">
                <label for="weight">Ağırlık (kg):</label>
                <input type="number" class="form-control" id="weight" name="weight" required />
            </div>

            <button onclick="kreatinHesap();    " type="button" class="btn btn-primary" id="calculate">
                Hesapla
            </button>
            <p class="mt-3" id="result"></p>
        </form>
    </div>
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
    <script src="kreatinhesap.js"></script>
</body>

</html>