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
	
<a href="{{url('dhioffice/add_product')}}" type="button" class="btn btn-primary btn-sm">
	<i class="glyphicon glyphicon-plus"></i> เพิ่มรายการสินค้า
</a>

<br>
<br>

<table class="table table-bordered table-hover table-style">
	<tr>
		<th style="width:150px;" >Product ID</th>
		<th>Product Name</th>
		<th>คำสั่ง</th>
	</tr>
	<?php foreach ($productData as $key => $value): ?>
	
	<tr>
		<td>{{$value->productid}}</td>	
		<td>{{$value->product_name}}</td>	
		<td>
			<a href="{{url('dhioffice/edit_product').'/'.$value->productid}}" type="button" class="btn btn-info btn-sm">แก้ไข</a>
			<a href="{{url('dhioffice/delete_product').'/'.$value->productid}}" type="button" class="btn btn-danger btn-sm">ลบ</a>
		</td>	
	</tr>	

	<?php endforeach ?>

</table>

@endsection