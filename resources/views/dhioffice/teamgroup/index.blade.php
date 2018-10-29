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

<a href="{{url('dhioffice/add_teamgroup')}}" type="button" class="btn btn-primary btn-sm">
	<i class="glyphicon glyphicon-plus"></i> เพิ่มกลุ่มสมาชิก
</a>

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
			<a href="{{url('dhioffice/update_teamgroup').'/'.$value->teamid}}" type="button" class="btn btn-danger btn-sm">ลบ</a>
		</td>	
	</tr>	

	<?php endforeach ?>

</table>
</div>

@endsection