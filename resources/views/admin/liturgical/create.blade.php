@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Liturgical Calender</h1>
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
<div class="animated fadeIn">
    <div class="row">

    <div class="col-lg-6">

    <form action="{{route('admin.liturgical-calender.save')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card">
            <div class="card-header"><strong>Upload Liturgical Calender</strong><small>    </small></div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Year</label></div>
                           <div class="col-12 col-md-9">

                            <select class="form-control" name="year" required>>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Language</label></div>
                           <div class="col-12 col-md-9">

                            <select class="form-control" name="lang" required>>
                                <option value="Malayalam">Malayalam</option>
                                <option value="English">English</option>

                            </select>
                           </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Upload Calender</label></div>
                           <div class="col-12 col-md-9">
                           <input type="file" class="form-control" name="calender" required>
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
           </form>
        </div>


    </div>
 </div><!-- .animated -->
        
@endsection

@push('scripts')



@endpush

@push('css')

@endpush