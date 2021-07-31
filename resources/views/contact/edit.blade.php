@extends('layouts.admin.app')

@section('title', 'Edit Contact')
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


<form action="{{url('admin/update-contact')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="contactId" value="{{ encrypt($contact->id)}}">
	<div class="form-group">
	 <label>First-Name</label>	
		<input type="text" class="form-control" value="@if($contact->fname) {{ $contact->fname }} @endif" name="first_name" placeholder="Enter First-Name">
	</div>

	<div class="form-group">
	 <label>Last-Name</label>	
		<input type="text" class="form-control" value="@if($contact->lname) {{ $contact->lname }} @endif" name="last_name" placeholder="Enter Last-Name">
	</div>

	<div class="form-group">
	 <label>Email</label>	
		<input type="text" readonly="" class="form-control" value="@if($contact->email) {{ $contact->email }} @endif" name="email" placeholder="Enter Email">
	</div>

	<div class="form-group">
	 <label>Mobile</label>	
	 <?php $mobiles = explode(',', $contact->mobile);  ?>
	 @foreach($mobiles as $key => $mobile)
		<input type="text" class="form-control" value="@if($contact->mobile) {{ $mobile }} @endif" name="mobile[]" placeholder="Enter Mobile"><br>
	@endforeach	
	</div>

	<!-- <div class="form-group">
	 <label>Date of birth</label>	
		<input type="date" id="dob" class="form-control" value="@if($contact->dob) {{ $contact->dob }} @endif" name="dob" placeholder="Enter Date of birth">
	</div> -->
	
	<div class="form-group">
		 <label>Organization</label>	
		<select class="form-control" name="organization">
			<option value="" selected="">--please choose organization--</option>

			@if($organization)
			@foreach($organization as $data)
			<option @if($contact->organization_id == $data->name) {{'selected'}} @endif  value="{{ $data->name }}">{{ $data->name }}</option>
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
	$( document ).ready(function() {
		alert('vias')
		var dob = $('#dob').val();
		if(dob == ""){
			$('#dob').attr('type','date');
		}
	});
</script>

@endsection