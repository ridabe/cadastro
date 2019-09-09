<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    public $timestamps = true;
    protected $primarykey = 'id';
    protected $fillable = ['id_clients','id_products','valor','total'];

    public function salvar($dados){
        $dados = upperVar($dados);
        if(!empty($dados['id'])){
            return $this::where('id',$dados['id'])->update($dados);
        }
        $this::create($dados);
    }
}
