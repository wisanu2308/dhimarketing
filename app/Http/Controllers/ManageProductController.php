<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * 
 */
class ManageProductController
{
	
	function __construct()
	{
		# code...
	}

	function manage_product(){


		$productData = array();

		$pageElements = [
			"productData" => $productData,
		];

		return view('dhioffice/product.index', $pageElements);

	}

	function add_product_view(){

		$pageElements = [

 		];

		return view('dhioffice/product.add_form', $pageElements);
	}

	function save_product(Request $request){

		$post = $request->all();
		dd($post);

	}
}

 ?>