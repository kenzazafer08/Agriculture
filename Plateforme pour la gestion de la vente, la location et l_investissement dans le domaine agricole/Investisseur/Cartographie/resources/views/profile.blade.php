<!DOCTYPE html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      
      <script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style1.css">
<link href="{{asset('css/profile.css')}}" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

    
</head>  
<div id="hero">
<body style="width: 100%;
    height: 100vh;
    background: url(../img/hero-bg.jpg) top right no-repeat;
    background-size: cover;
    position: relative;">
    
  
  <!--PEN HEADER-->
  <nav class="header">
    <a class="nav-link" aria-current="page" href="/" style="color:#248d0f;padding-top: 20px;
    padding-left: 27px;
    font-size: 16px;
    font-weight: 600;}">< Accueil</a>    
  </nav>
    <div class="container" style="margin-top: 65px;">
        <div class="row">
                <div class="col-lg-4">
                   <div class="profile-card-4 z-depth-3">
                    <div class="card">
                      <div class="card-body text-center bg-primary rounded-top">
                       <div class="user-box">
                        <img src="https://i.ibb.co/fpwv3bR/man-user.png" alt="user avatar">
                      </div>
                      <h5 class="mb-1 text-black" style="padding-top:5px;">{{ $user->prenom }} {{ $user->nom }} </h5>
                     </div>
                      <div class="card-body" style="padding-top: 0px;">
                        <ul class="list-group shadow-none">
                            <li class="list-group-item">
                              <div class="list-icon">
                                <i class="fa fa-user"></i>
                              </div>
                              <div class="list-details">
                                <span>{{ $user->cin }}</span>
                                <small style="padding-top:5px;">CIN</small>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="list-icon">
                                <i class="fa fa-phone"></i>
                              </div>
                              <div class="list-details">
                                <span>0{{ $user->tel }}</span>
                                <small style="padding-top:5px;">MOBILE</small>
                              </div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon">
                                  <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="list-details">
                                  <span>{{ $user->region }} {{ $user->ville }}</span>
                                  <small style="padding-top:5px;">REGION, VILLE</small>
                                </div>
                              </li>
                            </ul>
                            <br/>
                            @if(Session::get('fail1'))
                                  <div class="alert-fail1" alert='fail'>
                                  {{ session::get('fail1') }}
                                  </div>
                                  @endif
                                  
                            <div class="row text-center mt-4" style="margin-top: 0px !important;">
                                <div class="center"><button style="border-radius: 0.25rem; color: white;font-size: 12px;text-align: center;letter-spacing: 1px;font-weight: 600;text-transform: uppercase;margin: 3px;padding: 12px 20px;" class="button" data-toggle="modal" data-target="#exampleModal1" align='center'>
                                    Changer le Mot de passe
                                  </button></div><br/>
                                  @if(Session::get('succes'))
                                  <div class="alert" alert='fail'>
                                  {{ session::get('succes') }}
                                  </div>
                                  @endif
                                  @if(Session::get('fail'))
                                  <div class="alert-fail1" alert='fail'>
                                  {{ session::get('fail') }}
                                  </div>
                                  @endif
                                <!--/row-->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        
                                        <div class="modal-body">
                                          <form action="change_pass">
                      <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="slideHorz">
                    <div class="multisteps-form__content">
                                              
                    <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                          <input class="multisteps-form__input form-control" type="text" placeholder="Nom d'utilisateur" name="username" required value="{{ $user->username }}" disabled/>
                          
                              </div>
              
                                              </div>
          <div class="form-row mt-4">
      <div class="col-12 col-sm-6">
        <input class="multisteps-form__input form-control" type="password" placeholder="Nouveau mot de passe" name="pass" required value="{{ old('pass') }}"/>
                                                  
                                                  
                                                </div>
          <div class="col-12 col-sm-6 mt-4 mt-sm-0">
      <input class="multisteps-form__input form-control" type="password" placeholder="Confirmer le mot de passe" name="pass_conf" required value="{{ old('pass_conf') }}"/>
                                                  
                                                  
                                                </div>
                                              </div>
    <div class="button-row d-flex mt-4">
      <div class="center"><button class="button" type="submit"  title="Send" style="border-radius: 0.25rem; color: white;font-size: 12px;text-align: center;letter-spacing: 1px;font-weight: 600;text-transform: uppercase;margin: 3px;padding: 12px 20px;">Changer</button></div>
     
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
                       
                     </div>
                   </div>
                </div>
                <div class="col-lg-8">
                   <div class="card z-depth-3">
                    <div class="card-body" style="height: 512px;">
                    <ul class="nav nav-pills nav-pills-primary nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                        </li>
                        <li class="nav-item">
                          <a href="javascript:void();" data-target="#Notification" data-toggle="pill" class="nav-link "><i class="icon-notification"></i> <span class="hidden-xs">Notification</span></a>
                      </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Transaction</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Modification</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active show" id="profile">
                          <table  style="width:100%">
                            <tr><td style="width:60%"><h5>Les cultures qui vous intéressent</h5>
                               
                              @foreach ($collection as $culture)
                              @foreach ($culture as $type)
                      <p href="javascript:void();" class="badge badge-dark badge-pill" style="margin-top: 10px;">  
                       {{ $type->type_culture}}
                      </p>
                      @endforeach
                      @endforeach
                         </td><td class="center" style=" align:center">
                            <button  class="button2" data-toggle="modal" data-target="#exampleModal" style="padding-left: 25px;padding-right: 25px;margin-top: 18px;">
                              Registre de commerce
                            </button></td></tr></table>
                          </br>
                            
                                
            <div class="col-md-12">
        <h5 class="mt-2 mb-3"><span class="fa fa-leaf" style="margin-right:5px"></span> Ajouter des cultures</h5>
        <form action="culture"><div class="row justify-content-center">
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
             
              <select class="js-select2" multiple="multiple" name="culture[]" id="culture" required>
                @foreach ($cultures as $culture)
                       <option value="{{ $culture->type_culture }}">{{ $culture->type_culture }}</option>
                      @endforeach

              </select><button class="button" type="submit"  title="Send" style="border-radius: 0.25rem; color: white;font-size: 12px;text-align: center;letter-spacing: 1px;font-weight: 600;text-transform: uppercase;margin: 3px;padding: 14px 20px;margin-top: 10px;">Ajouter</button>
              
            </div><br/>
              @if(Session::get('succes1'))
                                  <div class="alert" alert='fail'>
                                  {{ session::get('succes1') }}
                                  </div>
                                  @endif
          </div></form>
                                </div>
                            </div>
                    
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    
                                    <div class="modal-body">
                                     <p>
                                      <img class="w-100 card-img-top" style="width: 100% !important;height: 300px !important;" src="data:image/png;base64,{{ chunk_split(base64_encode($user->registre_commercial)) }}" style="height: 157px;width: auto;" alt="Image"></p>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                        
                              <div class="tab-pane" id="Notification" style="text-align:center;">
                            @if($Notification==NULL)
                            <h4 style="margin-top: 150px;">Pas de notifications!</h4>
                              @else
                                <table class="table table-hover table-striped">
                                    <tbody>                              @foreach($Notification as $not)
                                      @php($i=$not->id_not)
                                      @php($j=$not->contenu)
                                      @php($k=substr($j, 0, 50))
                                      @if($not->validation==1) 
                                        <tr>
                                          
                                            <td>
                                              <a class="button1 data-toggle="modal" data-target="#exampleModal{{ $i }}"> <span class="float-right font-weight-bold">
                                                 <i class="fa fa-bell"></i> {{ $not->date }}</span> 
                                               {{ $k }} ...</a>
                                            </td>
                                           
                                        </tr>
                                        @else
                                        <tr style="background-color: rgb(226, 255, 226)">
                                          <td><a class="button1" data-toggle="modal" data-target="#exampleModal{{ $i }}">
                                             <span class="float-right font-weight-bold">
                                               <i class="fa fa-bell" style="color: rgb(213, 59, 59)"></i> {{ $not->date }}</span> 
                                            <p style="justify-content: flex-start"> {{ $k }} ...</a></p>
                                         </td>
                                        </tr>
                                          @endif 
                                          <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      
                                      <div class="modal-body">
                                       <p>
                                        {{ $not->contenu }}
                                        </p>
                                        
                                        <a href="check/{{ $i }}" class="btn btn-success ml-auto" type="submit"  title="Send" ><i class="fa fa-check"></i></a>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                                        @endforeach
                                    </tbody> 
                                </table>
                               @endif
                            </div>
                        <div class="tab-pane" id="messages">
                        
                        <table class="table table-hover table-striped">
                                  <tbody>
                                  @foreach($annonces as $annonce)
                                    @foreach($transactions as $transaction)
                                    @if($transaction->invest==$user->cin && $transaction->annonce==$annonce->id_annonce)  
                                    <?php $prix=$annonce->prix_achat;?>
                                    @if($annonce->achat!=NULL)<?php $prix=$annonce->prix_achat;?>@endif
                                    @if($annonce->invest!=NULL)<?php $prix=$annonce->prix_invest;?>@endif
                                    @if($annonce->location!=NULL)<?php $prix=$annonce->prix_loca;?>@endif  
                                    <?php $transa=$transaction->part_invest_transa?>
                                    <?php $pourcentage=$annonce->pourcentage;?>
                                    <?php $pourc=$pourcentage*$transa;?>
                                      <tr>
                                          <td>
                                            <span class="float-right font-weight-bold">{{$transaction->date}}</span><a href="{{ route('details', ['id'=>$annonce->id_annonce]) }}#about">{{$annonce->nom}}</a> : {{$transaction->type}} ({{$prix}} DH)@if($annonce->invest!=NULL) : {{$transaction->part_invest_transa}}P ({{$pourc}}% bénifice)@endif 
                                          </td>
                                      </tr>
                                      @endif
                                      @endforeach
                                      @endforeach
                                  </tbody> 
                              </table>
                        </div>
                        <div class="tab-pane" id="edit">
                            <form action="modification">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                                    <div class="col-lg-9">
                                        <input required  class="form-control" type="text" value="{{ $user->nom }}" name="nom"> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                                    <div class="col-lg-9">
                                        <input required class="form-control" type="text" value="{{ $user->prenom }}" name="prenom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Mobile</label>
                                    <div class="col-lg-9">
                                        <input required class="form-control" type="tel" value="0{{ $user->tel }}" name="tel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">CIN</label>
                                    <div class="col-lg-9">
                                        <input required class="form-control" type="text" value="{{ $user->cin }}"
                                        name="cin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Date naissance</label>
                                    <div class="col-lg-9">
                                        <input required class="form-control" type="date" value="{{ $user->date_naissance }}"
                                        name="DN">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Chat</label>
                                    <div class="col-lg-9">
                                    <select id="form_frame" onchange="getData(this);" type="text" class="form-control form-control-sm" name="visible"><option disabled selected hidden>Voulez-vous être visible dans la liste de investisseurs?</option><option>Oui</option><option>Non</option></select>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="button3" value="Ignorer" style="border-radius: 0.25rem;
    color: white;
    font-size: 12px;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 3px;
    padding: 12px 20px;
}">
                                        <input type="submit" class="button" value="Enregistrer" style="border-radius: 0.25rem;
    color: white;
    font-size: 12px;
    text-align: center;
    letter-spacing: 1px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 3px;
    padding: 12px 20px;
}">
                                    </div>
                                </div> 
                                
                            </form>
                        </div>
                       
                    </div>
                </div>
              </div>
              </div>
                
            </div>
        </div>
        <div id="preloader"></div>
</body></div>
<script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
      <script src="js/main1.js"></script>
      <script src="{{asset('js/main.js')}}"></script>
</html>