<?php
 

Route::get('/vbonus', function()   
{
 	$bonus = Bonus::all();  
 return View::make('bonus.index')->with('bonus', $bonus); 
}); 

Route::get('/mp', function()
{
	return View::make('layout.MenuPrincipal'); });  

Route::resource('catg_func','CategoriasController'); 



/* horas extras*/  

Route::get('/hext', function()  /*visualizar Hora extras*/
{
 	$horas_extras = Horaextra::all();  
 return View::make('horas_extras.index')->with('horas_extras', $horas_extras);
});
  
Route::resource('horaextra','HoraextraController'); 

Route::get('/newreg', function()   /* nova hora extra*/
{
	return View::make('horas_extras.create');  
});  


 /* funcionario*/
Route::get('/vfunc', function()   
{
 	$funcionarios = Funcionarios::all();  
 return View::make('funcionarios.index')->with('funcionarios', $funcionarios);
 
}); 


 /*Organizacoes*/
Route::get('/vorg', function()  /*visualizar Organizacoes*/
{
 	$organizacao = Organizacao::all();  
 return View::make('organizacoes.index')->with('organizacao', $organizacao);
});

Route::resource('organizacao','OrganizacaoController'); 

Route::get('/newO', function()   /* nova hora extra*/
{
	return View::make('organizacoes.create');  
});  



/* utilizador*/  

Route::get('/vutil', function()  /*visualizar Hora extras*/
{
 	$usuario = Usuario::all();  
    return View::make('utilizadores.index')->with('usuario', $usuario);
});
  
Route::resource('usuario','UsuarioController'); 

Route::get('/regU', function()   /* nova hora extra*/
{
	return View::make('utilizadores.create');  
}); 
  

 
/*salarios*/  
                                
Route::get('/vsal', function()     /*visualizar salarios*/
{
	 $salario_func = Salario::all();  
	return View::make('salarios.index')->with('salario_func', $salario_func);  
}); 

Route::resource('salario','SalarioController');   
Route::resource('catg_func','Catg_funcController'); 

Route::get('/csal', function()    /* calcular novo salario*/
{

	return View::make('salarios.calcula');
    //	$salarios = Salario::all(); 
	//  return View::make('salarios.index')->with('salarios', $salarios);  
});                                
 
  
 
 Route::get('edit/{cod_hextra}' , 'HoraextraController@edit');
 Route::get('apagarH/{cod_hextra}' , 'HoraextraController@apagarH');

 Route::get('editS/{recibo}' , 'SalarioController@editS');

 Route::get('editU/{id}' , 'UsuarioController@editU');
 Route::get('apagarU/{id}' , 'UsuarioController@apagarU');

 Route::get('apagarO/{cod_org}' , 'OrganizacaoController@apagarO');

 Route::get('apagarR/{recibo}'     ,   'SalarioController@apagarR'); 
 Route::get('salvo'                , 'HoraextraController@salvo');

   /*autenticacao*/ 
  Route::get('/', 'Autenticacao@index');
  Route::post('login', 'Autenticacao@login');
  Route::get('sair', 'Autenticacao@sair');
 