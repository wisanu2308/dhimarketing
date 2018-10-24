<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB as Db;

class LoginModel
{
	
	public static function memberLogin($post){
		
		$sqlStatement = "
			SELECT *
			FROM member
			where 1 
			and memberid = '1'

		";

		$result = Db::select($sqlStatement);

		return $result;
	}

}