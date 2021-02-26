<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body>
    <?php
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //    $image = imagecreatefromstring($blob); 
    //header("Content-Type: image/jpeg");
    echo '<div class="contentItem">';
    echo '<form action="./showroom_cars.php" method="post">';
    echo '<div class="row">';
    echo '<input hidden value="' . $id . '" name="id">';
    echo '<input hidden value="goed" name="goed">';
    echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img) . '" />';
    echo '<input class="button" type="submit" value=" ' . $prijs . ' ">';
    echo '</div>';
    echo '</form>';
    echo '</div>';




//    $image = imagecreatefromstring($blob); 
// function urlsafe_b64encode($string) {
//     $data = base64_encode($string);
//     $data = str_replace(array('+','/','='),array('-','_',''),$data);
//     return $data;
// }
// $image = urlsafe_b64encode($img);
//    $menu = <<<HTML
//    <form action="./showroom.php" method="post">
//    <div class="contentItem">
//      <div class="row">
//      <div  class="menutitle" name="id">$merken</div>
//         <!-- <div class="price" name="prijs">$image</div> -->
//      </div>
//         <img src="data:image/jpg;base64,'.$image.'" />
//         <img class="test" src="data:image/jpg;base64,'.base64_encode($image).'" />
//         <input class="button" type="submit" value="$merken">
//    </div>
//    </form>
// HTML;
//     echo $menu;
   
// $menu = <<<HTML
// <div class="contentItem">
//     <div class="row">
//         <div class="menutitle">$titel</div>
//         <div class="price">€$prijs</div>
//     </div>
//     <img src="$img">
//     <button >Kopen</button>
// </div>
// HTML;
// echo $menu;
