<?php

require_once '../../database.php';
require_once '../checkAdmin.php';

$yorumId = $_POST["yorum_id"] ?? die();

$stmt = $db->prepare("UPDATE yorumlar SET onaylandi = 1 WHERE id = :yorumId");

$stmt->bindValue(':yorumId', $yorumId, PDO::PARAM_INT);

if($stmt->execute())
{
    $_SESSION["message"] = "Mesaj onaylandı.";
}else {
    $_SESSION["message"] = "Mesaj onaylanamadı.";
}

header("Location: index.php");
