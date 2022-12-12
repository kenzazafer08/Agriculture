
<html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Inscripton</title>
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{asset('css/inscripton.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script>
<link rel="stylesheet" href="https://phpcoder.tech/multiselect/css/jquery.multiselect.css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style1.css">
    </head>
    <div id="test">
    <body style="width: 100%;
    height: 100vh;
    background: url(../img/hero-bg.jpg) top right no-repeat;
    background-size: cover;
    position: relative;">
    <table id="myTable" style="display: hide"></table>
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

            </li>
          </ul>
          
        
    </nav>
    
    <!--PEN HEADER-->
    <a class="nav-link" aria-current="page" href="/" style="color:#248d0f;padding-top: 20px;
    padding-left: 27px;
    font-size: 16px;
    font-weight: 600;}">< Accueil</a>    
    <div id="center" style="padding-top: 10px;background-color:white;
margin-top: 50px;
    padding-bottom: 80px;
    padding-left: à;
    padding-right: 0px;
    border: 1px solid black;
    margin-left: 250px;
    margin-right: 250px;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;webkit-box-shadow: 0 13px 25px 0 rgb(0 0 0 / 30%);
    box-shadow: 0 13px 25px 0 rgb(0 0 0 / 30%);">
    
    <header class="header">
      <div class="header__btns btns"><a class="header__btn btn" href="/login" >SE CONNECTER</a></div>
    </header>
          <h2 class="content__title"></h2>
        <div class="container overflow-hidden">
          <!--multisteps-form-->
          <div class="multisteps-form">
            <!--progress bar-->
            <div class="row">
              <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="Informations d'utilisateur">Informations d'utilisateur</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Informations personnelles">Informations personnelles</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Informations d'investissement">Informations d'investissement</button>
                  
                </div>
              </div>
            </div>
            
            <!--form panels-->
            <div class="row" >
             
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form"action="inscriptionform" method="head" enctype="multipart/form-data"> 
                  @csrf
                  
                  <!--single form panel-->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="slideHorz" style="margin-top: 10px;">
                    <div class="multisteps-form__content">
                      
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <input class="multisteps-form__input form-control" type="text" placeholder="Nom d'utilisateur" name="username" required value="{{ old('username') }}"/>
                          <span class="text-danger">
                            @error('username')
                              {{ "Nom d'utilisateur déja utilisé!" }}
                          @enderror</span>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <input class="multisteps-form__input form-control" type="tel" placeholder="Téléphone" name="tel" required value="{{ old('tel') }}"/>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <input class="multisteps-form__input form-control" type="password" placeholder="Mot de passe" name="pass" required value="{{ old('pass') }}"/>
                          <span class="text-danger">
                            @error('pass')
                              {{ 'Mot de passe invalide!' }}
                          @enderror</span>
                          
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <input class="multisteps-form__input form-control" type="password" placeholder="Confirmer mot de passe" name="pass_conf" required value="{{ old('pass_conf') }}"/>
                          <span class="text-danger">
                            @error('pass')
                              {{ 'Mot de passe invalide!' }}
                          @enderror</span>
                          
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Suivant</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel-->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                    
                    <div class="multisteps-form__content">
                        <div class="form-row mt-4">
                            <div class="col-12 col-sm-6">
                              <input class="multisteps-form__input form-control" type="text" placeholder="Nom" name="name" required value="{{ old('name') }}"/>
                            </div>
                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                              <input class="multisteps-form__input form-control" type="text" placeholder="Prénom" name="prenom" required value="{{ old('prenom') }}"/>
                            </div>
                          </div>
                          <div class="form-row mt-4">
                            <div class="col-12 col-sm-6">
                              <input class="multisteps-form__input form-control" type="text" placeholder="CIN" name="CIN" required value="{{ old('CIN') }}"/>
                              <span class="text-danger">
                                @error('username')
                                  {{ 'CIN invalid' }}
                              @enderror</span>
                            </div>
                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                              <input class="multisteps-form__input form-control" type="Date" placeholder="Date de naissance" max="01-01-2005"  name="DN" required value="{{ old('DN') }}"/>
                            </div>
                          </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <select required value="{{ old('ville') }}" type="text" class="multisteps-form__input form-control" name="ville"><option disabled selected hidden >Veuillez choisir une ville</option>
                          <option>Agadir</option>
                          <option>Ain Harrouda</option>
                          <option>Aït Melloul</option>
                          <option>Al Hoceima</option>
                          <option>Azrou</option>
                          <option>Ben Guerir</option>
                          <option>Beni Ansar</option>
                          <option>Beni Mellal</option>
                          <option>Benslimane</option>
                          <option>Berkane	109,237</option>
                          <option>Berrechid</option>
                          <option>Bouskoura</option>
                          <option>Casablanca</option>
                          <option>Dar Bouazza</option>
                          <option>Dcheira El Jihadia</option>
                          <option>Drargua
                          <option>El Jadida</option>
                          <option>El Kelaa Des Sraghna</option>
                          <option>Errachidia</option>
                          <option>Essaouira</option>
                          <option>Fez</option>
                          <option>Fnideq</option>
                          <option>Fquih Ben Salah</option>
                          <option>Guelmim</option>
                          <option>Guercif</option>
                          <option>Inezgane</option>
                          <option>Kenitra</option>
                          <option>Khemisset</option>
                          <option>Khenifra</option>
                          <option>Khouribga</option>
                          <option>Lahraouyine</option>
                          <option>Larache</option>
                          <option>Lqliaa</option>
                          <option>M'diq</option>
                          <option>Marrakech</option>
                          <option>Martil</option>
                          <option>Meknes</option></option>
                          <option>Midelt</option>
                          <option>Mohammedia</option>
                          <option>Nador</option>
                          <option>Ouarzazate</option>
                          <option>Ouazzane</option>
                          <option>Oued Zem</option>
                          <option>Oujda</option>
                          <option>Oulad</option>
                          <option>Rabat</option>
                          <option>Safi</option>
                          <option>Salé</option>
                          <option>Sefrou</option>
                          <option>Settat</option>
                          <option>Sidi Bennour</option>
                          <option>Sidi Kacem</option>
                          <option>Sidi Slimane</option>
                          <option>Skhirat</option>
                          <option>Souk El Arbaa</option>
                          <option>Suq as-Sabt</option>
                          <option>Tan-Tan</option>
                          <option>Tangier</option>
                          <option>Taourirt</option>
                          <option>Taroudant</option>
                          <option>Taza</option>
                          <option>Temara</option>
                          <option>Tetouan</option>
                          <option>Tifelt</option>
                          <option>Tiznit</option>
                          <option>Youssoufia</option>
                        </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <select required value="{{ old('region') }}" type="text" class="multisteps-form__input form-control" name="region"><option disabled selected hidden >Veuillez choisir une région</option>
                          <option>Béni Mellal-Khénifra</option>
                          <option>Casablanca-Settat</option>
                          <option>Drâa-Tafilalet</option>
                          <option>Fès-Meknès</option>
                          <option>Guelmim-Es Semara</option>
                          <option>Guelmim-Oued Noun</option>
                          <option>Souk El Arbaa</option>
                          <option>Marrakesh-Safi</option>
                          <option>Oriental</option>
                          <option>Rabat-Salé-Kénitra</option>
                          <option>Souss-Massa</option>
                          <option>Tanger-Tetouan-Al Hoceima</option>
                          </select>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-primary js-btn-prev" type="button" title="Précedent">Précedent</button>
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Suivant">Suivant</button>
                      </div>
                    </div>
                  </div>
                 
                  <!--single form panel-->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                 
                    <div class="col-12 col-sm-12 mt-4 mt-sm-0">
                      <div class="row justify-content-center">
                        <div class="col-lg-4 d-flex justify-content-center align-items-center">
                         
                          <select class="js-select2" multiple="multiple" name="culture[]" id="culture" >
                            @foreach ($cultures as $culture)
                       <option value="{{ $culture->type_culture }}">{{ $culture->type_culture }}</option>
                      @endforeach

                          </select>
                        </div>
                      </div>
                      
                 
                </br>
                  <div class="file-input">
                    <input type="file" id="file" class="file" accept="image/png, image/jpeg" name="image" required value="{{ old('image') }}"/>
                    <label for="file">registre commercial</br><p class="file-name"></p></label>
                  
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev" onclick="getValues()">Précedent</button>
                    <button class="btn btn-success ml-auto" type="submit"  title="Send">Enregistrer</button>
                  </div>
                      </div>
                    </div>
                  </div>
               
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </br>
    <div class="results">
      @if(Session::get('fail'))
<div class="alert-fail1" alert='fail'>
  {{ session::get('fail') }}
</div>
@endif
@if(Session::get('succes'))
<div class="alert" alert='fail'>
{{ session::get('succes') }}
</div>
@endif</div>
</div>
<div id="preloader"></div>
    </body>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
    <script  src="{{asset('js/script_signup.js')}}"></script>
    <script  src="{{asset('js/main.js')}}"></script>
    <script>const file = document.querySelector('#file');
      file.addEventListener('change', (e) => {
        // Get the selected file
        const [file] = e.target.files;
        // Get the file name and size
        const { name: fileName, size } = file;
        // Convert size in bytes to kilo bytes
        const fileSize = (size / 1000).toFixed(2);
        // Set the text content
        const fileNameAndSize = `${fileName} - ${fileSize}KB`;
        document.querySelector('.file-name').textContent = fileNameAndSize;
      });</script>
      <script>
        jQuery('#languageSelect').multiselect({
          
          columns: 1,
    placeholder: 'Choisie les cultures qui vous intéresent',
    search: true
});
      </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
      <script src="js/main1.js"></script>
      <script>
        function getValues(){
            var table = document.getElementById("myTable");
            table.innerHTML = "";

            var cultures = [
              @foreach ($cultures as $culture)
                  [ "{{ $culture->type_culture }}"],
                  @endforeach];

            var selected = $('.js-select2').val();
            var output=String(selected).split(',');
var values = output.values();
            var cultures_values = cultures.values();

            var i=0;
var kenza = 0;
            for (let element of values) {
              kenza=0;
              for (let culture of cultures_values) {
              while(element == String(culture))
                {
                  kenza++;
                  alert(kenza)
                }
              }
              if(kenza < 1){
                  var row = table.insertRow(i);
                  var cell1 = row.insertCell(0);
                  cell1.innerHTML = element;
                  i++;
               }
            }
        }
      </script>
    </html>