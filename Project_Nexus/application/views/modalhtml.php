<head>
     
 <script type="text/javascript" src="<?php ?>assets/js/bootstrap-select.js"></script>
 
 
</head>
<style>
    #div-create:hover{
    border:1px solid black;
}

</style>

<script>
    
    
    
    
</script>

<!--
  <?php foreach($datas as $row){ 
     ?> 


            <!-- Name input-->
            <div class="form-group">
                    
              <label class="col-md-3 control-label" for="email">Serial</label><br>
              <div class="col-md-9">
                <input id='new_serial' name="name" value="<?php echo $row->serial; ?>" type="text" placeholder="Serial" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Hwfingerprint</label><br>
              <div class="col-md-9">
                <input id='new_hwfingerprint' type="text" value="<?php echo $row->hwfingerprint; ?>" placeholder="HWfingerprint" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Expiration Date</label><br>
              <div class="col-md-9">
                <input class="form-control" id="new_expirationdate"  value="<?php echo $row->expirationdate; ?>" placeholder="Expiration date" >
              </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="message">Period</label><br>
                <div class="col-md-9">
                <input class="form-control" id="new_period"  value="<?php echo $row->period; ?>" placeholder="Period" >
             
            </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Lictype</label><br>
              <div class="col-md-9">
              <select  id="lictype_<?php echo $row->Id; ?>" name="lictype_<?php echo $row->Id; ?>" class="form-control">
                  <option value="<?php echo $row->lictype; ?>" selected hidden><?php echo $row->lictype; ?></option>
          <optgroup label="Options" ></optgroup>
          <option   value='NORMAL' >NORMAL</option>
          <option   value='RENTING' >RENTING</option>
          <option value='DEMO'  >DEMO</option>
          <option  value='FULL'  >FULL</option>
        </select>
              </div>
            </div>
    
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Status</label><br>
                    <div class="col-md-9">
              <select value="<?php echo $row->status; ?>"  id="status_<?php echo $row->Id; ?>" name="status_<?php echo $row->Id; ?>" class="form-control">
          <option title='Actual' selected hidden><?php echo $row->status; ?></option>
          <optgroup label="Options" ></optgroup>
          <option title='NORMAL'  value='0' >NORMAL - 0</option>
          <option title='ACTIVE'  value='1' >ACTIVE - 1</option>
          <option title='REVOKED' value='2'  >REVOKED - 2</option>
          <option title='REMOVED' value='3'  >REMOVED - 3</option>
        </select>
            </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description</label><br>
              <div class="col-md-9">
                <input class="form-control" id="new_description"  value="<?php echo $row->description; ?>" placeholder="Description" >
              </div>
            </div>
             <!-- Form actions -->
            <div class="form-group" >
              <div class="col-md-12 text-center">
                  <button type='submit' class="btn btn-primary btn-sm" data-dismiss='modal'  id='save' >Save</button>
<button type='button' class="btn btn-primary btn-sm" data-dismiss='modal'  onclick="reload();">Close</button>
<button id='btdelete' data-title='<?php echo $row->Id; ?>' type='button' class="btn btn-primary btn-sm" data-dismiss='modal' >Delete</button><br>

                
  
              </div>
            </div>
        </div>
      </div>
	</div>
    
</div>
<script>
    $(document).on('change','#status_<?php echo $row->Id; ?>', function() {

           $user=<?php echo $row->Id; ?>;
           $select=$('select[name=status_<?php echo $row->Id; ?>]').val();
           $sol='<?php echo $this->session->userdata('solution');?>';
           
           selected($user,$select,$sol);
       })       
           
   
         function selected($id,$select,$sol){
             
            
     
    alertify.confirm('Serial Id :<?php $row->Id; ?> Change Status ?','That will change the serial status . Are you sure?', function(){
        
        
        
    
$.ajax({
         url: "<?php echo base_url('')?>index.php/Solutioncontroller/serial_status_update",
         type:'post',
         datatype:'json',
         data:{
             'id':$id,'select':$select,'sol':$sol},
            success: function(data){
                
                
                 var delay = alertify.get('notifier','delay');
                alertify.set('notifier','position', 'top-right');
            alertify.set('notifier','delay', 1);
            alertify.success('STATUS SUCCESSFULLY CHANGED');        
            
        
            }
     });
         }, function(){ 
 alertify.set('notifier','delay', 1);
     alertify.set('notifier','position', 'top-right'); alertify.error('Cancel')});
             
             
             
             
             
         }
         
         
         
    $(document).on('change','#lictype_<?php echo $row->Id; ?>', function() {

           $user=<?php echo $row->Id; ?>;
           $select=$('select[name=lictype_<?php echo $row->Id; ?>]').val();
           $sol='<?php echo $this->session->userdata('solution');?>';
           
           selected_lic($user,$select,$sol);
       })       
           
   
         function selected_lic($id,$select,$sol){
             
            
     
    alertify.confirm('Serial Id :<?php echo $row->Id; ?> Change Lictype ?','That will change the serial license status . Are you sure?', function(){
        
$.ajax({
         url: "<?php echo base_url('')?>index.php/Solutioncontroller/serial_lictype_update",
         type:'post',
         datatype:'json',
         data:{
             'id':$id,'select':$select,'sol':$sol},
            success: function(data){
                
                
                 var delay = alertify.get('notifier','delay');
                alertify.set('notifier','position', 'top-right');
            alertify.set('notifier','delay', 1);
            alertify.success('LICENSE SUCCESSFULLY CHANGED');        
            
        
            }
     });
         }
                , function(){ 
 alertify.set('notifier','delay', 1);
     alertify.set('notifier','position', 'top-right'); alertify.error('Cancel')});
             
             
             
             
             
         }
         
         </script>

      <?php }; ?> 
<script>
    
    
        
                 
    $(document).ready(function () {
        
    });
        
        
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
$(document).on('click', '#save', function(){
     
     var new_Id=$("#btdelete").attr('data-title');
     
     
     var new_serial=$("#new_serial").val();
     var new_hwfingerprint=$("#new_hwfingerprint").val();
     var new_expirationdate=$("#new_expirationdate").val();
     var new_period=$("#new_period").val();
     
     var new_description=$("#new_description").val();
     
     
    
    $.ajax({
         url: "<?php base_url()?>indexedit",
         type:'post',
         data:{
        'Id':new_Id,
        'serial':new_serial,
        'hwfingerprint':new_hwfingerprint,
        'expirationdate':new_expirationdate,
        'period':new_period,
        
        'description':new_description
       },
            success: function(data){
                
 alertify.set('notifier','position', 'top-right');
 alertify.set('notifier','delay', 1);
 alertify.success('SUCCESSFULLY SAVED');

                   reload();
                     
                
            }
     });        
     });

</script>