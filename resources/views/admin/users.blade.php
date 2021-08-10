{{-- extend  --}}
@extends('admin-layout.app')
@extends('includes-admin.header')
@extends('includes-admin.footer')
@extends('includes-admin.sidebar')
{{-- page titles --}}
@section('title', 'Dashboard')
@section('content')
<div class="main-container">
  <div class="xs-pd-20-10 pd-ltr-20">

    @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif


    <div class="title pb-20">
        <a href="adduser" class="btn btn-lg " data-bgcolor="#c32361" data-color="#ffffff" style="color: rgb(255, 255, 255); background-color: rgb(195, 35, 97);">Add User</a>
    </div>
   {{--  <div class="row pb-10">
      <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <div class="weight-700 font-24 text-dark">75</div>
              <div class="font-14 text-secondary weight-500">Appointment</div>
            </div>
            <div class="widget-icon">
              <div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <div class="weight-700 font-24 text-dark">124,551</div>
              <div class="font-14 text-secondary weight-500">Total Patient</div>
            </div>
            <div class="widget-icon">
              <div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <div class="weight-700 font-24 text-dark">400+</div>
              <div class="font-14 text-secondary weight-500">Total Doctor</div>
            </div>
            <div class="widget-icon">
              <div class="icon"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <div class="weight-700 font-24 text-dark">$50,000</div>
              <div class="font-14 text-secondary weight-500">Earning</div>
            </div>
            <div class="widget-icon">
              <div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
    
    <div class="card-box pb-10">
      <div class="h5 pd-20 mb-0">Users</div>
      <table class="data-table table nowrap">
        <thead>
          <tr>
            <th class="table-plus">Name</th>
            <th>E-Mail</th>
            <th>Company</th>
            <th>Telephone #</th>
            
           
            <th class="datatable-nosort">Actions</th>
          </tr>
        </thead>
        <tbody>

          @foreach($users as $user)

          <tr>
            <td class="table-plus">
              <div class="name-avatar d-flex align-items-center">
                {{-- <div class="avatar mr-2 flex-shrink-0">
                  <img src="vendors/images/photo4.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
                </div> --}}
                <div class="txt">
                  <div class="weight-600 text-capitalize">{{ $user->first_name }} {{ $user->last_name }}</div>
                </div>
              </div>
            </td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->company }}</td>
            <td>{{ $user->phone_number }}</td>
            
            
            <td>
              <div class="table-actions">
                <a href="useredit/{{$user->id}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                <a href="/userdelete/{{$user->id}}" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
              </div>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>
    
    
  </div>
</div>
@endsection
@section("footer")
@parent
@endsection