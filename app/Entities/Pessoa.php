<?php
/**
 * Created by PhpStorm.
 * User: wesley
 * Date: 07/01/2017
 * Time: 03:47
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
	protected $table = 'pessoas';
	protected $fillable = [
		'nome',
		'apelido',
		'sexo'
	];

	public function telefones(){

		//
	}

}