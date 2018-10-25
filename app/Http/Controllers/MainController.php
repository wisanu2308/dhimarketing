<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * 
 */
class MainController
{
	
	function __construct()
	{
		# code...
	}

	function index(){

		$session = session()->all();
		$userid = isset($session["userid"]) ? $session["userid"] : "";

		$pageElements = [
			"session_userid" => $userid,
		];

		return view('index', $pageElements);
	}
}

 ?>