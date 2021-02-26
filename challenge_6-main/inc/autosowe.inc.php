<?php

$id = $_POST['id'];


// $merk = $_POST['merk'];
$sql = "SELECT * FROM autos_test where id = '$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
foreach ($result as $key => $row) {
    $id = $row['id'];
    $naam = $row['naam'];
    $img = $row['foto'];
    $img_2 = $row['foto_2'];
    $img_3 = $row['foto_3'];
    $merken = $row['merken'];
    $newoud = $row['new_twee'];
    $brandstiof = $row['brand_stof'];
    $prijs = $row['prijs'];
    $jaar = $row['jaar'];
    include("sowe.php");
}
?>