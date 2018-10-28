@extends("layout.layout_admin")

@section("style")

	<style type="text/css">
		
		.table-style{
			background-color: #FFFFFF;
		}

		.table-style th{
			background-color: #CCCCCC;
		}

	</style>

@endsection


@section("htmlBody")
	
<a href="{{url('dhioffice/add_member')}}" type="button" class="btn btn-primary btn-sm">
	<i class="glyphicon glyphicon-plus"></i> เพิ่มสมาชิก
</a>

<br>
<br>

<div class="table-responsive">
<table class="table table-bordered table-hover table-style">
	<tr>
		<th>Member ID</th>
		<th>Member Team</th>
		<th>Member Name</th>
		<th>Username</th>
	</tr>
	<?php foreach ($memberData as $key => $value): ?>
	
	<tr>
		<td>{{$value->memberid}}</td>	
		<td>{{$value->teamname}}</td>	
		<td>{{$value->memberfullname}}</td>	
		<td>{{$value->username}}</td>	
	</tr>	

	<?php endforeach ?>

</table>
</div>

@endsection