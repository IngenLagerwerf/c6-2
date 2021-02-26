
<?php
$sql = "SELECT * FROM autos";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
foreach ($result as $key => $row) {
    $merken = $row['merken'];
    include("template.php");
}
$sql = "SELECT * FROM automerken where $merken = merken";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
foreach ($result as $key => $row) {
    echo "<br/>";
    $id = $row['id'];
    $merken = $row['merken'];
    $blob = $row['image'];
    $image = $row['image'];
    // $image = addslashes(file_get_contents($_FILES['image']));
    // $image = base64_encode($image);
    // $sql = "INSERT INTO `imagenes` (`imagen`,)  VALUES ('$image',)";
    // header('Content-Type: img/jpeg');
    include("template.php");
}
?>
