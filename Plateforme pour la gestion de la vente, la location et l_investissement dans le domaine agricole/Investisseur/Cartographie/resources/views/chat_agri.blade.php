<!DOCTYPE html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      
      <script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/chat.css">
<link href="{{asset('css/profile.css')}}" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

    
</head>
<style>
.p-3 {
    padding: 1rem !important;
}
</style>
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
<main class="content">
    <div class="container p-0">
<div class="card" style="margin-top:150px;">
			<div class="row g-0" style="-webkit-box-shadow: 0 13px 25px 0 rgba(0,0,0,0.3);
    box-shadow: 0 13px 25px 0 rgba(0,0,0,0.3);margin-right:0px;margin-left:0px;">
				<div class="col-12 col-lg-5 col-xl-3 border-right">

			<div class="card-body text-center bg-primary rounded-top">
				<div class="user-box">
				 <img src="https://i.ibb.co/fpwv3bR/man-user.png" alt="user avatar" >
			   </div>
			   @foreach($info_agri as $agri)
			   <h5 class="mb-1 text-black">{{ $agri->prenom }} {{ $agri->nom }}</h5>
			  </div>
						<div class="d-flex align-items-start">
							
								<div class="card-body" style="padding-top: 0px;padding-bottom: 0px;">
									<ul class="list-group shadow-none">
										
										<li class="list-group-item">
										  <div class="list-icon">
											<i class="fa fa-phone" style="margin-right:10px;"></i>0{{ $agri->tel }}
										  </div>
										</li>
										<li class="list-group-item" style="width:auto;">
											<div class="list-icon">
											  <i class="fa fa-map-marker" style="margin-right:10px;"></i>{{ $agri->ville }}, {{ $agri->region }}
											</div>
										  </li>
										</ul>
										
											  
										
								   </div>
							
						</div>
	</a>	
					<hr class="d-block d-lg-none mt-1 mb-0">
				</div>
				
				<div class="col-12 col-lg-7 col-xl-9" >
					<div class="tab-content p-3">
                        <div class="tab-pane active show" id="">
					<div class="py-2 px-4 border-bottom d-none d-lg-block">
						<div class="d-flex align-items-center py-1">
							<div class="position-relative">
								<img src="https://i.ibb.co/fpwv3bR/man-user.png" style="border: 1px solid rgba(0,0,0,.125);" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
							</div>
							<div class="flex-grow-1 pl-3">
								<strong>{{ $agri->nom }} {{ $agri->prenom }}</strong>
								<br/> Offline
								
							</div>
							
						</div>
					</div>
					<div class="position-relative">
						<div class="chat-messages p-4 " style="flex-direction: column;
						display:block;
						overflow-y:scroll;
						height: 200px;">					
						@foreach($chat as $msg)
							<div class="chat-message-right pb-4"  style="display: flex;
							flex-shrink: 0;
							flex-direction: row-reverse;margin-left: auto;">
								
								<div class="flex-shrink-1 rounded py-2 px-3 mr-3" style="background-color:#d8d8d8;">
									{{$msg->message}}
								</div><br/>
								
							</div>@endforeach
	
							
						</div>					

					</div>
					<form action="{{ $agri->nom }}">
				<div class="flex-grow-0 py-3 px-4 border-top">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Entrer votre message.." name="msg">
							<button class="btn btn-primary" style="background-color: #248d0f !important;border: rgb(100, 182, 100) !important; color:white !important; border-radius: 0.25rem;color: white;font-size: 12px;text-align: center;letter-spacing: 1px;font-weight: 600;text-transform: uppercase;margin: 3px;padding: 14px 20px;">Envoyer</button>
						</div>
					</div></form>

				</div>
				@endforeach
			</div>
		</div>
	</div>
</main>
<br/><br/>
<div id="preloader"></div>
	</body>
	
	<script>
		function showResult(str) {
		  if (str.length==0) {
			document.getElementById("livesearch").innerHTML="";
			document.getElementById("livesearch").style.border="0px";
			return;
		  }
		  var xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			  document.getElementById("livesearch").innerHTML=this.responseText;
			  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
			}
		  }
		  xmlhttp.open("GET","livesearch.php?q="+str,true);
		  xmlhttp.send();
		}
		</script>
<script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
      <script src="js/main1.js"></script>
	  <script src="{{asset('js/main.js')}}"></script>
      <script>
		  function onScroll(velocity) {
  var win = $(window)  
  $(win).on('wheel', function(event) {
    event.preventDefault()
    var direction = event.originalEvent.deltaY > 0? 'down': 'up';    
    var position = win.scrollTop();

    if (direction === 'up') {
        $('html, body').animate({
            scrollTop: (position + velocity)
        }, 40);
    }
    else if (direction === 'down') {
        $('html, body').animate({
            scrollTop: (position - velocity)
        }, 40);
    }
  })
}
onScroll(70);
		</script>
</html>		
