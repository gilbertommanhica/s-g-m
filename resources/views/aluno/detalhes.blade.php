@extends('layout.principal')

	@section('cabecalho')
		<h1>Detalhes de Aluno: {{$a->nome}}</h1>
	@stop
	
	@section('conteudo')
  	 
  	 <table class="table table-bordered">
  	 	<tr>
  	 		<td><b>Apelido: </b></td>
  	 		<td class="success">{{$a->apelido}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Data de Nascimento:</b></td>
  	 		<td class="success">{{$a->data}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>B.I:</b></td>
  	 		<td class="success">{{$a->bi}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Bairro:</b></td>
  	 		<td class="success"> {{$a->bairro}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Avenida:</b></td>
  	 		<td class="success">{{$a->avenida}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Nacionalidade:</b></td>
  	 		<td class="success">{{$a->nacionalidade}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Telefone:</b></td>
  	 		<td class="success">{{$a->telefone}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Encarregado de Educ:</b></td>
  	 		<td class="success">{{$a->encarregado}}</td>
  	 	</tr>
  	 	<tr>
  	 		<td><b>Curso:</b></td>
  	 		<td class="success">{{$a->curso}}</td>
  	 	</tr>
  	  	<tr>
  	 		<td><b>Plano:</b></td>
  	 		<td class="success">{{$a->plano}}</td>
  	 	</tr>	
  	  	<tr>
  	 		<td><b>Email:</b></td>
  	 		<td class="success">{{$a->email}}</td>
  	 	</tr>	
  	 </table>   	
       
    
  @stop