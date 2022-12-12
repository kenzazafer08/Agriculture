<!DOCTYPE html>
<html lang="en">
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
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <link href="{{asset('css/reset.css')}}" rel="stylesheet">
      <link href="{{asset('css/main.css')}}" rel="stylesheet">
      <link href="{{asset('css/bt.css')}}" rel="stylesheet">
      <link href="{{asset('css/annonces.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/user.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{ $user }}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="d">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/user.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ $user }}</span>
                  <span class="text-secondary text-small">Administrateur</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                  <span class="menu-title">Utilisateurs</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-account-box menu-icon"></i>
                </a>
                <div class="collapse" id="general-pages">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="farmers"> Agriculteurs   </a></li>
                    <li class="nav-item"> <a class="nav-link" href="users">Investisseurs </a></li>
                    
                  </ul>
                </div>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/NA">
                <span class="menu-title">Nouveaux annonces</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/VA">
                <span class="menu-title">Valid annonces</span>
                <i class="mdi mdi-check-all menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Transactions</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-swap-horizontal menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="R">Location   </a></li>
                  <li class="nav-item"> <a class="nav-link" href="P">Achat </a></li>
                  <li class="nav-item"> <a class="nav-link" href="I"> Investissement </a></li>
                </ul>
              </div>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                      <i class="mdi mdi-account"></i>
                    </span> Utilisateurs
                  </h3>
              
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div><h4 class="card-title">Investisseurs</h4>
                        <input type="text" id="myInput" placeholder="serach..." style="border: 0mm; background-color:#F8F8F8;" />
                        </div>
                        <table class="table table-bordered">
                          <thead style="color: green">
                            <tr>
                              
                              <th> User </th>
                              <th> cin </th>
                              <th> Name </th>
                              <th> Ville/région </th>
                              <th> Birthday </th>
                              <th> Register de commerce </th>
                              <th> Status </th>
                              <th style="width: 8%"> Notification </th>
                            </tr>
                          </thead>
                          <tbody id="myTable">
                              @foreach ($invests as $invests)
                              @php($i = $invests->cin)
                                <tr>
                              <td>{{ $invests->username }}</td>
                              <td>{{ $invests->cin }}</td>
                              <td>{{ $invests->nom }} {{ $invests->prenom }}</td>
                              <td> {{ $invests->ville }} {{ $invests->region }}  </td>
                              <td> {{ $invests->date_naissance }} </td>
                              <td> 
                                <button  class="button1" data-toggle="modal" data-target="#exampleModal1{{$invests->cin }}" align='center' >Voir...</button>
                                <div class="modal fade" id="exampleModal1{{$invests->cin }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      
                                      <div class="modal-body">
                                        <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($invests->registre_commercial)) }}" style="height: 157px;width: auto;" alt="Image">
                                    </div>
                                  </div>
                               </td>
                              <td style="color: rgb(114, 149, 255)"> {{ $invests->status }} </td>
                              <td>
                              
                                <button  class="button4" data-toggle="modal" data-target="#exampleModal2{{ $i }}" align='center' >
                                  Envoyer</button>
                                
                                <div class="modal fade" id="exampleModal2{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      
                                      <div class="modal-body">
                                        <form action="send/{{ $i }}">
        
    <div class="col-12 col-sm-12">
      <textarea class="multisteps-form__input form-control" type="text" placeholder="Notification" cols="34" rows="6" name="not" required ></textarea><div class="center"><button class="button" type="submit"  title="Send"  >Send</button></div>
                                              </div>
                                    
                                        </form>
                                        </div>
                                      </div>
                                    
                                    </div>
                                  </div>
                              </td>
</tr> 
                              @endforeach
                             <br/>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              
              </div>

              
              
              </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>