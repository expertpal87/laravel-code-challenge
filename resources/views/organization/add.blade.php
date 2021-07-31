@extends('layouts.admin.app')

@section('title', 'Create Organization')
@section('content')

<div class="container">
<div class="row container">
	

<div class="col-md-1"></div>
<div class="col-md-8">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
 <div class="alert alert-success">
<ul>
           
                <li>{{ session('success') }}</li>
           
        </ul>
 </div>
@endif


<form action="{{url('admin/store-organization')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
	 <label>Name</label>	
		<input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Enter Name">
	</div>

	<div class="form-group">
		 <label>Category</label>	
		<select class="form-control" name="category">
			<option value="" selected="">--please choose Category--</option>
			<option value="cat1">cat1</option>
			<option value="cat2">cat2</option>
			<option value="cat3">cat3</option>
			<option value="cat4">cat4</option>
		</select>
	</div>

	<div class="form-group">
	 <label>trade_license</label>	
		<input type="text" class="form-control" value="{{old('trade_license')}}" name="trade_license" placeholder="Enter Trade License">
	</div>


	<div class="form-group">
	 <label>Licensed Date</label>	
		<input type="date" class="form-control" value="{{old('licensed_date')}}" name="licensed_date" placeholder="Enter Licensed Date">
	</div>

	<div class="form-group">
	<label>Logo</label>	
	<input type="file" class="form-control" name="logo">
	</div>
	
	
	<div class="form-group">
	<input type="submit" class="btn btn-success" />
	<a href="{{url('admin/organization')}}" class="btn btn-danger">Back</a>
	</div>

</form>
</div>
</div>
</div>

@endsection