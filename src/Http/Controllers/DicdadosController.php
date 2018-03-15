<?php

namespace Brunolobo\Dicdados\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class DicdadosController extends BaseController
{

	public function index()
	{
    	$dicionario = [];
        return view('dicdados::index',compact('dicionario'));
	}

	public function new()
	{
        return view('dicdados::novo');
	}

	public function create(Request $request)
	{
    	dd($request->all());
        // return view('dicdados::index',compact('dicionario'));
	}

}
