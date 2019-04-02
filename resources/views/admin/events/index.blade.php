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
                            <a href="{{route('admin.event.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                        Create Event</a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" fetch="{{route('admin.event.data')}}"
                                  token="{{ csrf_token() }}">
                                    <thead>
                                        <tr>
                                            <th>Event Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        
@endsection

@push('scripts')
<script src="{{asset('public/admin/js/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/js/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/js/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/admin/js/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/js/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/admin/js/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/admin/js/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- <script src="{{asset('public/admin/js/data-table/datatables-init.js')}}"></script> -->
<script src="{{asset('public/admin/js/bootbox.min.js')}}"></script>

<script src="{{asset('public/admin/js/events/index.js')}}"></script>

@endpush

@push('css')
<link rel="stylesheet" href="{{ asset('public/admin/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/admin/css/buttons.bootstrap4.min.css') }}">
@endpush