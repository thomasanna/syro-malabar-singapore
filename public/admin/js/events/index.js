$(document).ready(function() {
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
      {  data: 'eventName', name: 'eventName' },
      {  data: 'eventDate', name: 'eventDate', orderable: false },
      {  data: 'eventTime', name: 'eventTime', orderable: false, searchable: false },
      {  data: 'eventDescription', name: 'eventDescription', orderable: false, searchable: false },
      {  data: 'eventImage', name: 'eventImage', orderable: false },      
      {  data: 'status', name: 'status', orderable: false },      
      {  data: 'actions', name: 'actions', orderable: false, searchable: false }
    ],
  });
  
 

});