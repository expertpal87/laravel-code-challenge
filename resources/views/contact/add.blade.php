@extends('layouts.admin.app')

@section('title', 'Create Contact')
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


<form action="{{url('admin/store-contact')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
	 <label>First Name</label>	
		<input type="text" class="form-control" value="{{old('first_name')}}" name="first_name" placeholder="Enter Firstname">
	</div>

	<div class="form-group">
	 <label>Last-Name</label>	
		<input type="text" class="form-control" value="{{old('last_name')}}" name="last_name" placeholder="Enter Lastname">
	</div>

	<div class="form-group">
	 <label>Email</label>	
		<input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Enter email">
	</div>

	<div class="form-group" id="mobile_lable">
	 <label>Mobile</label>	
	 <div class="row" >
	 	<div class="col-md-11">
		<input type="text" class="form-control"  name="mobile[]"  placeholder="Enter mobile" />
	</div>
	<div class="col-md-1">
		<a href="javascript:void(0)" onclick="addNewMoreMobileNumber()" class="btn btn-danger">+</a>
	</div>
</div>
	</div>

	<div class="form-group">
	 <label>Date of birth</label>	
		<input type="date" class="form-control" value="{{old('dob')}}" name="dob" placeholder="Enter Date of birth">
	</div>

	
	<div class="form-group">
		 <label>Organization</label>	
		<select class="form-control" name="organization">
			<option value="" selected="">--please choose Organization--</option>

			@if($organization)
			@foreach($organization as $data)
			<option value="{{ $data->name }}">{{ $data->name }}</option>
			@endforeach
			@endif

			
		</select>
	</div>
	
	<div class="form-group">
	<input type="submit" class="btn btn-success" />
	<a href="{{url('admin/contact')}}" class="btn btn-danger">Back</a>
	</div>

</form>
</div>
</div>
</div>

<script type="text/javascript">
	function addNewMoreMobileNumber(){
		$('#mobile_lable').append('<br><div class="form-group" id="mobile_lable"><input type="text" class="form-control"  name="mobile[]"placeholder="Enter mobile" /></div>');
	}
</script>
@endsection