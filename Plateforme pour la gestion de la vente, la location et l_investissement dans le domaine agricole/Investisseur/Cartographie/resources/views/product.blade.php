<div class="whateverM">
<div class="container">
    <!-- product -->
    <div class="product-content product-wrap clearfix product-deatil" style="background-color:#fff;border: 3px solid #f2f3f5;padding: 50px;">
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
                <h2 class="name">
                {{$annonce->nom}}
                    <small style="margin-top: 12px;">Terrain par <a href="{{ route('agri', ['agri'=>$annonce->nom_agri]) }}" style="color: #248d0f;background-color: white;">{{$annonce->nom_agri}} {{$annonce->prenom_agri}}</a></small>
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
                <small>*Prix Location/année</small>
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
                            <strong>Description {{$annonce->nom}}</strong>
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
                                            <td style="width: 116px;">{{ $annonce->superficie }}</td>
                                        </tr>
                                        <tr>
                                            <td>Ressouce d'eau</td>
                                            <td style="width: 116px;">@if($annonce->irrigation!=NULL) Irrigué
                                          @else Bour
                                        @endif</td>
                                        </tr>
                                        @if($annonce->irrigation!=NULL)
                                        <tr>
                                            <td>Puits ou fourage</td>
                                            <td style="width: 116px;">@if($annonce->puits!=NULL)Puits @endif
                                              @if($annonce->forage!=NULL)forage @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Plein</td>
                                            <td style="width: 116px;">@if($annonce->puit_plein!=NULL)Puits @endif
                                              @if($annonce->forage_plein!=NULL)forage </td>@endif
                                        </tr>
                                        <tr>
                                            <td>Profondeur</td>
                                            <td style="width: 116px;">Puits : {{ $annonce->profondeur_puit }} <br/> Forage : {{ $annonce->profondeur_forage }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td>Type d'irrigation</td>
                                            <td style="width: 116px;">{{ $annonce->type_irrigation }}</td>
                                        </tr>
                                        <tr>
                                            <td>Sous Type d'irrigation</td>
                                            <td style="width: 116px;">{{ $annonce->sous_type }}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <td>Couleur de sol</td>
                                            <td style="width: 116px;">{{ $annonce->couleur }}</td>
                                        </tr>
                                        <tr>
                                            <td>Comportement Aprés pluie</td>
                                            <td style="width: 116px;">{{ $annonce->comportement }}</td>
                                        </tr>
                                        <tr>
                                            <td>Travaill Aprés pluie</td>
                                            <td style="width: 116px;">{{ $annonce->travail_apres_pluie }}</td>
                                        </tr>
                                        <tr>
                                          <td>Pluviometrie</td>
                                          <td style="width: 116px;">{{ $annonce->pluviometrie }}</td>
                                      </tr>
                                      <tr>
                                        <td>Temperature</td>
                                        <td style="width: 116px;">Maximale :{{ $annonce->temperature_max }}<br/>Minimale :{{ $annonce->temperature_min }}<br/>Moyenne :{{ $annonce->temperature_moy }}</td>
                                    </tr>
                                    
                                <tr>
                                  <td>Vitesse vent</td>
                                  <td style="width: 116px;">{{ $annonce->vitesse_vent }}</td>
                              </tr>
                              <tr>
                                <td>Taux d'humidité</td>
                                <td style="width: 116px;">{{ $annonce->taux_humidite }}</td>
                            </tr>
                            <tr>
                              <td>Distance du passerelle a la route</td>
                              <td style="width: 116px;">{{ $annonce->distance}}</td>
                          </tr>
                          <tr>
                            <td>Nature de transport</td>
                            <td style="width: 116px;">{{ $annonce->transport }}</td>
                        </tr><tr>
                          <td>Type de terrain</td>
                          <td style="width: 116px;">{{ $annonce->nature }}</td>
                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                @if($part_invest==0 && $annonce->invest!=NULL)
                <style>
                  #disableanchor{
                    cursor: not-allowed;
                  }
                </style>
                @endif
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="#0" id="disableanchor" class="btn btn-success btn-lg cd-popup-trigger" style="background-color: #248d0f;">@if($annonce->achat!=NULL)Acheter ({{$annonce->prix_achat}} DH)@endif
                        @if($annonce->invest!=NULL)Investir ({{$annonce->prix_invest}} DH)@endif
                        @if($annonce->location!=NULL)Louer ({{$annonce->prix_loca}} DH)@endif</a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="btn-group pull-right">
                            <button class="btn btn-white btn-default" style="padding-bottom: 12px;
                            padding-top: 12px;
                            padding-left: 16px;
                            padding-right: 16px;"><i onclick="btnClickRed(this)" class="fa fa-heart-o" aria-hidden="true" style="margin-right: 8px;"></i>Add to wishlist</button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->
    <script>
            var heart = false;
            function btnClickRed(elem) {
              if (heart === false) {
                heart=true;
                elem.classList.remove('fa-heart-o');
                elem.classList.add('fa-heart');
                elem.style.color="#ff3c3c";
              }
              else{
                heart=false;
                elem.classList.add('fa-heart-o');
                elem.classList.remove('fa-heart');
                elem.style.color=null;
              }
              document.getElementById('timesClicked').innerHTML = timesClicked;
              return true
            }
          </script>
</div>
</div>

<div class="popupM">    
<form action="{{ route('product', ['id'=>$p, 'prix'=>$prix, 'type'=>$type]) }}">
<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p style="font-size: 100%;
    font-family: 'Lato', sans-serif;
    color: #8f9cb5;font-size:16px;">Voulez-vous vraiment passer cetter transaction?</p>
    @if($type=="Investissement")
    <p style="font-size: 100%;
    font-family: 'Lato', sans-serif;
    color: #8f9cb5;font-size:16px;padding-top:0px;">Veuillez preciser combien de parts? ({{$part_invest}} restants)</p>
    <input type="number" name="quantity" value="1" min="1" max="{{$part_invest}}" style="margin-bottom:40px;">
    @endif
		<ul class="cd-buttons">
			<li><a href="#0" class="cd-popup-no">Non</a></li>
			<li><a class="cd-popup-no"><button type="submit">Oui</button></a></li>
		</ul></form>
		<a href="#0" class="cd-popup-close img-replace"></a>
	</div>
</div>
</div>
<style type="text/css">
  input[type=number] {
        position: relative !important; 
        padding: 5px !important;
        padding-right: 25px !important;
        background-color: #e6e6e6;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
        opacity: 1 !important;
      }

      input[type=number]::-webkit-outer-spin-button, 
      input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: inner-spin-button !important;
        width: 25px !important;
        position: absolute !important;
        top: 0 !important;
        right: 0 !important;
        height: 100% !important;
      }
.whateverM .product-content {
  border: 1px solid #dfe5e9;
  background: #fff;
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
  border-bottom: 1px solid #dfe5e9;
  padding-bottom: 17px;
  padding-left: 16px;
  padding-top: 16px;
  position: relative;
  background: #fff;
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
  padding-bottom: 30px !important;
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
  color:white;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #68d952;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #5ccb46;
  color:white;
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