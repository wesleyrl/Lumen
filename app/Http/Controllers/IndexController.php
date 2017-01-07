<?php
/**
 * Created by PhpStorm.
 * User: wesley
 * Date: 07/01/2017
 * Time: 02:41
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
	public function index(){
		return view('layout');
	}
}