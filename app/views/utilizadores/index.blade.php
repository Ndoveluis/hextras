@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped" id='tabela' >
	   <div class="row">

       <ul class="list-group">
       <h2>Utilizadores</h2>
 	   
<div id="search-form">
	{{Form::open(array('url'=>'pesqTare'))}}
	<h4>{{Form::text('keyword',null,array('placeholder'=>'Pesquisar', 'id'=>'txtpesquisar' ))}}</h4>
	
	{{Form::close()}}

  
<tr>
	    <a href="{{URL::to('regU')}}" title=""><h3>Adicionar utilizador</h3></a>
	   
                                                                       <br>
                                                                       <br>			
    <th>Nome     </th>  
    <th>Usuário      </th>
    <th>Senha </th>     

 
        </tr> 
    @forelse($usuario as $value)
	    <tr> 

		       <td>{{ $value->nome     }}</td> 
		       <td>{{ $value->utilizador      }}</td>
		       <td>{{ $value->senha   }}</td>  

	           <td><a href="{{URL::to('editU',array($value->id))}}">Editar</a>/
             <a href="{{URL::to('apagarU',array($value->id))}}">Apagar  </a>
	          </td>  
	        @empty  
   
	          <tr> <td colspan="3">Sem utilizadores para listar</td>
	          </tr> 	
	    </tr>	
	    @endforelse
	    
	
</table>
@stop 