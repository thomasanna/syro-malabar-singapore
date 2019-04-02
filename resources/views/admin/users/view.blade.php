@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{$user->name}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 <div class="row">
 <div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Personal Details</strong><small> </small></div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Contact Number</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->contact_number}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>NRIC/FIN</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->nric_fin}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Email</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->email}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Age</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->age}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Sex</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->sex}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Marital Status</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->marital_status}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Address In Singapore</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->address_in_singapore}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Address In India</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->address_in_india}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Parish in India</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->parish_in_india}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Diocese in India</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$user->diocese_in_india}}
                  </div>
                </div>
        </div>
    </div>

 </div>




<div class="col-lg-6">
    <div class="card">
      <div class="card-header"><strong>Family Details</strong><small> </small></div>

      @if($user->family_living_in_india == 1) 

      @if(count($familyDetails) > 0)

      @foreach($familyDetails as $data)

        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Member Name</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$data->member_name}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Relation</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$data->relation}}
                  </div>
                </div>
        </div>
        <div class="card-body card-block">
               <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label"><b>Sex</b></label></div>
                 <div class="col-12 col-md-9">
                   {{$data->sex}}
                  </div>
                </div>
        </div>
        <hr>
       @endforeach 
       @endif
       @else

        <div class="card-body card-block">
               <div class="row form-group">

                Family details not available
                
               </div>
        </div>

       @endif
        
    </div>

 </div>

 </div>
         
@endsection

@push('scripts')


@endpush