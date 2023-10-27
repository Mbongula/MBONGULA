<?php   
if (isset($_POST['submit'])) { 
  if (!empty($_POST['nom']) && !empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['sujet'])) {
    extract($_POST);
    $nom=htmlspecialchars($nom);
    $message=htmlspecialchars($message);
     $sujet=htmlspecialchars($sujet);
    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
$to = "contact@konexiontech.com";
$subject = "formulaire impression";
$txt ="Prenom : ". $nom . "\r\nEmail :" . $email . "\r\nsujet :" . $sujet."\r\nMessage :" . $message;
$headers = "From: $email" . "\r\n" .
"CC: contact@konexiontech.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
$msge=" <div class='  alert alert-success ' role='alert' style='color: #000;'> votre message a été envoyé avec succès. Merci de nous avoir écrit ! " . $nom . ",  Nous vous contacterons sous peu ...</div>";
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

  <title>Impression- konexiontech </title>
  <meta name="description" content=" Notre service d'impression est de fournir à Nos clients les moyens de 
  communiquer efficacement avec leur public cible et de renforcer leur image de marque.  ">
    <meta name="author" content=" Konexiontech La technologie à votre service">
    <meta property="og:type" content="website" />
   <meta property="og:title" content="konexiontech " />
   <meta property="og:url" content="https://www.konexiontech.com/impression" />
  <meta property="og:image" content="https://www.konexiontech.com/assets/img/imp.jpg" />
  <meta property="og:description" content="Notre service d'impression est de fournir à Nos clients les moyens de communiquer 
  efficacement avec leur public cible et de renforcer leur image de marque. ." />

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

  <?php
  include("header.php");
    ?> <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    
    

   
    <section id="contact" class="contact">
      <div class="container">
         <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h3> Impression</h3>
          <img src="assets/img/slide/Impression.jpg"  alt="" class="img-fluid" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p> 
            Notre service d'impression est de fournir à Nos clients les moyens de communiquer efficacement avec leur public cible et de renforcer leur image de marque. <br><br>   Ce service implique l'utilisation de diverses technologies d'impression pour produire des impressions de qualité professionnelle telles que des brochures, des cartes de visite, des affiches, des flyers, des bannières, des magazines, des livres, des catalogues et bien plus encore. 
            <br><br> Votre service peut également inclure des services de conception graphique pour aider vos clients à concevoir des projets qui répondent spécifiquement à leurs besoins en matière de marketing et de communication. <br>  <br>L'objectif principal de votre service d'impression est de fournir à vos clients les moyens de communiquer efficacement avec leur public cible et de renforcer leur image de marque..
           
            </p>
            
           
            
            
          </div>
        </div>

          <?php   include('validcontact.php') ;?>

      </div>
    </section>
    <hr > 

  <!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <!-- End Our Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <!-- End Our Skills Section -->

    <!-- ======= Our Clients Section ======= -->
    <?php   

      include("partenaires.php");

     ?><!-- End Our Clients Section -->

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

</body>

</html>