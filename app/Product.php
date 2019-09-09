<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = true;
    protected $primarykey = 'id';
    protected $fillable = ['name','barcode','estoque','valor'];

    public function salvar($dados){
        $dados = upperVar($dados);
        if(!empty($dados['id'])){
            return $this::where('id',$dados['id'])->update($dados);
        }
        $this::create($dados);
    }
}
