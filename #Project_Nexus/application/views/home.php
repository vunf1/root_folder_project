<!DOCTYPE html>
<html >
    <head>
  <title>Home</title>
 
 
       
        <style>
 ::-webkit-scrollbar { 
    display: none; 
}
            body{
                background-color: #ffffff;
            }
            .html{
                width: 100%;
                height: 100%;
            }
#topbar {
    
    
    top: 20;
    width: 100%;
  background: #ffffff;
  padding: 10px 0 10px 0;
  text-align: center;
  
  position: fixed;
  
}
#label_topbar{
    color: black;
}
#tablecont{
    width: available;
}
tr:hover td {background:#696969} ;

.input{
    width: 10%;
}
#search{
    width: 15%;
}
table,#head_row{
width: 100%;
align-content:stretch;
}
table.table.hover {
    table-layout: fixed;
    width: 100%;
}
td{
    word-wrap:break-word
}
#page-content-wrapper{
    margin-top: 20;
}
  </style>
	<!-- datatables css -->
  
    </head>
    
    <body id="body_smash" bgcolor="#fff">
        
        
        <style>
            #sol_logo{
            width: 40px;
            height: 40px;
            }
        </style>
<div id="topbar" class="">
    <IMG id="sol_logo" src="<?php echo base_url() ?>assets/images/logo_<?php echo $this->session->userdata('solution');?>.png" alt="Logotipo">
        
    <button class="text-primary btn-primary img-rounded btn-md" id="serial" >Serials</button>
    
    <button class="text-primary btn-primary img-rounded btn-md" id="requests" >Requests</button>
    
    <button class="text-primary btn-primary img-rounded btn-md" id="bt_create_serial">Create New Serial</button>    
    
    <input id="search" placeholder="live search" type="text" >
  <label id="label_topbar">Actual Solution Load : <?php echo $this->session->userdata('solution');?></label>
         

</div>
              
<div id="aaa" align="center" class="container" >
    <br>
    <br>
    <br>
    <br>
    <br>
    

</div>






<div >
    

  <!-- Modal settings serials -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" align="center">
        <div class="modal-header">
            <p>ID</p><p id="TITLE" class="modal-title" visible="false">Medsky Solution <?php echo $this->session->userdata('solution');?></p>
          <p>Solution <?php echo $this->session->userdata('solution');?></p>
        </div>
        <div class="modal-body" id="modal-body">
       
        
        </div>
        </form>
      </div>
      
    </div>
  </div>
  
</div> <!-- MODAL SETTINGS-->

<div >
<!-- Modal settings -------- -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" align="center">
        <div class="modal-header">
            <p>ID:</p><h4 id="TITLE" class="modal-title" visible="false">Medsky Solution <?php echo $this->session->userdata('solution');?></h4>
          <p>Solution <?php echo $this->session->userdata('solution');?></p>
        </div>
        <div class="modal-body" id="modal-body">
            
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
          
          
          
        </div>
      </div>
      
    </div>
  </div>
  
</div> <!-- MODAL SETTINGS-->










<div >
<!-- Modal settings -------- -->
  <div class="modal fade" id="myModalReq" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" align="center">
        <div class="modal-body" id="modal-bodyReq">
            <p>ID:</p><h4 id="TITLE" class="modal-title" visible="false"></h4>
          <p>Solution <?php echo $this->session->userdata('solution');?></p>
        </div>
            
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
          
          
          
        </div>
        
      </div>
      
    </div>
  </div>
  
</div> <!-- MODAL SETTINGS-->






  

     
  
<?php
 
 
 
 
 
 
 
 
 
 
 
 
 
 /*
              <th>Id</th>
     
                <th>Serial</th>
         <th>HW fingerprint</th>
         <th>Expiration Date</th>
                <th>Period</th>
                <th>Lictype</th>
                <th>Status</th>
                <th>Description</th>
  */
 
 
 ?>
                
                 
     

   
<div id="TableSearch" class="container-fluid" >
    

</div>
<div id="TableCont" class="container-fluid" align="center">
    

</div>




<!--
    
         -->   
 
  <script>
      
           $(document).ready(function(){
               
               if('<?php echo $this->session->userdata('status') ?>' == 'Normal'){
                   
                   $('#bt_manageusers').hide();
               }
               
           });
           
           
           
           
        
   $('#search').keyup(function(){
       //For Serial Only Search will move to serial table 
  $query = $('#search').val();
  console.log($query);
  
   if($query != '')
   {
       
    $.ajax({
     url:"<?php base_url('')?>indexsearch",
     method:"POST",
     dataType:'json',
     data:{'Id':$query},
     success:function(data)
     {
      //$("#user_table").
      $('#TableCont').html("");
      tablebuild($.parseJSON(data));
      //tablebuild($.parseJSON(data))
      //console.log($.parseJSON(data));
      
          },
     error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
     
        
        //$('#user_table').html(data);
     });
     }else{
$("#TableCont").css("visibility","visible")};
//$("#TableSearch").css("visibility","hidden")}
     });    
     
     
     
       
        $(document).on('click', '#bt_create_serial', function(){ 
        
    $.ajax({
                    url:"<?php base_url('')?>create_newserial",
                        method:"POST",
                        dataType:'json',
                        data:'',
                        success:function(data)
                                                {
                                                    if(data==true){
                                                        
                                                    location.reload();
                                                    
        }
                                                    
                                                 }
        //$('#user_table').html(data);
                });
                });
        
        
        
        
        
        
        
        
        
        
        
        
        $(document).on('click', '#serial', function(){ 
        
    $.ajax({
                    url:"<?php base_url('')?>indexx",
                        method:"POST",
                        dataType:'json',
                        data:'',
                        success:function(data)
                                                {
                                                    $("#TableCont").html('');
                                                    tablebuild($.parseJSON(data));
                                                    
                                                    
                                                 },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); },
        //$('#user_table').html(data);
                });
    
    
    }) 
        
        
        
        
        
        
        
        
        $(document).on('click', '#requests', function(){ 
        
    $.ajax({
                    url:"<?php base_url('')?>indexrequests",
                        method:"POST",
                        dataType:'json',
                        data:'',
                        success:function(data)
                                                {
                                                    $("#TableCont").html('');
                                                    tablebuildreq($.parseJSON(data));
                                                    
                                                 },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); },
        //$('#user_table').html(data);
                });
    
    
    }) 
        
function tablebuildreq (mydata) {

var table = $('<table  id:"user_table" align="center" ></table>').addClass( "table hover" )
        head=("<thead  ><tr ><th>URL</th><th>serial</th><th>HW fingerprint</th><th>Total CDs Burn</th><th>Date</th><th>Type</th></tr></thead>");

        $(head).appendTo(table);
    $.each(mydata,function(k, v) {
        
        
        //console.log(v['Id']);
        //onclick=\"showModal('"+v['Id']+"')\"
        
      
      
        
        
          // tablehead +="<th><a id='head'> "+$dataa+ " : </a></th>"
        
        
        TableRow = (" <tbody><tr id='"+v['Id']+"' name='"+v['Id']+"'  data-toggle='modal' data-target='#myModalReq' ><div class='row'>");
       TableRow += "<td class='w-100' >" + v['URL']  + "</td>        <td class='w-100' >" + v['serial']  + "</td>        <td class='w-100' >" + v['hwfingerprint']  + "</td>      <td class='w-100' >" + v['totalcdsburned']  + "</td>      <td class='w-100' >" + v['date']  + "</td>      <td class='w-100' >" + v['type']  + "</td>";
        //<tr id='255' onclick='form("255")'>
   
        
             TableRow += "</div></tr></tbody>";
        $(TableRow).appendTo(table);
        //console.log(TableRow);
        });
    return ($(table).appendTo("#TableCont"));

    };
        
//}); OFF LINE
       $(document).on('click', '#bt_revoke', function(){  
        
        var remove=$("#search").val();
        console.log(remove);
        $.ajax({
                    url:"<?php base_url('')?>indexrevoke",
                        method:"POST",
                        dataType:'json',
                        data:{'Id':remove},
                        success:function(data)
                                                {
                                                    location.reload();
                                                 },
     error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
        //$('#user_table').html(data);
                });
        })  
          
         
           
    var Gid=null; 

            
            
    
    $('#myModal').on('show.bs.modal', function (event) {
    
    
    
    
  var span = $(event.relatedTarget); // Span that triggered the modal
  var myHelpId = span.attr('id'); 
  
        $(this).find("#TITLE").text( myHelpId );
        RowfetchID(myHelpId);
        
        
        
        
   
        
        
});
    $('#myModalReq').on('show.bs.modal', function (event) {
    
    
    
    
  var span = $(event.relatedTarget); // Span that triggered the modal
  var myHelpId = span.attr('id'); 
  
        $(this).find("#TITLE").text( myHelpId );
        RowfetchIDReq(myHelpId);
   
        
        
});
   
   
   
   
   function reload(){
   
   $.ajax({
            url: '<?php base_url('')?>indexx',
            type:'POST',
            dataType: 'json',
            data: {Id: Gid},
            success: function(data){
                
               // console.log(JSON.parse(data).length); //NUMBER OF ROWS 
           //console.log($.parseJSON(data));
            $('#TableCont').html("");
           tablebuild($.parseJSON(data));
          //console.log(k+" : "+ v);
          //tablebuild(data);

}});

}

reload();



function RowfetchID(im){
    
    
   // console.log(im);
    $solu='<?php echo $this->session->userdata('solution'); ?>';
   
   
   $.ajax({
type: "POST",
url: "<?php echo base_url('')?>index.php/HomeController/indexid",
            data: {Id: im,Sol:$solu},
success: function(data) {
   $('#modal-body').html(data);
   


 
}
});
   
   
   
   
   
    
    };
    
          
function RowfetchIDReq(im){
    
    $solu='<?php echo $this->session->userdata('solution'); ?>';
$.ajax({
            url: '<?php base_url('')?>indexrequestId',
            type:'POST',
            data: {Id: im,Sol:$solu},
            success: function(data){
                
               $('#modal-bodyReq').html(data);
                
       }
            
});
    
    
    };
        
        
        
        
 function form_(data,ii) {
 //console.log(ii);
var formtxt = $('<div id="form" align="center" >');

    $.each(data,function(k, v) {
    
    
    //<form method='post'>
        txt = ("<p >");
      if(v.Id===ii){ 
       $.each(v,function(key, val) {
           
          
       // console.log('val');
            txt +="<a id='"+v['Id']+"'> "+key+ " : </a><br>";
            txt +="<input id='new_"+key+"' value=\'"+val+"' name=\'"+ii+"' ></input><br>";
     dd="<div id='dialog-confirm' title='Empty the recycle bin?'><p><span class='ui-icon ui-icon-alert' style='float:left; margin:12px 12px 20px 0;'></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p></div>";
        });btsave="<button type='button' class='btn btn-default' data-dismiss='modal'  id='save' >Save</button>"    
    btclose="<button type=''button' class='btn btn-default' data-dismiss='modal'>Close</button>";
    
    btdel="<button id='btdelete' type=''button' class='btn btn-default' >Delete</button>"
   
        txt+=("</p>")
        $(formtxt).append(txt+btsave+btclose+btdel);
        //console.log(TableRow);
        }});
        
    return ($(formtxt).appendTo("#modal-body"));
    
        };
        

 

 
 
 
 $('#manage_users_modal').on('shown.bs.modal', function () {
    $(this).find('.modal-dialog').css({width:'auto',
                               height:'auto', 
                              'max-height':'100%'});
});
 
 
   $(document).on('click', '#bt_manageusers', function(){
   $.ajax({
         url: "<?php echo base_url('')?>muser",
         type:'post',
         datatype:'json',
            success: function(data){
                
                
                $("#modal-body2").html(data);
                
                //edit(new_Id,new_serial,new_hwfingerprint,new_expirationdate,new_period,new_lictype,new_status,new_description);
     //console.log(data);
                
            }
     });
   
   
   });
    
 
 
 
 
 
   $(document).on('click', '#btdelete', function(){
        var new_Id=$(this).attr('data-title');
    alertify.confirm('Serial ID:'+new_Id+' Delete ?','Remember , delete this serial cant be undone . Are you sure you want continue?', function(){
        
        
            
     $.ajax({
         url: "<?php base_url('')?>indexdel",
         type:'post',
         data:{
        'Id':new_Id,
       },
            success: function(data){
              location.reload();
                //edit(new_Id,new_serial,new_hwfingerprint,new_expirationdate,new_period,new_lictype,new_status,new_description);
     //location.reload();
                
            }
     });}, function(){ 
 alertify.set('notifier','delay', 1);
     alertify.set('notifier','position', 'top-right'); alertify.error('Cancel')}); 
     
     
     
     
     
   });
    
    
    
     
function tablebuild (mydata) {



var table = $('<table id:"user_table"  ></table>').addClass( "table hover text-center" );
        head=("<thead align='justify'><tr  class='col'><th>Serial</th><th>HW fingerprint</th><th>Expiration Date</th><th>Period</th><th>Lictype</th><th>Status</th><th>Description</th></tr></thead>")

        $(head).appendTo(table);
    $.each(mydata,function(k, v) {
        
        
        //console.log(v['Id']);
        //onclick=\"showModal('"+v['Id']+"')\"
        
      
      
        
        
          // tablehead +="<th><a id='head'> "+$dataa+ " : </a></th>"
        
        
        TableRow = ("<tbody> <tr align='center' id='"+v['Id']+"' name='"+v['Id']+"'  data-toggle='modal' data-target='#myModal' data-backdrop='static' data-keyboard='false' ><div class='row'>");
      //<tr id='255' onclick='form("255")'>
           
            //$('<th></th>').text(key).attr({class:["info"]}).appendTo(table);
            TableRow += "<td >" + v["serial"]  + "</td><td  >" + v["hwfingerprint"] + "</td><td  >" + v["expirationdate"]  + "</td><td  >" + v["period"]  + "</td><td  >" + v["lictype"]  + "</td><td  >" + v["status"]  + "</td><td  >" + v["description"]  + "</td>";
            
             TableRow += "</div></tr></tbody>";
        $(TableRow).appendTo(table);
        //console.log(TableRow);
        });
    return ($(table).appendTo("#TableCont"));

    };
     
        

        
          $(document).on('click', '#save_req', function(){ 
          
          //dont work YET
    $solu='<?php echo $this->session->userdata('solution'); ?>';
          var new_Id=$("#new_Id").val();
     var new_url=$("#new_url").val();
     var new_serial=$("#new_serial").val();
     var new_hwfingerprint=$("#new_hwfingerprint").val();
     var new_totalcdsburned=$("#new_totalcdsburned").val();
     var new_date=$("#new_date").val();
     var new_type=$("#new_type").val();
        
    $.ajax({
                    url:"<?php base_url('')?>save_requests",
                        method:"POST",
                        dataType:'json',
                        data:{'Id':new_Id,
                        'url':new_url,
                        'serial':new_serial,
                        'hwfingerprint':new_hwfingerprint,
                        'totalcdsburned':new_totalcdsburned,
                        'date':new_date,
                        'type':new_type,
                        'sol':$solu},
                        success:function(data)
                                                {
                                                    location.reload();
        }
                                                    
                                                 });
                });
                  $(document).on('click', '#btdelete_req', function(){ 
                  var bol=confirm("These items will be permanently deleted and cannot be recovered. Are you sure?");
   if(bol===true){
       
  //dont work yet
       
    $solu='<?php echo $this->session->userdata('solution'); ?>';
         var Id=$(this).attr('data-title');
    $.ajax({
                    url:"<?php base_url('')?>del_requests",
                        method:"POST",
                        dataType:'json',
                        data:{'Id':Id,'sol':$solu},
                        success:function(data)
                                                {
                                                    
                                                    location.reload();
                                                    
        }
                                                    
                                                 }
                                                         
                );
                 }
                });
        
        
        
  
</script>

</table>

</body>
</html>         
