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

	function loginform(){

		return view('member.login');
	}

	function login(Request $request){
		
		$post = $request->all();
		
		// dd($post);

		if ($post) {

			### model -> login()
			// $login_data = LoginModel::memberLogin($post);
			######################

			session([
				'userid' => 'TEST001',
				'username' => $post["txtusername"],
				// 'member_name' => $login_data[0]->member_name,
			]);

			$session = $request->session()->all();
			// dd($session);

			return redirect('/');
		}

	}
}

 ?>