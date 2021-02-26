<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Document</title>
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/faq.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>


  <img class="logovista" src="images/logovista.webp" alt="">
  <!-- #region Navbar-->
  <div id="navbar">
    <script>
      $("#navbar").load("common/navbar.html");
    </script>
  </div>
  <!-- #endregion -->
</body>

</html>



<div class="box">
       <p class="heading">FAQs</p>
       <div class="faqs">
          <details>
               <summary>Hoe moet ik betalen?</summary>
               <p class="faq">dat kan niet online.</p>
          </details>
          <details>
               <summary>Wat zijn de openingstijden?</summary>
               <p class="faq">- maandag-vrijdag van 9:00 tot 16:00 uur</p>
               <!-- <p class="text" style="color:red;">- gesloten in het weekend</p> -->
          </details>
          <details>
               <summary>afspraak maken?</summary>
               <p class="faq">Je kunt en afspraak maken om de auto te komen bekijken.</p>
          </details>
          <details>
               <summary>Hoe kan ik feedback geven?</summary>
               <p class="faq">- Bij de contact pagina. kun je contact opnemen met ons en feedback geven.</p> 
          </details>
          <details>
               <summary>Word er ook bezorgd?</summary>
               <p class="faq">- Nee, je kan alleen afhalen.</p> 
          </details>
       </div>
    </div>

      <!-- #region Footer-->
  <div id="footer"></div>
  <script>
    $("#footer").load("common/footer.html");
  </script>
  <!-- #endregion -->
</body>

</html>