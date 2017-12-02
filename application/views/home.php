<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href='<?php echo base_url() . "lib/bootstrap/css/bootstrap.min.css"; ?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url()."css/icons.css"; ?>' rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-toggleable-sm bg-dark navbar-inverse">
	<div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="icono-market"></span>&nbsp; Aswaq</a>

		<button class="navbar-toggler" data-toggle="collapse" data-targer="#mainNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapseable nav-pills" id="mainNav">
			<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link active" id="home" href="#">Accueil</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="about" href="#">A propos</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="contact" href="#">Contact</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="signin" href="#">S'enregister</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="login" href="#">S'identifier</a>
			  </li>
			</ul>
		</div>
	</div>
</nav>


<footer class="footer fixed-bottom bg-dark">
	<div class="container">
		<p>
		<span class="text-muted row justify-content-center">Aswaq &copy - 2017 Coded by Friends</span>
	</p>
</div>
</footer>
<script src='<?php echo base_url() . "lib/jquery/jquery.min.js"; ?>' type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src='<?php echo base_url() . "lib/bootstrap/js/bootstrap.min.js"; ?>' type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		// move focus among navigation anchor links
		$(".nav-link").on('click', function(){
			if(!$( this ).hasClass('active')){
				$(".nav-link").each(function(){
				  $( this ).removeClass('active');	
				})
				$( this ).addClass('active');
			}
		})
	})
</script>
</body>
</html>