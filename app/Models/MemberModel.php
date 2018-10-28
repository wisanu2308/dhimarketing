<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB as Db;

class MemberModel
{
	
	public static function member_data(){

		$sqlStatement = "
			SELECT
			member.memberid,
			member.teamid,
			member.name,
			member.surname,
			CONCAT(member.name,' ',member.surname) as memberfullname,
			member.username,
			member.password,
			teamgroup.teamname
			FROM member
			LEFT JOIN member_teamgroup as mt ON member.memberid = mt.ref_memberid
			LEFT JOIN teamgroup ON mt.ref_teamid = teamgroup.teamid
		";
		$result = Db::select($sqlStatement);

		return $result;

	}

	public static function save_member($post){
		
		$memberid = "99999";
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
				'".$memberid."',
				'".$teamid."',
				'".$name."',
				'".$surname."',
				'".$username."',
				'".$password."'
			)
		";
		Db::select($sqlStatement);

		$sqlStatement = "
			INSERT INTO member_teamgroup
			(
				ref_teamid,
				ref_memberid
			) VALUES (
				'".$teamid."',
				'".$memberid."'
			)
		";
		Db::select($sqlStatement);
	}

}