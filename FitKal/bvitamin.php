<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <link rel="stylesheet" href="./styles/proteinler.css" />
    <link rel="stylesheet" href="./styles/snackbar.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

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
            <h1 class="text-center">B Vitamini</h1>
        </div>
    </main>

    <div class="accordion-container w-full container my-5">
        <div class="img">
            <img src="https://www.healthkart.com/connect/wp-content/uploads/2022/02/900x500_banner_HK-Connect_vitamin-b-food-sources.jpg" alt="">
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="fw-bold"> B VİTAMİNİ NEDİR?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>B1 Vitamini (Tiamin): Karbonhidratların enerjiye dönüştürülmesi süreçlerine katkıda
                                bulunur. Sinir sistemi sağlığı için önemlidir.
                            </li>
                            <li>B2 Vitamini (Riboflavin): Enerji üretiminde rol alır, hücrelerin sağlıklı büyümesine ve
                                onarımına katkıda bulunur.
                            </li>
                            <li>B3 Vitamini (Niasin): Enerji metabolizması için önemlidir ve hücresel işlevlerin
                                sürdürülmesine yardımcı olur. Aynı zamanda kolesterol seviyelerinin düzenlenmesine de
                                etkisi olabilir.
                            </li>
                            <li>B5 Vitamini (Pantotenik Asit): Metabolizmada rol alır ve enerji üretim süreçlerine
                                katkıda bulunur. Ayrıca yağ asidi sentezi ve hücresel büyüme için gereklidir.
                            </li>
                            <li>B6 Vitamini (Piridoksin): Protein, yağ ve karbonhidrat metabolizmasında görev alır.
                                Sinir sistemi sağlığı için önemlidir ve serotonin üretimine yardımcı olabilir.
                            </li>
                            <li>B7 Vitamini (Biotin): Besinlerin enerjiye dönüşümüne yardımcı olur, saç ve cilt sağlığı
                                için önemlidir.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="fw-bold"> B VİTAMİNİ POZİTİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Enerji Üretimi: B vitaminleri, besinlerden elde edilen karbonhidratları, yağları ve
                                proteinleri enerjiye dönüştürme süreçlerine katkıda bulunur. Bu sayede vücut, enerji
                                üretimini etkin bir şekilde sağlayabilir.
                            </li>
                            <li>Sinir Sistemi Sağlığı: Özellikle B1 (tiamin), B6 (piridoksin) ve B12 (kobalamin) gibi
                                vitaminler, sinir sistemi sağlığını destekler. Sinir hücrelerinin iletişimi, sinir
                                impuls iletimi ve nöronların korunması için önemlidirler.
                            </li>
                            <li>B3 Vitamini (Niasin): Enerji metabolizması için önemlidir ve hücresel işlevlerin
                                sürdürülmesine yardımcı olur. Aynı zamanda kolesterol seviyelerinin düzenlenmesine de
                                etkisi olabilir.
                            </li>
                            <li>Hücresel Büyüme ve Onarım: B vitaminleri, hücresel büyüme ve onarım süreçlerine katkıda
                                bulunur. Özellikle hızla bölünen hücreler için (örneğin deri ve mukoza hücreleri)
                                gereklidir.
                            </li>
                            <li>DNA Sentezi: B9 (folik asit) ve B12 (kobalamin) gibi vitaminler, DNA sentezi ve hücre
                                bölünmesi için kritiktir. Bu nedenle hücresel bölünme ve genetik materyal üretimi için
                                önemlidirler.
                            </li>
                            <li>Kan Hücresi Oluşumu: B9 (folik asit) ve B12 (kobalamin), kırmızı kan hücrelerinin
                                oluşumu için gereklidir. Bu vitaminlerin eksikliği, kansızlık riskini artırabilir.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="fw-bold"> B VİTAMİNİ NEGATİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Toksik Etki: B vitaminleri suda çözünen vitaminlerdir, bu nedenle genellikle aşırı
                                alımları vücut tarafından atılır. Ancak özellikle B6 (piridoksin) vitamini aşırı
                                alındığında toksisiteye yol açabilir. Aşırı B6 vitamini alımı sinir sistemi
                                bozukluklarına (nörotoksisite) neden olabilir ve belirtiler arasında uyuşukluk,
                                karıncalanma ve kas zayıflığı bulunabilir.
                            </li>
                            <li>İlaç Etkileşimleri: B vitaminleri, bazı ilaçlarla etkileşime girebilir. Örneğin, B6
                                vitamini bazı ilaçların etkisini azaltabilir veya artırabilir. Bu nedenle B vitamini
                                takviyeleri kullanırken doktorunuzun önerilerine uymak önemlidir.
                            </li>
                            <li>Gebelik ve Emzirme Dönemi: Özellikle B3 (niasin) ve B6 (piridoksin) vitamini yüksek
                                dozda alındığında, gebelik ve emzirme dönemi için riskli olabilir. Aşırı alım, bebekte
                                doğum kusurları veya sinir sistemi sorunlarına yol açabilir.
                            </li>
                            <li>Alerjik Reaksiyonlar: B vitaminleri genellikle doğal gıdalarda bulunurlar ve takviye
                                formlarının alerjik reaksiyonlara yol açma riski düşüktür. Ancak bazı kişilerde nadir
                                durumlarda alerjik reaksiyonlar görülebilir.
                            </li>
                            <li>Mide Rahatsızlıkları: Yüksek dozda B vitamini takviyeleri almak, bazı kişilerde mide
                                rahatsızlıklarına (örneğin mide bulantısı, kusma) yol açabilir.
                            </li>
                            <li>Eksiklik Belirtileri Maskelenmesi: B vitaminleri genellikle vücutta eksiklik durumlarını
                                gidermek için kullanılır. Ancak aşırı alım, eksiklik belirtilerini maskeleyebilir ve
                                gerçek sorunları tespit etmeyi zorlaştırabilir.
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
                                        <input type="hidden" name="redirect" value="bvitamin.php">
                                        <input type="hidden" name="page_id" value="4">
                                        <div class="d-flex flex-row align-items-start mb-3">
                                            <img class="rounded-circle me-3" src="https://i.hizliresim.com/5gfdr2p.png" width="40">
                                            <textarea name="yorum" class="form-control ml-1 shadow-none textarea flex-grow-1"></textarea>
                                        </div>
                                        <div class="mb-1 text-right d-flex gap-2">
                                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Yorum
                                                Yap</button>
                                            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">İptal</button>
                                        </div>
                                    </form>
                                </div>
                            <?php endif; ?>
                            <?php

                            $stmt = $db->prepare("SELECT yorumlar.yorum, yorumlar.created_at, giris.kullanici_ad FROM yorumlar LEFT JOIN giris ON giris.kullanici_id = yorumlar.user_id WHERE yorumlar.page_id = 4 AND yorumlar.onaylandi = 1 ORDER BY yorumlar.created_at ");
                            $stmt->execute();
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            setlocale(LC_TIME, 'tr_TR');

                            foreach ($results as $row) :

                                $timestamp = strtotime($row["created_at"]);

                                $formattedDate = strftime('%e %B %Y', $timestamp);

                                $formattedDate = mb_convert_case($formattedDate, MB_CASE_TITLE, "UTF-8");
                            ?>
                                <div class="yorum">
                                    <div class="d-flex flex-row user-info"><img class="rounded-circle me-2" src="https://i.hizliresim.com/5gfdr2p.png" width="40">
                                        <div class="d-flex flex-column justify-content-start ml-2">
                                            <span class="d-block font-weight-bold name"><?= htmlspecialchars($row["kullanici_ad"], ENT_QUOTES, 'UTF-8'); ?></span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <?= require_once 'checkSessionMessage.php'; ?>
</body>

</html>