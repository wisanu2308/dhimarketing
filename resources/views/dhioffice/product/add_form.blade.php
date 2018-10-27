@extends("layout.layout_admin")

@section("style")

@endsection


@section("htmlBody")
	
<div class="page-header">
	<h1>เพิ่มรายการสินค้า <small>Subtext for header</small></h1>
</div>

<form action="{{url('dhioffice/save_product')}}" method="post">
	{{ csrf_field() }}	

	<div class="form-group">
		<label>ชื่อสินค้า</label>
		<input class="form-control" type="text" name="txt_productname" value="" style="width: 200px;"> 
	</div>

	<div class="form-group">
		<label>ชื่อสินค้า1</label>
		<input class="form-control" type="text" name="txt_productname1" value="" style="width: 200px;"> 
	</div>

	<div class="form-group">
		<label>ชื่อสินค้า2</label>
		<input class="form-control" type="text" name="txt_productname2" value="" style="width: 200px;"> 
	</div>

	<div class="form-group">
		<label>ชื่อสินค้า3</label>
		<input class="form-control" type="text" name="txt_productname3" value="" style="width: 200px;"> 
	</div>

	<div class="form-group">
		<label>ชื่อสินค้า4</label>
		<input class="form-control" type="text" name="txt_productname4" value="" style="width: 200px;"> 
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-sm" type="submit">เพิ่มข้อมูล</button>
	</div>

</form>

@endsection