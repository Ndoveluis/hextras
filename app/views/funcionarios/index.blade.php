@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped" >
	   <div class="row">

       <ul class="list-group"><h3>Funcionários</h3>
 
	   <br>
		<tr>

               <th># Código                 </th> 
               <th>Funcionário              </th>        
   <!--    <th>Total de horas extras          </th> -->
        </tr> 
    @forelse($funcionarios as $value)
	    <tr> 
		       <td>{{ $value->cod_func      }}</td> 
		       <td>{{ $value->nome_func     }}</td> 
   <!--       <td>{{ $value->total_hextras }}</td>-->
	        @empty  

	          <tr> <td colspan="3">Sem funcionarios para listar</td>
	          </tr> 	
	    </tr>	
	    @endforelse
	    
	
</table>
@stop 