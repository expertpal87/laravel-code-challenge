@extends('layouts.admin.app')

@section('title', 'Contact')
@section('content')
<div class="container">
	<div class="row">
	
   <div class="col-md-12 text-right">
   	<button class="btn btn-primary" onclick="add_contact()">Add New</button>
   </div>
   <div class="col-md-12 mt-3">
      @if(session('success'))
       <div class="alert alert-success">
      <ul>
                 
                      <li>{{ session('success') }}</li>
                 
              </ul>
       </div>
      @endif
   	<table class="table mt-3">
   		<tr>
   			<th>S.No</th>
   			<th>First-Name</th>
   			<th>Last-Name</th>
   			<th>Email</th>
   			<th>Mobile-Number</th>
   			<th>Organization</th>
   			<th>Is Email Verified</th>
            <th>Action</th>
   		</tr>
   		<tr>
   			@if($contact)
   			@php $i=0; @endphp
   			@foreach($contact as $row)
   			@php $i++; @endphp
   			<tr>
   				<td>{{$i}}</td>
   				<td>
   					{{$row->fname}}
   				</td>
   				<td>{{$row->lname}}</td>
   				<td>{{$row->email}}</td>
   				<td>{{$row->mobile}}</td>
   				<td>{{$row->organization_id}}</td>
   				<td>@if($row->email_varified !=1) {{ 'No' }}  @else {{  'Yes'}}  @endif</td>
   				<td><a href="javascript:void(0)" onclick="editContact('<?php echo encrypt($row->id); ?>')"  class="btn btn-info"><i class="fas fa-edit"></i></a>|<a   onclick="deleteContact('<?php echo encrypt($row->id); ?>')" class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fas fa-trash-alt"></i> </a></td>
   			</tr>
   			@endforeach
   			@endif
   		</tr>
   	</table>
   </div>

 </div>
</div>


<script type="text/javascript">
	function add_contact(){
		window.location.href = "{{ url('admin/create-contact') }}";
	}

	function editContact(contactId){
		
		window.location.href = "{{ url('admin/edit-contact') }}"+'/'+contactId;
	}

   function deleteContact(contactId){
      
      window.location.href = "{{ url('admin/delete-contact') }}"+'/'+contactId;
   }


</script>


@endsection
