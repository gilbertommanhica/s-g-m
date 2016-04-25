<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Controle de Registos de Alunos</title>
  
     
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    
     <link rel="stylesheet" href="/../css/estilo.css">
         <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>   
</head>
<body>
    
    <!-- NAVBAR
		============================================================ -->
		<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div><!-- navbar-header -->

         <a href="#" class="navbar-brand"><img src="/img/logo.png" alt="Sistema de Gestao de Mensalidade"/></a>
				<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">Inicio</a></li>
							<li><a href="{{action('AlunoController@cadastro')}}">Cadastro</a></li>
							<li><a href="{{action('AlunoController@lista')}}" data-target=".bs-example-modal-lg" class="">Alunos</a></li>
							<li><a href="#">Mensalidades</a></li>
				            <li><a href="#">Configuracoes</a></li>
				            <li><a href="#">Ajuda</a></li>
						</ul><!-- nav -->
					</div><!-- navbar -collapse -->
			</div><!-- Fim Container -->
		</div> <!-- Fim navbar -->

	</div><!-- navbar-wrapper -->
    
    <div class="container">
    <div class="panel teste panel-default">
  	    <div class="panel-heading">
					@yield('cabecalho')
  	    		
  	    		
  	    		</div>
  		    <div class="panel-body">
    
    
                    
                        @yield('conteudo')
                    
                    
                 </div>   
            </div>
        </div>
        
        <div class="row">
        	<div class="container">
        		<div class="footer">
	        		<div class="col-md-4">
	        					
	        		</div>
	        		
	        		<div class="col-md-4">
	        			
	        		</div>
	        		
	        		<div class="col-md-4">
	        			<h3>&copy; G.F.A - Desenvolvido por Grupo 4</h3>
	        		</div>
	        	</div>
        	</div>
        </div>

</body>
</html>