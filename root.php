<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="root folder page">
        <meta name="author" content="Maia">
        
        <title>Root page</title>
    
        <script src="https://vunf1.coventry.domains/js/resume.min.js"></script>
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
        

            <button class="badge badge-primary" onclick="triggerDiv('Web-Based')">Web-Based SSL Certificated </button>
            <br>
            <div id="Web-Based" style="display:none;">
            <a target="_blank" style="color: darkgrey;" class="btn " id="Project_Nexus" href="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/">Project Nexus <span class="badge badge-light">2017</span></a>
            <br>
            
            <a target="_blank" style="color: darkgrey;" class="btn " id="Portfolio" href="https://vunf1.coventry.domains/" >Portfolio <span class="badge badge-light">2018</span></a>
            <br>
            
            <a href="https://vunf1.coventry.domains/real_world_project/RWP_releaseVersion.apk"><span id="RWP_releaseVersion.apk"  class="badge badge-warnning">.APK</span></a><a target="_blank" style="color: darkgrey;" class="btn " id="real_world_project" href="https://vunf1.coventry.domains/real_world_project"  >Navigation Campus <span class="badge badge-light">2019</span></a>
            <br>
            </div>

            
            <button class="badge badge-info" onclick="triggerDiv('vb.NET')">vb.NET</button>
            <br>
            <div id="vb.NET" style="display:none;">

              <a style="color: darkgrey;" class="btn " id="vbNet_Software_2016.zip" href="https://vunf1.coventry.domains/vbNet_Software_2016.zip"   >Report <span class="badge badge-light">2016</span></a>
            <br>
            </div>
            
            
            <button class="badge badge-danger"  onclick="triggerDiv('Java')">Java</button>
            <br>
            
            <div id="Java" style="display:none;">
            <a style="color: darkgrey;" class="btn " id="JARcase_Study_Coursework.zip" href="https://vunf1.coventry.domains/JARcase_Study_Coursework.zip"   >Gym Management <span class="badge badge-light">2019</span></a>
            <br>

          </div>
        
        <?php//  Body Footer ?>
          <div id="footer_" class="">
            
            <i style="color: darkgrey;">All available at my <a    href="https://github.com/vunf1" ><span class="badge " >github.com </span></a></i><br>
              <img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/00.gif"><span class="copyleft">&copy;</span> <i id="datt"></i>  <strong>João Maia</strong> OpenSource 
              <label id="opensource-logo"><img title="Running" src="https://vunf1.coventry.domains/root_folder_project/Project_Nexus/assets/img/opensource.png"></label> 
          </div>
        </div>
        
        <script >
      $(document).ready(function () {
       // $("#loading2").css("display","none");
        $("#footer_").css("display","block");

        $(".container").css("display","block");



            
      });
                </script>
        
        </body>
</html>