@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Catechism</h1>
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

    <form action="{{route('admin.catechism.save')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card">
            <div class="card-header"><strong>Upload Catechism Book</strong><small>    </small></div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Class</label></div>
                           <div class="col-12 col-md-9">

                            <select class="form-control" name="class" required>>
                                <option value="Class 1">Class 1</option>
                                <option value="Class 2">Class 2</option>
                                <option value="Class 3">Class 3</option>
                                <option value="Class 4">Class 4</option>
                                <option value="Class 5">Class 5</option>
                                <option value="Class 6">Class 6</option>
                                <option value="Class 7">Class 7</option>
                                <option value="Class 8">Class 8</option>
                                <option value="Class 9">Class 9</option>
                                <option value="Class 10">Class 10</option>
                            </select>
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Lesson</label></div>
                           <div class="col-12 col-md-9">

                            <select class="form-control" name="lesson" required>>
                                <option value="Lesson 1">Lesson 1</option>
                                <option value="Lesson 2">Lesson 2</option>
                                <option value="Lesson 3">Lesson 3</option>
                                <option value="Lesson 4">Lesson 4</option>
                                <option value="Lesson 5">Lesson 5</option>
                                <option value="Lesson 6">Lesson 6</option>
                                <option value="Lesson 7">Lesson 7</option>
                                <option value="Lesson 8">Lesson 8</option>
                                <option value="Lesson 9">Lesson 9</option>
                                <option value="Lesson 10">Lesson 10</option>
                            </select>
                           </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control" required></textarea></div>
                    </div> 
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Upload Book</label></div>
                           <div class="col-12 col-md-9">
                           <input type="file" class="form-control" name="book" required>
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

<script src="{{asset('public/admin/js/catechism.js')}}"></script>


@endpush

@push('css')

@endpush