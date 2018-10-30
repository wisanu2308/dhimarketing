@extends("layout.layout_admin")

@section("style")

	<style type="text/css">
		
		.table-style{
			background-color: #FFFFFF;
		}

		.table-style th{
			background-color: #CCCCCC;
		}

		.table > tbody > tr > td{
			vertical-align: middle;
		}


	</style>

@endsection


@section("htmlBody")

<div id="dialog" title="เพิ่มกลุ่มใหม่" style="display: none;">
	<!-- <label>เพิ่มกลุ่มใหม่</label> -->
	<br>
	<input class="form-control" type="text" id="txt_new_group" name="txt_new_group" value="" style="width: 200px;display: inline-block;">
	<button type="button" class="btn btn-primary btn-sm" onclick="addGroup()">เพิ่ม</button>
</div>

<button type="button" class="btn btn-primary btn-sm" onclick="showAddGroup()">
	<i class="glyphicon glyphicon-plus"></i> เพิ่มกลุ่มสมาชิก
</button>

<br>
<br>

<div class="table-responsive">
<table class="table table-bordered table-hover table-style">
	<tr>
		<th>Group No.</th>
		<th>Team Group Name</th>
		<th>คำสั่ง</th>
	</tr>
	<?php foreach ($teamgroupData as $key => $value): ?>
	
	<tr>
		<td>{{$value->teamid}}</td>	
		<td>{{$value->teamname}}</td>	
		<td>
			<a href="{{url('dhioffice/edit_teamgroup').'/'.$value->teamid}}" type="button" class="btn btn-info btn-sm">แก้ไข</a>
			<a href="{{url('dhioffice/delete_teamgroup').'/'.$value->teamid}}" type="button" class="btn btn-danger btn-sm">ลบ</a>
		</td>	
	</tr>	

	<?php endforeach ?>

</table>
</div>

@endsection

@section("script")

<script type="text/javascript">
	
	$(document).ready(function(){

	});

	function showAddGroup(){
		$("#dialog").dialog();
	}

	function addGroup(){

		if ($("#txt_new_group").val() !== "") {

			$.ajax({
		        type: "POST",
		        url: "{{url('dhioffice/save_teamgroup')}}",
		        data: {
		        	"_token": "{{ csrf_token() }}",
		        	"txt_new_group": $("#txt_new_group").val(),
		        	"add_dialog_method": "yes"
		        },
		        beforeSend: function(data){ console.log(data); },
		        success: function(data){
		        	$("#dialog").dialog("close");
		        	window.location.reload();
		        }
		        // error: function(){ alert('something wrong..!'); }
		    });

		} else {
			alert("กรุณาใส่ชื่อกลุ่มที่ต้องการเพิ่มใหม่");
			return;
		}
	}

	function editGroup(){

		if ($("#txt_new_group").val() !== "") {

			$.ajax({
		        type: "POST",
		        url: "{{url('dhioffice/save_teamgroup')}}",
		        data: {
		        	"_token": "{{ csrf_token() }}",
		        	"txt_new_group": $("#txt_new_group").val(),
		        	"add_member_method": "yes"
		        },
		        beforeSend: function(data){ console.log(data); },
		        success: function(data){
		        	$("#dialog").dialog("close");
		        	window.location.reload();
		        }
		        // error: function(){ alert('something wrong..!'); }
		    });

		} else {
			alert("กรุณาใส่ชื่อกลุ่มที่ต้องการเพิ่มใหม่");
			return;
		}
	}

</script>

@endsection