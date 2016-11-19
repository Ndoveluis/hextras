@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped" >
	   <div class="row">

       <ul class="list-group"><h3>Bonus</h3>
 
	   <br>
		<tr>

               <th># Código                </th> 
               <th>Classe de bonus           </th>        
               <th>Valor do bonus          </th> 
        </tr> 
    @forelse($bonus as $value)
	    <tr> 
		       <td>{{ $value->cod_bonus      }}</td> 
		       <td>{{ $value->nome_bonus     }}</td> 
 		       <td>{{ $value->valor_bonus }}</td>
	        @empty  

	          <tr> <td colspan="3">Sem bonus para listar</td>
	          </tr> 	
	    </tr>	
	    @endforelse
	    
	
</table>
@stop 