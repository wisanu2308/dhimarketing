@extends("layout.layout_admin")

@section("style")

@endsection


@section("htmlBody")
	
<div class="page-header">
	<h1>เพิ่มสมาชิก <small>Subtext for header</small></h1>
</div>

<form action="{{url('dhioffice/save_member')}}" method="post">
	{{ csrf_field() }}	

	<div class="form-group">
		<label>กลุ่มสมาชิก</label>

		<select id="sl_teamgroup" name="sl_teamgroup" class="form-control" style="width: 200px;display: inline-block;">
			<option value="">เลือกกลุ่มสมาชิก</option>
			<?php foreach ($teamgroupData as $key => $value): ?>
				<option value="{{$value->teamid}}">{{$value->teamname}}</option>
			<?php endforeach ?>
		</select>
		<a type="button" class="btn btn-primary btn-sm">เพิ่มกลุ่มใหม่</a>
	</div>

	<div class="form-group">
		<label>ชื่อสมาชิก</label>
		<input class="form-control" type="text" name="txt_membername" value="" style="width: 200px;display: inline-block;" placeholder="ชื่อ"> 
		<input class="form-control" type="text" name="txt_membersurname" value="" style="width: 200px;display: inline-block;" placeholder="นามสกุล"> 
	</div>

	<div class="form-group">
		<label>Username</label>
		<input class="form-control" type="text" name="txt_username" value="" style="width: 200px;display: inline-block;"> 
	</div>

	<div class="form-group">
		<label>Password</label>
		<input class="form-control" type="text" name="txt_password" value="" style="width: 200px;display: inline-block;"> 
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-sm" type="submit">เพิ่มข้อมูล</button>
	</div>

</form>

@endsection