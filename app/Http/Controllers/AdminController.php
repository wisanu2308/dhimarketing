<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * 
 */
class AdminController
{
	
	function __construct()
	{
		# code...
	}

	function index(){

		$session = session()->all();
		$adminid = isset($session["adminid"]) ? $session["adminid"] : "";

		$pageElements = [
			"session_adminid" => $adminid,
		];

		return view('dhioffice.index', $pageElements);
	}

	function manage_product(){


		$pageElements = [
			
		];

		return view('dhioffice/product.index', $pageElements);

	}
}

 ?>