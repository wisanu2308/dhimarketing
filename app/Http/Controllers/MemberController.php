<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LoginModel as LoginModel;

/**
 * 
 */
class MemberController
{
	
	function __construct()
	{
		# code...
	}

	function loginform(Request $request){

		$session = $request->session()->all();
		$userid = isset($session["userid"]) ? $session["userid"] : "";

		$pageElements = [
			"session_userid" => $userid,
		];

		return view('member.login', $pageElements);
	}

	function login(Request $request){
		

		$post = $request->all();
		
		if ($post) {

			### model -> login()
			// $login_data = LoginModel::memberLogin($post);
			######################

			session([
				'userid' => 'TEST001',
				'username' => $post["txtusername"],
				'member_name' => "Test User"
			]);

			$session = $request->session()->all();
			// dd($session);

			return redirect('/');
		}

	}

	function logout(Request $request){

		$request->session()->flush();
		return redirect('/');

	}

	function profile(Request $request){

		$session = $request->session()->all();
		$userid = isset($session["userid"]) ? $session["userid"] : "";




		$pageElements = [
			"session_userid" => $userid,
		];

		return view('member.profile', $pageElements);
	}
}

 ?>