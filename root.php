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
        
        <script src="https://vunf1.coventry.domains/vendor/jquery/jquery.min.js"></script>
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
        
        <style>
        .container,#footer_{
          /*display:none;*/
        }
        
        </style>
      
        <?php//  Body Content ?>
          <div class="container" >
        <?php//  Body Head ?>
        


            <span class="badge badge-primary">Web-Based SSL Certificated </span>
            <br>
            <a target="_blank" style="color: darkgrey;" class="btn " id="Project_Nexus" href="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/">Project Nexus <span class="badge badge-light">2017</span></a>
            <br>
            
            <a target="_blank" style="color: darkgrey;" class="btn " id="Portfolio" href="https://vunf1.coventry.domains/" >Portfolio <span class="badge badge-light">2018</span></a>
            <br>
            
            <a href="https://vunf1.coventry.domains/real_world_project/RWP_releaseVersion.apk"><span id="RWP_releaseVersion.apk"  class="badge badge-warnning">.APK</span></a><a target="_blank" style="color: darkgrey;" class="btn " id="real_world_project" href="https://vunf1.coventry.domains/real_world_project"  >Navigation Campus <span class="badge badge-light">2019</span></a>
            <br>

            
            <span class="badge badge-info">vb.NET</span>
            <br>

            <a style="color: darkgrey;" class="btn " id="vbNet_Software_2016.zip" href="https://vunf1.coventry.domains/vbNet_Software_2016.zip"   >Report <span class="badge badge-light">2016</span></a>
            <br>
            
            
            <span class="badge badge-danger">Java</span>
            <br>
            <a style="color: darkgrey;" class="btn " id="JARcase_Study_Coursework.zip" href="https://vunf1.coventry.domains/JARcase_Study_Coursework.zip"   >Gym Management <span class="badge badge-light">2019</span></a>
            <br>

          </div>
        
        <?php//  Body Footer ?>
          <div id="footer_" class="footer">
            
            <i style="color: darkgrey;">All available at my <a    href="https://github.com/vunf1" ><span class="badge " >github.com </span></a></i><br>
              <img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/00.gif"><span class="copyleft">&copy;</span> <i id="datt"></i>  <strong>João Maia</strong> OpenSource 
              <label id="opensource-logo"><img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/opensource.png"></label> 
          </div>
        </div>
        
        <script >
          var d = new Date();
          //var strDate = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
          var strDate = d.getFullYear();
          $("#datt").html(strDate);
          
                function onRootOFF(folderName){
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
            
                $(document).ready(function () {
                  $("#loading2").css("display","none");
                  $("#footer_").css("display","block");

                  $(".container").css("display","block");



                      
                });
                </script>
        
        </body>
</html>