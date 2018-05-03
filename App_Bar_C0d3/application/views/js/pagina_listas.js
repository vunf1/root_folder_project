
 $(document).ready(function(){




         
$(document).on('click', '#list-bebidas', function(){ 



      $.ajax({
       url:"PageInicial/bebidas",
       method:"POST",
       success:function(data)
       {
        $('.base').hide();

        $(data).appendTo('body');


            },
       error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
       
          
          //$('#user_table').html(data);
       });
  });
                 


});