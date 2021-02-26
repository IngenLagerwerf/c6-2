<?php 
if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}
include("album_add.inc.php");
if(isset($_POST["submit"])){

    $melding = "";
    $naam = htmlspecialchars($_POST['naam']);
    $foto =  htmlspecialchars($_POST['image']);
    $merken =  htmlspecialchars($_POST['merk']);
    $jaar =   htmlspecialchars($_POST['jaar']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $brand_stof =  htmlspecialchars($_POST['brandstof']);
    $new_twee =   htmlspecialchars($_POST['new_twee']);
    $foto_2 =  htmlspecialchars($_POST['image_2']);
    $foto_3 =   htmlspecialchars($_POST['image_3']);
    $voorraad =   htmlspecialchars($_POST['voorraad']);
    
    $sql = "INSERT INTO autos_test (id, naam, foto, merken, jaar, prijs, brand_stof, new_twee, foto_2, foto_3,voorraad) Values (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    try{

       $stmt->execute(array(NULL,$naam,$foto,$merken,$jaar,$prijs,$brand_stof,$new_twee,$foto_2,$foto_3,$voorraad));
        $melding = "Nieuw album toegevoegd.";
        
    }catch(PDOException $e){
        $melding = "Kon geen nieuw album aanmaken.".$e->getMessage();
    }
    echo "<div id='melding'>".$melding."</div>";
}
