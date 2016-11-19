@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped" id='tabela' >
	   <div class="row">

       <ul class="list-group">
       <!--<li class="list-group-item"></li> --><h2>Horas extras</h2>
 	   
<div id="search-form">
	{{Form::open(array('url'=>'pesqTare'))}}
	<h4>{{Form::text('keyword',null,array('placeholder'=>'Pesquisar', 'id'=>'txtpesquisar' ))}}</h4>
	
	{{Form::close()}}

  
<tr>
	    <a href="{{URL::to('newreg')}}" title=""><h3>Adicionar hora extra do funcionario</h3></a>
	  
       <a href="{{URL::to('vfunc')}}"> <h4>  Lista de funcionários</a>  <br>
                                                                       <br>
                                                                       <br>			
    <th>Funcionário      </th>  
    <th>Organização      </th>
    <th>Data do trabalho </th>  
    <th>Duração(hrs)     </th> 
    <th>Breve descrição  </th>    

 
        </tr> 
    @forelse($horas_extras as $value)
	    <tr> 

		       <td>{{ $value->nome_func     }}</td> 
		       <td>{{ $value->nome_org      }}</td>
		       <td>{{ $value->dia_hextra    }}</td> 
		       <td>{{ $value->n_horas       }}</td> 
		       <td>{{ $value->descExtra     }}</td>    

	           <td><a href="{{URL::to('edit',array($value->cod_hextra))}}">Editar</a>/
       <a href="{{URL::to('apagarH',array($value->cod_hextra))}}">Apagar  </a>
	          </td>  
	        @empty  

	          <tr> <td colspan="3">Sem horas extras para listar</td>
	          </tr> 	
	    </tr>	
	    @endforelse
	    
	
</table>
@stop 