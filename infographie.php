<?php   
if (isset($_POST['submit'])) { 
  if (!empty($_POST['nom']) && !empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['sujet'])) {
    extract($_POST);
    $nom=htmlspecialchars($nom);
    $message=htmlspecialchars($message);
     $sujet=htmlspecialchars($sujet);
    if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
$to = "contact@konexiontech.com";
$subject = "formulaire infographie";
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

<
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Infographie- konexiontech </title>
  <meta name="description" content=" Le service d'infographie que Nous offrons consiste à créer et produire des graphiques, des diagrammes, des illustrations et 
  des présentations visuelles pour communiquer  ">
    <meta name="author" content=" Konexiontech La technologie à votre service">
    <meta property="og:type" content="website" />
   <meta property="og:title" content="konexiontech " />
   <meta property="og:url" content="https://www.konexiontech.com/infographie" />
  <meta property="og:image" content="https://www.konexiontech/assets/img/info.jpg" />
  <meta property="og:description" content="Le service d'infographie que Nous offrons consiste à créer et produire des graphiques, des diagrammes, 
  des illustrations et des présentations visuelles pour communiquer ." />

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
            <h3> 4.Infographie</h3>
          <img src="assets/img/slide/Graphisme.jpg"  alt="" class="img-fluid" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p> 
            Le service d'infographie que Nous offrons consiste à créer et produire des graphiques, des diagrammes, des illustrations et des présentations visuelles pour communiquer efficacement des informations complexes de manière claire et concise. <br><br> Notre expertise en conception graphique, en traitement des données et en communication Nous permet de traduire les données et les informations en visuels attrayants et faciles à comprendre pour Nos clients.  <br><br>  Notre service d'infographie est donc une offre de communication visuelle professionnelle qui permet à Nos clients de mieux communiquer avec leur public cible, de promouvoir leur message et de transmettre leur expertise..
           
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