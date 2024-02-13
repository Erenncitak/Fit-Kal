<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <link rel="stylesheet" href="./styles/proteinler.css" />
    <link rel="stylesheet" href="./styles/snackbar.css">

    <title>Gainer</title>
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
            <h1 class="text-center">GAİNER</h1>
        </div>
    </main>

    <div class="accordion-container container my-5">
        <div class="img">
            <img src="https://i.hizliresim.com/h5l2vwb.png" alt="">
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="fw-bold">GAİNER NEDİR?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Gainer (kilo aldırıcı), sporcuların kilo kazanma ve kas kütlesini artırma amacıyla
                                kullandığı bir besin takviyesidir. Gainer'lar, yüksek kalori, protein, karbonhidrat ve
                                bazen yağ içeren bir tozdur. Bu takviye, yoğun antrenman yapan veya zorlu fiziksel
                                aktivitelerle uğraşan bireylerin enerji ihtiyacını karşılamak için kullanılır.</li>
                            <li>Gainer'lar, kilo almak isteyen bireylere ekstra kalori ve besin sağlamak amacıyla
                                kullanılır. Yoğun antrenmanlar kasların enerji depolarını tüketir ve kaslardaki protein
                                sentezini artırır. Gainer'lar, bu enerji depolarını ve protein sentezini yenilemek için
                                ideal bir seçenektir.</li>
                            <li>Genellikle gainer'lar, karbonhidratlar ve proteinler açısından zenginleştirilmiş bir toz
                                formunda bulunur. Yüksek kalori içeriği, vücut ağırlığını artırmaya yardımcı olurken,
                                protein içeriği de kasların onarılması ve büyümesi için gerekli olan temel yapı
                                taşlarını sağlar. Karbonhidratlar ise enerji ihtiyacını karşılamak ve hızlı sindirim
                                için kullanılır. </li>
                            <li>Gainer'lar, antrenman sonrası hızlı bir şekilde alınarak kas onarımını destekler ve
                                antrenman öncesi veya ara öğünlerde tüketilebilir. Bu takviye, kilo kazanmak isteyen
                                sporcular için özellikle pratik bir seçenektir, çünkü normal bir diyetle yeterli kalori
                                ve besin almak zor olabilir.</li>
                            <li>Ancak, gainer'ların dikkatli bir şekilde kullanılması önemlidir. Her bireyin ihtiyaçları
                                farklı olduğundan, doğru dozaj ve kullanım şekli belirlenmelidir. Ayrıca, kilo
                                kazanmanın sağlıklı ve dengeli bir şekilde gerçekleşmesi için gainer'ların tam bir
                                beslenme düzeniyle birlikte kullanılması önerilir.</li>
                            <li>Gainer'ları kullanmadan önce ürün etiketini dikkatlice okumak, doğru dozajı belirlemek
                                ve sağlık uzmanıyla danışmak önemlidir. Ayrıca, gainer'lar yüksek kalorili olduğundan,
                                kilo kontrolü gerektiren bireylerin dikkatli olması ve gerektiğinde uzmana danışması
                                önemlidir.</li>
                            <li>Sonuç olarak, gainer'lar kilo kazanma ve kas kütlesini artırma amacıyla kullanılan bir
                                besin takviyesidir. Doğru şekilde kullanıldığında, kilo alımı ve kas büyümesine destek
                                olabilir. Ancak, kişisel ihtiyaçlarınıza ve sağlık durumunuza uygun kullanımını sağlamak
                                için bir uzmana danışmak önemlidir.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        GAİNER NASIL KULLANILIR?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        1 servisi (5 ölçek:200 g) damak tadınıza göre 375-500 mL su veya süt ile karıştırarak
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        GAİNER POZİTİF YÖNLERİ
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Kalori İhtiyacını Karşılar: Gainer'lar, kilo kazanma amacıyla kullanıldığında yüksek
                                kalori içeriğiyle dikkat çeker. Yoğun antrenman yapan veya hızlı kilo almak isteyen
                                bireyler için kalori ihtiyacını karşılamak önemlidir. Gainer'lar, ekstra kalori
                                sağlayarak bu ihtiyacı karşılamaya yardımcı olabilir.</li>
                            <li>Kas Kütlesini Artırır: Gainer'lar, yüksek protein içeriği sayesinde kas kütlesinin
                                artmasını destekleyebilir. Protein, kas onarımı ve büyümesi için temel yapı taşıdır.
                                Gainer'lar, antrenman sonrası alındığında kasların iyileşmesini hızlandırabilir ve kas
                                kütlesinin artmasına yardımcı olabilir.</li>
                            <li>Hızlı Enerji İçerir: Gainer'lar, içerdikleri karbonhidratlar sayesinde hızlı ve
                                kullanılabilir enerji sağlar. Yoğun fiziksel aktiviteler sırasında enerji depoları
                                tükenir ve bu depoların hızlı bir şekilde yenilenmesi gereklidir. Gainer'lar, antrenman
                                öncesi veya sırasında tüketildiğinde enerji ihtiyacını karşılayabilir.</li>
                            <li>Pratik Kullanım Sağlar: Gainer'lar, kolayca hazırlanabilen toz formunda gelir ve sıvıyla
                                karıştırılarak tüketilir. Bu, sporcular için pratik bir seçenek oluşturur. Özellikle
                                kilo almak isteyen bireyler için, normal bir diyetle yeterli kalori almak zor olabilir.
                                Gainer'lar, ekstra kalori sağlamak ve beslenme düzenine kolaylıkla entegre olmak için
                                kullanılabilir.</li>
                            <li>Besin Takviyesi Sağlar: Gainer'lar, içerdikleri vitaminler, mineraller ve diğer besin
                                maddeleri sayesinde beslenmeyi destekleyici bir rol oynayabilir. İyi kalite gainer'lar,
                                dengeli bir beslenme düzeninin bir parçası olarak kullanıldığında vücudun besin
                                ihtiyaçlarını karşılamaya yardımcı olabilir.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        BCAA NEGATİF YÖNLERİ
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Yüksek Kalori İçeriği: Gainer'lar genellikle yüksek kalorili ürünlerdir. Bu, kilo
                                kontrolü veya kilo verme hedefi olan bireyler için sorun olabilir. Gainer'ların aşırı
                                tüketimi, beklenenden daha fazla kalori alımına ve kilo artışına neden olabilir.</li>
                            <li>Karbonhidrat Ağırlığı: Gainer'lar, genellikle yüksek karbonhidrat içeriğiyle dikkat
                                çeker. Karbonhidratlar, enerji sağlama amacıyla kullanıldığında ve gereğinden fazla
                                tüketildiğinde kilo artışına yol açabilir. Aşırı karbonhidrat tüketimi, kan şekerinin
                                dalgalanmasına ve insülin seviyelerinin yükselmesine de neden olabilir.</li>
                            <li>Sindirim Sorunları: Gainer'lar, bazı bireylerde sindirim sorunlarına yol açabilir.
                                Yüksek miktarlarda karbonhidrat ve proteinin hızlı bir şekilde tüketilmesi, sindirim
                                sisteminin zorlanmasına ve sindirim sorunlarına neden olabilir. Bu durum, şişkinlik,
                                gaz, mide rahatsızlığı veya sindirim güçlükleri şeklinde kendini gösterebilir.</li>
                            <li>Ekstra Katkı Maddeleri: Bazı gainer'lar, tatlandırıcılar, renklendiriciler, koruyucular
                                ve diğer katkı maddeleri içerebilir. Bu ek maddeler, bazı bireylerde alerjik
                                reaksiyonlara veya hassasiyetlere neden olabilir. Bu nedenle, gainer seçimi yaparken,
                                içeriğini dikkatlice incelemek ve kaliteli markaları tercih etmek önemlidir.</li>
                            <li>Gerçek Yiyeceklerin Yerine Geçebilir: Gainer'lar, tam bir besin çeşitliliği sağlamazlar.
                                Bazı bireyler, gainer'ları tamamen gerçek yiyeceklerin yerine geçirmeye eğilimli
                                olabilir. Bu durumda, diğer besin öğeleri ve mikrobesin maddeleri eksik kalabilir. Bu
                                nedenle, gainer'ları tam bir beslenme düzeninin bir parçası olarak kullanmak ve gerçek
                                gıdalarla zenginleştirmek önemlidir.</li>
                            <li>Sağlık Sorunlarıyla İlişkisi: Bazı kişilerde böbrek rahatsızlıkları, karaciğer
                                hastalıkları veya metabolik bozukluklar gibi belirli sağlık sorunları varsa,
                                gainer'ların tüketimiyle ilgili riskler olabilir. Bu gibi durumlarda, bir sağlık
                                uzmanına danışmak ve önerilerini almak önemlidir.</li>
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
                                        <input type="hidden" name="redirect" value="gainer.php">
                                        <input type="hidden" name="page_id" value="2">
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

                            $stmt = $db->prepare("SELECT yorumlar.yorum, yorumlar.created_at, giris.kullanici_ad FROM yorumlar LEFT JOIN giris ON giris.kullanici_id = yorumlar.user_id WHERE yorumlar.page_id = 2 AND yorumlar.onaylandi = 1 ORDER BY yorumlar.created_at ");
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

    <?= require_once 'checkSessionMessage.php'; ?>


    <!-- navbar hide  -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>