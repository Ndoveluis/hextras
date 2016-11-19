<html>
<head>
	<title>Meu Controlo de Horas Extras</title>
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/style.css')}}
</head>
<body>

	<header>
		<h1>Controlo de Horas Extras dos Funcionários</h1> 
	</header>


	<div class="container content">
	<div class="row">

	<ul class="nav nav-tabs">
	
	  <li role="presentation"><a href="{{URL::to('/mp')}}">Início</a></li>
	  	
 <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Horas extras <span class="caret"></span></a>
    <ul class="dropdown-menu">
		  <li role="presentation" class="active"><a href="{{URL::to('hext')}}">Listar</a></li> 
		  <li role="presentation" class="active"><a href="{{URL::to('newreg')}}">Adicionar</a></li> 
    <!--  <li role="presentation" class="active"><a href="{{URL::to('vorg')}}">Organização</a></li> -->	
    </ul>
  </li>

	<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Salários <span class="caret"></span></a>
    <ul class="dropdown-menu">
		
	 <li role="presentation" class="active"><a href="{{URL::to('vsal')}}">Listar salários</a></li> 
	 <li role="presentation" class="active"><a href="{{URL::to('csal')}}">Calcular salário</a></li> 
 
    </ul>
  </li>  

  	<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Organizações <span class="caret"></span></a>
    <ul class="dropdown-menu">
		
	 <li role="presentation" class="active"><a href="{{URL::to('vorg')}}">Listar Organizações</a></li> 
	 <li role="presentation" class="active"><a href="{{URL::to('newO')}}">Adicionar Organização</a></li> 
 
    </ul>
  </li>  

	<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    Usuários <span class="caret"></span></a>
    <ul class="dropdown-menu">
		
	 <li role="presentation" class="active"><a href="{{URL::to('vutil')}}">Lista de utilizadores</a></li> 
	 <li role="presentation" class="active"><a href="{{URL::to('vfunc')}}">Lista de funcionarios</a></li> 
	 <li role="presentation" class="active"><a href="{{URL::to('regU')}}">Cadastrar utilizador</a></li> 
 
    </ul>
  </li> 
	   <li role="presentation"><a href="http://localhost/hextras/public/">Sair</a></li>
 
		
</ul>
<br>

	<div class="container content">

			@section('conteudo') 
			 <h1>Estamos juntos</h1>  

  <!-- <img src="http://localhost:8000/resources/xampp/htdocs/hextras/app/views/layout/img2.jpg">-->
			@show
		</div>
	</div>
</div>

<div class="footer">
<footer>
		Desenvolvido por: 
			<marquee>
		Crimildo Dove e Isaac</marquee><br>
		
		  <li role="presentation"><a href="#">Contacte-nos</a></li>
		  <li role="presentation"><a href="#">Sobre-nos</a></li>

	</footer>
</div>
	
{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}
</body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.quicksearch.js"></script>

    <script type="text/javascript">

        $('#txtpesquisar').quicksearch('#tabela tbody tr');

    </script>
</html>
 