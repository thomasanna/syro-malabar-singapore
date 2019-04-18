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
      {  data: 'baptism_name', name: 'baptism_name', orderable: false },
      {  data: 'contact_number', name: 'contact_number', orderable: false, searchable: false },
      {  data: 'nric_fin', name: 'nric_fin', orderable: false },      
      {  data: 'sex', name: 'sex', orderable: false },      
      {  data: 'marital_status', name: 'marital_status', orderable: false },      
      {  data: 'father_name', name: 'father_name', orderable: false },      
      {  data: 'mother_name', name: 'mother_name', orderable: false },      
      {  data: 'address_in_singapore', name: 'address_in_singapore', orderable: false },      
      {  data: 'work_place_address', name: 'work_place_address', orderable: false },      
      {  data: 'designation', name: 'designation', orderable: false },      
      {  data: 'date_arrival_singapore', name: 'date_arrival_singapore', orderable: false },      
      {  data: 'church_in_singapore', name: 'church_in_singapore', orderable: false },      
      {  data: 'address_in_india', name: 'address_in_india', orderable: false },      
      {  data: 'parish_vicar_name', name: 'parish_vicar_name', orderable: false },      
      {  data: 'parish_address', name: 'parish_address', orderable: false },      
      {  data: 'would_be_details', name: 'would_be_details', orderable: false },      
      {  data: 'reference_person_1', name: 'reference_person_1', orderable: false },      
      {  data: 'reference_person_2', name: 'reference_person_2', orderable: false },      
      {  data: 'reference_person_3', name: 'reference_person_3', orderable: false },      
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