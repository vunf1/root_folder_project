<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="root folder page">
        <meta name="author" content="Maia">
        
        <title>Root page</title>
    
        <link href="custom.css" rel="stylesheet">
         <script>
           window.history.pushState("", "", '/root');
         </script>
        
    </head>
          

    <body class="text-center">
        <div class="cover-container  w-100 h-100 p-3 mx-auto flex-column">
          
        <?php//  Body Head ?>
          <header class="masthead mb-auto">
            <div class="inner">
                
              <nav class="nav nav-masthead justify-content-center">
              </nav>
            </div>
          </header>
        
        <?php//  Body Content ?>
          <main role="main" style="display: contents;">
            <h1 class="cover-heading">Root page </h1>
             
            <p class="lead">Web Projects - SSL Certificated </p>
            <a style="color: white;" class="btn " id="Project_Nexus" onclick="onRoot(this.id)">Project Nexus <span class="badge badge-light">2017</span></a>
            <br>
            <a style="color: white;" class="btn " id="Portfolio" href="https://vunf1.coventry.domains/" >Portfolio <span class="badge badge-light">2018</span></a>
            <br>
            
            <a style="color: white;" class="btn " id="rwp" href="https://vunf1.coventry.domains/real_world_project" >Navigation Campus <span class="badge badge-light">2019</span></a>
            
            <br>
            <br>
            
            <p class="lead"> Projects - Software </p>
            
          </main>
        
        <?php//  Body Footer ?>
          <div id="footer_" class="footer">
            
            <p>All available at my <a    href="https://github.com/vunf1" ><span class="badge ">github.com</span></a></p>
              <img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/00.gif"><span class="copyleft">&copy;</span>Copyleft 2019  <strong>João Maia</strong>.OpenSource 
              <label id="opensource-logo"><img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/opensource.png"></label> 
          </div>
        </div>
        
        <script >
                function onRoot(folderName){
                    //$id=this.id;
                    console.log(folderName);
                    window.location.replace("https://vunf1.coventry.domains/root_folder_project/"+folderName);
                };
            
                
                </script>
        
        </body>
</html>