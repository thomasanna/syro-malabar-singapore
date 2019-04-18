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
      {  data: 'name', name: 'name' },
      {  data: 'contact_number', name: 'contact_number', orderable: false },
      {  data: 'house_blessing_date', name: 'house_blessing_date', orderable: false, searchable: false },
      {  data: 'house_blessing_time', name: 'house_blessing_time', orderable: false },      
      {  data: 'address', name: 'address', orderable: false },      
      {  data: 'status', name: 'status', orderable: false },      
      {  data: 'actions', name: 'actions', orderable: false, searchable: false }
    ],
  });


  jQuery(document).on('click', 'a.delete', function() {
      var action = jQuery(this).attr('action');
      var token = jQuery(this).attr('token');
      var msg = "Are you sure want to delete this request ?";
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

  jQuery(document).on('click', 'a.approve', function() {
      var action = jQuery(this).attr('action');
      var token = jQuery(this).attr('token');
      var msg = "Are you sure want to approve this request ?";
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