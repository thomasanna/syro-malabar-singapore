@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Noc</h1>
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" fetch="{{route('admin.noc.data')}}"
                                  token="{{ csrf_token() }}">
                                    <thead>
                                        <tr>
                                           <!--  <th>No</th> -->
                                            <th>Name</th>
                                            <th>Baptism Name</th>
                                            <th>Contact Number</th>
                                            <th>NRIC/FIN</th>
                                            <th>Sex</th>
                                            <th>Marital Status</th>
                                            <th>Father</th>
                                            <th>Mother</th>
                                            <th>Address in Singapore</th>
                                            <th>Work Place</th>
                                            <th>Designation</th>
                                            <th>Date arrival in Singapore</th>
                                            <th>Church in Singapore</th>
                                            <th>Address in India</th>
                                            <th>Parish Vicar</th>
                                            <th>Parish Address</th>
                                            <th>Would-be</th>
                                            <th>Reference Person 1</th>
                                            <th>Reference Person 2</th>
                                            <th>Reference Person 3</th>
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
<script src="{{asset('public/admin/js/bootbox.min.js')}}"></script>
<script src="{{asset('public/admin/js/noc.js')}}"></script>


@endpush

@push('css')

<link rel="stylesheet" href="{{ asset('public/admin/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/admin/css/buttons.bootstrap4.min.css') }}">
@endpush