@include('header')
<body style="background-color: white;">
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active" style="background-color: white;">
            <a class="nav-link" aria-current="page" href="#"><img src="{{asset('img/logo.png')}}" class="img-fluid" alt="" width = 90px
              height = 90px></a>
          </li>
        </ul>
        <div align="left">
          <a class="button button" href="login">Se connecter</a>
          <button class="button button2">Déposer Annonce</button>
        </div>
      </div>
  </nav>
  @include('restpage')