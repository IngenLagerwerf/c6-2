
<?Php
 echo '<div class="title">';
 echo '<H1>' . $naam . '</H1>';
 echo '</div>';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" />
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
<?Php  echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img) . '" / style="width:100%">' ?>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
<?Php  echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img_2) . '" / style="width:100%">' ?>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
<?Php  echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img_3) . '" / style="width:100%">' ?>
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>

    <!-- $id = $row['id'];
    $naam = $row['naam']; xx
    $img = $row['foto']; xx
    $img_2 = $row['foto_2']; xx
    $img_3 = $row['foto_3']; xx
    $merken = $row['merken']; xx
    $newoud = $row['new/twee'];xx
    $brandstiof = $row['brand stof'];xx
    $prijs = $row['prijs'];xx
    $jaar = $row['jaar']; -->

<?Php
    // // echo '<div class="info">';
    // echo '<div id="example1">';
    // echo '<div  class="menutitle" name="id">auto merk is ' . $merken . '</div>';
    // // echo '<div  class="menutitle" name="id">' . $merken . '</div>';
    // echo '</div>';
    // echo '<div id="example1">';
    // echo '<div  class="menutitle" name="id">new of tweede hans ' . $newoud . '</div>';
    // echo '</div>';
    // echo '<div id="example1">';
    // echo '<div  class="menutitle" name="id">brandstiof soorte ' . $brandstiof . '</div>';
    // echo '</div>';
    // echo '<div id="example1">';
    // echo '<div  class="menutitle" name="id">prijs € ' . $prijs . '</div>';
    // echo '</div>';
    // echo '<div id="example1">';
    // echo '<div  class="menutitle" name="id">jaar van bouw ' . $jaar . '</div>';
    // echo '</div>';
    // // echo '</div>';
?>
</style>
</head>
<body>


<table>
  <tr>
    <th>vraag</th>
    <th>antwoord</th>
  </tr>
  <tr>
    <td>auto merk is</td>
<?Php echo "<td> $merken </td>" ?>
  </tr>
  <tr>
    <td>new of tweede hans</td>
    <?Php echo "<td> $newoud </td>" ?>
  </tr>
  <tr>
    <td>brandstiof soorte</td>
    <?Php echo "<td> $brandstiof </td>" ?>
  </tr>
  <tr>
    <td>prijs</td>
    <?Php echo "<td>€ $prijs </td>" ?>
  </tr>
  <tr>
    <td>jaar van bouw</td>
    <?Php echo "<td> $jaar </td>" ?>
  </tr>
</table>

</body>
</html>

















<?Php

    // echo '<div class="contentItem">';
    // echo '<form action="./showroom_cars.php" method="post">';
    // echo '<div class="row">';
    // echo '<input hidden value="goed" name="goed">';
    // echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img) . '" />';
    // echo '<input class="button" type="submit" value=" ' . $merken . ' ">';
    // echo '</div>';
    // echo '</form>';
    // echo '</div>';