@extends('layouts.admin.app')

@section('title', 'Organization')
@section('content')
<div class="container">
	<div class="row">
	
   <div class="col-md-12 text-right">
   	<button class="btn btn-primary" onclick="add_organization()">Add New</button>
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
   			<th>Name</th>
   			<th>Category</th>
   			<th>Trade-License</th>
   			<th>Logo</th>
   			<th>Licensed Date</th>
   			
            <th>Action</th>
   		</tr>
   		<tr>
   			@if($organization)
   			@php $i=0; @endphp
   			@foreach($organization as $row)
   			@php $i++; @endphp
   			<tr>
   				<td>{{$i}}</td>
   				<td>
   					{{$row->name}}
   				</td>
   				
   				<td>{{$row->category}}</td>
   				<td>{{$row->trade_license}}</td>
               <td>
                  @if($row->logo)
                  <img src="{{ asset('storage/'.$row->logo)}}" width="80" height="70" />
                  @else
                  <img src="{{ asset('storage/organization/organization.jpeg')}}" width="80" height="70" />
                  @endif</td>
   				<td>{{$row->licensed_date}}</td>
   				
   				<td><a href="javascript:void(0)" onclick="editOrganization('<?php echo encrypt($row->id); ?>')"  class="btn btn-info"><i class="fas fa-edit"></i></a>|<a   onclick="deleteOrganization('<?php echo encrypt($row->id); ?>')" class="btn btn-sm btn-danger" href="javascript:void(0)"><i class="fas fa-trash-alt"></i> </a></td>
   			</tr>
   			@endforeach
   			@endif
   		</tr>
   	</table>
   </div>

 </div>
</div>


<script type="text/javascript">
	function add_organization(){
		window.location.href = "{{ url('admin/create-organization') }}";
	}

	function editOrganization(organizationId){
		
		window.location.href = "{{ url('admin/edit-organization') }}"+'/'+organizationId;
	}

    function deleteOrganization(organizationId){
      
      window.location.href = "{{ url('admin/delete-organization') }}"+'/'+organizationId;
   }


</script>


@endsection
