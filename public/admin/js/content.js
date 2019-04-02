
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