@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Event</h1>
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

    <form action="{{route('admin.event.edit')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card">
          <input type="hidden" name="eventId" value="{{$eventData->eventId}}">
            <div class="card-header"><strong>Edit Event</strong><small>    </small></div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Event Name</label></div>
                           <div class="col-12 col-md-9">

                           <input class="form-control" type="text" name="eventName" required value="{{$eventData->eventName}}">
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Event Date</label></div>
                           <div class="col-12 col-md-9">

                           <input class="form-control datetimepicker" type="text" name="eventDate" current-time="{{date('Y-m-d')}}" required  value="{{date('d-m-Y', strtotime($eventData->eventDate))}}">
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Event Time</label></div>
                           <div class="col-12 col-md-9">
                           <input class="form-control timepicker" type="text" name="eventTime" current-time="{{date('H:i:s')}}"  required value="{{$eventData->eventTime}}">
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Location</label></div>
                           <div class="col-12 col-md-9">
                           <input class="form-control" type="text" name="location" required value="{{$eventData->location}}">
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Event description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control" required>{{$eventData->eventDescription}}</textarea></div>
                    </div> 
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Event Image</label></div>
                           <div class="col-12 col-md-9">
                           <input type="file" class="form-control" name="eventImage">
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

@push('css')
<link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap-datetimepicker.min.css') }}">
@endpush

@push('scripts')
<script src="{{asset('public/admin/js/moment.min.js')}}"></script>

<script src="{{asset('public/admin/js/bootstrap-datetimepicker.min.js')}}"></script>

<script>
    var dateNow = jQuery("input[name=eventDate]").attr('current-time');

    jQuery('.datetimepicker').datetimepicker({
    format: 'DD-MM-YYYY',
   // defaultDate:dateNow
});
    var dateNow1 = jQuery("input[name=eventTime]").attr('current-time');
    jQuery('.timepicker').datetimepicker({
    format: 'H:s',
   // defaultDate:dateNow1
});
</script>

@endpush
