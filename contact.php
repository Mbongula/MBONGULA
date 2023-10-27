<?php   
if (isset($_POST['submit'])) { 
  if (!empty($_POST['nom']) && !empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['sujet'])) {
    extract($_POST);
    $nom=htmlspecialchars($nom);
    $message=htmlspecialchars($message);
     $sujet=htmlspecialchars($sujet);
    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
$to = "contact@konexiontech.com";
$subject = "formulaire de contact";
$txt ="Prenom : ". $nom . "\r\nEmail :" . $email . "\r\nsujet :" . $sujet."\r\nMessage :" . $message;
$headers = "From: $email" . "\r\n" .
"CC: contact@konexiontech.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
$msge=" <h4 class='mt-2'> Votre message a été envoyé avec succès. Merci de nous avoir écrit !,  Nous vous contacterons sous peu ...</h4> <a href='' class='hover'><span style='background-color: blue'>OK</span></a> ";
    }else{
      $msge="<span class='colrs' >  veuillez saisir une adresse email valide</span>";
    }
  }
  else{
    $msge="<div class='alert alert-danger' role='alert'>veuillez remplir tous les champs</div>";
  }
}






 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Konexiontech</title>
  <meta name="description" content=" Contactez Konexiontech directemment sur www.konexiontech.com et vous aurez la réponse à votre préocupation dans les 24 heures qui suivent ">
    <meta name="author" content=" Konexiontech La technologie à votre service">
    <meta property="og:type" content="website" />
   <meta property="og:title" content="konexiontech " />
   <meta property="og:url" content="https://www.konexiontech.com/" />
  <meta property="og:image" content="https://www.konexiontech.com/assets/img/contactt.jpg" />
  <meta property="og:description" content="Contactez Konexiontech directemment sur www.konexiontech.com et vous aurez la réponse à votre préocupation dans les 24 heures qui suivent." />

  <!-- Favicons -->
  <link href="assets/img/FAVI.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="">
    .hover a{
        background-color: #0e63f8; font-family: Roboto, sans-serif  font-weight: 500 font-size: 14px; letter-spacing: 1px;display: inline-block;padding: 12px 32px; border-radius: 4px;     transition: 0.5s;line-height: 1; margin: 10px; color: #fff; -webkit-animation-delay: 0.8s; animation-delay: 0.8s; animation-delay: 0.8s;border: 2px solid #0e63f8;
  }
  .hover a:hover{
    color: #fff;
    background-color: #0e63f8;
  }

  </style>

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  include("header.php");
  ?><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">


      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/dir//-4.3608269,15.3383362/@-4.3612877,15.3381556,17z/data=!4m2!4m1!3e0?entry=ttu" frameborder="0" allowfullscreen></iframe>
    </div> ======= -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Adresse:</h4>
                  <p>N°02 Avenue de la poste <br>Kinshasa Limete, Résidentiel</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>contact@konexiontech.com<br></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Whatsapp :</h4>
                  <p>+33 7 89 60 39 92<br></p>
                </div>
              </div>
            </div>

          </div>

        </div>

          <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
           
            <form action="" method="post" id="form" class="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="votre email" data-rule="email" data-msg="Veuillez entrer un email valide" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sujet" id="subject" placeholder="sujet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 8 caractères d'objet" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose pour nous" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">    </div>

       
              </div>
            
              <div class="mt-2"> <button class="btn btn-primary" name="submit" onclick="myForm()"  >Envoyer</button> </div>
              <div class='text-center display-none py-5' id='sent'> <span class='dots'> <i class='fa fa-check'></i> </span>
           
        </div>
                      <?php 
                   
      if (isset($_POST['submit'])) {
          echo $msge;
        } 
      

       ?>

              
            </form>
          </div>
           
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php
 include("footer.php");
 ?><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- rapcat -->
  

</body>

</html>


