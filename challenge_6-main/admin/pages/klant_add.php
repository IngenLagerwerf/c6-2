<?php 
if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}
include("klant_add.inc.php");
if(isset($_POST["submit"])){

    $melding = "";
    $voorNaam = htmlspecialchars($_POST['voornaam']);
    $achterNaam =  htmlspecialchars($_POST['achternaam']);
    $straat =  htmlspecialchars($_POST['straat']);
    $postcode =   htmlspecialchars($_POST['postcode']);
    $woonplaats=   htmlspecialchars($_POST['woonplaats']);
    $email=  htmlspecialchars($_POST['email']);
    
    $sql = "INSERT INTO klant (id, voornaam, achternaam, straat, postcode, woonplaats, email) Values (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    try{
       $stmt->execute(array(
           NULL,
           $voorNaam,
           $achterNaam,
           $straat,
           $postcode,
           $woonplaats,
           $email,
           )
       );
        $melding = "Nieuw klant toegevoegd.";
    }catch(PDOException $e){
        $melding = "Kon geen nieuw kalnt aanmaken.".$e->getMessage();
    }
    echo "<div id='melding'>".$melding."</div>";
}