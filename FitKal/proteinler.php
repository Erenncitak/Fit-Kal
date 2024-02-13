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
            <h1 class="text-center">Proteinler</h1>
        </div>
    </main>

    <div class="accordion-container w-full container my-5">
        <div class="img">
            <img src="https://i.hizliresim.com/p15h3ks.png" alt="">
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <span class="fw-bold"> PROTEİN TOZU NEDİR?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Protein tozu, sporcular ve egzersiz yapan bireyler için önemli bir besin
                                takviyesidir.
                                Bu tozlar, yüksek protein içeriğine sahip olan doğal kaynaklardan elde edilen bir
                                protein kaynağıdır. Protein, kasların onarılması, büyümesi ve güçlenmesi için temel
                                bir
                                yapı taşıdır.</li>
                            <li>Protein tozları, genellikle sütten veya bitkisel kaynaklardan elde edilen proteinden
                                üretilir.</li>
                            <li>Protein tozu, antrenman öncesi veya sonrasında kullanılabilir. Antrenman öncesi
                                tüketilen protein tozları, egzersiz sırasında enerji sağlamak ve kas kütlesinin
                                korunmasına yardımcı olmak amacıyla kullanılabilir. Antrenman sonrası tüketilen
                                protein
                                tozları ise kas iyileşmesini desteklemek, kas hasarını azaltmak ve kas kütlesini
                                artırmak için tercih edilir.</li>
                            <li>Protein tozlarının faydaları arasında kas kütlesinin artırılması, kas onarımı ve
                                yenilenmesinin desteklenmesi, spor performansının artırılması ve kaslardaki protein
                                sentezinin teşvik edilmesi yer alır. Ayrıca protein tozları, beslenme düzenindeki
                                protein alımını artırmak veya yeterli protein alımını sağlamak için kullanılabilir.
                            </li>
                            <li>Ancak, protein tozları tek başına mucize bir çözüm değildir ve dengeli bir beslenme
                                düzeniyle birlikte kullanılmalıdır. Protein tozlarının kullanımı, bireyin
                                hedeflerine,
                                aktivite seviyesine ve diyetine uygun olarak belirlenmelidir. Ayrıca, protein
                                tozlarının
                                kullanımıyla ilgili herhangi bir sağlık sorunu veya alerji durumu varsa, mutlaka bir
                                sağlık uzmanına danışılması önemlidir.</li>
                            <li>Sonuç olarak, protein tozları, sporcular ve egzersiz yapan kişiler için pratik ve
                                etkili
                                bir protein kaynağıdır. Ancak, doğru kullanımı ve dengeli bir beslenmeyle birlikte
                                tüketilmeleri önemlidir.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        <span class="fw-bold"> PROTEİN TOZU NASIL KULLANILIR?</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        1 servisi (1 ölçek; 75 cc = 30 gr) 150 mL su veya az yağlı sütle karıştırarak </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        <span class="fw-bold"> PROTEİN TOZU POZİTİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Kas Kütlesi ve Gücün Artırılması: Protein tozları, kasların onarımı ve büyümesi için
                                gereken temel amino asitleri sağlar. Düzenli olarak protein tozu tüketmek, kas
                                kütlesini
                                artırabilir ve gücü artırabilir.</li>
                            <li>Hızlı ve Kolay Sindirilebilirlik: Protein tozları, sıvı formda olduğu için sindirimi
                                kolaydır ve vücut tarafından hızla emilir. Bu, kaslara hızlı bir şekilde protein
                                sağlar
                                ve iyileşme sürecini destekler.</li>
                            <li>Beslenme Düzeneği için Kolaylık: Protein tozu, özellikle yoğun bir yaşam tarzı olan
                                bireyler için beslenme düzenlerine kolaylık sağlar. Hızlı bir şekilde hazırlanabilir
                                ve
                                yanınızda taşınabilir. Böylece protein alımınızı günlük olarak karşılamak daha kolay
                                olur.</li>
                            <li>Protein Alımının Artırılması: Protein tozları, normal diyetle alınan protein
                                miktarını
                                artırmanın etkili bir yoludur. Özellikle sporcular, yüksek protein ihtiyacını
                                karşılamak
                                için protein tozlarını tercih eder.</li>
                            <li>Uzun Süre Tokluk Hissi: Protein, diğer makro besin gruplarına kıyasla daha uzun süre
                                tok
                                kalmanızı sağlar. Bu nedenle protein tozu tüketmek, iştahı kontrol etmeye ve kilo
                                yönetimine yardımcı olabilir.</li>
                            <li>Çeşitli Seçenekler: Protein tozları, farklı protein kaynaklarından elde edilebilir.
                                Bu
                                da kullanıcılara tercih ettikleri protein kaynağına göre çeşitli seçenekler sunar.
                                Örneğin, whey protein, kazein, soya proteini, bezelye proteini gibi çeşitli protein
                                tozu
                                çeşitleri mevcuttur.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-secondary  text-white" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        <span class="fw-bold"> PROTEİN TOZU NEGATİF YÖNLERİ</span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
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
                            <?php if(isset($_SESSION["UserID"])): ?>
                            <div class="bg-light p-3 mb-3">
                                <form action="yorumPost.php" method="POST">
                                    <input type="hidden" name="redirect" value="proteinler.php">
                                    <input type="hidden" name="page_id" value="0">
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

                            $stmt = $db->prepare("SELECT yorumlar.yorum, yorumlar.created_at, giris.kullanici_ad FROM yorumlar LEFT JOIN giris ON giris.kullanici_id = yorumlar.user_id WHERE yorumlar.page_id = 0 AND yorumlar.onaylandi = 1 ORDER BY yorumlar.created_at ");
                            $stmt->execute();
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            setlocale(LC_TIME, 'tr_TR');

                            foreach ($results as $row):

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
                            <?php  endforeach;

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

    <?= require_once 'checkSessionMessage.php'; ?>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>