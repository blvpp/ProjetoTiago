<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class menuController extends Controller
{
    public function index() 
	{
		$noticias = DB::select('select * from noticias');
        return view('index',['noticias' => $noticias]);
	}

	public function cadastro()
	{
		return view('cadastro_usuario');
	}

	public function sobre()
	{
		return view('sobre');
	}

	public function coleta()
	{
		return view('coleta_seletiva');
	}

	public function lixeiras()
	{
		return view('lixeiras');
	}

	public function reciclagem()
	{
		return view('reciclagem');
	}

	public function desenvolvedores()
	{
		return view('desenvolvedores');
	}
}
