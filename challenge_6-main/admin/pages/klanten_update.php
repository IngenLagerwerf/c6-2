<?php 

if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $voorNaam = htmlspecialchars($_POST['voornaam']);
    $achterNaam =  htmlspecialchars($_POST['achternaam']);
    $straat =  htmlspecialchars($_POST['straat']);
    $postcode =   htmlspecialchars($_POST['postcode']);
    $woonplaats =   htmlspecialchars($_POST['woonplaats']);
    $email =  htmlspecialchars($_POST['email']);

    $sql = "UPDATE klant SET 'voornaam' = ?, 'achternaam' =?,
            'straat' = ?, 'postcode' = ?, 'woonplaats' = ?, 'email' = ?,  WHERE 'id' = ? ";
    $stmt = $pdo->prepare($query);
    try{
        $stmt = $stmt->execute(array($voorNaam, $achterNaam, $straat,
                $postcode, $woonplaats, $email));
           echo "<script>
                    alert('Profiel is geupdate');
                    location.href='index.php?page=webshop'; 
                 </script>";
    }catch(PDOExCeption $e){
          echo $e->getMessage();
    }
}