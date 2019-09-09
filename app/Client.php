<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $table = 'clients';
    public $timestamps = true;
    protected $primarykey = 'id';
    protected $fillable = ['name','endereco','cpf','email'];

    public function salvar($dados){
        $dados = upperVar($dados);
        if(!empty($dados['id'])){
            return $this::where('id',$dados['id'])->update($dados);
        }
        $this::create($dados);
    }
}
