<?php 
class UsuarioController extends BaseController{ 
 
   public function store()
    {
         {
 
            $usuario = new Usuario;

            $usuario->nome        = Input::get('nome'); 
            $usuario->utilizador  = Input::get('utilizador');
            $usuario->senha       = Input::get('senha');     
        
            $usuario->save();
  
            Session::flash('message', 'Utilizador criado com sucesso!');
    
           return Redirect::to('http://localhost/hextras/public/vutil')->withMessage('abc');  
            
        }
    }    

    public function apagarU($id)
    {
        Usuario::where('id',$id)->delete(); 

        return Redirect::to('http://localhost/hextras/public/vutil')->withMessage('abc');    
    }

    public function salvoU()
    {
        return view('utilizadores.index');
    }

    public function editU($id)
    {
      Usuario::where('id',$id)->delete();
      $usuario = Usuario::where('id',$id)->first();
 
        return View::make('utilizadores.editU', compact('usuario '));
 
       } 
?>
