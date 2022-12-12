<head>
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/modernizr.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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

  <link href="{{asset('css/reset.css')}}" rel="stylesheet">

  <link href="{{asset('css/bt.css')}}" rel="stylesheet">
  <link href="{{asset('css/annonces.css')}}" rel="stylesheet">
</head>
<div class="whateverM">
<div class="container">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil" >
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="product-image">
                    <div id="myCarousel-2{{$p}}" class="carousel slide">
                        <div class="carousel-inner">
                        @php($countM=0)
                        @foreach($images as $image)              
                        @if($image->terrain==$terrain)
                        @php($countM++)
                        @if($countM==1)     
                            <!-- Slide 1 -->
                            <div class="item active">
                                <img src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" class="img-responsive" alt="" />
                            </div>
                            @else
                            <!-- Slide 2 -->
                            <div class="item">
                                <img src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" class="img-responsive" alt="" />
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel-2{{$p}}" data-slide="prev"><i class="fa fa-2x fa-angle-left text-dark"></i></a>
                          <a class="carousel-control-next" href="#myCarousel-2{{$p}}" data-slide="next"><i class="fa fa-2x fa-angle-right text-dark"></i></a>     
                          @endif 
                @endif
                @endforeach                          
              </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                <h2 class="name">{{$annonce->nom}}
                    <small style="margin-top: 12px;">Terrain par <a href="javascript:void(0);" style="color: #248d0f;background-color: white;">{{$annonce->nom_agri}} {{$annonce->prenom_agri}}</a></small>
                </h2>
                <hr />
                <h3 class="price-container">
                @if($annonce->achat!=NULL)
                {{$annonce->prix_achat}} DH
                <small>*Prix Achat</small>
                @endif
                @if($annonce->invest!=NULL)
                {{$annonce->prix_invest}} DH
                <small>*Prix Investissement</small>
                @endif
                @if($annonce->location!=NULL)
                {{$annonce->prix_loca}} DH
                <small>*Prix Location</small>
                @endif
                </h3>
                <hr />
                <div class="description description-tabs" style="padding: 20px !important;background-color:#f2f3f5;">
                    <ul id="myTab" class="nav nav-pills">
                        <li class="active"><a href="#more-information{{$p}}" data-toggle="tab" style="color: #333;text-decoration: none;background-color: #f9f9f9;" class="no-margin">Description Terrain</a></li>
                        <li class=""><a href="#specifications{{$p}}" data-toggle="tab" style="color: #333;text-decoration: none;background-color: #f9f9f9;">Informations</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="more-information{{$p}}" style="margin-left: 5px;">
                            <br />
                            <strong>Description </strong>
                            <p style="margin: 10px 0px 10px 0px;">
                            {{$annonce->description}}
                            </p>
                        </div>
                        <div class="tab-pane fade" id="specifications{{$p}}" style="margin-left: 5px;">
                            <h3 class="box-title mt-5">Terrain Informations</h3><br>
                            <div class="table-responsive">
                                <table class="table table-striped table-product">
                                    <tbody>
                                        <tr>
                                            <td width="390">Superficie</td>
                                            <td>{{ $annonce->superficie }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ressouce d'eau</td>
                                            <td>@if($annonce->irrigation!=NULL) Irrigué
                                          @else Bour
                                        @endif</td>
                                        </tr>
                                        @if($annonce->irrigation!=NULL)
                                        <tr>
                                            <td>Puits ou fourage</td>
                                            <td>@if($annonce->puits!=NULL)Puits @endif
                                              @if($annonce->forage!=NULL)forage @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Plein</td>
                                            <td>@if($annonce->puit_plein!=NULL)Puits @endif
                                              @if($annonce->forage_plein!=NULL)forage </td>@endif
                                        </tr>
                                        <tr>
                                            <td>Profondeur</td>
                                            <td>Puits : {{ $annonce->profondeur_puit }} <br/> Forage : {{ $annonce->profondeur_forage }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td>Type d'irrigation</td>
                                            <td>{{ $annonce->type_irrigation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sous Type d'irrigation</td>
                                            <td>{{ $annonce->sous_type }}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td>Couleur de sol</td>
                                            <td>{{ $annonce->couleur }}</td>
                                        </tr>
                                        <tr>
                                            <td>Comportement Aprés pluie</td>
                                            <td>{{ $annonce->comportement }}</td>
                                        </tr>
                                        <tr>
                                            <td>Travaill Aprés pluie</td>
                                            <td>{{ $annonce->travail_apres_pluie }}</td>
                                        </tr>
                                        <tr>
                                          <td>Pluviometrie</td>
                                          <td>{{ $annonce->pluviometrie }}</td>
                                      </tr>
                                      <tr>
                                        <td>Temperature</td>
                                        <td>Maximale :{{ $annonce->temperature_max }}<br/>Minimale :{{ $annonce->temperature_min }}<br/>Moyenne :{{ $annonce->temperature_moy }}</td>
                                    </tr>
                                    
                                <tr>
                                  <td>Vitesse vent</td>
                                  <td>{{ $annonce->vitesse_vent }}</td>
                              </tr>
                              <tr>
                                <td>Taux d'humidité</td>
                                <td>{{ $annonce->taux_humidite }}</td>
                            </tr>
                            <tr>
                              <td>Distance du passerelle a la route</td>
                              <td>{{ $annonce->distance}}</td>
                          </tr>
                          <tr>
                            <td>Nature de transport</td>
                            <td>{{ $annonce->transport }}</td>
                        </tr><tr>
                          <td>Type de terrain</td>
                          <td>{{ $annonce->nature }}</td>
                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
               
            </div>
        </div>
    </div>
    <!-- end product -->
</div>
</div>

<style type="text/css">
.whateverM .product-content {
  border: 1px solid #dfe5e9;
  background: #fff;
  width: 90%;
  height:100%;
}
.whateverM .product-content .carousel-control.left {
  margin-left: 0;
}
.whateverM .product-content .product-image {
  background-color: #fff;
  display: block;
  min-height: 238px;
  overflow: hidden;
  position: relative;
}
.whateverM .product-content .product-deatil {
  
  position: relative;
  background: #fff;
  height: 10px;
  width: 200px;
}
.whateverM .product-content .product-deatil h5 a {
  color: #2f383d;
  font-size: 15px;
  line-height: 19px;
  text-decoration: none;
  padding-left: 0;
  margin-left: 0;
}
.whateverM .product-content .product-deatil h5 a span {
  color: #9aa7af;
  display: block;
  font-size: 13px;
}
.whateverM .product-content .product-deatil span.tag1 {
  border-radius: 50%;
  color: #fff;
  font-size: 15px;
  height: 50px;
  padding: 13px 0;
  position: absolute;
  right: 10px;
  text-align: center;
  top: 10px;
  width: 50px;
}
.whateverM .product-content .product-deatil span.sale {
  background-color: #21c2f8;
}
.whateverM .product-content .product-deatil span.discount {
  background-color: #71e134;
}
.whateverM .product-content .product-deatil span.hot {
  background-color: #fa9442;
}
.whateverM .product-content .product-deatil p.price-container span {
  color: #21c2f8;
  font-family: Lato, sans-serif;
  font-size: 24px;
  line-height: 20px;
}
.whateverM .product-content .description {
  font-size: 12.5px;
  line-height: 20px;
  padding: 10px 14px 16px 19px;
  background: #fff;
}
.whateverM .product-content .product-info {
  padding: 11px 19px 10px 20px;
}
.whateverM .product-content .product-info a.add-to-cart {
  color: #2f383d;
  font-size: 13px;
  padding-left: 16px;
}
.whateverM .product-content name.a {
  padding: 5px 10px;
  margin-left: 16px;
}
.whateverM body .modal-dialog {
  max-width: 100%;
  width: auto !important;
  display: inline-block;
}
.whateverM .modal {
  z-index: -1;
  display: flex !important;
  justify-content: center;
  align-items: center;
}
.whateverM .modal-open .modal {
  z-index: 1050;
}
.whateverM .modal-body {
  padding: 0px !important;
}
.whateverM .container {
  padding: 0px !important;
}
.whateverM .product-info.smart-form .btn {
  padding: 6px 12px;
  margin-left: 12px;
  margin-top: -10px;
}
.whateverM .product-info.smart-form .rating label {
  margin-top: 0;
}
.whateverM .product-entry .product-deatil {
  border-bottom: 1px solid #dfe5e9;
  padding-bottom: 17px;
  padding-left: 16px;
  padding-top: 16px;
  position: relative;
}
.whateverM .product-entry .product-deatil h5 a {
  color: #2f383d;
  font-size: 15px;
  line-height: 19px;
  text-decoration: none;
}
.whateverM .product-entry .product-deatil h5 a span {
  color: #9aa7af;
  display: block;
  font-size: 13px;
}
.whateverM .product-entry .product-deatil p.price-container span {
  color: #21c2f8;
  font-family: Lato, sans-serif;
  font-size: 24px;
  line-height: 20px;
}
.whateverM .load-more-btn {
  background-color: #21c2f8;
  border-bottom: 2px solid #037ca5;
  border-radius: 2px;
  border-top: 2px solid #0cf;
  margin-top: 20px;
  padding: 9px 0;
  width: 100%;
}
.whateverM .product-block .product-deatil p.price-container span {
  color: #21c2f8;
  font-family: Lato, sans-serif;
  font-size: 24px;
  line-height: 20px;
}
.whateverM .shipping table tbody tr td p.price-container span {
  color: #21c2f8;
  font-family: Lato, sans-serif;
  font-size: 24px;
  line-height: 20px;
}
.whateverM .shopping-items table tbody tr td p.price-container span {
  color: #21c2f8;
  font-family: Lato, sans-serif;
  font-size: 24px;
  line-height: 20px;
}
.whateverM .product-wrap .product-image span.tag2 {
  position: absolute;
  top: 10px;
  right: 10px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  padding: 10px 0;
  color: #fff;
  font-size: 11px;
  text-align: center;
}
.whateverM .product-wrap .product-image span.sale {
  background-color: #57889c;
}
.whateverM .product-wrap .product-image span.hot {
  background-color: #a90329;
}
.whateverM .shop-btn {
  position: relative;
}
.whateverM .shop-btn > span {
  background: #a90329;
  display: inline-block;
  font-size: 10px;
  box-shadow: inset 1px 1px 0 rgba(0, 0, 0, 0.1), inset 0 -1px 0 rgba(0, 0, 0, 0.07);
  font-weight: 700;
  border-radius: 50%;
  padding: 2px 4px 3px !important;
  text-align: center;
  line-height: normal;
  width: 19px;
  top: -7px;
  left: -7px;
}
.whateverM .description-tabs {
  padding: 30px 0 5px !important;
}
.whateverM .description-tabs .tab-content {
  padding: 10px 0;
}
.whateverM .product-deatil {
  padding: 30px 30px 50px;
}
.whateverM .product-deatil hr + .description-tabs {
  padding: 0 0 5px !important;
}
.whateverM .product-deatil .carousel-control.left {
  background: none !important;
}
.whateverM .product-deatil .carousel-control.right {
  background: none !important;
}
.product-deatil .glyphicon {
  color: #3276b1;
}
.whateverM .product-deatil .product-image {
  border-right: none !important;
}
.whateverM .product-deatil .name {
  margin-top: 0;
  margin-bottom: 0;
}
.whateverM .product-deatil .name small {
  display: block;
}
.whateverM .product-deatil .name a {
  margin-left: 0;
}
.whateverM .product-deatil .price-container {
  font-size: 24px;
  margin: 0;
  font-weight: 300;
}
.whateverM .product-deatil .price-container small {
  font-size: 12px;
}
.whateverM .product-deatil .fa-2x {
  font-size: 16px !important;
}
.whateverM .product-deatil .fa-2x > h5 {
  font-size: 12px;
  margin: 0;
}
.whateverM .product-deatil .fa-2x + a {
  font-size: 13px;
}
.whateverM .product-deatil .fa-2x + a + a {
  font-size: 13px;
}
.whateverM .product-deatil .certified {
  margin-top: 10px;
}
.whateverM .product-deatil .certified ul {
  padding-left: 0;
}
.whateverM .product-deatil .certified ul li {
  display: inline-block;
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  padding: 13px 19px;
}
.whateverM .product-deatil .certified ul li:not(first-child) {
  margin-left: -3px;
}
.whateverM .product-deatil .certified ul li:first-child {
  border-right: none;
}
.whateverM .product-deatil .certified ul li a {
  text-align: left;
  font-size: 12px;
  color: #6d7a83;
  line-height: 16px;
  text-decoration: none;
}
.whateverM .product-deatil .certified ul li a span {
  display: block;
  color: #21c2f8;
  font-size: 13px;
  font-weight: 700;
  text-align: center;
}
.whateverM .product-deatil .message-text {
  width: calc(100% - 70px);
}
.whateverM .profile-message ul {
  list-style: none;
}
.whateverM .message img.online {
  width: 40px;
  height: 40px;
}
.whateverM .nav-pills > li.active > a {
  color: #fff !important;
  background-color: #248d0f !important;
}
.whateverM .nav-pills > li.active > a:focus {
  color: #fff !important;
  background-color: #248d0f !important;
}
.whateverM .nav-pills > li.active > a:hover {
  color: #fff !important;
  background-color: #248d0f !important;
}
.whateverM .nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
  border: 1px solid #ccc;
  font-size: 14px;
  background-color: #f9f9f9;
}
.modal-backdrop.show {
    opacity: 0 !important;
}
@media only screen and (min-width: 1024px) {
  .whateverM .product-content div[class*=col-md-4] {
    padding-right: 0;
  }
  .whateverM .product-content div[class*=col-md-8] {
    padding: 0 13px 0 0;
  }
  .whateverM .product-content .product-image {
    border-right: 1px solid #dfe5e9;
  }
  .whateverM .product-content .product-info {
    position: relative;
  }
  .whateverM .product-wrap div[class*=col-md-5] {
    padding-right: 0;
  }
  .whateverM .product-wrap div[class*=col-md-7] {
    padding: 0 13px 0 0;
  }
}
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.cd-popup.is-visible {
  opacity: 1;
  background-color: rgb(94 94 94 / 40%) !important;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: 4em auto;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-40px);
  -moz-transform: translateY(-40px);
  -ms-transform: translateY(-40px);
  -o-transform: translateY(-40px);
  transform: translateY(-40px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  transition-duration: 0.3s;
  margin: 13.3em auto !important;
}
.cd-popup-container p {
  padding: 3em 1em;
  padding-bottom: 35px !important;
}
.cd-popup-container .cd-buttons:after {
  content: "";
  display: table;
  clear: both;
}
.cd-popup-container .cd-buttons li {
  float: left;
  width: 50%;
}
.cd-popup-container .cd-buttons a {
  display: block;
  height: 60px;
  line-height: 60px;
  text-transform: uppercase;
  color: #FFF;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-popup-container .cd-buttons li:first-child a {
  background: #fc7169;
  border-radius: 0 0 0 .25em;
}
.no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
  background-color: #fc8982;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #b6bece;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #c5ccd8;
}
.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-container {
    margin: 8em auto;
  }
}
</style>

<script>
 $("#submit-button").click(function(event){
  var cards = openProfile.parents('.row').find(".item");
  var currentCardIndex = cards.index(openProfile);
  alert(currentCardIndex);
});

</script>
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- End custom js for this page -->

<!-- Vendor JS Files -->
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
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