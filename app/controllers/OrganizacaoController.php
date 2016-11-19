<?php 
class OrganizacaoController extends BaseController{ 
 
public function store()
    {
         { 
            $organizacao = new Organizacao;

            $organizacao->nome_org   = Input::get('nome_org'); 
            $organizacao->descricao  = Input::get('descricao'); 
        
            $organizacao->save();

            
            Session::flash('message', 'Organização criada com sucesso!');
    
           return Redirect::to('http://localhost/hextras/public/vorg')->withMessage('abc');  
            
        }
    }
 
    public function apagarO($cod_org)
    {
        Organizacao::where('cod_org',$cod_org)->delete();
        return Redirect::to('http://localhost/hextras/public/vorg')->withMessage('abc'); 
    }  
} ?>
  