<!DOCTYPE html>
<html>
    <head>
        <title>Autenticacao</title>
        <link href="http://localhost/hextras/public/autenticacao/css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Staff Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <style type="text/css">
            a, a:hover{
               	padding:10px;
				background-color:#8bdafb;
				width:13%;
				border:none;
				cursor:pointer;
				color:white;
				font-family: 'Poiret One', cursive;
				font-size:18px;
				margin-top:40px;
				margin-bottom:40px;
                padding: 10px;
				border-radius: 30px;
            }
			      a:hover{
					background-color:#2c3e50;
					color:white;
					transition: all 0.5s ease-in-out;
            }
            .erros{
                 background-color: #D94848;
                 color: white;
                 font-size: 26px
            }
			.titulo{
				font-size: 30px;
				color: white;
				margin-bottom: 1px;
			}
        </style>
    </head>
    <body>
        <div class="header">
            <div style="font-size: 40px;color:white">Sistema de Gestao de horas extras</div>
        </div><br><br><br><br>
        <div class="content">
                <p class="titulo">Autenticação</p> 
                <?php if(Session::get('erro')){
                    echo Session::get('erro');
                }?>
            <div class="content2">
                <form action="http://localhost/hextras/public/login" method="POST">
                    <input type="text" name="utilizador" value="" placeholder="Utilizador"><br>
                    <input type="password" name="senha" value="" placeholder="Senha"><br>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>	
    </body>
</html>
