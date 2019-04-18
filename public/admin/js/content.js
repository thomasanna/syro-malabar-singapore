
jQuery('#contentType').on('change', function() {
  var contentType = this.value;
  var action  = jQuery('.getContentUrl').attr('data-url');
  var token   = jQuery('.getContentUrl').attr('token');
  jQuery.ajax({
    type: 'POST',
    async: false,
    url: action,
    dataType: 'json',
    data: {
     "_token" : token,
     "contentType": contentType
    },
    success: function(response) {
       jQuery('#ptr_content_holder').html(response.content);
       var data = jQuery('#ptr_content_holder').html();
       tinymce.get('content').setContent(data);
     //  tinymce.activeEditor.setContent('<span>some</span>');
    }
  });
});

jQuery('#year').on('change', function() {
  var year = this.value;
  var action  = jQuery('.getActivityUrl').attr('data-url');
  var token   = jQuery('.getActivityUrl').attr('token');
  jQuery.ajax({
    type: 'POST',
    async: false,
    url: action,
    dataType: 'json',
    data: {
     "_token" : token,
     "year": year
    },
    success: function(response) {
       jQuery('#ptr_content_holder').html(response.content);
       var data = jQuery('#ptr_content_holder').html();
       tinymce.get('content').setContent(data);
     //  tinymce.activeEditor.setContent('<span>some</span>');
    }
  });
});