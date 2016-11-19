<?php
use Illuminate\Support\Facades\DB;

class Autenticacao extends Controller {

	protected function index()
	{
		return  View::make('index');
	}


	protected function login()
	{
		$user = DB::table('usuario')
		->where('utilizador', $_POST['utilizador'])
		->where('senha', $_POST['senha'])
		->first();
		if($user){
			return Redirect::to('http://localhost/hextras/public/mp');  
		}else{
			Session::set('erro', "Senha ou utilizador errado");
			return Redirect::to('http://localhost/hextras/public/');
		}
	}


	protected function sair()
	{
		return Redirect::to('http://localhost/hextras/public/');
	}


}
