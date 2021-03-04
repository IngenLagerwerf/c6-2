<!DOCTYPE html>
<html lang="en">
<!-- <?php session_start();
      $_SESSION['true'] = false; ?> -->
    
<head>
  <link rel="stylesheet" href="./css/contact.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="shortcut icon" href="images/cars.ico" type="image/x-icon">
  <title>v!st@CARS</title>
</head>

<body>

<div class="lettertypekleur">
    <div class="contact_container">
        <div class="contact_row">
            <div class="contact_column">
                <div class="contact_info">
                    <h1>Contactgegevens</h1>
                    <h2>Neem contact met ons op!</h1>
                </div>

                <div class="contact_info_row">
                    <img src="./img/location.png" alt="location">
                        <p>Arendstraat 12</p>
                        <p>6135 KT Sittard</p>

                </div>

                <div class="contact_info_row">
                    <img src="./img/phone.png" alt="phone">
                        <p>088 001 5000</p>
                </div>

                <div class="contact_info_row">
                    <img src="./img/mail.png" alt="mail">
                        <p>contact@vistcars.nl</p>
                </div>
        
            </div>
            
            <div class="contact_column">
                <form action= "/mail.php" method="post">
                    <label for="fname">voornaam</label>
                        <input type="text" id="fname" name="fname" placeholder="Je Voornaam" required="required">
                    <label for="lname">achternaam</label>
                        <input type="text" id="lname" name="lname" placeholder="Je achteraam" required="required">
                    <label for="email"><p>E-Mail</p></label>
                        <input type="text" id="email" name="email" placeholder="Je E-mail" required="required">
                    <label for="message">Bericht</label>
                        <textarea id="message" name="message" placeholder="Schrijf iets...." style="height:170px" required="required"></textarea>
                    <div class="contact_submit">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="contact_map">
        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=nl&amp;q=Arendstraat%2012%20Sittard+(Vistakantine)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
<div> 

  <?php
  ?>
  <!-- #region Footer-->
  <div id="footer" class="footer" ></div> 
  <script>
    $("#footer").load("common/footer.html"); 
  </script>
  <!-- #endregion -->
</body>

</html>