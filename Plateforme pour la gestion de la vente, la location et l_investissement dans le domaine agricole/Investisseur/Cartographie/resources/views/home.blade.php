@include('header')
<body style="background-color: white;">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
	  .modal-backdrop.show {
	 z-index: -1 !important;
			}
			#exampleModal {
				background: #000000e6;
			}
			#tfr9o_mra .modal-confirm {
				color: #434e65;
				width: 525px;
			}
			#tfr9o_mra .modal-confirm .modal-content {
				padding: 20px;
				font-size: 16px;
				border-radius: 5px;
				border: none;
			}
			#tfr9o_mra .modal-confirm .modal-header {
				background: #555;
				border-bottom: none;
				position: relative;
				text-align: center;
				margin: -20px -20px 0;
				border-radius: 5px 5px 0 0;
				padding: 35px;
			}
			#tfr9o_mra .modal-confirm h4 {
				text-align: center;
				font-size: 36px;
				margin: 10px 0;
			}
			#tfr9o_mra .modal-confirm .form-control {
				min-height: 40px;
				border-radius: 3px;
			}
			#tfr9o_mra .modal-confirm .btn {
				min-height: 40px;
				border-radius: 3px;
				color: #fff;
				border-radius: 4px;
				background: #248d0f !important;
				text-decoration: none;
				transition: all 0.4s;
				line-height: normal;
				border-radius: 30px;
				margin-top: 10px;
				padding: 6px 20px;
				border: none;
			}
			#tfr9o_mra .modal-confirm .btn:active {
				color: #fff;
				border-radius: 4px;
				background: #248d0f !important;
				text-decoration: none;
				transition: all 0.4s;
				line-height: normal;
				border-radius: 30px;
				margin-top: 10px;
				padding: 6px 20px;
				border: none;
			}
			#tfr9o_mra .modal-confirm .btn:hover {
				background: #248d0f !important;
				outline: none;
			}
			#tfr9o_mra .modal-confirm .btn:focus {
				background: #248d0f !important;
				outline: none;
			}
			#tfr9o_mra .modal-confirm .btn span {
				margin: 1px 3px 0;
				float: left;
			}
			#tfr9o_mra .modal-confirm .btn i {
				margin-left: 1px;
				font-size: 20px;
				float: right;
			}
			#tfr9o_mra .modal-confirm .close {
				position: absolute;
				top: 15px;
				right: 15px;
				color: #fff;
				text-shadow: none;
				opacity: 0.5;
			}
			#tfr9o_mra .modal-confirm .close:hover {
				opacity: 0.8;
			}
			#tfr9o_mra .modal-confirm .icon-box {
				color: #fff;
				width: 95px;
				height: 95px;
				display: inline-block;
				border-radius: 50%;
				z-index: 9;
				border: 5px solid #fff;
				padding: 15px;
				text-align: center;
			}
			#tfr9o_mra .modal-confirm .icon-box i {
				font-size: 64px;
				margin: -4px 0 0 -4px;
			}
			#tfr9o_mra .modal-confirm.modal-dialog {
				margin-top: 80px;
			}
			#tfr9o_mra .trigger-btn {
				display: inline-block;
				margin: 100px auto;
			}
  </style>
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
         
		 <div class="accordion-content">
		   <div class="dropdown">
			 <button class="dropbtn"><i class="fa fa-user" > {{  $user }}</i></button>
			 <div class="dropdown-content">
			   <a href="p">Profil 
			   @if($i>0)
                  <i class="fa fa-bell" style="color: rgb(191, 59, 59)">{{ $i }}</i>
                  @endif			   </a>
			   <a href="test">Chat
			   @if($j>0)
                  <i class="fa fa-comments" style="color: rgb(191, 59, 59)">{{ $j }}</i>
                  @endif</a>				</a>
			   <a href="dec">Déconnecter</a>
			 </div>
		   </div></div>
	   
	 </div>
	  <div id="tfr9o_mra">
<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-confirm">
		<div class="modal-content" style="width: 440px;">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons"></i>
				</div>
				<button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body text-center">
				<h4>Bravo!</h4>	
				<p>Votre transaction a bien été enregistrée.</p>
				<button class="btn btn-success" onclick="window.location.href='/p#messages'"><span>Voir les transactions</span> <i class="material-icons"></i></button>
			</div>
		</div>
	</div>
</div>
		</div>
      @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#exampleModal').modal('show');
});
</script>

@endif
      <script>var accordions = document.getElementsByClassName("accordion");

        for (var i = 0; i < accordions.length; i++) {
          accordions[i].onclick = function() {
            this.classList.toggle('is-open');
        
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + "px";
            }
          }
        }</script>
  </nav>
  @include('restpage')