<!DOCTYPE html>
<html lang="en">

<?php

require_once '../database.php';
require_once 'checkAdmin.php';

$sayfalar = [
    "Proteinler",
    "BCAA",
    "Gainer",
    "A Vitamin",
    "B Vitamin",
    "C Vitamin"
];

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <title>Yorum Onay</title>
</head>

<body>
<div class="container-fluid header-con">
    <h1 class="text-center">Admin</h1>
</div>
<style>
    .header-con {
        background: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        backdrop-filter: blur(10px);
        padding: 1.5rem;
    }

    .header-con h1 {
        font-size: 2.5rem;
        font-weight: 600;
        color: #131b41;
        letter-spacing: 2px;
        text-shadow: 0 0 3px #4b5069;
        text-align: center;
    }

    .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55;
    }


    .yorum_mini {
        width: 200px;
        height: 100px;
        overflow: hidden;
    }

    .yorum_mini textarea {
        width: 100%;
        max-height: 100px;
        resize: none;
        border: none;
        outline: none;
    }

    .yorum_mini textarea:focus {
        border: none;
        outline: none;
    }

    .name {
        width: 100px;
        overflow: hidden;
    }

    .durum {
        width: 100px;
    }

    td,
    th {
        vertical-align: middle !important;
    }
</style>
<div class="container">
    <table class="table mt-5">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Adı Soyad</th>
            <th scope="col">Sayfa</th>
            <th scope="col">Yorum</th>
            <th scope="col">Durum</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $stmt = $db->prepare("SELECT yorumlar.id, yorumlar.yorum, yorumlar.created_at, giris.kullanici_ad, yorumlar.page_id FROM yorumlar LEFT JOIN giris ON giris.kullanici_id = yorumlar.user_id WHERE yorumlar.onaylandi = 0 ORDER BY yorumlar.created_at ");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        setlocale(LC_TIME, 'tr_TR');

        foreach ($results as $row):

            $timestamp = strtotime($row["created_at"]);
            $formattedDate = strftime('%e %B %Y', $timestamp);
            $formattedDate = mb_convert_case($formattedDate, MB_CASE_TITLE, "UTF-8");

            ?>
            <tr>
                <th scope="row" style="width: 25px;"><?= $row['id'] ?></th>
                <td class="name" style="width: 10%"><?= htmlspecialchars($row["kullanici_ad"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="name" style="width: 10%"><?= $sayfalar[$row["page_id"]] ?></td>
                <td class="yorum_mini" style="width: 70%">
                    <?= htmlspecialchars($row["yorum"], ENT_QUOTES, 'UTF-8'); ?>
                </td>
                <td class="durum">
                    <div class="d-flex align-items-center gap-3">
                        <form action="yorumlar/onayla.php" method="POST">
                            <input type="hidden" name="yorum_id" value="<?= $row['id'] ?>">
                            <button class="btn btn-success" type="submit">Onayla</button>
                        </form>
                        <form action="yorumlar/olumsuz.php" method="POST">
                            <input type="hidden" name="yorum_id" value="<?= $row['id'] ?>">
                            <button class="btn btn-danger" type="submit">Olumsuz</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
</body>

</html>