   
  $(document).on('click', '#bt_save_user', function(){
      
    var $new_id=$("#new_id").val();
     var $new_password=$("#new_password").val();
     var $new_name=$("#new_name").val();
     var $new_email=$("#new_email").val();
     var $new_status=$("#new_status").val();
     var $new_log=$("#new_log").val();
     var isValid=true;
     var $item = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find(".row")     // Gets a descendent with class="nr"
                       .text();
    console.log($new_status);
    $.ajax({
         url: "homecontroller/muser_save",
         type:'post',
         datatype:'json',
         data:{
             'id':new_id,
             'password':new_password,
             'name':new_name,
             'email':new_email,
             'status':new_status,
             'log':new_log
         },
            success: function(data){
                return alert('CODE 200 OK SUCCESS !')
                
                
                
                //edit(new_Id,new_serial,new_hwfingerprint,new_expirationdate,new_period,new_lictype,new_status,new_description);
     //console.log(data);
                
            }
     })



});
