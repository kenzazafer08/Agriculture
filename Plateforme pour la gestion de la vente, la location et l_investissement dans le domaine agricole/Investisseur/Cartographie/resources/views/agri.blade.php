<!DOCTYPE html>
<!-- saved from url=(0066)file:///C:/Users/wiame/Downloads/profile_with_data_and_skills.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html !importan charset=UTF-8">
    
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="{{asset('js/agrijquery.min.js')}}"></script>
    <link href="{{asset('css/agri.min.css')}}" rel="stylesheet">
	<script src="{{asset('js/agri.min.js')}}"></script>
<style id="__web-inspector-hide-shortcut-style__">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important !important;
}
</style></head>
<body style="width: 100%;
    height: 100vh;
    background: url(../img/hero-bg.jpg) top right no-repeat;
    background-size: cover;
    position: relative;" id="hero">
    
  <nav class="header">
    <a class="nav-link" aria-current="page" href="/" style="color:#248d0f;padding-top: 20px;
    padding-left: 27px;
    font-size: 16px;
    font-weight: 600;}">< Accueil</a>    
  </nav>
<div class="container" style="margin-top:100px;">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://i.ibb.co/fpwv3bR/man-user.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      @php($nombre=0)
                      
                      @foreach($info_agri as $agri)
                      @foreach($annonces as $annonce)
                      @if($annonce->nom_agri==$agri->nom)
                      @php($nombre++)
                      @endif
                      @endforeach
                      <h4>{{$agri->nom}} {{$agri->prenom}}</h4>
                      @endforeach
                      <p class="text-secondary mb-1">Agriculteur</p>
                      <p class="text-muted font-size-sm">{{$agri->ville}}, 
                      {{$agri->region}}</p>
                      
                      <a class="btn btn-outline-primary" href="{{ route('details_agri', ['nom'=>$agri->nom]) }}#about" style="width: 176px !important;">Annonces</a>
                    <a class="btn btn-outline-primary" href="{{ route('chat_agri', ['nom'=>$agri->nom]) }}" style="width: 176px !important;margin-top: 10px !important;">Message</a></div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body" style="padding-top: 50px !important;
          padding-bottom: 16px !important;
          padding-left: 50px !important;
          background-color: white !important;
          height: 389px !important;
          padding-right: 50px !important;
          ">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom Complet</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{$agri->nom}} {{$agri->prenom}}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date de naissance</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{$agri->date_naissance}}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Téléphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">0{{$agri->tel}}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre d'annonces</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{$nombre}}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adresse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{$agri->ville}}, {{$agri->region}}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      
                    </div>
                  </div>
                </div>
              </div>

                  </div>

<style type="text/css">
body{
    color: #1a202c !important;
    text-align: left !important;
    background-color: #e2e8f0 !important;    
}
.main-body {
    padding: 15px !important;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06) !important;
}
.btn-outline-primary:hover {
    color: #fff !important;
    background-color: #248d0f !important;
    border-color: #248d0f !important;
}
.btn-outline-primary {
    color: #248d0f !important;
    border-color: #248d0f !important;
}
.card {
    position: relative !important;
    display: flex !important;
    flex-direction: column !important;
    min-width: 0 !important;
    word-wrap: break-word !important;
    background-color: #fff !important;
    background-clip: border-box !important;
    border: 0 solid rgba(0,0,0,.125) !important;
    border-radius: .25rem !important;
}

.card-body {
    flex: 1 1 auto !important;
    min-height: 1px !important;
    padding: 1rem !important;
    -webkit-box-shadow: 0 13px 25px 0 rgba(0,0,0,0.3);
    box-shadow: 0 13px 25px 0 rgba(0,0,0,0.3);
}

.gutters-sm {
    margin-right: -8px !important;
    margin-left: -8px !important;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px !important;
    padding-left: 8px !important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem !important;
}

.bg-gray-300 {
    background-color: #e2e8f0 !important;
}
.h-100 {
    height: 100% !important;
}
.shadow-none {
    box-shadow: none !important;
}
#hero:before {
    z-index: -1 !important;
    content: "" !important;
    background: rgba(255, 255, 255, 0.4) !important;
    position: absolute !important;
    bottom: 0 !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
}
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
  }
  
  #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #248d0f;
    border-top-color: #fff;
    border-bottom-color: #fff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
  }
  
  @-webkit-keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  
  @keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
</style><div id="preloader"></div>

</body><script src="{{asset('js/main.js')}}"></script>
</html>