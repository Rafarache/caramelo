<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\Ong_log;


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
	
	public function login(Request $request){
		
			
		$Reg_User =DB::select('select * from ongs where email = :email',[$request->get('email')]);
		if($Reg_User == NULL)
			return back()->with('message', 'dados de login incorretos');
		else{
			if ($Reg_User[0]->password == $request->get('senha')){
				session()->put('ONG',$Reg_User[0]);
				return redirect('ongs_mng');
			}
			else
				return back()->with('message', 'dados de login incorretos');
		}
	}
	
	public function check_reg(Request $request){
		if($request->input('name') == NULL
					||
		$request->input('email') == NULL
					||
		$request->input('fone') == NULL
					||
		$request->input('endr') == NULL
					||
		$request->input('senha') == NULL)
		return back()->with('message', 'Preencha todos os dados');
		
		else
			ONGController::registro($request);
			
	}
	
	static public function check_ongs(){
		if (session()->has('ONG'))
			redirect('ongs_mng');
		else
			return back();
	}
	
	public function logout(){
		session()->forget('ONG');
		return redirect('ong_login');
	}
	
}
?>