<?php
if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}
try {
    $sql = "SELECT * FROM klant WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($_SESSION["E-MAIL"]));
    $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<div class="content">
    <form name="registreren" class="form" method="POST">
        <p id="pagina_titel">Profiel editen</p>
        <input type="text" required name="voornaam" placeholder="voornaam" />
        <input type="text" required name="achternaam" placeholder="achternaam" />
        <input type="text" required name="straat" placeholder="straat" />
        <input type="text" required name="postcode" placeholder="Postcode" />
        <input type="text" required name="woonplaats" placeholder="woonplaats" />
        <input type="email" required name="e-mail" placeholder="E-mail" />

        <div class="icon_container">
            <input type="submit" class="icon" id="submit" name="submit" value="&rarr;" />
        </div>
        <a href="index.php?page=webshop">Terug</a>
    </form>
</div>
<?php
if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}

if (isset($_POST['submit'])) {
    $voornaam = htmlspecialchars($_POST['voornaam']);
    $achternaam = htmlspecialchars($_POST['achternaam']);
    $straat  = htmlspecialchars($_POST['straat']);
    $postcode = htmlspecialchars($_POST['postcode']);
    $woonplaats = htmlspecialchars($_POST['woonplaats']);
    $email  = htmlspecialchars($_POST['e-mail']);

    $query = "UPDATE klant SET 'voornaam' = ?, 'achternaam' =?,
            'straat' = ?, 'postcode' = ?, 'woonplaats' = ?, 'email' = ? WHERE 'email' = ? ";
    $stmt = $pdo->prepare($query);
    try {
        $stmt = $stmt->execute(array(
            $voornaam, $achternaam, $straat,
            $postcode, $woonplaats, $email, $email
        ));
        if ($stmt) {
            echo "<script>
                    alert('Profiel is geupdate');
                    location.href='index.php?page=webshop'; 
                 </script>";
        } else {
            echo "<script>
                  alert('Kon geen profiel updaten');
                  location.href='index.php?page=webshop';
                </script>";
        }
    } catch (PDOExCeption $e) {
        echo $e->getMessage();
    }
}

?>