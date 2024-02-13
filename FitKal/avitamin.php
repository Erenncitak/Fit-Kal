<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <link rel="stylesheet" href="./styles/proteinler.css" />
    <link rel="stylesheet" href="./styles/snackbar.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <title>Proteinler</title>
</head>

<body>
    <div id="snackbar"></div>
    <!-- navbar -->
    <?php
    include("navbar.php");
    ?>

    <!-- main -->
    <main>
        <div class="container-fluid header-con">
            <h1 class="text-center">A Vitamini</h1>
        </div>
    </main>

    <div class="accordion-container w-full container my-5">
        <div class="img">
            <img src="https://i.hizliresim.com/8spnrf3.png" alt="">
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <span class="fw-bold"> A VİTAMİNİ NEDİR?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Retinol: Retinol, A vitamini türevlerinden biridir ve vücutta en iyi kullanılan formdur.
                                Görme fonksiyonları, bağışıklık sistemi ve hücresel büyüme üzerinde etkili olabilir.
                            </li>
                            <li>
                                Retinal (Retinaldehit): Bu bileşik, retina hücrelerinde ışığın algılanmasına yardımcı
                                olan fotoreseptörlerde önemli bir rol oynar. Görme işlevi için gereklidir.
                            </li>
                            <li>
                                Retinoik Asit: Bu form, deri sağlığını destekler ve hücresel gelişim süreçlerine
                                katılır. Özellikle cilt hücrelerinin yenilenmesinde ve doku onarımında önemlidir.
                            </li>
                            <li>
                                Beta-Karoten: Bu provitamin A türevidir, yani vücut tarafından aktif A vitaminiye
                                dönüştürülebilir. Beta-karoten, renkli meyve ve sebzelerde bol miktarda bulunur ve
                                antioksidan özelliklere sahiptir. Ayrıca vücutta gerektiğinde A vitaminiye
                                dönüştürülerek kullanılabilir.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <span class="fw-bold"> A VİTAMİNİ POZİTİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Eksiklik Durumlarının Giderilmesi: A vitamini eksikliği, gece körlüğü, kornea kuruluğu
                                ve cilt problemleri gibi sağlık sorunlarına yol açabilir. A vitamini eksikliği durumunda
                                takviyeler, bu problemleri gidermeye yardımcı olabilir.
                            </li>
                            <li>
                                Göz Sağlığını Desteklemek: A vitamini, görme fonksiyonları için kritiktir. Özellikle
                                retinal formu olan retinaldehit, retina hücrelerinde ışığın algılanmasına yardımcı olur.
                                Bu nedenle A vitamini takviyeleri, görme sağlığını destekleyebilir.
                            </li>
                            <li>
                                Bağışıklık Sistemini Güçlendirmek: A vitamini, mukoza zarlarının korunmasında ve
                                bağışıklık sistemini güçlendirmede önemli bir rol oynar. Bu sayede enfeksiyonlara karşı
                                direnç artırılabilir.</li>
                            <li>
                                Cilt Sağlığını Desteklemek: Retinoik asit, cilt hücrelerinin yenilenmesini destekler ve
                                cilt dokusunun onarılmasına yardımcı olabilir. Bu nedenle A vitamini içeren cilt bakım
                                ürünleri veya takviyeler, cilt sağlığını desteklemekte kullanılabilir.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <span class="fw-bold"> PROTEİN TOZU NEGATİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Toksisite ve Zehirlenme: A vitamini, yağda çözünen bir vitamindir ve vücutta
                                depolanabilir. Aşırı miktarda A vitamini takviyesi almak, vücutta birikimine ve
                                toksisiteye yol açabilir. Bu durum, ciddi sağlık sorunlarına neden olabilir. Aşırı A
                                vitamini alımının belirtileri arasında bulantı, kusma, baş dönmesi, karaciğer hasarı,
                                saç dökülmesi, cilt döküntüleri ve hatta kemik anomalileri yer alabilir.
                            </li>
                            <li>
                                Gebelik Riski: Gebelik sırasında aşırı miktarda A vitamini alımı, fetüsün gelişimini
                                olumsuz etkileyebilir. Özellikle hamilelikte yüksek doz A vitamini takviyeleri
                                kullanımı, doğum kusurları riskini artırabilir. Bu nedenle hamilelik döneminde A
                                vitamini takviyeleri almadan önce mutlaka bir doktora danışılmalıdır.
                            </li>
                            <li>
                                İlaç Etkileşimleri: Bazı ilaçlarla A vitamini takviyelerinin etkileşime girebileceği
                                unutulmamalıdır. Özellikle kan sulandırıcı ilaçlar, bağışıklık sistemini baskılayan
                                ilaçlar veya retinoik asit içeren akne tedavisi ilaçları gibi ilaçlarla etkileşimler
                                olabilir.
                            </li>
                            <li>
                                Cilt Sağlığını Desteklemek: Retinoik asit, cilt hücrelerinin yenilenmesini destekler ve
                                cilt dokusunun onarılmasına yardımcı olabilir. Bu nedenle A vitamini içeren cilt bakım
                                ürünleri veya takviyeler, cilt sağlığını desteklemekte kullanılabilir.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fu mt-5">
            <div class="d-flex justify-content-center row">
                <div class="">
                    <div class="d-flex flex-column comment-section ">
                        <div class="bg-white p-2 d-flex flex-column">
                            <?php if (isset($_SESSION["UserID"])) : ?>
                            <div class="bg-light p-3 mb-3">
                                <form action="yorumPost.php" method="POST">
                                    <input type="hidden" name="redirect" value="avitamin.php">
                                    <input type="hidden" name="page_id" value="3">
                                    <div class="d-flex flex-row align-items-start mb-3">
                                        <img class="rounded-circle me-3" src="https://i.hizliresim.com/5gfdr2p.png"
                                            width="40">
                                        <textarea name="yorum"
                                            class="form-control ml-1 shadow-none textarea flex-grow-1"></textarea>
                                    </div>
                                    <div class="mb-1 text-right d-flex gap-2">
                                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Yorum
                                            Yap</button>
                                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none"
                                            type="button">İptal</button>
                                    </div>
                                </form>
                            </div>
                            <?php endif; ?>
                            <?php

                            $stmt = $db->prepare("SELECT yorumlar.yorum, yorumlar.created_at, giris.kullanici_ad FROM yorumlar LEFT JOIN giris ON giris.kullanici_id = yorumlar.user_id WHERE yorumlar.page_id = 3 AND yorumlar.onaylandi = 1 ORDER BY yorumlar.created_at ");
                            $stmt->execute();
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            setlocale(LC_TIME, 'tr_TR');

                            foreach ($results as $row) :

                                $timestamp = strtotime($row["created_at"]);

                                $formattedDate = strftime('%e %B %Y', $timestamp);

                                $formattedDate = mb_convert_case($formattedDate, MB_CASE_TITLE, "UTF-8");
                            ?>
                            <div class="yorum">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle me-2"
                                        src="https://i.hizliresim.com/5gfdr2p.png" width="40">
                                    <div class="d-flex flex-column justify-content-start ml-2">
                                        <span
                                            class="d-block font-weight-bold name"><?= htmlspecialchars($row["kullanici_ad"], ENT_QUOTES, 'UTF-8'); ?></span>
                                        <span class="date text-black-50"><?= $formattedDate ?></span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text">
                                        <?= htmlspecialchars($row["yorum"], ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;

                            $stmt->closeCursor();

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    include("footer.php");
    ?>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <?= require_once 'checkSessionMessage.php'; ?>
</body>

</html>