@extends("layout.layout_admin")

@section("style")
	
	



@endsection


@section("htmlBody")
	
<div class="page-header">
	<h1>แก้ไขข้อมูลสมาชิก <small>Subtext for header</small></h1>
</div>

<div id="dialog" title="เพิ่มกลุ่มใหม่" style="display: none;">
	<!-- <label>เพิ่มกลุ่มใหม่</label> -->
	<br>
	<input class="form-control" type="text" id="txt_new_group" name="txt_new_group" value="" style="width: 200px;display: inline-block;">
	<button type="button" class="btn btn-primary btn-sm" onclick="addGroup()">เพิ่ม</button>
</div>

<form action="{{url('dhioffice/update_member')}}" method="post">
	{{ csrf_field() }}	

	<div class="form-group">
		<label>กลุ่มสมาชิก</label>

		<select id="sl_teamgroup" name="sl_teamgroup" class="form-control" style="width: 200px;display: inline-block;">
			<option value="">เลือกกลุ่มสมาชิก</option>
			<?php foreach ($teamgroupData as $key => $value): ?>
				<?php $selected = $memberData['0']->teamid == $value->teamid ? "selected" : ""; ?>
				<option value="{{$value->teamid}}" <?= $selected ?> >{{$value->teamname}}</option>
			<?php endforeach ?>
		</select>
		<button type="button" class="btn btn-primary btn-sm" onclick="showAddGroup()">เพิ่มกลุ่มใหม่</button>
	</div>

	<div class="form-group">
		<label>ชื่อสมาชิก</label>
		<input class="form-control" type="text" name="txt_membername" value="{{$memberData[0]->name}}" style="width: 200px;display: inline-block;" placeholder="ชื่อ"> 
		<input class="form-control" type="text" name="txt_membersurname" value="{{$memberData[0]->surname}}" style="width: 200px;display: inline-block;" placeholder="นามสกุล"> 
	</div>

	<div class="form-group">
		<label>Username</label>
		<input class="form-control" type="text" name="txt_username" value="{{$memberData[0]->username}}" style="width: 200px;display: inline-block;" readonly>  
	</div>

	<div class="form-group" style="display: none;">
		<label>Password</label>
		<input class="form-control" type="text" name="txt_password" value="" style="width: 200px;display: inline-block;" readonly> 
	</div>

	<div class="form-group" style="display: none;">
		<button class="btn btn-primary btn-sm" type="submit">บันทึกข้อมูล</button>
	</div>

</form>

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

			$("#sl_teamgroup").html("");
			
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
		        	$("#sl_teamgroup").html(data);
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