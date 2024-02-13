<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/hakkimizda.css">
    <title>Hakkımızda</title>
</head>

<body>
    <!-- navbar -->
    <?php
    include("navbar.php");
    ?>

    <main>
        <div class="container-fluid header-con">
            <h1 class="text-center">Hakkımızda</h1>
        </div>
    </main>
    <section>
        <div class="container my-5" id="abouttextstyle">
            <div class="row">
                <div class="col-md-6 p-4 p-sm-5 order-2 order-sm-1">
                    <h1 class="h2 mb-4" style="font-weight: 600;color: #000;">Misyonumuz</h1>
                    <p class="text-Emphasis " style="line-height: 2;">
                        Fit Kal olarak amacımız, sporun ve sağlıklı yaşam tarzının gücünü herkese ulaştırmak. İnsanları harekete geçmeye teşvik ederek, sağlıklı yaşam alışkanlıkları oluşturmalarına yardımcı olmak ve toplumun genel refahına katkıda bulunmak istiyoruz. Sporu yaşam tarzı haline getirerek daha sağlıklı, mutlu ve enerjik bir toplum yaratmayı hedefliyoruz.
                        Sevgi ve Sporla Kalın,
                        Fit Kal Ekibi
                    </p>

                </div>
                <div class="col-md-6 p-0 text-center order-1 order-sm-2">
                    <img src="https://i.hizliresim.com/b5112dr.png" class="w-100" alt="">
                </div>

                <div class="col-md-6 p-0 text-center">
                    <img src="https://i.hizliresim.com/6u47nvx.png" class="w-100" alt="">
                </div>
                <div class="col-md-6 p-4 p-sm-5">
                    <h1 class="h2 mb-4" style="font-weight: 600;color: #000;">Hakkımızda</h1>
                    <p class="text-Emphasis " style="line-height: 2;">Hoş geldiniz!

                    Fit Kal olarak, sporun ve sağlıklı yaşam tarzının gücüne inanıyoruz. Sayfamızda, sporun fiziksel ve zihinsel faydalarını keşfederken, beslenme, antrenman çeşitleri ve supplement kullanımı gibi konularda rehberlik sunuyoruz. Sağlıklı yaşam hedeflerinizi desteklemek ve spor tutkusunu paylaşmak için buradayız. Sizlerle birlikte büyümek ve ilham almak için sabırsızlanıyoruz!

                    Sevgi ve Sporla Kalın,
                    Fit Kal Ekibi
                    </p>
                </div>
            </div>
        </div>



    </section>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <?php
    include("footer.php");
    ?>

</body>

</html>