<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB as Db;

class ProductModel
{
	
	public static function product_data(){

		$sqlStatement = "
			SELECT
			product.productid,
			product.product_name,
			product.product_desc
			FROM
			product

		";
		$result = Db::select($sqlStatement);

		return $result;
	}

	public static function find_product_data($productid){

		$sqlStatement = "
			SELECT
			product.productid,
			product.product_name,
			product.product_desc
			FROM
			product
			WHERE 1
			AND productid = '".$productid."'
		";
		$result = Db::select($sqlStatement);

		return $result;
	}

	public static function latest_product(){

		$sqlStatement = "
			SELECT product.productid
			FROM product
			ORDER BY productid DESC
		";
		$result = Db::select($sqlStatement);

		if (count($result) > 0) {
			$productid = $result[0]->productid;
			$productid = intval(substr($productid, 2,8)) + 1;
			$productid = "PD".str_pad($productid, 6, "0", STR_PAD_LEFT);
		} else {
			$productid = "PD000001";
		}

		return $productid;
	}

	public static function save_product($post){
		
		$productid = $post["saveproductid"];
		$productname = $post["txt_productname"];
		$productdesc = $post["txt_productdesc"];

		$sqlStatement = "
			INSERT INTO product
			(
				productid,
				product_name,
				product_desc
			) VALUES (
				'".$productid."',
				'".$productname."',
				'".$productdesc."'
			)
		";
		Db::select($sqlStatement);

	}

	public static function update_product($post){
		
		$productid = $post["ref_txt_productid"];
		$productname = $post["txt_productname"];
		$productdesc = $post["txt_productdesc"];

		$sqlStatement = "
			UPDATE product 
			SET 
				product_name = '".$name."',
				product_desc = '".$surname."'

			WHERE productid = '".$productid."'
		";
		Db::select($sqlStatement);
	}

	public static function delete_product($productid){

		$sqlStatement = "
			DELETE FROM product WHERE productid = '".$productid."'
		";
		
		Db::select($sqlStatement);

	}

}