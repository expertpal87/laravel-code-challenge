@extends('layouts.admin.app')

@section('title', 'Edit Organization')
@section('content')

<div class="container">
<div class="row container">


<div class="col-md-1"></div>
<div class="col-md-9">

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

<form action="{{url('admin/update-organization')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="organizationId" value="{{ encrypt($organization->id)}}">
	<div class="form-group">
	 <label>Name</label>	
		<input type="text" class="form-control" value="@if($organization->name) {{ $organization->name }} @endif" name="name" placeholder="Enter Name">
	</div>

	<div class="form-group">
		 <label>Category</label>	
		<select class="form-control" name="category">
			<option value="" selected="">--please choose Category--</option>
			<option @if($organization->category == 'cat1') {{'selected'}} @endif value="cat1">cat1</option>
			<option @if($organization->category == 'cat2') {{'selected'}} @endif value="cat2">cat2</option>
			<option @if($organization->category == 'cat3') {{'selected'}} @endif value="cat3">cat3</option>
			<option @if($organization->category == 'cat4') {{'selected'}} @endif value="cat4">cat4</option>
		</select>
	</div>

	<div class="form-group">
	 <label>trade_license</label>	
		<input type="text" class="form-control" value="@if($organization->trade_license) {{ $organization->trade_license }} @endif" name="trade_license" placeholder="Enter Trade License">
	</div>


	<!-- <div class="form-group">
	 <label>Licensed Date</label>	
		<input type="date" class="form-control" value="@if($organization->licensed_date) {{ $organization->licensed_date }} @endif" name="licensed_date" placeholder="Enter Licensed Date">
	</div> -->

	<div class="row">
		<div class="col-md-6">
			@if($organization->logo)
			<img src="{{asset('storage/'.$organization->logo)}}" width="200px" height="200px" />
		
			@else
		<img src="{{asset('storage/organization/organization.jpeg')}}" width="200px" height="200px" />
			@endif
			
		</div>
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




