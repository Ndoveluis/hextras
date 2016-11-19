@extends ('layout.MenuPrincipal')
@section('conteudo')
 
<table class="table table-striped" >
     <div class="row">

       <ul class="list-group">
       <li class="list-group-item"><h2>Formulário de cálculo de salário </h2>
 

 <br>
 

                    {{ Form::open(array('url' => 'salario')) }}
    <div class="col-xs-4">                                             <br>
      <a href="{{URL::to('vsal')}}" title=""><h4>Listar salários</a>
                                                                       <br>
                                                                       <br>
                                                                       <br>

       <!--Nome do funcionário-->          {{ Form::label('Nome do funcionário') }}
{{ Form::select('nome_func',funcionarios::lists('nome_func','nome_func'),Input::old('nome_func'),array('class' => 'form-control', 'onChange' => 'changeFunc(value)')) }} 
                                                                       <br>
       <!--Dias que trabalhou-->           {{ Form::label('Dias que trabalhou (1-28)') }}
  
        {{ Form::text('dias_trab', Input::old('dias_trab','28'), array('class' => 'form-control')) }}
                                                                       <br>
       <!--      Mês   -->                 {{ Form::label('Mês') }} 
{{ Form::select('mes',mes::lists('mes','mes'),Input::old('mes'),array('class' => 'form-control', 'onChange' => 'changeFunc(value)')) }}

  
                                                                       <br>                                                                    
       <!-- horas extras-->                {{ Form::label('Total de horas extras (Hrs)') }}
  
{{ Form::text('total_hextras', Input::old('total_hextras'), array('class' => 'form-control')) }} <!--horas extras-->

                                                                       <br>
       <!-- Classe de bonus   -->          {{ Form::label('Classe de bonus para horas extras') }} 
{{ Form::select('bonus',bonus::lists('nome_bonus','valor_bonus'),Input::old('bonus'),array('class' => 'form-control', 'onChange' => 'changeFunc(value)')) }}
    <a href="{{URL::to('vbonus')}}"> <h4>  Lista de bonus</a>          <br> 
                                                                       <br>
   
      <!--      Salario base   -->         {{ Form::label('Salário base (Mt/dia)') }} 
{{ Form::select('sal_base',categorias::lists('sal_base','sal_base'),Input::old('sal_base'),array('class' => 'form-control', 'onChange' => 'changeFunc(value)')) }}
                                                                       <br>      

       <!-- bonus Extra  -->               {{ Form::label('Bonus extra (Mt)') }} 
{{ Form::text('bonusExtra', Input::old('bonusExtra'), array('class' => 'form-control')) }}
                                                                       <br> 

       <!-- bonus Extra  -->               {{ Form::label('Descrição do Bonus extra') }} 
{{ Form::text('descBonus', Input::old('descBonus','Este bonus foi referente a...'), array('class' => 'form-control')) }}
                                                                      
                                                                       <br>
{{ Form::submit('Submeter salário', array('class' => 'btn btn-primary')) }}

  <return <a href="{{URL::to('vsal')}}">                               <br> 
                                                                       <br>   
  
</table>
@stop   