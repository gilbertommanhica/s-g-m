<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('AlunoTableSeeder');
    }
}

class AlunoTableSeeder extends Seeder{
    
    public function run()
    {
        DB::insert('insert into alunos
            (nome, apelido, data, bi, bairro, avenida, nacionalidade, telefone, encarregado, curso, plano, email)
            values(?,?,?,?,?,?,?,?,?,?,?,?)',
            array('Gilberto','Manhica', '18/10/2016', '1111111111','Laulane', 'Rua da Beira', 'Mocambicana', 847249104, 'Casimiro', 'S.I', 'Regular', 'gilbertommanhica@mechanical.co.mz'));
            
        DB::insert('insert into alunos
            (nome, apelido, data, bi, bairro, avenida, nacionalidade, telefone, encarregado, curso, plano, email)
            values(?,?,?,?,?,?,?,?,?,?,?,?)',
            array('Arlindo','Manhica', '18/10/2016','22222222222', 'Laulane', 'Rua da Beira', 'Mocambicana', 847001251, 'Antonio', 'E.T', 'Regular', 'arlindo@gmail.com'));
        
        DB::insert('insert into alunos
            (nome, apelido, data, bi, bairro, avenida, nacionalidade, telefone, encarregado, curso, plano, email)
            values(?,?,?,?,?,?,?,?,?,?,?,?)',
            array('Frederico','Nao sei', '18/10/2016', '33333333333', 'Laulane', 'Rua da Beira', 'Mocambicana', 847212454, 'Casimiro', 'S.I', 'Regular', 'gilbertommanhica@mechanical.co.mz'));
    }
}
