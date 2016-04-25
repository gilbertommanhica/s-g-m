@extends('layout.principal');
    
    @section('cabecalho')
        <h1>Edicao</h1>
    @stop
    
@section('conteudo')
<div class="row">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
         @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    
        
    <div class="col-xs-12 formulario">
        
		<form action="/alunos/actualizar" method="put" role="form">
			<hr>
			<div class="row">
                        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="nome" class="form-control input-lg" value="{{old('nome')}}" placeholder="Nome:">
					</div>
				</div>
				<div class="col-xs-4col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="apelido" class="form-control input-lg" value="{{old('apelido')}}" placeholder="Apelido">
					</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group"> 
						<input type="text" name="data" class="form-control input-lg" value="{{old('data')}}" placeholder="DD/MM/AAAA">
					</div>
				</div>
			</div>

				<div class="row">
				
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="bi" class="form-control input-lg" value="{{old('bi')}}" placeholder="B.I:">
					</div>
				</div>
				<div class="col-xs-4col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="bairro" class="form-control input-lg" value="{{old('bairro')}}" placeholder="Bairro">
					</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group"> 
						<input type="text" name="avenida" class="form-control input-lg" value="{{old('avenida')}}" placeholder="Avenida:">
					</div>
				</div>
			</div>


				<div class="row">
				
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="nacionalidade" class="form-control input-lg" value="{{old('nacionalidade')}}" placeholder="Nacionalidade:">
					</div>
				</div>
				<div class="col-xs-4col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="telefone" class="form-control input-lg" value="{{old('telefone')}}" placeholder="No de Telefone">
					</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group"> 
						<input type="text" name="encarregado" class="form-control input-lg" value="{{old('encarregado')}}" placeholder="Enc. Educacao:">
					</div>
				</div>
			</div>


			<div class="row">
				
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="curso" class="form-control input-lg" value="{{old('curso')}}" placeholder="Curso:">
					</div>
				</div>
				<div class="col-xs-4col-sm-4 col-md-4">
					<div class="form-group">
						<input type="text" name="plano" class="form-control input-lg" value="{{old('plano')}}"placeholder="Plano">
					</div>
				</div>

				
			</div>

			<div class="form-group">
				<input type="email" name="email"  class="form-control input-lg" value="{{old('email')}}" placeholder="Email">
			</div>
			
			<hr>
			<div class="row">
				<div class="col-xs-4 col-md-4 col-md-offset-4 botao">
					<input type="submit" value="Actualizar" class="btn btn-primary btn-block btn-lg j_buttom">
				</div>
			</div>
		</form>
	</div>
	
	@stop