@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped"  id='tabela'>
	<div class="row">

<ul class="list-group">
  <li class="list-group-item"><h2>Organização</h2>

<div id="search-form">
	{{Form::open(array('url'=>'pesqTare'))}}
	<h4>{{Form::text('keyword',null,array('placeholder'=>'Pesquisar', 'id'=>'txtpesquisar' ))}}</h4>
	
	{{Form::close()}}

	</li><br>
	
    <a href="{{URL::to('newreg')}}" title=""><h4>Voltar</h4></a>
    <a href="{{URL::to('newO')}}" title=""><h4>Nova Organização</h4></a>
	<br>  
		<tr>
		
            <th>Código                </th>
            <th>Nome da Organização   </th>
            <th>Descrição             </th>
		</tr> 

        @forelse($organizacao as $key => $value)

	    <tr>  
		    <td>{{ $value->cod_org    }}</td>
		    <td>{{ $value->nome_org   }}</td> 
		    <td>{{ $value->descricao  }}</td> 

	           <td>{{ HTML::link("value/editar/{$value->cod_org}", 'Editar') }} /
       <a href="{{URL::to('apagarO',array($value->cod_org))}}">Apagar</a>

	        @empty
	        <tr> <td colspan="3">Sem organizações para listar</td>
	        </tr> 	
	        </tr>	
	  @endforelse
</table>
@stop