
 $(document).ready(function(){




         
        
    $(document).on('click', '.botaoALL', function(){ 
//Load ALL TABLE PRODUTOS
          $.ajax({
           url:"index.php/PageInicial/loadAll",
           method:"json",
           success:function(data)
           {
            console.log(data);
            },
              error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
           
              

           });
      });
                 
      $(document).on('click', '.botao1', function(){ 
            //Load Pagina Menu
            $.ajax({
             url:"index.php/PageInicial/pageMenu",
             method:"text",
             success:function(data)
             {
              $(".base").html("");
              $(".base").html(data);
              },
                error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); }
             
                

             });
      });
                 


});