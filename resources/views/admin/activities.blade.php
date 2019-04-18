@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page_title','Dashboard')
@section('content')

@include('admin.flash-message')
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Activities</h1>
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
    <span class="getActivityUrl" data-url = "{{route('admin.getActivityByYear')}}" token="{{ csrf_token() }}">
    <form action="{{route('admin.activity.save')}}" method="post">
        {!! csrf_field() !!}
        <div class="card">
			<div class="card-header"><strong>Activities</strong><small> Edit Form</small></div>
                <div class="card-body card-block">
                    <div class="row form-group">
					    <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
						   <div class="col-12 col-md-9">
						    <select name="year" id="year" class="form-control" required>
						        <option value="">Please select year</option>
                    <option value="2010">2010</option>
                    <option value="2010">2011</option>
                    <option value="2010">2012</option>
                    <option value="2010">2013</option>
                    <option value="2010">2014</option>
                    <option value="2010">2015</option>
						        <option value="2010">2016</option>

						    </select>
						    </div>
			        </div>
	                <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Content</label></div>
                        <div class="col-12 col-md-9"><textarea name="content" id="content" rows="9" placeholder="Content..." class="form-control" ></textarea>
                          <input name="image" type="file" id="upload" class="hidden" onchange="" style="display:none"></div>
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
          theme: "modern",
          paste_data_images: true,
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
          toolbar2: "print preview media | forecolor backcolor emoticons",
          image_advtab: true,
          file_picker_callback: function(callback, value, meta) {alert(1);
            if (meta.filetype == 'image') {alert(2);
              jQuery('#upload').trigger('click');
              jQuery('#upload').on('change', function() {
                var file = this.files[0]; alert(file);
                var reader = new FileReader();
                reader.onload = function(e) {
                  callback(e.target.result, {
                    alt: ''
                  });
                };
                reader.readAsDataURL(file);
              });
            }
          },
          templates: [{
            title: 'Test template 1',
            content: 'Test 1'
          }, {
            title: 'Test template 2',
            content: 'Test 2'
          }]
        });
</script>


<script src="{{asset('public/admin/js/content.js')}}"></script>


@endpush