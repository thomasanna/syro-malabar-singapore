@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Novena</h1>
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

 <div class="col-lg-12">
    <span class="getNovenaUrl" data-url = "{{route('admin.getNovena')}}" token="{{ csrf_token() }}" >
    <form action="{{route('admin.novena.save')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card">
			<div class="card-header"><strong>Novena</strong><small> Edit Form</small></div>
                <div class="card-body card-block">
              <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Saint Name</label></div>
               <div class="col-12 col-md-9">
                <select name="saint_name" id="saint_name" class="form-control" required>
                    <option value="St. Alphonsa Muttathupadathu">St. Alphonsa Muttathupadathu</option>
                    <option value="St. Kuriakose Elias Chavara">St. Kuriakose Elias Chavara</option>
                    <option value="St. Euphrasia CMC Elavathunkel">St. Euphrasia CMC Elavathunkel</option>
                    <option value="Kunjachan Thevarparampil Augustine">Kunjachan Thevarparampil Augustine</option>
                    
                </select>
                </div>
              </div>
                    <div class="row form-group">
              <div class="col col-md-3"><label for="select" class=" form-control-label">Prayer type</label></div>
               <div class="col-12 col-md-9">
                <select name="prayer_type" id="prayer_type" class="form-control" required>
                    <option value="Novena">Novena</option>
                    <option value="Prayer">Prayer</option>
                   
                </select>
                </div>
              </div>
               <div class="row form-group">
					    <div class="col col-md-3"><label for="select" class=" form-control-label">Language</label></div>
						   <div class="col-12 col-md-9">
						    <select name="lang" id="lang" class="form-control" required>
                    <option value="Malayalam">Malayalam</option>
						        <option value="English">English</option>
						       
						    </select>
						    </div>
			        </div>
	                <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Content</label></div>
                        <div class="col-12 col-md-9"><textarea name="content" id="content" rows="9" placeholder="Content..." class="form-control" ></textarea>
                       </div>
                    </div>	
                     <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Upload File</label></div>
                           <div class="col-12 col-md-9">
                           <input type="file" class="form-control" name="novena_file" >
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

<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'#content' });</script> -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
   tinymce.init({
          selector: "textarea",
        });
</script>


<script src="{{asset('public/admin/js/novena.js')}}"></script>


@endpush