@extends('layout.MenuPrincipal') 

@section('conteudo') 

   <div class="container" max-width="480px">

	  <h2>Registro de utilizador </h2>                       <br>
 
<a href="{{URL::to('vutil')}}"> <h4>  Lista de utilizadores</a> 


                                                           <br> 
 {{ Form::open(array('url' => 'usuario')) }} 
         <div class="form-group"> 

            <div class="col-xs-6">                         <br> 
 

       <!-- Nome  -->            {{ Form::label('Nome ') }} 
{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control')) }}

                                                           <br>
 
       <!-- Usuario  -->            {{ Form::label('utilizador ') }} 
{{ Form::text('utilizador', Input::old('utilizador'), array('class' => 'form-control')) }}

                                                           <br>

       <!-- Senha -->            {{ Form::label('Senha ') }} 
{{ Form::text('senha', Input::old('senha'), array('class' => 'form-control')) }}


  
            </div>
        </div>
    </div> 
 
                                                           <br> 
                                                           <br>
    {{ Form::submit('Adicionar utilizador', array('class' => 'btn btn-primary')) }}
    
  <return <a href="{{URL::to('salvo')}}">  
    {{ Form::close() }}                                    <br>   
                                                           <br>  
 

@stop  