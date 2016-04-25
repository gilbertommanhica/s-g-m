@extends('layout.principal')

    @section('cabecalho')
        <h1>Listagem de Alunos</h1>
    @stop
    
    @section('conteudo')
    
        @if(empty($alunos))
            <div class="alert  alert-danger">Voce nao tem nenhum Aluno cadastrado.</div>
        @else
            
            <table class="table">
                <tr>
                    <thead>
                        <th>Nome:</th>
                        <th>Apelido:</th>
                        <th>B.I</th>
                        <th>Bairro</th>
                        <th>Nacionalida</th>
                        <th>Telefone</th>
                        <th>Curso</th>
                        <th>Plano</th>
                        <th>Email</th>
                        <th colspan="3">Detalhes</th>
                    </thead>
                </tr>
                @foreach ($alunos as $a)
                <tr>
                    <td>{{$a->nome}}</td>
                    <td>{{$a->apelido}}</td>
                    <td>{{$a->bi }}</td>
                    <td>{{ $a->bairro }}</td>
                    <td>{{ $a->nacionalidade }}</td>
                    <td>{{ $a->telefone }}</td>
                    <td>{{ $a->curso }}</td>
                    <td>{{ $a->plano }}</td>
                    <td>{{ $a->email }}</td>
                    <td>
                        <a href="{{action('AlunoController@mostra', $a->id)}}">
                            Visualizar
                            <span class="glyphicon glyphicon-search"></span>
                            </a>
                    </td>
                      <td>
                        <a href="{{action('AlunoController@remover', $a->id)}}">
                            <span class="glyphicon glyphicon-trash"></span>
                            </a>
                    </td>
                      <td>
                        <a href="{{action('AlunoController@editar',$a->id)}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                    </td>
                </tr>
                @endforeach
            </table>
        @endif
        
        @if(old('nome'))
        <div class="alert rodape alert-success">
			<strong>Sucesso!</strong>
			O Aluno {{ old('nome')}} foi adicionado com sucesso!
		</div>
		@endif
@stop