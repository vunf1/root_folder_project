<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="root folder page">
        <meta name="author" content="Maia">
        
        <title>Root page</title>
    
        <link href="https://vunf1.coventry.domains/root_folder_project/custom.css" rel="stylesheet">
         <script>
           window.history.pushState("", "", '/root');
         </script>
        
    <!-- Allertify styles -->
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>

    </head>
          

    <body class="text-center rootyBody">
        <div class="cover-container  w-100 h-100 p-3 mx-auto flex-column">
          
        
        <?php//  Body Content ?>
          <div class="container " >
        <?php//  Body Head ?>
        


            <br>
            <span class="badge badge-primary">Web-Based SSL Certificated </span>
            <br>
            <a style="color: chartreuse;" class="btn " id="Project_Nexus" onclick="onRoot(this.id)">Project Nexus <span class="badge badge-light">2017</span></a>
            <br>
            
            <a style="color: chartreuse;" class="btn " id="Portfolio" href="https://vunf1.coventry.domains/" >Portfolio <span class="badge badge-light">2018</span></a>
            <br>
            
            <span id="RWP_releaseVersion.apk" onclick="onRoot(this.id)" class="badge badge-warnning">.APK</span><a style="color: chartreuse;" class="btn " id="real_world_project"  onclick="onRoot(this.id)" >Navigation Campus <span class="badge badge-light">2019</span></a>
            <br>

            
            <span class="badge badge-info">vb.NET</span>
            <br>

            <a style="color: chartreuse;" class="btn " id="vbNet_Software_2016.zip" onclick="onRoot(this.id)" >Report <span class="badge badge-light">2016</span></a>
            <br>
            
            
            <span class="badge badge-danger">Java</span>
            <br>
            <a style="color: chartreuse;" class="btn " id="JARcase_Study_Coursework.zip" onclick="onRoot(this.id)" >Gym Management <span class="badge badge-light">2019</span></a>
            <br>

          </div>
        
        <?php//  Body Footer ?>
          <div id="footer_" class="footer">
            
            <i style="color: chartreuse;">All available at my <a    href="https://github.com/vunf1" ><span class="badge " >github.com </span></a></i><br>
              <img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/00.gif"><span class="copyleft">&copy;</span> 2019  <strong>João Maia</strong> OpenSource 
              <label id="opensource-logo"><img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/opensource.png"></label> 
          </div>
        </div>
        
        <script >
                function onRoot(folderName){
                  if(folderName=="Project_Nexus" ){
                    alertify.message('Loading...'+folderName+' ');
                    
                    window.location.replace("https://vunf1.coventry.domains/root_folder_project/"+folderName);

                  }else if(folderName=="RWP_releaseVersion.apk"){
                    alertify.message('Loading... APK');
                    window.location.replace("https://vunf1.coventry.domains/real_world_project/"+folderName);
                  }else{
                    if(folderName=="JARcase_Study_Coursework.zip"){
                      alertify.message('Loading... JAR');
                      window.location.replace("https://vunf1.coventry.domains/"+folderName);

                    }else if(folderName=="vbNet_Software_2016.zip"){
                      alertify.message('Loading... vb.NET');
                      window.location.replace("https://vunf1.coventry.domains/"+folderName);

                    }else{
                      alertify.message('Loading...'+folderName);
                      window.location.replace("https://vunf1.coventry.domains/"+folderName);

                    }
                  }
                      
                };
            
                
                </script>
        
        </body>
</html>