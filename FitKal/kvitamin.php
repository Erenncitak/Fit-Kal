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
            <h1 class="text-center">K Vitamini</h1>
        </div>
    </main>

    <div class="accordion-container w-full container my-5">
        <div class="img">
            <img src="https://i.hizliresim.com/dvcskqi.png" alt="">
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="fw-bold"> K VİTAMİNİ NEDİR?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                K1 Vitamini (Fitonadion): Bu form, genellikle yeşil yapraklı sebzelerde, özellikle
                                ıspanak, lahana ve brokoli gibi bitkisel kaynaklarda bulunur. Kan pıhtılaşmasında rol
                                oynar ve genellikle bitkisel gıdalardan alınır.
                            </li>
                            <li>K2 Vitamini (Menakinon): Bu form, bakteri fermentasyonu yoluyla oluşur ve genellikle
                                hayvansal kaynaklı gıdalarda bulunur. Ayrıca bağırsaklardaki bazı bakteriler tarafından
                                da üretilebilir. K2 vitamini, kemik sağlığını desteklemede ve kalsiyum metabolizmasını
                                düzenlemede önemlidir.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="fw-bold"> K VİTAMİNİ POZİTİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                Kan Pıhtılaşması: K vitamini, kanın pıhtılaşma sürecinde önemli bir rol oynar. Kanın
                                yara yüzeyinde pıhtılaşmasını destekler ve yaraların iyileşmesini sağlar. Bu, kanamaları
                                önlemek için kritik bir faktördür.
                            </li>
                            <li>Kemik Sağlığı: K2 vitamini, kalsiyumun kemiklere yönlendirilmesine yardımcı olarak kemik
                                sağlığını destekler. Kalsiyum, kemiklerin güçlendirilmesi için önemlidir ve K2 vitamini
                                bu işlemi düzenlemeye yardımcı olabilir.
                            </li>
                            <li>Kalsiyum Düzenlemesi: K2 vitamini, kalsiyumun vücut içinde düzenlenmesine yardımcı olur.
                                Bu, kemiklerin sağlıklı oluşumu ve diş sağlığı için önemlidir. Ayrıca, aşırı kalsiyum
                                birikiminin yumuşak doku kalsifikasyonunu (sertleşme) önlemesine yardımcı olabilir.
                            </li>
                            <li>Kardiyovasküler Sağlık: Bazı araştırmalar, K2 vitamini takviyelerinin kalp sağlığını
                                destekleyebileceğini ve arterlerin kalsifikasyonunu önleyebileceğini göstermektedir. Bu,
                                kardiyovasküler hastalıkların riskini azaltmaya yardımcı olabilir.
                            </li>
                            <li>Antioksidan Etki: K vitamini, antioksidan özelliklere sahip olabilir ve hücresel
                                oksidatif stresin azaltılmasına yardımcı olabilir. Bu, hücrelerin sağlığını koruma
                                açısından önemlidir.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="fw-bold"> K VİTAMİNİ NEGATİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Kan İncelemelerini Etkileme: K vitamini, kan pıhtılaşmasını desteklerken aynı zamanda
                                kanı inceltici ilaçların etkisini zayıflatabilir. Bu nedenle kan sulandırıcı ilaçlar
                                kullanan kişilerin K vitamini alımını dikkatli bir şekilde yönetmeleri önemlidir.
                            </li>
                            <li>İlaç Etkileşimleri: K vitamini, bazı ilaçlarla etkileşime girebilir. Özellikle kan
                                pıhtılaşmasını etkileyen ilaçlarla etkileşim riski vardır. Bu nedenle K vitamini
                                takviyeleri kullanırken doktorunuzun önerilerine uymak önemlidir.
                            </li>
                            <li>Yüksek Dozda K Vitamini Takviyeleri: Aşırı miktarda K vitamini takviyesi almanın nadiren
                                olumsuz etkilere yol açabileceği düşünülmektedir. Ancak normal beslenme yoluyla alınan K
                                vitamini genellikle bu riskleri taşımaz.
                            </li>
                            <li>Gebelik ve Emzirme: Aşırı K vitamini alımı, gebelik ve emzirme dönemlerinde riskli
                                olabilir. Özellikle yüksek dozda K vitamini takviyeleri kullanmamak önemlidir.
                            </li>
                            <li>Alerjik Reaksiyonlar: K vitamini takviyeleri, genellikle vücutta düşük riskli alerjik
                                reaksiyonlara yol açar. Ancak bazı insanlarda nadir durumlarda alerjik reaksiyonlar
                                görülebilir
                            </li>
                            <li>Bağırsak Sorunları: K vitamini bağırsak yoluyla emilir, bu nedenle ciddi bağırsak
                                sorunları olan kişilerde emilim sorunları yaşanabilir. Ancak genellikle normal beslenme
                                yoluyla alınan K vitamini bu sorunları minimize eder.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="fw-bold"> PROTEİN TOZU NEGATİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Kalori İçeriği: Protein tozları genellikle düşük karbonhidrat ve yağ içerir, ancak
                                kalori içeriği yüksek olabilir. Özellikle kilo verme amacı güden bireyler için,
                                yüksek
                                kalorili protein tozlarının fazla tüketimi kilo kontrolünü zorlaştırabilir.</li>
                            <li>Sindirim Sorunları: Bazı insanlar protein tozlarına karşı hassasiyet veya sindirim
                                sorunları geliştirebilir. Bu, gaz, şişkinlik, mide rahatsızlığı veya sindirim
                                sorunlarına neden olabilir. Özellikle whey protein hassasiyeti veya laktoz
                                intoleransı
                                olan kişilerde bu sorunlar daha yaygın olabilir.</li>
                            <li>Ek Madde İçeriği: Bazı protein tozları, tatlandırıcılar, renklendiriciler,
                                koruyucular
                                ve diğer katkı maddeleri içerebilir. Bu ek maddeler bazı insanlarda alerjik
                                reaksiyonlara veya duyarlılıklara neden olabilir.</li>
                            <li>Protein Kaynağı Sorunları: Bazı protein tozları, doğal olmayan veya düşük kaliteli
                                protein kaynaklarından elde edilebilir. Bu, bazı insanlar için sindirim sorunlarına
                                veya
                                alerjik reaksiyonlara neden olabilir. Bu yüzden protein tozu seçerken, kaliteli ve
                                güvenilir markalara yönelmek önemlidir.</li>
                            <li>Yetersiz Besin Çeşitliliği: Protein tozlarının kullanımı, tam bir besin
                                çeşitliliğini
                                sağlamak için gerçek yiyecekleri tamamen değiştirirse, diğer besin öğeleri ve
                                mikrobesin
                                maddeleri eksik kalabilir. Bu nedenle, protein tozları, dengeli bir beslenme
                                düzeninin
                                bir parçası olarak kullanılmalı ve gerçek gıdalarla zenginleştirilmelidir.</li>
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
                                        <input type="hidden" name="redirect" value="cvitamin.php">
                                        <input type="hidden" name="page_id" value="5">
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

                            $stmt = $db->prepare("SELECT yorumlar.yorum, yorumlar.created_at, giris.kullanici_ad FROM yorumlar LEFT JOIN giris ON giris.kullanici_id = yorumlar.user_id WHERE yorumlar.page_id = 5 AND yorumlar.onaylandi = 1 ORDER BY yorumlar.created_at ");
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