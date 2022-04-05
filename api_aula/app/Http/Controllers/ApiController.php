<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Disciplina;

class ApiController extends Controller
{
	public function getPessoas(){

	}

	public function getPessoa($id){

	}

	public function createPessoa(Request $request){
		$novaPessoa=new Pessoa;
		$novaPessoa->nome=$request->nome;
		$novaPessoa->email=$request->email;
		$novaPessoa->save():
		return response()->json([
		'message'=> 'Pessoa Criada com sucesso', 201]);
	}
	public function updatePessoa(Request $request, %id){

	}

	public function deletePessoa($id){

	}

	//
	
	public function getDisciplinas(){

	}

	public function getDisciplina(%id){

	}
	
	public function createDisciplina(Request $request){

	}

	public function updateDisciplina(Request $request, $id){

	}

	public function deleteDisciplina($id){

	}

}
