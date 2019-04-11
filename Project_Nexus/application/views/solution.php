

<style>

  ul {
    list-style-type: none;
  }
  
  #topbar {
      
      
    top: 0;
    width: 100%;
    background: #000;
    padding: 10px 0 10px 0;
    text-align: right;
    
    position: fixed;
    
  }
  body {
      overflow-x: hidden;
      padding-top: 30px;
  }



  footer {
      margin: 50px 0;
  }


    
      
  #label_topbar{
      color: whitesmoke;
  }
  #med_solution{
      
      color:whitesmoke;
      
    
      
      
      
      
      
  }
  body{
      
      overflow:hidden;
      position: relative;
  }
  body,
  html { height: 100%;}
  .nav .open > a, 
  .nav .open > a:hover, 
  .nav .open > a:focus {background-color:transparent;
      };}

  /*-------------------------------*/
  /*           Wrappers            */
  /*-------------------------------*/

  #wrapper {
      padding-left: 0;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
  }

  #wrapper.toggled {
      padding-left: 220px;
  }

  #sidebar-wrapper {
      z-index: 1000;
      left: 200px;
      width: 0;
      height: 100%;
      margin-left: -220px;
      overflow-y: auto;
      background: black;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
  }

  #sidebar-wrapper::-webkit-scrollbar {
    display: none;
  }

  #wrapper.toggled #sidebar-wrapper {
      width: 200px;
  }

  #page-content-wrapper {
      width: 100%;
      padding-top: 35px;
  }

  #wrapper.toggled #page-content-wrapper {
      display: block;
      position: absolute;
      margin-right: -110px;
  }

  /*-------------------------------*/
  /*     Sidebar nav styles        */
  /*-------------------------------*/

  .sidebar-nav {
      position: absolute;
      top: 0;
      width: 220px;
      margin: 0;
      padding: 0;
      list-style: none;
  }

  .sidebar-nav li {
      position: relative; 
      line-height: 20px;
      display: inline-block;
      width: 100%;
  }

  .sidebar-nav li:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      height: 100%;
      width: 3px;
      background-color: #1c1c1c;
      -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
        -ms-transition:  width .2s ease-in;
              transition: width .2s ease-in;

  }

  .sidebar-nav li:nth-child(2):before {
      background-color: #79aefe;   
  }
  .sidebar-nav li:nth-child(3):before {
      background-color: #79aefe;   
  }
  .sidebar-nav li:nth-child(4):before {
      background-color: #79aefe;   
  }
  .sidebar-nav li:nth-child(5):before {
      background-color: #79aefe;   
  } 

  .sidebar-nav li:hover:before,
  .sidebar-nav li.open:hover:before {
      width: 100%;
      -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
        -ms-transition:  width .2s ease-in;
              transition: width .2s ease-in;

  }

  .sidebar-nav li a {
      display: block;
      color: #ddd;
      text-decoration: none;
      padding: 10px 15px 10px 30px;    
  }

  .sidebar-nav li a:hover,
  .sidebar-nav li a:active,
  .sidebar-nav li a:focus,
  .sidebar-nav li.open a:hover,
  .sidebar-nav li.open a:active,
  .sidebar-nav li.open a:focus{
      color: #fff;
      text-decoration: none;
      background-color: transparent;
  }

  .sidebar-nav > .sidebar-brand {
      height: 65px;
      font-size: 20px;
      line-height: 44px;
  }
  .sidebar-nav .dropdown-menu {
      position: relative;
      width: 100%;
      padding: 0;
      margin: 0;
      border-radius: 0;
      border: none;
      background-color: #222;
      box-shadow: none;
  }

  /*-------------------------------*/
  /*       Hamburger-Cross         */
  /*-------------------------------*/

  .hamburger {
    position: fixed;
    top: 10px;  
    z-index: 999;
    display: block;
    width: 32px;
    height: 32px;
    margin-left: 15px;
    background: white;
    border: none;
  }
  .hamburger:hover,
  .hamburger:focus,
  .hamburger:active {
    outline: none;
  }
  .hamburger.is-closed:before {
    content: '';
    display: block;
    width: 100px;
    font-size: 14px;
    color: #fff;
    line-height: 32px;
    text-align: center;
    opacity: 0;
    -webkit-transform: translate3d(0,0,0);
    -webkit-transition: all .35s ease-in-out;
  }
  .hamburger.is-closed:hover:before {
    opacity: 1;
    display: block;
    -webkit-transform: translate3d(-100px,0,0);
    -webkit-transition: all .35s ease-in-out;
  }

  .hamburger.is-closed .hamb-top,
  .hamburger.is-closed .hamb-middle,
  .hamburger.is-closed .hamb-bottom,
  .hamburger.is-open .hamb-top,
  .hamburger.is-open .hamb-middle,
  .hamburger.is-open .hamb-bottom {
    position: absolute;
    left: 0;
    height: 4px;
    width: 100%;
  }
  .hamburger.is-closed .hamb-top,
  .hamburger.is-closed .hamb-middle,
  .hamburger.is-closed .hamb-bottom {
    background-color: #1a1a1a;
  }
  .hamburger.is-closed .hamb-top { 
    top: 5px; 
    -webkit-transition: all .35s ease-in-out;
  }
  .hamburger.is-closed .hamb-middle {
    top: 50%;
    margin-top: -2px;
  }
  .hamburger.is-closed .hamb-bottom {
    bottom: 5px;  
    -webkit-transition: all .35s ease-in-out;
  }

  .hamburger.is-closed:hover .hamb-top {
    top: 0;
    -webkit-transition: all .35s ease-in-out;
  }
  .hamburger.is-closed:hover .hamb-bottom {
    bottom: 0;
    -webkit-transition: all .35s ease-in-out;
  }
  .hamburger.is-open .hamb-top,
  .hamburger.is-open .hamb-middle,
  .hamburger.is-open .hamb-bottom {
    background-color: #1a1a1a;
  }
  .hamburger.is-open .hamb-top,
  .hamburger.is-open .hamb-bottom {
    top: 50%;
    margin-top: -2px;  
  }
  .hamburger.is-open .hamb-top { 
    -webkit-transform: rotate(45deg);
    -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
  }
  .hamburger.is-open .hamb-middle { display: none; }
  .hamburger.is-open .hamb-bottom {
    -webkit-transform: rotate(-45deg);
    -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
  }
  .hamburger.is-open:before {
    content: '';
    display: block;
    width: 100px;
    font-size: 14px;
    color: #fff;
    line-height: 32px;
    text-align: center;
    opacity: 0;
    -webkit-transform: translate3d(0,0,0);
    -webkit-transition: all .35s ease-in-out;
  }
  .hamburger.is-open:hover:before {
    opacity: 1;
    display: block;
    -webkit-transform: translate3d(-100px,0,0);
    -webkit-transition: all .35s ease-in-out;
  }

  /*-------------------------------*/
  /*            Overlay            */
  /*-------------------------------*/

  .overlay {
      position: fixed;
      display: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: transparent;
      z-index: 1;
  }


  .btn3d {
      position:relative;
      top: -6px;
      border:0;
      transition: all 40ms linear;
      margin-top:0px;
      margin-bottom:0px;
      margin-left:2px;
      margin-right:2px;
  }
  .btn3d:active:focus,
  .btn3d:focus:hover,
  .btn3d:focus {
      -moz-outline-style:none;
          outline:medium none;
  }
  .btn3d:active, .btn3d.active {
      top:2px;

  }

  .btn3d.btn-info:active, .btn3d.btn-info.active {
      box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
      background-color: #39B3D7;
  }

  .btn3d.btn-danger:active, .btn3d.btn-danger.active {
      box-shadow:0 0 0 1px #b93802 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
      background-color: #D73814;
  }

  #bt_logout,#bt_refresh,#bt_home{
      top: 1px;
  }

  .footer {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    text-align: center;
  }
  #some_info{
      display: none;
  }
  
</style>
    
    
  
  <body id="body">
         
    
    <div align="center" id="topbar">
        <label id="info_user"></label>
         <?php $image_properties_on = array(
        'src'   => 'assets/images/on.png',                
        'width' => '25',
        'height'=> '25',
        'title' => 'login status',
         
); 
         $image_properties_off = array(
        'src'   => 'assets/images/on.png',                
        'width' => '25',
        'height'=> '25',
        'title' => 'login status',
         
); ?> 
     
     
        <label id="label_topbar" title="User info"> 
        <?php echo $this->session->userdata('username');?><?php echo $this->session->userdata('status'); ?>  User  <?php if($this->session->userdata('logged_in')==TRUE)
            {
              echo img($image_properties_on);
            
            }else{echo img($image_properties_off);}?></label>
        
<!--
    <button id="bt_home" class="btn btn-sm btn-primary btn3d" onclick="load_dashboard()">Home</button>
    <button id="bt_refresh" type="button" class="btn btn-sm btn-primary btn3d" onclick="load_home()">Refresh </button>
    -->
    <!--<button id="bt_logout" title="Log Out" type="button" class="btn btn-md btn-danger btn3d"><span class="glyphicon glyphicon-off"></span></button>
    -->
                
<label id="fullscreen"></label>
  <?php $image_properties_fullscreen = array(
    'src'   => 'assets/img/fullscreen-icon.png',                
    'width' => '25',
    'height'=> '25',
    'id'=>'img_full',
  ); 
  echo img($image_properties_fullscreen);
  ?>
  </div>
        


<script>
    $(document).ready(function () {
      document.title = 'Dashboard';
      
      
      load_dashboard();
    //load_home();
    //load_users();
    //load_man_solution();
    
        $bt_dis='<?php echo $this->session->userdata('username');?>'
        
        if($bt_dis="Normal"){
            
            //$("#bt_manageusers").css( "display", "none" );
            //$("# bt_management_solution").css( "display", "none" );
                       
        }
        if($bt_dis="Admin"){
          //$("#bt_logout").css( "display", "block" );
            
        }
        if($bt_dis="Developer"){
            //$("#load_business_chat").css( "display", "block" );
            
            //$("#bt_logout").css( "display", "block" );
            
        }
        
        

        
        
       
    
    
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        fullpage= $('#page-content-wrapper'),
        isClosed = false;
      




      trigger.click(function () {
        hamburger_cross(); 
      });

      function hamburger_cross() {

        if (isClosed == true) {          
          //overlay.hide(); // BLOCK Interaction 
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          
          $('#container_view').css('margin-left', '100');
          isClosed = false;
        } else {   
        // overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          $('#container_view').css('margin-left', '-35');
          isClosed = true;
        }
    }
    
    $('[data-toggle="offcanvas"]').click(function () {
          $('#wrapper').toggleClass('toggled');
    });
    
    $.ajax({
      url: "<?php ?>/Solutioncontroller/userinfo",
      dataType:'json',
      method:"POST",
      data: {'id':<?php echo $this->session->userdata('username');?>},
      success: function(data){
            
        $('#user_area').html(data);
        $('#user_contact').html(data['email']);
        $('#user_area_name').html(data['name']);
          
      }
    });
      
  

  });
    
    
     function load_man_solution() {
       
      var delay = alertify.get('notifier','delay');
      alertify.set('notifier','delay', 2);
      alertify.success('Loading Management Solutions');
      alertify.set('notifier','delay', delay);
  
      $("#container_view").html(' <div ><object type="text/html" data="/Solutioncontroller/solution_management" style="width:100%; height:100%;"></object></div>');
        // $('#obj_medcd').css('witdh','100%');
      
      };
   
        
    function load_dashboard(data){
      
      var delay = alertify.get('notifier','delay');
      alertify.set('notifier','delay', 2);
      alertify.success('Loading Dashboard');
      alertify.set('notifier','delay', delay);
      
      $("#container_view").html(' <div ><object type="text/html" data="/Solutioncontroller/Load_dashboard_solution" style="width:100%; height:100%;"></object></div>');
    
    };
       
    
    
    
    function load_home() {
        
     
     $("#container_view").html(' <div ><object type="text/html" data="/HomeController/Index" style="width:100%; height:100%;"></object></div>');
    
    };

    function load_medsky_website() {
          
     $("#container_view").html(' <div align="center"><input type="text" class="form_control" id="url_br"> <button id="next_web" ></button></div>');
     
     document.getElementById("next_web").addEventListener("click", function() {
       load_web($('#url_br').val());
      }, false);
      
         
    }

    function load_web($url) {
      
      var delay = alertify.get('notifier','delay');
      alertify.set('notifier','delay', 2);
      alertify.set('notifier','delay', delay);
      alertify.success('Loading into '+$url);
      $("#container_view").html('<object type="text/html" data="http://www.'+$url+'/" style="width:100%; height:100%;"></object>');
    };


    function load_users() {
      
      var delay = alertify.get('notifier','delay');
      alertify.set('notifier','delay', 2);
      alertify.success('Loading Users Management');
      alertify.set('notifier','delay', delay);
    
     $("#container_view").html(' <div ><object type="text/html" data="/Solutioncontroller/muser" style="width:100%; height:100%;"></object></div>');
          
    };

    $(document).on('click','#dashboard',function(){
        
        //load_home();
      
        load_dashboard();
        //$('#container_view').append('<div class="container "><div class="row"><div class="container"><div class="row"><div id="medcd_solution" class="col-md-3 col-sm-4 col-xs-6"><img   class="img-responsive" src="http://cdn2.hubspot.net/hub/181021/file-338034070-jpg/images/real_world_examples.jpg" /></div><div class="col-md-3 col-sm-4 col-xs-6"><img  id="medprint_solution" class="img-responsive" src="http://met.live.mediaspanonline.com/assets/31069/example-608web_w608.jpg?width=300&height=200&scale=upscalecanvas" /></div></div></div>');
         
         
    });

    $(document).on('click','#medsky',function(){
        
       location.reload();
        
        
        
    });
    $(document).on('click', '#bt_logout', function(){ 
        
    $.ajax({
      url:"<?php base_url('')?>Solutioncontroller/logout",
      method:"POST",
      dataType:'text',
      data:'',
      success:function(data){
        location.reload();
      },error: function(xhr, status, error) { alert('Search Error: '+ xhr.status+ ' - '+ error); },
        //$('#user_table').html(data);
    });
    
    
    });
    
    
    
    
    
    
    $(document).on('click', '#bt_manageusers', function(){
    
      load_users();
    
    });
   
    $(document).on('click', '#bt_management_solution', function(){
        
     
        load_man_solution();
      
    })
    
    $(document).on('click', '#load_business_chat', function(){
      //OFF - not implemented , pop chat ideia
      var delay = alertify.get('notifier','delay');
      alertify.set('notifier','delay', 2);
      alertify.success('Loading Chat ');
      alertify.set('notifier','delay', delay);
    
     $("#container_view").html(' <div ><object type="text/html" data="/Solutioncontroller/chat" style="width:100%; height:100%;"></object></div>');
    
     
    })
    
                         
                        
</script>




    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a id="medsky" >
                      Home
                    </a>
                </li>
                <!--
               <li id="load_business_chat" style="display:none;">
                    <a >Business Chat </a>
                </li> -->
                <li id="dashboard" >
                    <a  >Dashboard </a>
                 
                </li>
                <li id="bt_manageusers">
                    <a  >Users</a>
                </li>
                <li id="bt_management_solution"  >
                    <a  >Management <br> Solutions</a>
                </li>
                <li>
                    <!--<a onclick="load_medsky_website()">MedSky Website</a> -->
                    <a onclick="toggleFullScreen();">Fullscreen</a>
                </li>
                <li id="bt_logout">
                    <a >LogOut</a>
                </li>
                
                
                <ul id="user_">
                    <script>
            function ss(){
                $('#some_info').css('display','block');
            }
            function ss2(){
                $('#some_info').css('display','none');
            }
                 
            /**
             * FullScreen Handle - put inside class??
             */
function errorHandler() {
   alert('mozfullscreenerror');
}
document.documentElement.addEventListener('mozfullscreenerror', errorHandler, false);
$('#img_full').click(function () {
  toggleFullScreen();    
})
// toggle full screen
function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
    if (document.documentElement.requestFullscreen) {  // IE
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen(); //MOZILLA
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT); //CHROME
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}

// keydown event handler
document.addEventListener('keydown', function(e) {
  if (e.keyCode == 13 || e.keyCode == 70) { // F or Enter key
    toggleFullScreen();
  }
}, false);

</script>

<p onclick="ss()" ondblclick="ss2()">Actual User Info</p>

<div id="some_info">
    <h5>Username: <?php echo $this->session->userdata('username'); ?><br><p>Email : <span id="user_contact"> </span></p></h5>
    <p id="user_area"><i ></i></p>
    <p >Name: <span id="user_area_name"></span></p>
            </div>
            </ul>
            </ul>
            </nav>
   
              
        
        
        
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
         <div id="page-content-wrapper">
             <button type="button" class="hamburger is-closed" data-toggle="offcanvas" title="Menu">
             <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container"id="container_view">
                <div class="row">
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    
    
<style>
    
    
    #bt_save_user:hover{color: blue};
    #bt_delete_user:hover{color: red};
</style>
    
  <!-- Modal settings users -->
  <div class="modal fade " id="manage_users_modal" role="dialog">
    <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
            
          <h4 id="TITLE" class="modal-title" visible="false">Medsky Users Management</h4>
        </div>
        <div class="modal-body" >
            <div class="modal-body">
                <div class="container-fluid" id="modal-body2">
                    
                    
                    
                </div>
            </div>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
          
          
          
        </div>
        <div class="modal-footer">
        </form>
        </div>
      </div>
      </div>
      </div>
      
    
    </body>  
      
      
      
      
     
