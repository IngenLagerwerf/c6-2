<?php

if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
    echo "<script>
           alert('U heeft geet toegang tot deze pagins.');
           location.href='../index.php';
         </script>";
}
$sql = "DELETE FROM autos_test WHERE id = ?";
$stmt = $pdo->prepare($sql);
try {
    $stmt->execute(array($_GET['id']));
    echo "<script>
           alert('Album is verwijdered.');
           location.href='index.php?page=albums';
        </script>";
} catch (PDOException $e) {
    echo $e->getmessage();
}
