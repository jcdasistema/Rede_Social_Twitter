

<?php

 session_start();
?>

<?



    if(!$_SESSION['usuario']){
        header('Location: index.php?erro=1');
    }
    
    else{
      $_SESSION['usuario'] = $dados_usuario['usuario'] ;
         $_SESSION['email'] =  $dados_usuario['email'] ;

    
    }
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">                
	    

	   <div class="col-md-3"><!--colocar 3-->  <div class="panel panel-dafault"> 
           <div class="panel-body" style="background-color: #ccc" > 
                
              <!-- acrescente o código abaixo-->
              <h4> <?= $_SESSION['usuario']?> </h4>
              <hr/> <!--linha horizontal-->              
              <!--crie esta div aqui-->
              <div class="col-md-6">
                  TWETTS </br> 1                    
              </div> <!-- fim TWETTS-->   
              
              <!--acrescente mais esta div-->
              <div class="col-md-6">
                  SEGUIDORES </br> 2    
                  
              </div>
              
              
           </div>   </div>   </div>
	    	
           
           
           
			<div class="col-md-4"><!--colocar 3--></div>
			
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>