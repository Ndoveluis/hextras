@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped" id='tabela' >
	   <div class="row">

       <ul class="list-group">
       <li class="list-group-item"><h2>Salários</h2>
 
    <div id="search-form">
	   {{Form::open(array('url'=>'pesqTare'))}}
	  <h4> {{Form::text('keyword',null,array('placeholder'=>'Pesquisar...', 'id'=>'txtpesquisar' ))}} </h4> 
	
	   {{Form::close()}}
 </li>
	    </li>                                                          <br>
	    <a href="{{URL::to('csal')}}" title=""><h4>Calcular salário de funcionário</h4></a>	     
     <tr>                                          
                                                                       <br>	
      <tr>
               <th>Recibo #                 </th> 
               <th>Funcionário              </th>     
               <th># horas extras           </th>  
               <th># Dias trabalhados       </th> 
               <th>Mês                      </th>   
               <th>Bonus                    </th>       
               <th>Breve descrição do bonus </th>   
               <th>Valor                    </th> 
               <th>Total Salário            </th>        
        </tr> 
    @forelse($salario_func as $value)
	    <tr> 
		       <td>{{ $value->recibo        }}</td> 
		       <td>{{ $value->nome_func     }}</td>  
		       <td>{{ $value->total_hextras }}</td> 
		       <td>{{ $value->dias_trab     }}</td>  
		       <td>{{ $value->mes           }}</td>
		       <td>{{ $value->bonus         }}</td>
		       <td>{{ $value->descBonus     }}</td>
		       <td>{{ $value->bonusExtra    }}</td>
		       <td>{{ $value->salario       }}</td>

<td><a href="{{URL::to('editS',array($value->recibo))}}">Editar</a> 
  / <a href="{{URL::to('apagarR',array($value->recibo))}}">Apagar</a>
</td>  
	        @empty  

	          <tr> <td colspan="3">Sem horas extras para listar</td>
	          </tr> 	
	    </tr>	
	    @endforelse
	  </tr>  
	
</table>
@stop 