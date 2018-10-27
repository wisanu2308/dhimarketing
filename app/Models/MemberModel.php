<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB as Db;

class MemberModel
{
	
	public static function save_member($post){
		
		$memberid = "9999999999";
		$teamid = $post["sl_teamgroup"];
		$name = $post["txt_membername"];
		$surname = $post["txt_membersurname"];
		$username = $post["txt_username"];
		$password = $post["txt_password"];

		$sqlStatement = "
			INSERT INTO member
			(
				memberid,
				teamid,
				name,
				surname,
				username,
				password
			) VALUES (
				".$memberid.",
				".$teamid.",
				".$name.",
				".$surname.",
				".$username.",
				".$password."
			)

		";

		Db::select($sqlStatement);
	}

}