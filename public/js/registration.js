jQuery('.singapore_living').on('change', function() {

    var singapore_living = this.value;
    if(singapore_living == '1'){
        jQuery('.family').html('');
        jQuery('.fd_div').css('display','block');
        jQuery('.family').append('<div class="row form-group">'+
                                '<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Member name</label></div>'+
                                '<div class="col-12 col-md-9">'+
                                '<input type="text" class="form-control member_name" id="member_name_1" name="member_name_1" placeholder="Enter name ">'+
                                '</div>'+
                                '</div>'+
                            '<div class="row form-group">'+
                                         
                   '<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Relation</label></div>'+
                                '<div class="col-12 col-md-9">'+
                                '<input type="text" class="form-control member_relation" id="member_relation_1" name="member_relation_1" placeholder="Enter relation ">'+
                                '</div>'+
                            '</div>'+
                            '<div class="row form-group">'+
                                '<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Sex</label></div>'+
                                '<div class="col-12 col-md-9">'+
                                '<select class="form-control member_sex" name="member_sex_1" id="member_sex_1" placeholder="Enter your sex">'+
                                    '<option value="Male">Male</option>'+
                                    '<option value="Female">Female</option>'+
                                '</select>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row form-group">'+
                                         
                   '<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Age</label></div>'+
                                '<div class="col-12 col-md-9">'+
                                '<input type="text" class="form-control member_age" id="member_age_1" name="member_relation_1" placeholder="Enter age ">'+
                                '</div>'+
                            '</div>'+
                            '<div class="addicon">'+
            '<i class="fa fa-plus-circle fa-2 add_family_member" aria-hidden="true" + title="Add family member" style="cursor:pointer"></i></div>');
             jQuery(".family").attr("family-count","1");
    }
    else{
       jQuery('.fd_div').css('display','none');
       jQuery('.family').html('');
       jQuery(".family").attr("family-count","0");
    }

});

jQuery('body').on('click', '.addicon .add_family_member', function() {

    
    jQuery('.family .addicon').remove();
    jQuery('.fd_div').css('display','block');
    var family_count = parseInt($(".family").attr("family-count"));
    family_count  = family_count+1;
    jQuery(".family").attr("family-count",family_count);
    jQuery('.family').append('<div class="row form-group">'+
                        	'<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Member name</label></div>'+
                        	'<div class="col-12 col-md-9">'+
                            '<input type="text" class="form-control member_name" id="member_name_'+family_count+ '" name="member_name_'+family_count+'" placeholder="Enter name ">'+
                            '</div>'+
                        '</div>'+
                        '<div class="row form-group">'+
                        	'<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Relation</label></div>'+
                        	'<div class="col-12 col-md-9">'+
                            '<input type="text" class="form-control member_relation" id="member_relation_'+family_count+'" name="member_relation_'+family_count+'" placeholder="Enter relation ">'+
                            '</div>'+
                        '</div>'+
                        '<div class="row form-group">'+
                        	'<div class="col col-md-3 form_label"><label for="select" class=" form-control-label member_sex" >Sex</label></div>'+
                        	'<div class="col-12 col-md-9">'+
                            '<select class="form-control" placeholder="Enter your sex" name="member_sex_'+family_count+'" id="member_sex_'+family_count+'">'+
                                    '<option value="Male">Male</option>'+
                                    '<option value="Female">Female</option>'+
                            '</select>'+
                            '</div>'+
                        '</div>'+
                         '<div class="row form-group">'+
                          '<div class="col col-md-3 form_label"><label for="select" class=" form-control-label">Age</label></div>'+
                          '<div class="col-12 col-md-9">'+
                            '<input type="text" class="form-control member_age" id="member_age_'+family_count+'" name="member_age_'+family_count+'" placeholder="Enter age ">'+
                            '</div>'+
                        '</div>'+
                        '<div class="addicon">'+
            '<i class="fa fa-plus-circle fa-2 add_family_member" aria-hidden="true" + title="Add family member" style="cursor:pointer"></i></div>');
   


});


jQuery('body').on('click', '.submit_btn', function(e) {
    e.preventDefault();
    var action = jQuery(".getRegistrationSaveUrl").attr('data-url');
    var token = jQuery(".getRegistrationSaveUrl").attr('token');
    var name = jQuery('#name').val();
    var contact_number=jQuery('#contact_number').val();
    var nric_fin=jQuery('#nric_fin').val();
    var email=jQuery('#email').val();
    var age=jQuery('#age').val();
    var sex=jQuery('#sex').val();
    var marital_status=jQuery('#marital_status').val();
    var address_in_singapore=jQuery('#address_in_singapore').val();
    var address_in_india=jQuery('#address_in_india').val();
    var parish_in_india=jQuery('#parish_in_india').val();
    var diocese_in_india=jQuery('#diocese_in_india').val();
    var singapore_living=jQuery('#singapore_living').val();

    var memberArray = [];

    if(singapore_living == 1){
        var family_count = parseInt($(".family").attr("family-count"));
        for(var i=1;i<=family_count;i++){
          var member_name = jQuery('#member_name_'+i).val();
          var member_relation = jQuery('#member_relation_'+i).val();
          var member_sex = jQuery('#member_sex_'+i).val();
          var member_age = jQuery('#member_age_'+i).val();
          if(member_name !="" && member_relation!="" && member_sex !="" && member_age !=""){
            memberArray.push(member_name+"_"+member_relation+"_"+member_sex+"_"+member_age);
          }          
      }
    }
    console.log(memberArray);

    var is_validate = false;
    if(name != "" && contact_number != ""){
        is_validate =  true;        
    }
    if(is_validate == true){
       
       jQuery.ajax({
        type: 'POST',
        async: false,
        url: action,
        dataType: 'json',
        data: {
         "_token" : token,
         "data": {
             "name":name,
             "contact_number":contact_number,
             "nric_fin":nric_fin,
             "email":email,
             "age":age,
             "sex":sex,
             "marital_status":marital_status,
             "address_in_singapore":address_in_singapore,
             "address_in_india":address_in_india,
             "parish_in_india":parish_in_india,
             "diocese_in_india":diocese_in_india,
             "singapore_living":singapore_living,
             'family_member': memberArray
         }
       },
        
        success: function(response) {
           if(response.status == 200){
             clear();
             jQuery('.success_div').css('display','block');
           }
        }
  });

}
    
});

function clear(){
   jQuery('#name').val('');
   jQuery('#contact_number').val('');
   jQuery('#nric_fin').val('');
   jQuery('#email').val('');
   jQuery('#age').val('');
   jQuery('#sex').val('');
   jQuery('#marital_status').val('');
   jQuery('#address_in_singapore').val('');
   jQuery('#address_in_india').val('');
   jQuery('#parish_in_india').val('');
   jQuery('#diocese_in_india').val('');
   jQuery('#singapore_living').val('');
   jQuery('.family').html('');
}
