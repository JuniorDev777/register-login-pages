
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<style>
   .container {
    margin:0 auto;
    width: 70%;
   }
   body{
    background: linear-gradient(45deg,red, orange,rgb(244, 74, 12));
}
</style>
<?php
  
  include 'coonn.php';
  
?> 

<body>
<div class="form">
         <div class="center">
         <form action=""  method="post">
             <h1>Login</h1>
            <br> 
          <input  type="text" name="email" placeholder="UserName">
           <br> </br>
           
           <input  type="text" name="password" placeholder="UserName">
          <br> <br>
          <input class="button" type="submit">
          <br> <br>
          <p  id="block" class="text-sm  font-semibold mt-2 pt-1 mb-0">
                    You not account?
                    <a
                      href="http://localhost/php/reg.php"
                      class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                      >Register</a
                    >
                  </p>
       </form>
       <br>
       
         </div>
      </div>
       
</body>
</html>