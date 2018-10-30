@extends("layout.layout_admin")

@section("style")
	
	



@endsection


@section("htmlBody")
	
<div class="page-header">
	<h1>แก้ไขกลุ่มสมาชิก <small>Subtext for header</small></h1>
</div>

<form action="{{url('dhioffice/update_teamgroup')}}" method="post">
	{{ csrf_field() }}	

	<input type="hidden" name="ref_txt_teamid" value="{{$teamgroupData[0]->teamid}}">
	<div class="form-group">
		<label>ชื่อกลุ่มสมาชิก</label>
		<input class="form-control" type="text" name="txt_teamname" value="{{$teamgroupData[0]->teamname}}" style="width: 200px;display: inline-block;"> 
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-sm" type="submit">บันทึกข้อมูล</button>
	</div>

</form>

@endsection

@section("script")

<script type="text/javascript">
	
	$(document).ready(function(){

	});

</script>


@endsection