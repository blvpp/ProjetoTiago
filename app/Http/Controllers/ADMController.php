<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADMController extends Controller
{
    public function index()
	{
		return view('indexADM');
	}

	public function cad_func()
	{
		return view('cadastro_funcionarios');
	}

	public function cad_not()
	{
		return view('cadastro_noticias');
	}

	public function cad_camnh()
	{
		return view('cadastro_caminhoes');
	}

	public function cad_pontos_coleta()
	{
		return "Cadastro de pontos de coleta ainda será feito";
	}

	public function cad_rotas()
	{
		return "Cadastro de rotas ainda será feito" ;
	}


}
