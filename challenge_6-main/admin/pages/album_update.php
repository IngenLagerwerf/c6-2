<?php 

if(!isset($_SESSION["ID"])&&($_SESSION["STATUS"]!="ACTIEF")){
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
}

if(isset($_POST['submit'])){
    $id = htmlspecialchars($_POST['id']);
    $naam = htmlspecialchars($_POST['naam']);
    $images =  htmlspecialchars($_POST['image']);
    $merken =  htmlspecialchars($_POST['merk']);
    $jaar =   htmlspecialchars($_POST['jaar']);
    $prijs =   htmlspecialchars($_POST['prijs']);
    $brandstof =  htmlspecialchars($_POST['brandstof']);
    $newOfTwee =   htmlspecialchars($_POST['new/twee']);

    $sql = "UPDATE autos_test SET 'naam' = ?, 'foto' =?,
            'merken' = ?, 'prijs' = ?, 'jaar' = ?, 'brand_stof' = ?, 'new_twee' = ?,  WHERE 'id' = ? ";
    $stmt = $pdo->prepare($query);
    try{
        $stmt = $stmt->execute(array($naam, $images, $merken,
                $jaar, $prijs, $brandstof, $newOfTwee));
           echo "<script>
                    alert('Profiel is geupdate');
                    location.href='index.php?page=webshop'; 
                 </script>";
    }catch(PDOExCeption $e){
          echo $e->getMessage();
    }
}
