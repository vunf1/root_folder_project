<?php
?>
<style>
    #solution_name{
        
        width: 85%;
    }

#field {
    margin-bottom:20px;
} 
    
    #show_{
        display: none;
    }
       
                  #id_submit{
                                margin:10px 0 ;
                  }
                  
                  .hovers:hover #show_{
                      display:block;
                      
                      
                  }
                  
                
.content {
    padding: 30px 0;
}

/***
Pricing table
***/
.pricing {
  position: relative;
  margin-bottom: 15px;
  border: 3px solid #eee;
}

.pricing-active {
  border: 3px solid #36d7ac;
  margin-top: -10px;
  box-shadow: 7px 7px rgba(54, 215, 172, 0.2);
}

.pricing:hover {
  border: 3px solid #36d7ac;
}

.pricing:hover h4 {
  color: #36d7ac;
}

.pricing-head {
  text-align: center;
}

.pricing-head h3,
.pricing-head h4 {
  margin: 0;
  line-height: normal;
}

.pricing-head h3 span,
.pricing-head h4 span {
  display: block;
  margin-top: 5px;
  font-size: 14px;
  font-style: italic;
}

.pricing-head h3 {
  font-weight: 300;
  color: #fafafa;
  padding: 12px 0;
  font-size: 27px;
  background: #36d7ac;
  border-bottom: solid 1px #41b91c;
}

.pricing-head h4 {
  color: #bac39f;
  padding: 5px 0;
  font-size: 54px;
  font-weight: 300;
  background: #fbfef2;
  border-bottom: solid 1px #f5f9e7;
}

.pricing-head-active h4 {
  color: #36d7ac;
}

.pricing-head h4 i {
  top: -8px;
  font-size: 28px;
  font-style: normal;
  position: relative;
}

.pricing-head h4 span {
  top: -10px;
  font-size: 14px;
  font-style: normal;
  position: relative;
}

/*Pricing Content*/
.pricing-content li {
  color: #888;
  font-size: 12px;
  padding: 7px 15px;
  border-bottom: solid 1px #f5f9e7;
}

/*Pricing Footer*/
.pricing-footer {
  color: #777;
  font-size: 11px;
  line-height: 17px;
  text-align: center;
  padding: 0 20px 19px;
}

/*Priceing Active*/
.price-active,
.pricing:hover {
  z-index: 9;
}

.price-active h4 {
  color: #36d7ac;
}

.no-space-pricing .pricing:hover {
  transition: box-shadow 0.2s ease-in-out;
}

.no-space-pricing .price-active .pricing-head h4,
.no-space-pricing .pricing:hover .pricing-head h4 {
  color: #36d7ac;
  padding: 15px 0;
  font-size: 80px;
  transition: color 0.5s ease-in-out;
}

.yellow-crusta.btn {
  color: #FFFFFF;
  background-color: #f3c200;
}
.yellow-crusta.btn:hover,
.yellow-crusta.btn:focus,
.yellow-crusta.btn:active,
.yellow-crusta.btn.active {
    color: #FFFFFF;
    background-color: #cfa500;
}  
    #so_lo{
        width: 30px;
        height: 30px;
    }
                  
                  
                  
</style>
    
<script>
         $(document).on('click','#bt_submit',function(){
           
                $sol=$('#solution_name').val();
                console.log($sol);
               $.ajax({
                    url:"<?php base_url('')?>create_tb",
                        method:"POST",
                        data:{'Id':$sol},
                        success:function(data)
                                                {
                                                    if(data=='1'){
                                                        
                                            alertify.set('notifier','delay', 1);
                                            alertify.success('Solution Created Successfuly');
                                            
                                                $(this).delay(1500).queue(function() {

                                                location.reload();
                                                  });

        }else{
                                            alertify.set('notifier','delay', 1);
                                            alertify.error('Solution ERROR : Invalid Character');}
        }
                                                    
                                                 
        //$('#user_table').html(data);
                });
                
        });
        

 $(document).on('click','#bt_submit_rename',function(){
           
                $sol=$('#old_solution_name').val();
                $nsol=$('#new_solution_name').val();
                alertify.confirm('Rename :'+$sol+'  ?','Are you sure?', function(){
        
        
         
               $.ajax({
                    url:"<?php base_url('')?>solution_rename",
                        method:"POST",
                        data:{'Id':$sol,'nId':$nsol},
                        success:function(data)
                                                {
                                                    if(data==='1'){

                                            alertify.set('notifier','delay', 1);
                                            alertify.success('Solution Renamed Successfuly');
                                            
                                                $(this).delay(1500).queue(function() {

                                                location.reload();
                                                  });

                                            }else{alertify.set('notifier','delay', 2);
                                     alertify.error('Solution Renamed Error : Invalid Table Name');;}
                                            }
                                                    
                                                 
        //$('#user_table').html(data);
                });},function(){ 
 alertify.set('notifier','delay', 1); alertify.error('Cancel')}); 
     
                
        });
        

 function del_solu($sol){
          
                alertify.confirm('Delete : '+$sol+'  ?','Beware ! <br> Delete this solution cant be undone ,Are you sure?', function(){
        console.log($sol);
               $.ajax({
                    url:"<?php base_url('')?>solution_delete",
                        method:"POST",
                        data:{'Id':$sol},
                        success:function(data)
                                                {
                                                   if(data==='1'){
                                                       
                                            alertify.set('notifier','delay', 1);
                                            alertify.success('Solution was Deleted Successfuly');
                                                $(this).delay(1500).queue(function() {

                                                location.reload();
                                                  });
                                                    
        }else{
                                            alertify.set('notifier','delay', 1);
                                            alertify.error('Solution ERROR : Invalid Table Name');}
                                            location.reload();
        }
        });},function(){ 
 alertify.set('notifier','delay', 1); alertify.error('Cancel')}); };
     
             
    </script>
    
    
    

    
    <table  align='center'>
    <thead></thead>
    <tbody >
        
        <tr>
            <td class='hovers'><?php //Create Solution  ?>


            	<div >
			<div class="pricing hover-effect">
				<div class="pricing-head" >
					<h3>Create <span>
					Solution </span>
                                </div>
                            <div id='show_' align="center">
				<ul class="pricing-content list-unstyled">
					<li><input class="form-control" type="text" placeholder="Solution Name" id="solution_name"></input></li>
				</ul>
				<div class="pricing-footer">
					<p></p>
					<a id="bt_submit" class="btn yellow-crusta">Create</a>
				</div>
                                </div>
			</div>
		</div>
            
            
            
            </td></tr><tr>
              
        
    <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-hover text-center">
    <thead align="center">
        
        <tr  >
            
            <th class="text-center" ></th>
            <th class="text-center" >Solution Name</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead >
    <tbody id="solution_table" class="text-center">
       
    </tbody>
    </table>
    </div>
</div>     
        </tr>


    </tbody>
    
    
    
    
</table>

    <style>
        .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    
   
    </style>
    
    
    <script>
        
        $( document ).ready(function() {
           $.ajax({
              url:"https://vunf1.coventry.domains/root_folder_project/Project_Nexus/Solutioncontroller/get_solution_name",
              method:"POST",
              dataType:'json',
              success:function(data){
                console.log(data);
                console.log("--***---");
                
                load_dashboard_solution(data);
              },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
  //$('#user_table').html(data);
                });
            
            
            
});
    
        
        
        
       
    
      
function load_dashboard_solution(data){
    
  console.log("DATA: "+data);
  console.log("-------------------------");
    $.each ( data, function ( i, v ) { 
        $.each ( v, function ( key, val ) {
          console.log(val);
          true_val=val.split('_')[0].replace(/[^a-zA-Z 0-9]+/g,'');
          console.log(true_val);
          
          rename_tr="<tr><td><img id=so_lo src='<?php ?>assets/images/logo_"+true_val+".png'></td><td>"+true_val+"</td><td class='text-center'><a class='btn btn-info btn-xs' id='edit_"+true_val+"' data-title='"+true_val+"' data-toggle='modal' data-target='.bd-example-modal-sm' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a id='del_"+true_val+"' data-title='"+true_val+"' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove' ></span> Del</a></td></tr>"
          
        
          $(rename_tr).appendTo('#solution_table');
          $(document).on('click', '#edit_'+true_val , function(){
            
            $('#rename_').html('');
            
            $true=$(this).data('title');
              
            div="<li><input class='form-control' type='text' placeholder='Actual Solution Name' value='"+$true+"' id='old_solution_name'></input></li><li><input class='form-control' type='text' placeholder='New Solution Name'  id='new_solution_name'></input></li>";
          
            $(div).appendTo('#rename_');
              
              
          });
              
              
          $(document).on('click', '#del_'+true_val , function(){
              
          $true=$(this).data('title');
          del_solu($true);
          });
      });
    });

  }
  </script>
        
        
        
    <!--RENAME -->
	<div id="myModal" class="modal fade in bd-example-modal-sm">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    
                 <div >
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3>Rename <span>
					Solution </span>
				</div>
                            <div >
				<ul class="pricing-content list-unstyled">
                                    <li><label>With out "_serial" or "_requests"</label></li>
                                    <div id="rename_">                      
                                    </div></ul>
				<div class="pricing-footer">
					<p></p>
					<a id="bt_submit_rename" class="btn yellow-crusta">Submit</a>
                                </div>
                            
                            </div>
			</div>
		</div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->
    
        
        
        
        
        
        



    
    
    
    
    
    

    
    