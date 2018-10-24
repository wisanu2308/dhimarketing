<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * 
 */
class MainController
{
	
	function __construct()
	{
		# code...
	}

	function index(Request $request){

		$session = $request->session()->all();
		$userid = isset($session["userid"]) ? $session["userid"] : "";

		$pageElements = [
			"session_userid" => $userid,
		];

		return view('index', $pageElements);
	}
}

 ?>