<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\ProductModel as ProductModel;
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

		$productData = ProductModel::product_data();

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

		$post["saveproductid"] = ProductModel::latest_product();
		ProductModel::save_product($post);

		return redirect('dhioffice/manage_product');
	}

	function edit_product($productid){

		$productData = ProductModel::find_product_data($productid);

		$pageElements = [
			"memberData" => $memberData,
		];

		return view('dhioffice/product.edit_form', $pageElements);
	}

	function update_product(Request $request){

		$post = $request->all();
		ProductModel::update_product($post);
		return redirect('dhioffice/manage_product');
	}

	function delete_product($productid){
		ProductModel::delete_product($productid);
		return redirect('dhioffice/manage_product');
	}
}

 ?>