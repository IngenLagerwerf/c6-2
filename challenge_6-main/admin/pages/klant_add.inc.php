<?php

if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
  echo "<script>
           alert('U heeft geet toegang tot deze pagins.');
           location.href='../index.php';
         </script>";
}
?>
  <div class="content">
    <form name="edit" class="form" action="" method="POST">
      <p id="page_titel">Klanten toevoegen</p>
      <input type="hidden" name="id"  id="id" value="" />
      <label>Voornaam:</label>
      <input type="text" name="voornaam" id="voornaam" value="" />
      <label>achternaam:</label>
      <input type="text" name="achternaam" id="achternaam"  value="" />
      <label>Straat:</label>
      <input type="text" name="straat" id="straat"  value="" />
      <label>Postcode:</label>
      <input type="text" name="postcode" id="postcode"  value="" />
      <label>Woonplaats:</label>
      <input type="text" name="woonplaats" id="woonplaats"  value="" />
      <label>Email:</label>
      <input type="email" name="email" id="email" value="" />
      <br />
      <div class="icon_container">
        <input type="submit" class="icon" id="submit" name="submit" value="&rarr;" />
      </div>
      <a href="index.php?page=klanten">Terug</a>
    </form>
  </div>