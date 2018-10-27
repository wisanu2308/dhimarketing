@extends("layout.layout_admin")

@section("style")

@endsection


@section("htmlBody")
	
<a href="{{url('dhioffice/add_product')}}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> เพิ่มรายการสินค้า</a>

<table border="1">


	<tr>
		<td>Product ID</td>
		<td>Product Name</td>
		<td></td>
		<td></td>
	</tr>
	<?php foreach ($productData as $key => $value): ?>
	
	<tr>
		<td>id</td>	
		<td>name</td>	
		<td></td>	
		<td></td>	
	</tr>	

	<?php endforeach ?>

</table>

@endsection