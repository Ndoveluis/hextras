<?php 
class HoraextraController extends BaseController{ 
 
   public function store()
    {
         {
 
            $horas_extras = new Horaextra;

            $horas_extras->nome_func        = Input::get('nome_func'); 
            $horas_extras->nome_org         = Input::get('nome_org');
            $horas_extras->dia_hextra       = Input::get('dia_hextra');  
            $horas_extras->n_horas          = Input::get('n_horas');  
            $horas_extras->descExtra        = Input::get('descExtra');  
         //   $horas_extras->total_hextras    = Input::get('n_horas')*50; 
           //$horas_extras->n_Horas     = Input::get('n_horas')*15; 
        
            $horas_extras->save();
  
            Session::flash('message', 'Hora extra criada com sucesso!');
    
           return Redirect::to('http://localhost/hextras/public/hext')->withMessage('abc');    
        }
    }

    public function apagarH($cod_hextra)
    {
        Horaextra::where('cod_hextra',$cod_hextra)->delete(); 
        return Redirect::to('http://localhost/hextras/public/hext')->withMessage('abc');  
    }

    public function salvo()
    {
        return view('horas_extras.index');
    }

    public function edit($cod_hextra)
    {
      Horaextra::where('cod_hextra',$cod_hextra)->delete();
      $horas_extras = Horaextra::where('cod_hextra',$cod_hextra)->first(); 
        return View::make('horas_extras.edit', compact('horas_extras'));                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       }

       }     
?>

    
