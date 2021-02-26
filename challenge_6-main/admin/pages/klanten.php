<?php

if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
  echo "<script>
           alert('U heeft geet toegang tot deze pagins.');
           location.href='../index.php';
         </script>";
}
?>
<div class="content">
  <table id='tabel' border="0" cellspacing="3">
    <caption>
      <h3>Edit klanten</h3>
    </caption>
    <thead>
      <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Straat</th>
        <th>Postcode</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM klant";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array());
      $klanten = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $bgcolor = true;

      foreach ($klanten as $klant) {

        $id = $klant['id'];

        echo ($bgcolor ? "<tr bgcolor=#ccc>" : "<tr>");
        echo
        "<td>" . $klant['voornaam'] . "</td>" .
          "<td>" . $klant['achternaam'] . "</td>" .
          "<td>" . $klant['straat'] . "</td>" .
          "<td>" . $klant['postcode'] . "</td>" .
          "<td>" . $klant['email'] . "</td>" .
          "<td><a style='text-decoration:none' href='index.php?page=klant_edit&id=" .
          $klant['id'] . "'>&#9989;</a></td>" .
          "<td><a style='text-decoration:none' href='index.php?page=klant_delete&id=" .
          $klant['id'] . "'>&#10062;</a></td></tr>";
        $bgcolor = ($bgcolor ? false : true);
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="6">
          <div class="icon_container">
            <a class="icon" href="index.php?page=klant_add">&#10012;</a>
          </div>
        </th>
      </tr>
      <tr>
        <td colspan="6">
          <!-- <a href="index.php?page=webshop">Terug</a>-->
        </td>
      </tr>
    </tfoot>
    </tbody>
  </table>
</div>