<?php

if (isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
    echo "<script>
            alert('U heeft geen toegang tot deze pagina.');
            location.href='../index.php';
        </script>";
}
if (isset($_POST["submit"])) {
    // Weborder aanmaken
    $datum = new DateTime();
    $datum = date_format($datum, "c");
    $sql = "INSERT INTO weborder (id. klant_id. datum values (?,?,?)";

    $stmt = $pdo->prepare($sql);
    session_start();
    $data = array(NULL, $_SESSION['USER_ID'], $datum);
    try {
        $stmt->execute($data);
        echo "<script>
               alert('Bestelling aangemaakt.');
            </script>";
    } catch (PDOException $e) {

        echo $e->getMessage();
        echo "<script>
              alert('Kon geen bestelling aanmaken');
              location.href='index.php?page=webshop';
           </script>";
    }
}
/// Haal de weborder_id uit de laatste bestelling 
$weborder_id = $pdo->lastInsertId();
//Item opslaan
for ($x = 0; $x < $_POST['lus']; $x++) {
    $aantal = htmlspecialchars($_POST['aantal'][$x]);
    if ($aantal == 0) continue;
    $album_id = $_POST['id'][$x];
    $prijs_eenheid = $_POST['prijs'][$x];

    $sql = "INSERT INTO item (id, weborder_ID, klant_ID, album_ID, prijs_eenheid, aantal) values (?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $data = array(NULL, $weborder_id, $_SESSION["USER_ID"], $album_id, $prijs_eenheid, $aantal);

    try {
        $stmt->execute($data);
        echo  "<script>
                 alert('Item opgeslagen ');
              </script>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    echo "<script>
            location.href='index.php?page=webshop';
         </script>";
}
