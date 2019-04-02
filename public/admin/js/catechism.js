jQuery(document).ready(function() {
  var dataUrl = jQuery(".table").attr('fetch');
  var token   = jQuery(".table").attr('token');
  oTable = jQuery('.table').DataTable({
    processing: false,
    serverSide: true,

    ajax: {
      url: dataUrl,
      type: 'post',
      headers: {
        'X-CSRF-TOKEN': token
      }
    },
    columns: [
    //  {  data: 'DT_Row_Index', name: 'reg_user_id' },
      {  data: 'class', name: 'class' },
      {  data: 'lesson', name: 'lesson', orderable: false },
      {  data: 'description', name: 'description', orderable: false, searchable: false },
      {  data: 'book', name: 'book', orderable: false },      
      {  data: 'actions', name: 'actions', orderable: false, searchable: false }
    ],
  });

  jQuery(document).on('click', 'a.delete', function() {
      var action = jQuery(this).attr('action');
      var token = jQuery(this).attr('token');
      var msg = "Are you sure want to delete this book ?";
      bootbox.confirm({
        message: msg,
        buttons: {
          confirm: {
            label: 'Yes',
            className: 'btn-success'
          },
          cancel: {
            label: 'Cancel',
            className: 'btn-danger'
          }
        },
        callback: function(result) {
          if (result == true) {
            jQuery.ajax({
              type: 'POST',
              async: false,
              url: action,
              dataType: 'json',
              data: {
                "_token": token
              },
              success: function(response) {
                oTable.ajax.reload();
              }
            });
          }
        }
      });
   });

});