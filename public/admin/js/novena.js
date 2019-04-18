
jQuery('#saint_name').on('change', function() {
  var saint_name = this.value;
  var prayer_type = jQuery('#prayer_type').val();
  var lang = jQuery('#lang').val();
  var action  = jQuery('.getNovenaUrl').attr('data-url');
  var token   = jQuery('.getNovenaUrl').attr('token');
  jQuery.ajax({
    type: 'POST',
    async: false,
    url: action,
    dataType: 'json',
    data: {
     "_token" : token,
     "saint_name": saint_name,
     "prayer_type": prayer_type,
     "lang": lang
    },
    success: function(response) {
       jQuery('#ptr_content_holder').html(response.content);
       var data = jQuery('#ptr_content_holder').html();
       tinymce.get('content').setContent(data);
    }
  });
});

jQuery('#prayer_type').on('change', function() {
  var prayer_type = this.value;
  var saint_name = jQuery('#saint_name').val();
  var lang = jQuery('#lang').val();
  var action  = jQuery('.getNovenaUrl').attr('data-url');
  var token   = jQuery('.getNovenaUrl').attr('token');
  jQuery.ajax({
    type: 'POST',
    async: false,
    url: action,
    dataType: 'json',
    data: {
     "_token" : token,
     "saint_name": saint_name,
     "prayer_type": prayer_type,
     "lang": lang
    },
    success: function(response) {
       jQuery('#ptr_content_holder').html(response.content);
       var data = jQuery('#ptr_content_holder').html();
       tinymce.get('content').setContent(data);
    }
  });
});

jQuery('#lang').on('change', function() {
  var lang = this.value;
  var saint_name = jQuery('#saint_name').val();
  var prayer_type = jQuery('#prayer_type').val();
  var action  = jQuery('.getNovenaUrl').attr('data-url');
  var token   = jQuery('.getNovenaUrl').attr('token');
  jQuery.ajax({
    type: 'POST',
    async: false,
    url: action,
    dataType: 'json',
    data: {
     "_token" : token,
     "saint_name": saint_name,
     "prayer_type": prayer_type,
     "lang": lang
    },
    success: function(response) {
       jQuery('#ptr_content_holder').html(response.content);
       var data = jQuery('#ptr_content_holder').html();
       tinymce.get('content').setContent(data);
    }
  });
});