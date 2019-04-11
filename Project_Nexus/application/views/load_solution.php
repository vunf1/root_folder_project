<?php

?>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style>





.btn-sq-lg {
  width: 150px !important;
  height: 150px !important;
}

.btn-sq {
  width: 100px !important;
  height: 100px !important;
  font-size: 10px;
}

.btn-sq-sm {
  width: 50px !important;
  height: 50px !important;
  font-size: 10px;
}

.btn-sq-xs {
  width: 25px !important;
  height: 25px !important;
    
    
    
    
    
    
    
    
    
  padding:2px;
}
    #logo_sol{
        width: 100px;
        height: 80px;
    }

    </style>
    
    
    <script>
        
        
        $( document ).ready(function() {
            
            console.log("---------DDDD-----------");
            $.ajax({
              url:"https://vunf1.coventry.domains/root_folder_project/Project_Nexus/Solutioncontroller/get_solution_name",
              method:"POST",
              datatype:"json",
              success:function(data){
                console.log("---------DDDD-----------");
                console.log($.parseJSON(data));
                
                console.log("---------DDDD-----------");
                //load_dashboard(data);
              },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error);}.bind(this)
//$('#user_table').html(data);
              });
            
            
            
    });
    
    
    function load_dashboard(data){
    
    $.each ( data, function ( i, v ) { 
        $.each ( v, function ( key, val ) {
           
            true_val=val.split('_')[0].replace(/[^a-zA-Z 0-9]+/g,'');
          
        div="<div id='"+true_val+"' class='col-md-3 col-sm-4 col-xs-6' ><a  class='btn btn-mred btn-lg' role='button'><span  ><img id='logo_sol' src='http://10.1.1.102/assets/images/logo_"+true_val+".png'></span> <br/>"+true_val+"<br /></a></div><?php echo read_file(base_url().'log.txt');?>";
        //class='glyphicon glyphicon-home glyphsize'
      

                
        $(div).appendTo('#dashboard_row');
        $(document).on('click', '#'+true_val , function(){
            //$("#footer_").css("display":"none");
        $j=this.id;
        form=this;
            $.ajax({
              url:"<?php ?>load_solution",
              method:"POST",
              dataType:'text',
              data:{'Id':$j},
              success:function(data){
                //console.log(data);
                load_Solution();
              
              },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
            });
          });
    
    
    
          }); 
    
    
      });
    }
    
    
        
        
        
        
        
        
      
    
    function load_Solution(){
    
         $("#cont_v").html(' <div ><object type="text/html" data="/root_folder_project/Project_Nexus/HomeController/Index" style="width:100%; height:100%;"></object></div>');   
            
            
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','delay', 1);
        alertify.set('notifier','position', 'top-right');
        alertify.success('Loading Solution');
    
    
    }  
        
        
        
    
    
    
    
    
    </script>
  <!--<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" /></div>
        -->       
  <div class="container" id="cont_v">
	<div class="row" align="center">
            
        <div class="container">
            <div class="row" id="dashboard_row">
                 
            
            
            </div>
        </div>
        
        
	</div>
  </div>



