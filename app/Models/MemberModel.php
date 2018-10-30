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

	public static function find_member_data($memberid){

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
			WHERE memberid = '".$memberid."'
		";
		$result = Db::select($sqlStatement);

		return $result;
	}

	public static function latest_member(){

		$sqlStatement = "
			SELECT member.memberid
			FROM member
			ORDER BY memberid DESC
		";
		$result = Db::select($sqlStatement);

		if (count($result) > 0) {
			$memberid = $result[0]->memberid;
			$memberid = intval(substr($memberid, 2,8)) + 1;
			$memberid = "ID".str_pad($memberid, 6, "0", STR_PAD_LEFT);
		} else {
			$memberid = "ID000001";
		}

		return $memberid;
	}

	public static function save_member($post){
		
		$memberid = $post["savememberid"];
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

	public static function update_member($post){
		
		$memberid = $post["ref_txt_memberid"];
		$teamid = $post["sl_teamgroup"];
		$name = $post["txt_membername"];
		$surname = $post["txt_membersurname"];
		$username = $post["txt_username"];

		$sqlStatement = "
			UPDATE member 
			SET 
				teamid = '".$teamid."',
				name = '".$name."',
				surname = '".$surname."',
				username = '".$username."'

			WHERE memberid = '".$memberid."'
		";
		Db::select($sqlStatement);

		$sqlStatement = "
			UPDATE member_teamgroup
			SET 
				ref_teamid = '".$teamid."'
			WHERE ref_memberid = '".$memberid."'
		";
		Db::select($sqlStatement);
	}

	public static function delete_member($memberid){

		$sqlStatement = "
			DELETE FROM member WHERE memberid = '".$memberid."'
		";
		Db::select($sqlStatement);

	}

}