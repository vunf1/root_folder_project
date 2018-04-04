
<style>
    
    .round.hollow.blue {
    color: #3EA6CE;   
    background-color: #FFF;    
    -webkit-box-shadow: 0px 0px 0px 3px #3EA6CE;
    -moz-box-shadow: 0px 0px 0px 3px #3EA6CE;
    box-shadow: 0px 0px 0px 3px #3EA6CE;
}
    
    
.btn3d {
    position:relative;
    border:0;
     transition: all 40ms linear;
     margin-top:0px;
     margin-bottom:0px;
     margin-left:2px;
     margin-right:2px;
}
.btn3d:active:focus,
.btn3d:focus:hover,
.btn3d:focus {
    -moz-outline-style:none;
         outline:medium none;
}
.btn3d:active, .btn3d.active {
    top:2px;

}

.btn3d.btn-info:active, .btn3d.btn-info.active {
    box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #39B3D7;
}

.btn3d.btn-danger:active, .btn3d.btn-danger.active {
    box-shadow:0 0 0 1px #b93802 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
    background-color: #D73814;
}
    
    
    
    
    .table-bordered{
        
    table-layout:fixed;
    width:100%;
    }
    #news_id{
        width:100%;
    }
    #new_password{
        width:100%;
    }
    #new_name{
        width:100%;
    }
    
    #new_email{
        width:100%;
    }
    #news_status{
        width:100%;
    }
    #new_log{
        width:100%;
    }
    .modaldd {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 50%; /* Full width */
    height: 80%; /* Full height */
     /*overflow: auto; Enable scroll if needed */
     
     
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
     height: auto; 
}
input{
    border: 0;
}
input{
    text-align: center;
}
.modal-header{
 align-content: center;
 
}
#div-create:hover{
    border:1px solid black;
}
body {
	font-family: Arial, Helvetica, sans-serif;
}

table {
    align-content: center;
	font-size: 1em;
}

.ui-draggable, .ui-droppable {
	background-position: top;
}
th,tr{
    alignment-adjust:center;
}
    </style>
     
    
    
    
    
    
    

<div align="center" id="dtable">

            <table class="table-hover" id="dtable">
                <thead  ><th colspan="2"> </th><th>Id</th><th>Email</th><th>Name</th><th>Status</th><th>Log</th><th colspan="2">Actions</th></thead>
         <tbody>
         <label> <?php echo "Number Accounts : ".$cc=count(json_decode($lotsofdata)); ?> </label>
             
             
             <style>
                 #ac_id{
                     display: none;
                 }
                    </style>
             
             
         <?php
             
            $d=json_decode($lotsofdata);
            
               
            foreach($d as $key){ 
             
 
                 ?> <tr  id="id_<?php $key->id ?>"> 
                     <?php 
                 echo '<div class="form-group">';
                 ?><?php echo form_open('/Solutioncontroller/muser_save');
                 echo "  <td rowspan='1'>   ".form_button(array('id' => 'bt_delete_user','data-title'=>$key->id,'class'=>'btn3d glyphicon glyphicon-trash round.hollow.blue' ))."</td>";
                
                
       echo "<td>".form_input(array('id' => 'ac_id','size'=>'50%', 'name' => 'ac_id' ,'placeholder'=>'Actual iD', 'class'=>'form-control', 'value'=>$key->id))."</td>";
                
                
                
                
                 echo "<td>".form_input(array('id' => 'news_id','size'=>'50%', 'name' => 'news_id' ,'placeholder'=>'Edit iD', 'class'=>'form-control', 'value'=>$key->id))."</td>";
                
     echo "<td>".form_input(array('id' => 'news_email','size'=>'50%', 'name' => 'news_email' ,'placeholder'=>'email', 'class'=>'form-control', 'value'=>$key->email))."</td>";
    echo "<td>".form_input(array('id' => 'news_name','size'=>'50%', 'name' => 'news_name' ,'placeholder'=>'name', 'class'=>'form-control', 'value'=>$key->name))."</td>";
     echo "<td> 
        <select name='news_status".$key->id."' id='news_status".$key->id."' class='selectpicker show-tick form-control' required>
          <option data-subtext='Actual'selected>".$key->status."</option>
          <option data-subtext='New User'  value='0' >0</option>
          <option data-subtext='Admin User'  value='1' >1</option>
          <option data-subtext='Normal User' value='2'  >2</option>
        </select>









</td>";
    echo "<td>".form_input(array('id' => 'news_log','title'=>'User LogIn : 1 - Online  0 - Offline','size'=>'50%' ,'name' => 'news_log','placeholder'=>'log', 'class'=>'form-control', 'value'=>$key->log , 'disabled'=>'TRUE'))."</td>";
      
    echo "  <td rowspan='1'>   ".form_submit(array('id' => 'bt_save_user_'.$key->id,'value' => 'Save','data-title'=>$key->id,'class'=>'btn btn-xs btn-primary' ))./*form_button(array('id' => 'bt_save_user_pw'.$key->id,'data-title'=>$key->id ,'content' => 'Change PW','class'=>'btn btn-xs btn-primary' )).*/"</td>";       
    echo form_close();     
//var_dump($key);
        
   
  
 ?>    
             </tr>
    
        
        <script>
       
            
                 
    $(document).ready(function () {
        
        
        
         $(document).on('change','#news_status<?php echo $key->id; ?>',function(){
             
           $user=<?php echo $key->id; ?>;
           $select=$('select[name=news_status<?php echo $key->id; ?>]').val();
           selected($user,$select);
       })       
             
         })
   
         function selected($id,$select){
          
    alertify.confirm('User <?php $key->id; ?> Change Status ?','That will change the User permision . Are you sure?', function(){
        
        
        
    
$.ajax({
         url: "<?php echo base_url('')?>Solutioncontroller/muser_status_update",
         type:'post',
         datatype:'json',
         data:{
             'id':$id,'select':$select},
            success: function(data){
                
                
                 var delay = alertify.get('notifier','delay');
                alertify.set('notifier','position', 'top-right');
            alertify.set('notifier','delay', 1);
            alertify.success('STATUS SUCCESSFULLY CHANGE');        
            
        
            }
     });
         }
                , function(){ 
 alertify.set('notifier','delay', 1);
     alertify.set('notifier','position', 'top-right'); alertify.error('Cancel')});
             
             
             
             
             
         }     
            
            
        //COMPLETE MODAL
        $(document).on('click', '#bt_save_user_pw<?php echo $key->id; ?>', function(){
    $id=<?php echo $key->id ;?>;
    
    
var modal = document.getElementById('modal_password');
modal.style.display="block";
   $('#title_m').append(<?php echo $key->id ;?>);
    
    
    
     });
        
        
        
        
     </script>   
    
             
             
             
            <?php    }   ?>   
      

         </tbody>
         
    </table>
        <br>
        <h6><button class="btn btn-block btn-xs " ID="bt_create_user"><span class=" glyphicon glyphicon-hand-up"></span>    Create User</button></h6>
        
        <br> 
                
<?php //CREATE USER ?>
    </div>
    <div id="modal_create_user" class="modaldd">
            <div class="modal-content ">
            <div class="modal-header">
                    <span class="close" id="close">&times;</span>
                <h4>Create New User</h4>
            </div>
                <div align="center">
                <?php         form_open('create_user'); ?>
                <div id="div-create">
                    <input id="c_id"  placeholder="Username" ><br>
                </div>
                <div id="div-create"><input id="c_password" type="password" placeholder="Password"></input> <input type="radio" checked="false" id="off_pass"  /> <br>
                
                    
                </div>
                <div id="div-create">
                    
                <input id="c_email" placeholder="Email"><br>
                </div>
                <div id="div-create">
                    
                </div>
                <div id="div-create">
                    
                <input id="c_name" placeholder="Name"><br>
                </div>
                <div id="div-create">
                    
                <p>Status</p><input id="c_status" value="0"><br>
                </div>
                <div id="div-create">
                <p>Log</p><input id="c_log" align="center" value="0"><br>
                </div>
                <button class="btn-primary" id="bt_create">Create</button>
                <?php form_close(); ?>
                <button id="bt_clear">Clear</button>
                </div>
            </div>
            </div>
    
    
    
    
    
    
    
    
    
    <script>
  
        
        
        
        
        
$(document).on('click', '#bt_delete_user', function(){
    
         $id=$(this).data('title');
    
    alertify.confirm('User '+$id+' Delete ?','User will be permanently deleted and cannot be recovered. Are you sure?', function(){
        
        
        
     var delay = alertify.get('notifier','delay');
     alertify.set('notifier','position', 'top-right');
 alertify.set('notifier','delay', 1);
 alertify.success('ACC DELETED SUCCESSFULLY');
$.ajax({
         url: "<?php echo base_url('')?>index.php/Solutioncontroller/muser_delete",
         type:'post',
         datatype:'json',
         data:{
             'id':$id
         },
            success: function(data){
                
                location.reload();
            }
     });
         }
                , function(){ 
 alertify.set('notifier','delay', 1);
     alertify.set('notifier','position', 'top-right'); alertify.error('Cancel')});
    });
        
        
        
        
        
        
        
        
        
     
    
    var span=document.getElementById('close');
    var passvisible=document.getElementById('off_pass');
    
var modal = document.getElementById('modal_create_user');
var btn = document.getElementById("bt_create_user");

$(document).on('click', '#off_pass', function(){
    $('#c_password').removeAttr('type');
});
    btn.onclick = function() {
    modal.style.display = "block";
};
    span.onclick = function() {
    modal.style.display = "none";
};
    
    var clear= document.getElementById('bt_clear');
    clear.onclick=function() {
        
        clears();
    };
    function clears()
{
       $("#c_id").val("");
       $("#c_password").val("").attr('type','password');
       $("#c_email").val("");
       $("#c_name").val("");
       $("#c_status").val("").val("0");
       $("#c_log").val("").val("0");
}


$(document).on('click', '#bt_create', function(){
    var $c_id=$("#c_id").val();
     var $c_password=$("#c_password").val();
     var $c_email=$("#c_email").val();     
     var $c_name=$("#c_name").val();
     var $c_status=$("#c_status").val();
     var $c_log=$("#c_log").val();
     
     create_user($c_id,$c_password,$c_email,$c_name,$c_status,$c_log);
    
});
    
function create_user(id,pass,email,name,status,log){
    $c_id=id;
    $c_password=pass;   
    $c_name=name;
    $c_email=email;
    $c_status=status;
    $c_log=log;
    
$.ajax({
         url: "<?php echo base_url('index.php')?>/Solutioncontroller/muser_create",
         type:'post',
         datatype:'json',
         data:{
             'id':$c_id,
             'password':$c_password,
             'email':$c_email,
             'name':$c_name,
             'status':$c_status,
             'log':$c_log
         },
            success: function(data){
                
                           
     var delay = alertify.get('notifier','delay');
 alertify.set('notifier','delay', 2);
 alertify.success('ACC CREATED SUCCESSFULLY');
 alertify.set('notifier','delay', delay);
                location.reload();
                
            }
     });
    
    
    
}

 
 //OFFLINE
function reload(id,pass,name,email,status,log){
$new_id=id;
$new_password=pass;   
$new_name=name;
$new_email=email;
 $new_status=status;
 $new_log=log;
$.ajax({
         url: "<?php echo base_url('')?>Solutioncontroller/muser_save",
         type:'post',
         datatype:'json',
         data:{
             'id':$new_id,
             'password':$new_password,
             'name':$new_name,
             'email':$new_email,
             'status':$new_status,
             'log':$new_log
         },
            success: function(data){
              alert('Data SAVED SUCCESSFULLY');
                
                
            }
     });


}
   
    
    function m_save_pw(){
    




    var new_Id=<?php echo $key->id?>;
    
     var new_pw=$("#news_password<?php echo $key->id?>").val();
     alertify.confirm('User '+new_Id+' PW Change ?','Remember , if password field dont has been changed previous the algorit will encrypt the encrypted password . Are you sure you want continue?', function(){
     
     var delay = alertify.get('notifier','delay');
     alertify.set('notifier','position', 'top-right');
 alertify.set('notifier','delay', 1);
 alertify.success('ACC Password SUCCESSFULLY Saved');
    $.ajax({
         url: "<?php base_url()?>Solutioncontroller/save_pw_user",
         type:'post',
         data:{
        'Id':new_Id,
        'password':new_pw
       },
            success: function(data){
                    //reload();


                  location.reload();
                     
                
            }
     }); 
         }
                , function(){ 
 alertify.set('notifier','delay', 1);
     alertify.set('notifier','position', 'top-right'); alertify.error('Cancel')}); 
     
    }
    
    $(document).on('click', '.close', function(){
    
    $('#modal_password').hide();
    
    
    });
    
    </script>


<div id="modal_password" class="modaldd">
            <div class="modal-content ">
                
            <div class="modal-header" align='center'><span class="close" id="close">&times;</span>
                    
                <label>  New Password </label>
                <label>for User <label id="title_m" ></label> </label>
            </div>
                <div id="u_pw_dash" align="center">
                <div >
                    <br>
                    <input id="n_pw" class="form_control"  placeholder="New Password" ><br><br>
                    <button class="btn-primary" id="bt_pw">Change</button>
                </div>
                    
                </div>
            </div>
            </div>
    <script>
        
         
        
        $(document).on('click','#close', function () {
           
           
        $('#title_m').html('');
           
        });
    
     
         
        
        $(document).on('click','#bt_pw', function () {
    
        $id=$(document).find('#title_m').text().trim();
        $n_pw=$(document).find('#n_pw').val();
        
        
    $.ajax({
                    url:"<?php base_url('index.php/Solutioncontroller')?>save_pw_user",
                        method:"POST",
                        dataType:'text',
                        data:{id: $id,n_pw:$n_pw},
                        success:function(data)
                                                {
                                                    if(data.localeCompare('1')=='0'){
                                               
     alertify.set('notifier','position', 'top-right');
 alertify.set('notifier','delay', 1);
 alertify.success('Password Changed');     
        $('#modal_password').hide();
        }
 
      /*       
         */
                                                    
                                                    
                                                 },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); },
        //$('#user_table').html(data);
                });
    
        
});
        </script>
