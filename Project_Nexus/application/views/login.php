<?php

?>
<style>
    
    
    #main{
    position: fixed;
    top: 35%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    align-content: center;
    font-family:raleway;
}

span{
color:red;
}

h2{
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 30px;
color: antiquewhite;

}

#login{

width:300px;
float: left;
border-radius: 10px;
font-family:raleway;
    
padding: 10px 4px;
margin-top: 200px;
}

input[type=text],input[type=password], input[type=email]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}
input[type=submit]:hover{
    
  background: #3cb0fd;
  text-decoration: none;
}
input[type=submit]{
width: 100%;
color: white;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: 15px;

  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 7;
  -moz-border-radius: 7;
  border-radius: 7px;
  -webkit-box-shadow: 4px 3px 18px #666666;
  -moz-box-shadow: 4px 3px 18px #666666;
  box-shadow: 4px 3px 18px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 32px 10px 33px;
  border: solid #1f628d 3px;
  text-decoration: none;
}
label{
    color: skyblue;
        font-style: italic;
        font-size: large;
        font-family: "Times New Roman", Times, serif;
}
#profile{
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7;
}

#logout{
float:right;
padding:5px;
border:dashed 1px gray;
margin-top: -168px;
}

a{
text-decoration:none;
color: cornflowerblue;
}

i{
color: cornflowerblue;
}

.error_msg{
color:red;
font-size: 16px;
}

body{
    
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
    

#loading{
    display: none;
}
    
    #logo-project{
        background-size:contain; 
        width: 100%;
        height: 40%;
        
    max-width: 300px; 
    max-height: 300px;
    }
    #register{
        display: none;
    }
    #login-register-tab{
        width: 100%;
        height: 40%;
    }
    </style>
<head>
<title>Login Platform</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body  >
<!--background="<?php ?>application/img/p.png" -->
    
   
    
    <div id="main" background="<?php echo 'root_folder_project' ?>/application/img/p.png" >

        
        
    <div id="loading" align="center">
        <img src="<?php echo 'root_folder_project' ?>/assets/img/00.gif">
        
    </div>
<div id="login">
<div align="center">
    
    <?php echo form_open('LoginController/login_user'); ?>
        <div class="form-group" align="center">
            
        <img id="logo-project" src="<?php ?>application/img/logo-name-project.png">
            
    <?php echo form_input(array('id' => 'username', 'name' => 'username' ,'placeholder'=>'Username', 'class'=>'form-control')); ?>   
            <?php echo form_input(array('id' => 'password','class'=>'form-control', 'name' => 'password' , 'placeholder'=>'Password' , 'type' =>'password')); ?><br><br>
    <?php echo form_submit(array('id' => 'submit', 'value' => 'Login' )); ?> <?php echo form_close();?>
        </div>
        
</div>
<!--<input type="text" name="username" id="username" placeholder="username"/><br /><br />-->
<div align="center" class="form-group">
   

</div></div>
        
<div id="register">
   <!-- <img id="logo-project" src="<?php ?>application/img/logo-name-project.png">-->
<div align="center">
    
<?php echo form_open('LoginController/login_user'); ?>
    <div class="form-group" align="center">
           
<?php echo form_input(array('id' => 'username', 'name' => 'username' ,'placeholder'=>'Username', 'class'=>'form-control')); ?>   
         <?php echo form_input(array('id' => 'password','class'=>'form-control', 'name' => 'password' , 'placeholder'=>'Password' , 'type' =>'password')); ?><br><br>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Login' )); ?> <?php echo form_close();?>
    </div>
    
</div>
<!--<input type="text" name="username" id="username" placeholder="username"/><br /><br />-->
<div align="center" class="form-group">
   

</div></div>
    </div>
    
    
    
    
    
    
</body>

<script>


    
    
    
    
    
    
    $(document).ready(function () {
        
  
      $(document).on('click','#submit',function(){
       $('#login').hide();
       $("#loading").css("display", "block");
       
       
       
       
      })
      
      
    })
        
        
    
    </script>

</html>
