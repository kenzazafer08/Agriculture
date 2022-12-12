<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<header id="header" class="d-flex flex-column justify-content-center" style="padding: 15px !important;"> 
    <nav id="navbar" class="navbar nav-menu" style="padding: 15px !important;">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-news"></i> <span>Annonces</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        
      </ul>

    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->    
  <form action="search#about" autocomplete="off">
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100" align="center" style="margin-bottom: 10px;">
      <h1>Cartographie</h1>
      <p style="margin-top: 30px;">Vous pouvez  <span class="typed" data-typed-items="Louer, acheter, investir dans"></span>des terrains</p>
      
    </div>
    <br/>
    <div class="container mt-6"  data-aos="zoom-out" data-aos-delay="100">
      <div class="row d-flex justify-content-center">
          <div class="col-md-8">
              <div class="card p-3 py-4">
                  <h5 align="center">Trouver les terrains qui vous conviennent!</h5>
                  <div class="row g-3 mt-2">
                      <div class="col-md-6"><input type="search" id="search" name="search" class="form-control form-control-sm light" value="{{ Request::get('search') }}" placeholder="Location"></div>
                      <div class="col-md-6"><select style="color:#908e8e" id="form_frame" onchange="getData(this);" type="text" class="form-control form-control-sm" name="typetransa"><option disabled selected hidden >Type de transaction</option><option>Louer</option><option>Acheter</option><option>Investir</option></select></div>
                       
                      <div align="center"><button type="button" class="collapsible" style="margin: 15px 0px 15px 0px;text-align: center;color:#248d0f;">Filtrer plus votre recherche ></button>
                      <div class="content">
                        
                      <div><p><div class="col-md-4" ><input style="margin-bottom:0px;" name="PrixMin" type="number" min="0" class="form-control form-control-sm" placeholder="PrixMin DH"></div><br/><div class="col-md-4"><input type="number" class="form-control form-control-sm" min="0" placeholder="PrixMax DH"></div>
                      </p></div><br/>
                      <div><p><div class="col-md-4" > <input name="PrixMax" type="text" class="form-control form-control-sm" placeholder="SurfaceMin m²"></div><br/><div class="col-md-4"><input type="text" class="form-control form-control-sm" placeholder="SurfaceMax m²"></div></p></div>
                      
                    </div></div>
<div align="center"><button class="btn btn-secondary btn-block" id="chercher" style="font-family: 'Poppins', sans-serif;
  font-size: 15px; width: 300px;">Chercher</button> </div>
                </div>
                  
                </div>
              </div>
              </div>
      </div>
  </div>
  </section><!-- End Hero -->
  </form>
  <script>
    document.getElementById('search').addEventListener('input', (e) => {
    if(`${e.currentTarget.value}`=="")$( "#chercher" ).click();
    })

    </script>
                  
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}</script>
     <script>
        if (localStorage.getItem('form_frame')) {      
            $("#form_frame option").eq(localStorage.getItem('form_frame')).prop('selected', true);
        }
        $("#form_frame").on('change', function() {
            localStorage.setItem('form_frame', $('option:selected', this).index());
        });
  </script>
@if(session()->missing('typetransa'))
<script>
window.localStorage.clear();
</script>
@endif
  <main id="main"> 
  <div class="whatever">
  <section id="about" class="about">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
          @if(count($annonces) > 3)<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>@endif
    <div class="row">
      <div class="container px-4 px-lg-5 mt-5" style="display:flex;justify-content: center;">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    @php($i=0)
    <div class="carousel-inner">
      <div class="item active">
            @foreach ($annonces as $annonce)
            @php($i++)
            @if($i<=3)
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300":>
            <div class="product-card mb-30">
            @if($annonce->achat!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Achat</div>
              @endif
              @if($annonce->invest!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Investissement</div>
              @endif
              @if($annonce->location!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Location</div>
              @endif
              <a class="product-thumb" data-abc="true">
                  <div id="product-carousel{{$i}}" class="carousel slide" data-interval="false">
                  <div class="carousel-inner border">
                  @php($count=0)
                  @foreach($images as $image)              
                  @if($image->terrain==$annonce->id_terrain)
                  @php($count++)
                          @if($count==1)                      
                              <div class="carousel-item active">
                                <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                              </div>
                          @else
                          <div class="carousel-item">
                                    <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                          </div>
                          <a class="carousel-control-prev" href="#product-carousel{{$i}}" data-slide="prev"><i class="fa fa-2x fa-angle-left text-dark"></i></a>
                          <a class="carousel-control-next" href="#product-carousel{{$i}}" data-slide="next"><i class="fa fa-2x fa-angle-right text-dark"></i></a>     
                          @endif 
                @endif
                @endforeach
                </div> 
                </div>
              </a>
              <div class="product-card-body">
              <div class="product-category"><a href="#" data-abc="true">{{$annonce->ville}}</a></div>
              <h3 class="product-title"><a href="#" data-abc="true">{{$annonce->nom}}</a></h3>
              @if($annonce->achat!=NULL)
              <h4 class="product-price">{{$annonce->prix_achat}} DH</h4>
              @endif
              @if($annonce->invest!=NULL)
              <h4 class="product-price">{{$annonce->prix_invest}} DH</h4>
              @endif
              @if($annonce->location!=NULL)
              <h4 class="product-price">{{$annonce->prix_loca}} DH</h4>
              @endif
              </div>
              <div class="product-button-group"><a class="product-button btn-wishlist" href="#about" data-abc="true"><i onclick="btnClick(this)" class="fa fa-heart-o"></i><span>Wishlist</span></a>
              <a class="product-button" style="cursor: pointer;" data-toggle="modal"  data-target="#myModal{{$annonce->id_annonce}}"><i class="fa fa-angle-right"></i><span>Details</span></a></div>
            </div>
          </div> 
          @endif
          @endforeach
          <script>
            var heart = false;
            function btnClick(elem) {
              if (heart === false) {
                heart=true;
                elem.classList.remove('fa-heart-o');
                elem.classList.add('fa-heart');
              }
              else{
                heart=false;
                elem.classList.add('fa-heart-o');
                elem.classList.remove('fa-heart');
              }
              document.getElementById('timesClicked').innerHTML = timesClicked;
              return true
            }
          </script>
                </div>
        <div class="item">
        @php($i=0)
            @foreach ($annonces as $annonce)
            @php($i++)
            @if($i>3)
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300":>
            <div class="product-card mb-30">
              @if($annonce->achat!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Achat</div>
              @endif
              @if($annonce->invest!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Investissement</div>
              @endif
              @if($annonce->location!=NULL)
              <div class="product-badge bg-secondary border-default" style="z-index:1;">Location</div>
              @endif
              <a class="product-thumb" href="#" data-abc="true">
                  <div id="product-carousel{{$i}}" class="carousel slide" data-interval="false">
                  <div class="carousel-inner border">
                  @php($count=0)
                  @foreach($images as $image)              
                  @if($image->terrain==$annonce->id_terrain)
                  @php($count++)
                          @if($count==1)                      
                              <div class="carousel-item active">
                                <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                              </div>
                          @else
                          <div class="carousel-item">
                                    <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($image->image)) }}" style="height: 157px;width: auto;" alt="Image">
                          </div>
                          <a class="carousel-control-prev" href="#product-carousel{{$i}}" data-slide="prev"><i class="fa fa-2x fa-angle-left text-dark"></i></a>
                          <a class="carousel-control-next" href="#product-carousel{{$i}}" data-slide="next"><i class="fa fa-2x fa-angle-right text-dark"></i></a>     
                          @endif 
                @endif
                @endforeach
                </div> 
                </div>
              </a>
              <div class="product-card-body">
              <div class="product-category"><a href="#" data-abc="true">{{$annonce->ville}}</a></div>
              <h3 class="product-title"><a href="#" data-abc="true">{{$annonce->nom}}</a></h3>
              @if($annonce->achat!=NULL)
              <h4 class="product-price">{{$annonce->prix_achat}} DH</h4>
              @endif
              @if($annonce->invest!=NULL)
              <h4 class="product-price">{{$annonce->prix_invest}} DH</h4>
              @endif
              @if($annonce->location!=NULL)
              <h4 class="product-price">{{$annonce->prix_loca}} DH</h4>
              @endif
              </div>
              <div class="product-button-group"><a class="product-button btn-wishlist" href="#about" data-abc="true"><i onclick="btnClick(this)" class="fa fa-heart-o"></i><span>Wishlist</span></a>
              <a class="product-button" style="cursor: pointer;" data-toggle="modal"  data-target="#myModal{{$annonce->id_annonce}}"><i class="fa fa-angle-right"></i><span>Details</span></a></div>
            </div>
          </div> 
          @endif
          @endforeach
</div>
</div>
@if(count($annonces) > 3)<a class="carousel-control-next" href="#myCarousel" data-slide="next"><i class="fa fa-2x fa-angle-right text-dark"></i></a>@endif
</div>
</div>
</div>
@php($title=1)
<!--Modal1-->  
@foreach ($annonces as $index => $annonce)
<div id="myModal{{$annonce->id_annonce}}"
  class="modal fade"  
  tabindex="-1"
  role="dialog" 
  aria-labelledby="myModalLabel" 
  aria-hidden="true"
  style="display: none;overflow-y: initial !important"
>    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
        <?php $p=$annonce->id_annonce;?>
        <?php $prix=$annonce->prix_achat;?>
        <?php $type="Achat"?>
        @if($annonce->achat!=NULL)<?php $prix=$annonce->prix_achat;?><?php $type="Achat"?>@endif
        @if($annonce->invest!=NULL)<?php $prix=$annonce->prix_invest;?><?php $type="Investissement"?>@endif
        @if($annonce->location!=NULL)<?php $prix=$annonce->prix_loca;?><?php $type="Location"?>@endif
        <?php $terrain=$annonce->id_terrain;?>
        <?php $part_invest=$annonce->part_invest;?>
        @include('product')
      </div>
      </div>
    </div>
    @if(count($annonces)>1)
    <a class="carousel-control-next next" href="#about">
       <i class="fa fa-2x fa-angle-right text-dark" style="color:white !important;cursor: pointer;font-size:60px;color:black;"></i>
   </a>
   @endif
  </div>
@endforeach
    </section><!-- End About Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    color: #45505b;font-family: 'Poppins', sans-serif;">About</h2>
          <p style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji' !important;}">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    color: #45505b;font-family: 'Poppins', sans-serif;">Services</h2>
          <p style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,'Noto Sans',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji' !important;}">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Sed Perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Divera Don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Cartographie</h3>
      <p></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script>
  var openProfile = null;
$( document ).ready(function() {
  $('.product-button').click(function(event){
    openProfile = $(this);
  });
 $(".next").click(function(){
      var cards = openProfile.parents('.row').find(".product-button");
      var currentCardIndex = cards.index(openProfile);
      if(cards.length > (currentCardIndex + 1)) {
      	cards.get(currentCardIndex + 1).click();
      } else {
      	alert("Vous-êtes sur la dernière annonce!");
      }
    });
    });
</script>
  <!--Modal Search-->
  <style>
.modal-controls{
position: absolute;
color: #bca480;
font-size: 14px;
width: 100%;
text-transform: uppercase;
}
.modal-controls .prev{
left: 40px;
bottom: 35px;
position: absolute;
cursor: pointer;
}
.modal-controls .next{
right: 40px;
bottom: 35px;
position: absolute;
cursor: pointer;
}
        input[type="search"]::-webkit-search-cancel-button {
          -webkit-appearance: none;
          height: 1em;
          width: 1em;
          border-radius: 50em;
          background: url(https://pro.fontawesome.com/releases/v5.10.0/svgs/solid/times-circle.svg) no-repeat 50% 50%;
          background-size: contain;
          opacity: 0;
          pointer-events: none;
        }

        input[type="search"]:focus::-webkit-search-cancel-button {
          opacity: .3;
          pointer-events: all;
        }

        input[type="search"].dark::-webkit-search-cancel-button {
          filter: invert(1);
        }
        .modal-backdrop.show {
          z-index: -1000 !important;
        }
        #myModalSearch {
          background: #000000e6;
        }
        .modal {
          background: #000000e6;
        }
        #tfr9o_tani .modal-confirm {
          color: #636363;
          width: 325px;
        }
        #tfr9o_tani .modal-confirm .modal-content {
          padding: 20px;
          border-radius: 5px;
          border: none;
        }
        #tfr9o_tani .modal-confirm .modal-header {
          border-bottom: none;
          position: relative;
        }
        #tfr9o_tani .modal-confirm h4 {
          text-align: center;
          font-size: 26px;
          margin: 30px 0 -15px;
        }
        #tfr9o_tani .modal-confirm .form-control {
          min-height: 40px;
          border-radius: 3px;
        }
        #tfr9o_tani .modal-confirm .btn {
          min-height: 40px;
          border-radius: 3px;
          color: #fff;
          border-radius: 4px;
          background: #ef513a;
          text-decoration: none;
          transition: all 0.4s;
          line-height: normal;
          border: none;
        }
        #tfr9o_tani .modal-confirm .btn:hover {
          background: #da2c12;
          outline: none;
        }
        #tfr9o_tani .modal-confirm .btn:focus {
          background: #da2c12;
          outline: none;
        }
        #tfr9o_tani .modal-confirm .close {
          position: absolute;
          top: -5px;
          right: -5px;
        }
        #tfr9o_tani .modal-confirm .modal-footer {
          border: none;
          text-align: center;
          border-radius: 5px;
          font-size: 13px;
        }
        #tfr9o_tani .modal-confirm .icon-box {
          color: #fff;
          position: absolute;
          margin: 0 auto;
          left: 0;
          right: 0;
          top: -70px;
          width: 95px;
          height: 95px;
          border-radius: 50%;
          z-index: 9;
          background: #ef513a;
          padding: 15px;
          text-align: center;
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        #tfr9o_tani .modal-confirm .icon-box i {
          font-size: 56px;
          position: relative;
          top: 4px;
        }
        #tfr9o_tani .modal-confirm.modal-dialog {
          margin-top: 80px;
        }
        #tfr9o_tani .trigger-btn {
          display: inline-block;
          margin: 100px auto;
        }
</style>
<div id="tfr9o_tani">
<div id="myModalSearch" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title w-100">Oups!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Désolé, aucun résultat ne correspond à votre recherche.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger btn-block" onclick="location.href='#hero'" data-bs-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>    
</div>
  @if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
  <script>
  $(function() {
      $('#myModalSearch').modal('show');
  });
  </script>
  @endif
  <!--End Modal Search-->

  <script>
      const navbar = document.querySelector('.fixed-top');
window.onscroll = () => {
    if (window.scrollY > 300) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};
  </script>
  <script type="text/javascript">

    function getParent(elem)
    {
      document.getElementById("addHtml").innerHTML=`
        <div class="carousel-item active">
              <img class="w-100 h-100" id="imgput1" src="" alt="Image">
            </div>`;
      var parent=elem.parentNode;
      var parent2 = parent.parentNode;
      var finalP = parent2.parentNode;
      var numberImg = finalP.getElementsByTagName('img').length;
      for(i=1;i<=numberImg;i++){
        if(i>1){
          document.getElementById("addHtml").innerHTML+=`
          <div class="carousel-item">
                <img class="w-100 h-100" id="imgput`+i+`" src="" alt="Image">
              </div>`;
        }
        var t=finalP.getElementsByTagName('img').item(i-1).src;
        document.getElementById("imgput"+i).src=t;
      }
      document.getElementById("settitle").innerHTML=finalP.getElementsByTagName('h5').item(0).innerHTML;
      document.getElementById("setprice").innerHTML=finalP.getElementsByTagName('p').item(0).innerHTML;
      document.getElementById("settag").innerHTML="("+finalP.getElementsByTagName('div').item(0).innerHTML+")";
    }
    </script>
    
  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.j')}}s"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{asset('js/mainPOPUP.js')}}"></script>
</body>

</html>