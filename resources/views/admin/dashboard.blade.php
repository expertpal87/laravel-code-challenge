@extends('layouts.admin.app')

@section('title', 'dashboard')
@section('content')
<section class="content">
      <div class="container-fluid">

 <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>@if($totalContact) {{ $totalContact }} @else {{ '0' }} @endif</h3>

                <p>Contact</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url('admin/contact') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>@if($totalOrganization) {{ $totalOrganization }}  @else {{ '0' }} @endif</h3>

                <p>Organization</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('admin/organization') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
       
        </div>
        <!-- /.row -->

</div>
</section>
@endsection