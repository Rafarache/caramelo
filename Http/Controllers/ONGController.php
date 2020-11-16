<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;


class ONGController extends Controller
{
    public function registro(Request $request) {
		
		$result=DB::insert("insert into ongs(name,email,phone,address,password) values(?,?,?,?,?)",
		[$request->input('name'),
		$request->input('email'),
		$request->input('fone'),
		$request->input('endr'),
		$request->input('senha')]);
		return redirect('ong_login')->with('message','registro realizado com sucesso');
	}
	
	function login(Request $request){
		
			
		$Reg_User =DB::select('select * from ongs where email = :email',[$request->get('email')]);
		if($Reg_User == NULL)
			return back()->with('message', 'dados de login incorretos');
		else{
			if ($Reg_User[0]->password == $request->get('senha')){
				return redirect('ongs_mng')->with('ONG',$Reg_User[0]->name);
			}
			else
				return back()->with('message', 'dados de login incorretos');
		}
	}
}
?>