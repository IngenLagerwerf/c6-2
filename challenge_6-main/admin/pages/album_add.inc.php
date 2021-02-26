<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_SESSION["ID"]) && ($_SESSION["STATUS"] != "ACTIEF")) {
        echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
    }
    ?>
    <div class="content">
        <form name="albumtoevoegen" class="form" action="" method="POST">
            <p id="page_titel"> auto toevoegen</p>
            <label>Naam:</label>
            <input type="text" name="naam" id="naam" value="" />
            <label>Foto:</label>
            <input type="file" name="image" id="image" value="" />
            <label>Foto_2:</label>
            <input type="file" name="image_2" id="image_2" value="" />
            <label>Foto_3:</label>
            <input type="file" name="image_3" id="image_3" value="" />
            <label>Merken:</label>
            <input type="text" name="merk" id="merk" value="" />
            <label>Jaar:</label>
            <input type="text" name="jaar" id="jaar" value="" />
            <label>Prijs:</label>
            <input type="text" name="prijs" id="prijs" value="" />
            <label>Brand stof:</label>
            <input type="text" name="brandstof" id="brandstof" value="" />
            <label>new/twee:</label>
            <input type="text" name="new_twee" id="new_twee" value="" />
            <label>voorraad:</label>
            <input type="text" name="voorraad" id="voorraad" value="" />
            <br />
            <div class="icon_container">
                <input type="submit" class="icon" id="submit" name="submit" value="&rarr;" />
            </div>
            <a href="index.php?page=albums">Terug</a>
        </form>
    </div>
</body>

</html>