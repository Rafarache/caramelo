<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pet;


class PetsDetail extends Controller
{
    public function index($id) {
	
		$user_id = Auth::id();
		$user_auth = Auth::check();
        $pets = Pet::all();
        $pets = $pets->where('id', $id);
        return view('pet_detail', ['pets' => $pets, 'user_id' => $user_id, 'user_auth' => $user_auth]);
    }
	
	public function registra_adocao(Request $request) {
		
		$result=DB::insert("insert into adocao(id_pessoa,id_pets) values(?,?)",
		[$request->input('id_pessoa'),
		$request->input('id_pets')]);
		
		if($request->input('status') == 'Aguardando' || $request->input('status') == 'Lar Temporario'){
			$result=DB::update("update pets set status = 'Adotado' where id = ?",
			[$request->input('id_pets')]);
		}
			
		return redirect('pesquisa')->with('message','adoção realizada com sucesso');
	}
	
}
