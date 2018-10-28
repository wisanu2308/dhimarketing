<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\MemberModel as MemberModel;
use App\Models\TeamGroupModel as TeamGroupModel;
/**
 * 
 */
class ManageTeamGroupController
{
	
	function __construct()
	{
		# code...
	}

	function manage_teamgroup(){


		$teamgroupData = TeamGroupModel::teamgroup_data();

		$pageElements = [
			"teamgroupData" => $teamgroupData,
		];

		return view('dhioffice/teamgroup.index', $pageElements);

	}

	function add_teamgroup_view(){

		$teamgroupData = TeamGroupModel::teamgroup_data();

		$pageElements = [
			"teamgroupData" => $teamgroupData,
 		];

		return view('dhioffice/teamgroup.add_form', $pageElements);
	}

	function save_teamgroup(Request $request){

		$post = $request->all();

		TeamGroupModel::save_teamgroup($post);

		if (isset($post["add_member_method"])) {
			$teamgroupData = TeamGroupModel::teamgroup_data();
			$content = ' <option value="">เลือกกลุ่มสมาชิก</option> ';
			foreach ($teamgroupData as $key => $value){
				$content .= '<option value="'.$value->teamid.'">'.$value->teamname.'</option>';
			}

			return $content;
		}

		return redirect('dhioffice/teamgroup');
	}

}

 ?>