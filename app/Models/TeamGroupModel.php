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

}