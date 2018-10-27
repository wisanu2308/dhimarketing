@extends("layout.layout_admin")

@section("style")

@endsection


@section("htmlBody")
	
<a href="{{url('dhioffice/add_member')}}" type="button" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> เพิ่มสมาชิก</a>

<table border="1">


	<tr>
		<td>Member ID</td>
		<td>Member Team</td>
		<td>Member Name</td>
		<td></td>
	</tr>
	<?php foreach ($memberData as $key => $value): ?>
	
	<tr>
		<td>id</td>	
		<td>name</td>	
		<td></td>	
		<td></td>	
	</tr>	

	<?php endforeach ?>

</table>

@endsection