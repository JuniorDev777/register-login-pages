<?php

@include 'config.php';


session_start();



?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <style>
    *{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   color:white;
}
*{
   color:white;
}
    .containerr{
   margin: 0 auto;
   width: 60%;
}

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:#333;
}

.container .content h3 span{
   background: crimson;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:crimson;
}
.content{
   padding:  140px 130px;
   border-radius: 2%;
  background: rgba(256,256,256, 0.3);
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: rgb(7, 1, 1);
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: crimson;
}
*::selection {
  background: black;
}
body{
  background: linear-gradient(45deg,red, orange,rgb(244, 74, 12));
}
 
   </style>
   
   
</head>
<body>
<?php
 
  
  

 ?>
<div class="container">

   <div class="content">
      <h3>Hi, <span><?php echo $_GET['user'] ?> </span></h3>
      <h1>welcome <span><?php ?></span></h1>
      <p>this is an user page</p>
      <a href="http://localhost/login/register.php" class="btn">login</a>
      <a href="http://localhost/php/reg.php" class="btn">register</a>
      <a href="http://localhost/login/register.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>