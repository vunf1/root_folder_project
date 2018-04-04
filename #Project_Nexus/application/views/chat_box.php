<?php

 ?>
<div class="container">
    <div class="row form-group">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-8 col-lg-offset-2">
            <div id="container_chat" class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Online Assistant Chat
                    
                </div>
                <div class="panel-body body-panel">
                    <ul class="chat">
                        <li class="left clearfix">
                            
                            <div class="clearfix">
                                
                                <p>
                                    
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                
                        <li class="right clearfix">
                            <span class="chat-img pull-right">                   
                            </span>
                            <div class=" clearfix">
                                <div class="header">
                                  
                                
                                </div>
                                <p>
                                    
                                </p>
                            </div>
                        </li>
                
                
                
                
                <div class="panel-footer clearfix">
                    <input type="text" id="text_area">
                    <span class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12" style="margin-top: 10px">
                        <button class="btn btn-warning btn-lg btn-block" id="btn-chat">Send</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
   
    $(document).ready(function () {
   
   
      $.ajax({
                    url:"<?php base_url()?>indexx",
                        method:"POST",
                        dataType:'json',
                        data:'',
                        success:function(data)
                                                {
                                                    $("#").html();
                                                    tablebuild($.parseJSON(data));
                                                    
                                                    
                                                 },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); },
        //$('#user_table').html(data);
                });
    
    
    }) 
   
   \
    });
  function table(){
  
  
  
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

       
    }
   
    $(document).on('click', '#btn-chat', function(){
           $text=$('#text_area').val();
           
           
    $.ajax({
                    url:"<?php base_url('solutioncontroller')?>chat_send",
                        method:"POST",
                        dataType:'text',
                         data: {text_chat: $text },
                        success:function(data)
                                                {
                                   LOCATION.reload();               
                                                  
                                                 },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); },
        //$('#user_table').html(data);
                });
    
    
    });
        
        
        
    
        
    
    
    </script>