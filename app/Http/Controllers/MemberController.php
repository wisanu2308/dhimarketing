<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

		dd($post);

	}
}

 ?>