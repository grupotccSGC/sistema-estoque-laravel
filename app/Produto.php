<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	/**
	* especifica ha tabela que model pertence;
	**/
     protected $table='produtos';
     /**
	* especifica os campos que podem ser preenchido;
	**/
	protected $fillable=['nome','descricao','quantidade','valor'];

    public $timestamps= false;

    /**
	* Não pode atribuir via  mass-assignment. ou seja quando instaciamos o objeto;
	**/
	protected $guarded=['id'];
}
