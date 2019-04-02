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
      {  data: 'email', name: 'email', orderable: false, searchable: false },
      {  data: 'nric_fin', name: 'nric_fin', orderable: false },      
      {  data: 'age', name: 'age', orderable: false, searchable: false },
      {  data: 'sex', name: 'sex', orderable: false, searchable: false },
      {  data: 'marital_status', name: 'marital_status', orderable: false, searchable: false },
      {  data: 'actions', name: 'actions', orderable: false, searchable: false }
    ],
  });



});