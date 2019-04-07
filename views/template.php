<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

	<title>DoubleCross</title>

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
</head>
<body>

<div class="wrapper">
	
<nav id="sidebar">
   		<div class="sidebar-header">
        <img src="<?php echo BASE_URL; ?>assets/imagem/doublecross.jpg" alt="" style="width: 100%; height:150px;">
   			<!--<h3>DoubleXCross SIDEBAR</h3>-->
   		</div>  		
   		
   		<ul class="list-unstyled components">
   			<p>Menu</p>
   			<li>
   				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Double Cross</a>
   				<ul class="collapse list-unstyled" id="homeSubmenu">
   					<li>
   						<a href="<?php echo BASE_URL; ?>home/sobre/basic_knowledge">Conhecimentos Básicos</a>
   					</li>
   					<li>
   						<a href="<?php echo BASE_URL; ?>home/sobre/overeds_and_gjaur">Overeds & Gjaum</a>
   					</li>
   					<li>
   						<a href="<?php echo BASE_URL; ?>home/sobre/stats_and_skills">Stats & Skills</a>
   					</li>
   				</ul> 
   			</li>
   			
   			<li>
   				<a href="#infinityCode" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Síndromes</a>
          <ul class="collapse list-unstyled" id="infinityCode">
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/sobre">Sobre as Síndromes</a>
            </li>
            <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/angel_halo">Angel Halo</a>
            </li>
             <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/balor">Balor</a>
            </li>
             <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/black_dog">Black Dog</a>
            </li>
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/bram_stoker">Bram Stoker</a>
            </li>
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/chimera">Chimera</a>
            </li>
             <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/exile">Exile</a>
            </li>
             <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/hanuman">Hanuman</a>
            </li>
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/morpheus">Morpheus</a>
            </li>
               <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/neumann">Neumann</a>
            </li>
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/orcus">Orcus</a>
            </li>
                <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/salamandra">Salamandra</a>
            </li>
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/solaris">Solaris</a>
            </li>
              <li>
              <a href="<?php echo BASE_URL; ?>syndrome/type/ouroboros">Ouroboros</a>
            </li>
          </ul>
   			</li>
   			<li>
   				<a href="#publicEnemy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Criação de personagem</a>
   				<ul class="collapse list-unstyled" id="publicEnemy">
   					<li>
   						<a href="<?php echo BASE_URL; ?>criacao/modo/rapido">Começo Rápido</a>
   					</li>
   					<li>
   						<a href="<?php echo BASE_URL; ?>criacao/modo/construcao">Construção</a>
   					</li>
   					<li>
   						<a href="<?php echo BASE_URL; ?>criacao/modo/construcao_total">Construção total</a>
   					</li>
   				</ul> 
   			</li>
   			<li>
   				<a href="#">Services</a>
   			</li>
   			<li>
   				<a href="#">Contact Us</a>
   			</li>
   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
   				<a href="#" class="download">Download code</a>
   			</li>
   			<li>
   				<a href="#" class="article">article</a>
   			</li>
   		</ul>
   	</nav>
<div class="content container-fluid">
	
   	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   		
   	<button type="button" id="sidebarCollapse" class="btn btn-info">
   	<i class="fas fa-align-justify"></i><span> toggle sidebar</span>
   		</button>
   		
 <a class="navbar-brand" href="<?php echo BASE_URL; ?>home"><strong>DoubleXCross</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASE_URL; ?>fichas">Fichas<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL; ?>perfil">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL; ?>login/sair">Sair</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL; ?>cadastrar">Cadastre-se</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL; ?>login">Login</a>
      </li>
    <?php endif; ?>
    </ul>
  </div>
</nav>
  	

  	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
 
   	</div>
   		
   </div>

	


	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
   <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
</body>
</html>	