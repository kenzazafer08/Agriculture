<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Cartographie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('img/favicon.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link href="{{asset('css/login.css')}}" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <div class="wrapper">
    <section class="form login">
      <div class="results">
        @if(Session::get('fail'))
  <div class="alert-fail" alert='fail'>
    {{ session::get('fail') }}
  </div>
  @endif
  </div>
      <form action="l" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Username</label>
          <input type="text" name="username" placeholder="Entrez votre nom d'utilisateur" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Entrez votre mot de passe" required>
          <i class="mdi mdi:eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Se connecter">
        </div>
      </form>
      <div class="link">Pas encore inscrit? <a href="i">S'inscrire maintenant</a></div>
    </section>
  </div>

</body>
</html>