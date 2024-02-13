<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar-footer.css" />
    <title>Document</title>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-navbar fixed-top">
        <div class="container-fluid nav-con-flex">
            <a class="navbar-brand text-danger fw-bold font-monospace fs-4 d-flex align-items-center justify-content-between"
                href="./index.php">
                Fit Kal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex gap-2">
                    <li class="nav-item">
                        <a class="nav-link text-black text-capitalize fs-6" aria-current="page" href="./index.php">Ana
                            Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black text-capitalize fs-6" href="./hakkimizda.php">
                            Hakkımızda
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black text-capitalize fs-6" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Supplementler
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6"
                                    href="./proteinler.php">PROTEİN</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="./bcaa.php">
                                    BCAA
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="./gainer.php">
                                    GAİNER
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black text-capitalize fs-6" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Vitaminler
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="./avitamin.php">A
                                    VİTAMİNİ</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="./bvitamin.php">B
                                    VİTAMİNİ</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="./kvitamin.php">K
                                    VİTAMİNİ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black text-capitalize fs-6" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hesaplamalar
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="vucut-kitle.php">
                                    Vücut Kitle Endeksi
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="bazal-metobolizma.php">
                                    Bazal metabolizma hesaplama
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-black text-capitalize fs-6" href="kreatindozu.php">
                                    Günlük Kreatin Dozu Hesaplama
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black text-capitalize fs-6" aria-current="page"
                            href="./antrenmancesitleri.php">Antrenman Çeşitleri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black text-capitalize fs-6" aria-current="page"
                            href="./iletisim.php">İletişim</a>
                    </li>
                </ul>
                <!-- mobil için -->
                <div class="d-flex align-items-center justify-content-between gap-3 log-reg-mobile">
                    <a href="./giris.php" class="btn-login-register">Giriş Yap</a>
                    <a href="./kayit.php" class="btn-login-register">Kayıt Ol</a>
                </div>
                <!-- <div class="d-flex align-items-center justify-content-between gap-3 log-reg-mobile">
                    <a href="./kayit.php" class="btn-login-register">Çıkış Yap</a>
                </div> -->
            </div>
            <?php if (isset($_SESSION["UserID"])) : ?>
            <div class="d-flex align-items-center justify-content-between gap-3 log-reg-responsive">
                <a href="./cikis.php" class="btn-login-register">Çıkış Yap</a>
            </div>
            <?php elseif(isset($_SESSION["adminLogin"])): ?>
            <div class="d-flex align-items-center justify-content-between gap-3 log-reg-responsive">
                <a href="./admin/index.php" class="btn-login-register">Admin Panel</a>
                <a href="./cikis.php" class="btn-login-register">Çıkış Yap</a>
            </div>
            <?php else: ?>
            <div class="d-flex align-items-center justify-content-between gap-3 log-reg-responsive">
                <a href="./giris.php" class="btn-login-register">Giriş Yap</a>
                <a href="./kayit.php" class="btn-login-register">Kayıt Ol</a>
            </div>
            <?php endif; ?>
            <!-- <div class="d-flex align-items-center justify-content-between gap-3 log-reg-responsive">
                <a href="./giris.php" class="btn-login-out">Çıkış Yap</a>
            </div> -->
        </div>
    </nav>
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
</body>

</html>