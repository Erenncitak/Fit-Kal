<?php

require_once '../../database.php';
require_once '../checkAdmin.php';

$yorumId = $_POST["yorum_id"] ?? die();

$stmt = $db->prepare("UPDATE yorumlar SET onaylandi = 2 WHERE id = :yorumId");

$stmt->bindValue(':yorumId', $yorumId, PDO::PARAM_INT);

if($stmt->execute())
{
    $_SESSION["message"] = "Mesaj olumsuzlandı.";
}else {
    $_SESSION["message"] = "Mesaj olumsuzlanamadı.";
}

header("Location: index.php");
