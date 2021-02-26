<?php

if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
  echo "<script>
           alert('U heeft geet toegang tot deze pagins.');
           location.href='../index.php';
         </script>";
}
$sql = "SELECT * FROM klant WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($_GET['id']));
$albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($albums as $album) {
?>
  <div class="content">
    <form name="edit" class="form" action="index.php?page=album_update" method="POST">
      <p id="page_titel">Edit Klanten</p>
      <input type="hidden" name="id" id="id" value="<?php echo $album['ID']; ?>" />
      <label>Voornaam:</label>
      <input type="text" name="voornaam" id="voornaam" value="<?php echo $album['voornaam']; ?>" />
      <label>achternaam:</label>
      <input type="text" name="achternaam" id="achternaam" value="<?php echo $album['achternaam']; ?> " />
      <label>Straat:</label>
      <input type="text" name="straat" id="straat" value="<?php echo $album['straat']; ?>" />
      <label>Postcode:</label>
      <input type="text" name="postcode" id="postcode" value="<?php echo $album['postcode']; ?>" />
      <label>Woonplaats:</label>
      <input type="text" name="woonplaats" id="woonplaats" value="<?php echo $album['woonplaats']; ?>" />
      <label>Email:</label>
      <input type="email" name="email" id="email" value="<?php echo $album['woonplaats']; ?>" />
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