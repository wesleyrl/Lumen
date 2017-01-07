<?php
/**
 * Created by PhpStorm.
 * User: wesley
 * Date: 07/01/2017
 * Time: 03:49
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
	protected $table = 'telefones';
	protected $filable = [
		'descrição',
		'codpais',
		'ddd',
		'prefixo',
		'sufixo'
	];

}