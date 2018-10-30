<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB as Db;

class TeamGroupModel
{
	
	public static function teamgroup_data(){

		$sqlStatement = "
			SELECT
			teamgroup.teamid,
			teamgroup.teamname
			FROM
			teamgroup
			order by teamid
		";

		$result = Db::select($sqlStatement);
		return $result;
	}

	public static function find_teamgroup_data($teamid){

		$sqlStatement = "
			SELECT
			teamgroup.teamid,
			teamgroup.teamname
			FROM
			teamgroup
			WHERE teamid = '".$teamid."'
			order by teamid
		";

		$result = Db::select($sqlStatement);
		return $result;
	}

	public static function save_teamgroup($post){
		
		$teamname = $post["txt_new_group"];

		$sqlStatement = "
			INSERT INTO teamgroup
			(
				teamname
			) VALUES (
				'".$teamname."'
			)

		";
		Db::select($sqlStatement);
	}

	public static function update_teamgroup($post){
		
		$teamid = $post["ref_txt_teamid"];
		$teamname = $post["txt_teamname"];

		$sqlStatement = "
			UPDATE teamgroup 
			SET 
				teamname = '".$teamname."'

			WHERE teamid = '".$teamid."'
		";
		Db::select($sqlStatement);
	}

	public static function delete_teamgroup($teamid){

		$sqlStatement = "
			DELETE FROM teamgroup WHERE teamid = '".$teamid."'
		";
		Db::select($sqlStatement);

	}

}