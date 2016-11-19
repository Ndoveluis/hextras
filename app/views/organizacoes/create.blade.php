@extends('layout.MenuPrincipal') 

@section('conteudo') 

   <div class="container" max-width="480px">

	  <h3>Formulário de registro de Organizações</h3> 
 
<a href="{{URL::to('vorg')}}"> <h4>  Lista de organizações</a> 

   <!--   {{ Form::open(array('url' => 'cargo')) }} --> 
 {{ Form::open(array('url' => 'organizacao')) }} 
         <div class="form-group"> 

            <div class="col-xs-6">                                 <br>
 
                       {{ Form::label('Nome da organização') }}    <br> 
                                                               
  {{ Form::text('nome_org', Input::old('nome_org'), array('class' => 'form-control')) }}  
                                                                   <br>
                             {{ Form::label('Descrição') }}  
                                                                   <br>   
  {{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control')) }}  
            
            </div>
        </div>
    </div>
                                                                   <br> 
                                                                   <br>
    {{ Form::submit('Salvar oganização', array('class' => 'btn btn-primary')) }}
  <return <a href="{{URL::to('vorg')}}"> 
    {{ Form::close() }}                                            <br>   
                                                                   <br>        
  
 

@stop  