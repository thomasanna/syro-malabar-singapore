@if ($message = Session::get('success'))
<div class="col-sm-12">
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
        <span class="badge badge-pill badge-success">Success</span> {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="col-sm-12">
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
        <span class="badge badge-pill badge-danger">Danger</span>
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="col-sm-12">
    <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
	    <span class="badge badge-pill badge-warning">Warning</span>
	    {{ $message }}
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">×</span>
	        </button>
   </div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="col-sm-12">
    <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
    <span class="badge badge-pill badge-info">Info</span>
    {{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
    </button>
    </div>
</div>
@endif

@if ($errors->any())
<div class="col-sm-12">
    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
        <span class="badge badge-pill badge-danger">Danger</span>
        Please check the form below for errors
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
    </div>
</div>
@endif
