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
      {  data: 'title', name: 'year' },
      {  data: 'file', name: 'file', orderable: false },
      {  data: 'actions', name: 'actions', orderable: false, searchable: false }
    ],
  });

});