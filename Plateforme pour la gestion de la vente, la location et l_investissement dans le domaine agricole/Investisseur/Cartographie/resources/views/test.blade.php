<!DOCTYPE html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/chat.css">
<link href="{{asset('css/profile.css')}}" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

    
</head>

<nav class="header">
    <a class="nav-link" aria-current="page" href="/" style="color:#248d0f;padding-top: 20px;
    padding-left: 27px;
    font-size: 16px;
    font-weight: 600;}">< Accueil</a>    
  </nav>
<style>#hero:before {
    z-index: -1 !important;
    content: "" !important;
    background: rgba(255, 255, 255, 0.4) !important;
    position: absolute !important;
    bottom: 0 !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
}</style>
    <body style="width: 100%;
    height: 100vh;
    background: url(../img/hero-bg.jpg) top right no-repeat;
    background-size: cover;
    position: relative;" id="hero">
    
<main class="content" style="background-color:transparent;margin-top: 150px;">
    <div class="container p-0" style="padding: 40px;flex-direction: column;
display:block;
overflow-y:scroll;
height: auto;">
<div class="card" style="padding: 40px;flex-direction: column;
display:flex;
min-height: auto;">
<h4 class="card-title" style="color:#248d0f;margin-bottom: 1.25rem;">Trouver l'investisseur que vous voulez contacter!</h4>
<input type="text" id="myInput" placeholder="Chercher..." style="border: 1px solid #ced4da;" class="form-control"/>
<br/>
    <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">Investisseur</th>
            <th scope="col">Nom d'utilisateur</th>
            <th scope="col" style="width: 15%">Statut</th>
            <th scope="col" style="width: 15%">Contacter</th>
          </tr>
        </thead>
        <tbody id="myTable">
            @foreach($invests as $invests)
            @if($invests->visible==1)
			@php($i=$invests->cin)
          <tr>
            <td>{{ $invests->nom }} {{ $invests->prenom }}</td>
            <td>{{ $invests->username }}</td>
            <td> {{ $invests->status }}</td>
		
            <td ><a href="chat/{{ $i }}"><i style="color: #248d0f" class="fa fa-comments" style="color:#248d0f;"></i></a> 
              
              @php($Nmessage = DB::select('select * from contacter_invest WHERE investisseur1 = ?  and investisseur2 = ? and new = ?',[$inv->cin,$invests->cin,0]))
              @php($k=0)
              @foreach($Nmessage as $Nmessage)
              @php($k++)
              @endforeach
              {{ $k }}
          </td>
          </tr> @endif
          @endforeach
        </tbody>
    </table>
		</div>
	</div>
</main>
<div id="preloader"></div>
	</body>
	
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
<script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
      <script src="js/main1.js"></script>
      <script src="{{asset('js/main.js')}}"></script>
</html>		
