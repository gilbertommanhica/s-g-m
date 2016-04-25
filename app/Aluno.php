<?php

namespace cadastro;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    public $timestamps = false;
    
    protected $fillable = array('nome','apelido','data', 'bi', 'bairro', 'avenida', 'nacionalidade', 'telefone', 'encarregado', 'curso', 'plano', 'email');
    
    protected $guarded = ['id'];
}
