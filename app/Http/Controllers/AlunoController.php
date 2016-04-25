<?php namespace cadastro\Http\Controllers;

use Illuminate\Support\Facades\DB;
use cadastro\Aluno;
use Request;
use Validator;
use cadastro\Http\Requests\AlunosRequest;

class AlunoController extends Controller{
    
    public function lista(){
    /* 
      $alunos = DB::select('select * from alunos');
      return view('aluno.listagem')->with('alunos', $alunos);
    */
    
    $alunos = Aluno::all();
    return view('aluno.listagem')->with('alunos', $alunos);
    }
    
    public function mostra($id){
        
        /*
        $id= Request::route('id');
        $resposta = DB::select('select * from alunos where id = ?', [$id]);
        if(empty($resposta)){
            return "Esse aluno nao existe";
        }
        return view('aluno.detalhes')->with('a', $resposta[0]);
        */
        $aluno = Aluno::find($id);
        if(empty($aluno)){
            return "Esse Aluno nao Existe";
        }
        return view('aluno.detalhes')->with('a', $aluno);
    }
    
    public function cadastro(){
        return view('aluno.formulario');
    }
    
    public function registar(AlunosRequest $request){
       /*
        $nome = Request::input('nome');
        $apelido = Request::input('apelido');
        $data = Request::input('data');
        $bi = Request::input('bi');
        $bairro = Request::input('bairro');
        $avenida = Request::input('avenida');
        $nacionalidade = Request::input('nacionalidade');
        $telefone = Request::input('telefone');
        $encarregado = Request::input('encarregado');
        $curso = Request::input('curso');
        $plano = Request::input('plano');
        $email = Request::input('email');
        
        //return implode(',',array($nome, $apelido, $data_de_nascimento,$bi,$bairro,$avenida, $nacionalidade, $no_de_telefone,$enc_de_educacao,$curso,$plano,  $email));
        
        DB::insert('insert into alunos
          (nome, apelido, data, bi, bairro, avenida, nacionalidade, telefone, encarregado, curso, plano, email) values(?,?,?,?,?,?,?,?,?,?,?,?)', 
          array($nome, $apelido, $data, $bi, $bairro, $avenida, $nacionalidade, $telefone, $encarregado, $curso, $plano, $email));
        
         return redirect('/alunos')->withInput();
        */
       
        /*$params = Request::all();
        $aluno = new Aluno($params);
        $aluno->save();
        */
        Aluno::create(Request::all());
        
        return redirect()
            ->action('AlunoController@lista')
            ->withInput(Request::only('nome'));
    }
    
    public function remover($id){
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect()->action('AlunoController@lista');
    }
    
    public function editar($id){
        
        $aluno = Aluno::find($id);
        
        return view('aluno.editar')->with('aluno', $aluno);
    }
}