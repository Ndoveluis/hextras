@extends('layout.MenuPrincipal') 

@section('conteudo') 

   <div class="container" max-width="480px">

	  <h3>Editar hora extra </h3>                            <br>
 
<a href="{{URL::to('hext')}}"> <h4> Horas extras</a> 
                                                           <br>
 {{ Form::open(array('url' => 'horaextra')) }} 
         <div class="form-group"> 
            <div class="col-xs-6">                         <br>

     {{ Form::label('Dia do Trabalho ') }}
    <td><input type="date" id="_hextra" name="dia_hextra"></td>
  
                                                           <br> 
                                                           <br>
<!-- {{ Form::file('image') }} --> 
        
<!--       Funcionario       --> {{ Form::label('Funcionário') }}
    
{{ Form::select('nome_func',funcionarios::lists('nome_func','nome_func'),Input::old('nome_func'),array('class' => 'form-control', 'onChange' => 'changeFunc(value)')) }} 


                                                                   <br>
<!--      Organização        --> {{ Form::label('Organização') }}
    
{{ Form::select('nome_org',organizacao::lists('nome_org','nome_org'),Input::old('nome_org'),array('class' => 'form-control', 'onChange' => 'changeFunc(value)')) }}
  
                                                                   <br>
<!--     Horas trabalhadas    --> {{ Form::label('Horas trabalhadas') }}
         
{{ Form::text('n_horas', Input::old('n_horas'), array('class' => 'form-control')) }} 

                                                                   <br>

       <!-- Descrição  -->            {{ Form::label('Breve Descrição ') }} 
{{ Form::text('descExtra', Input::old('descExtra'), array('class' => 'form-control')) }}
                                                           <br>
            </div>
        </div>
    </div>                                                 <br> 
                                                           <br>
    {{ Form::submit('Adicionar hora extra', array('class' => 'btn btn-primary')) }}
    
  <return <a href="{{URL::to('salvo')}}"> 
  <!--   <return <a href="{{URL::to('hext')}}">  -->
    {{ Form::close() }}                                    <br>   
                                                           <br>  
 

@stop  