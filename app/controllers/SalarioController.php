<?php 
class SalarioController extends BaseController{ 
 
   public function store()
    {
         {  
            $salario_func = new Salario;
// $salario_func->sal_base = DB::categorias('sal_base')->get() ;   


$salario_func->mes           = Input::get('mes');
$salario_func->nome_func     = Input::get('nome_func');  
$salario_func->sal_base      = Input::get('sal_base');
$salario_func->dias_trab     = Input::get('dias_trab');
$salario_func->total_hextras = Input::get('total_hextras');
$salario_func->bonus         = Input::get('bonus'); 
$salario_func->bonusExtra    = Input::get('bonusExtra'); 
$salario_func->descBonus     = Input::get('descBonus');
$salario_func->salario       =(Input::get('sal_base'))*(Input::get('dias_trab'))+(Input::get('total_hextras'))*(Input::get('bonus'))+(Input::get('bonusExtra'));
           
        

//$salario_func->sal_base= (Input::get('sal_base')*+Input::get('total_hextras')*0.02*Input::get('salario'));

            $salario_func->save();

            // redirect
            Session::flash('message', 'Salario inserido com sucesso!');
        // return Redirect::to('salarios.index');
     return Redirect::to('http://localhost/hextras/public/vsal')->withMessage('abc'); 
           
        }
    }
 
    public function apagarR($recibo)
    {
        Salario::where('recibo',$recibo)->delete();
        return Redirect::to('http://localhost/hextras/public/vsal')->withMessage('abc'); 
    }  

    public function editS($recibo)
    {
        Salario::where('recibo',$recibo)->delete();
      $salario_func = Salario::where('recibo',$recibo)->first();
 
        return View::make('salarios.edit', compact('salarios'));
    }

} ?>
  