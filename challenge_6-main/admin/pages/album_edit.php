<?php

if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
  echo "<script>
           alert('U heeft geet toegang tot deze pagins.');
           location.href='../index.php';
         </script>";
}
$sql = "SELECT * FROM autos_test WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($_GET['id']));
$autos = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($autos as $auto) {
?>
  <div class="content">
    <form name="edit" class="form" action="index.php?page=album_update" method="POST">
      <p id="page_titel">Edit auto's</p>
      <input type="hidden" name="id" id="id" value="<?php echo $auto['id']; ?>" />
      <label>Naam:</label>
      <input type="text" name="naam" id="naam" value="<?php echo $auto['naam']; ?>" />
      <label>Foto:</label>
      <input type="file" name="image" id="image" value="<?php echo $auto['foto']; ?> " />
      <label>Merken:</label>
      <input type="text" name="merk" id="merk" value="<?php echo $auto['merken']; ?>" />
      <label>Bouw Jaar:</label>
      <input type="text" name="jaar" id="jaar" value="<?php echo $auto['jaar']; ?>" />
      <label>Prijs:</label>
      <input type="text" name="prijs" id="prijs" value="<?php echo $auto['prijs']; ?>" />
      <label>Brand stof:</label>
      <input type="text" name="brandstof" id="brandstof" value="<?php echo $auto['brand stof']; ?>" />
      <label>New/Twee hands:</label>
      <input type="text" name="new/twee" id="brandstof" value="<?php echo $auto['new/twee']; ?>" />
      <br />
      <div class="icon_container">
        <input type="submit" class="icon" id="submit" name="submit" value="&rarr;" />
      </div>
      <a href="index.php?page=albums">Terug</a>
    </form>
  </div>
<?php
}
?>