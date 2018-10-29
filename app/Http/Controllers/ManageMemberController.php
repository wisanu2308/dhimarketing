<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\MemberModel as MemberModel;
use App\Models\TeamGroupModel as TeamGroupModel;
/**
 * 
 */
class ManageMemberController
{
	
	function __construct()
	{
		# code...
	}

	function manage_member(){


		$memberData = MemberModel::member_data();

		$pageElements = [
			"memberData" => $memberData,
		];

		return view('dhioffice/member.index', $pageElements);

	}

	function add_member_view(){

		$teamgroupData = TeamGroupModel::teamgroup_data();

		$pageElements = [
			"teamgroupData" => $teamgroupData,
 		];

		return view('dhioffice/member.add_form', $pageElements);
	}

	function save_member(Request $request){

		$post = $request->all();

		MemberModel::save_member($post);

		return redirect('dhioffice/manage_member');
	}

	function edit_member($memberid){

		$memberData = MemberModel::member_data();
		$teamgroupData = TeamGroupModel::teamgroup_data();

		$pageElements = [
			"memberData" => $memberData,
			"teamgroupData" => $teamgroupData,
		];

		return view('dhioffice/member.edit_form', $pageElements);
	}

	function update_member(Request $request){

		$post = $request->all();
		MemberModel::update_member($post);
		return redirect('dhioffice/manage_member');
	}


	

}

 ?>