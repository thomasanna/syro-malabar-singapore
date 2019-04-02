@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Menu</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 <div class="row">

 <div class="col-lg-6">
    <span class="getContentUrl" data-url = "{{route('admin.getContentByType')}}" token="{{ csrf_token() }}">
    <form action="{{route('admin.content.save')}}" method="post">
        {!! csrf_field() !!}
        <div class="card">
			<div class="card-header"><strong>Create Sub Menu</strong><small></small></div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                           <div class="col-12 col-md-9">
                            <select name="contentType" id="contentType" class="form-control" required>
                                <option value="">Please select</option>
                                <option value="History">History</option>
                                <option value="St. Thomas The Apostle">St. Thomas The Apostle</option>
                                <option value="Syro-Malabar Church">Syro-Malabar Church</option>
                                <option value="Activities">Activities</option>
                                <option value="Reports">Reports</option>
                                <option value="Singapore Diocese">Singapore Diocese</option>
                                <option value="Family Apostolate">Family Apostolate</option>
                                <option value="Family Units">Family Units</option>
                                <option value="Faith Formation">Faith Formation</option>
                            </select>
                            </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="main_menu" class=" form-control-label">Sub Menu</label></div>
                           <div class="col-12 col-md-9">
                            <input type="text" id="sub_menu" name="sub_menu">                           
                        </div>
                    </div> 
                </div>
	        </div>
            <div id="ptr_content_holder" style="display:none">  </div>

	        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>           
            </div>
	    </div>
    </form> 
	    
 </div>
 </div>
        
@endsection

@push('scripts')


@endpush