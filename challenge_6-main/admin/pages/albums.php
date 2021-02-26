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
      <h3>Edit auto's</h3>
    </caption>
    <thead>
      <tr>
        <th>naam</th>
        <!--<th>foto</th>-->
        <th>merken</th>
        <th>Jaar</th>
        <th>Prijs</th>
        <th>Brand stof</th>
        <th>New/Twee</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM autos_test";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array());
      $autos = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $bgcolor = true;

      foreach ($autos as $auto) {

        $id = $auto['id'];

        echo ($bgcolor ? "<tr bgcolor=#ccc>" : "<tr>");
        echo
        "<td>" . $auto['naam'] . "</td>" .
        // "<tb class="test" src="data:image/jpg;base64,> . base64_encode($auto). "</td>".
          "<td>" . $auto['merken'] . "</td>" .
          "<td>" . $auto['jaar'] . "</td>" .
          "<td>" . $auto['prijs'] . "</td>" .
          "<td>" . $auto['brand_stof'] . "</td>" .
          "<td>" . $auto['new_twee'] . "</td>" .
          "<td><a style='text-decoration:none' href='index.php?page=album_edit&id=" .
          $auto['id'] . "'>&#9989;</a></td>" .
          "<td><a style='text-decoration:none' href='index.php?page=album_delete&id=" .
          $auto['id'] . "'>&#10062;</a></td></tr>";
        $bgcolor = ($bgcolor ? false : true);
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="6">
          <div class="icon_container">
            <a class="icon" href="index.php?page=album_add">&#10012;</a>
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