<?php

@include 'config.php';

if(isset($_POST['submit'])){

  
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
 
  

   $select = " SELECT * FROM users WHERE  email = '$email' AND  password = '$pass' ";

   $result = mysqli_query($conn, $select);
  

   if(mysqli_num_rows($result) > 0){

     $row =mysqli_fetch_array($result);
     if ($row['user_type'] == 'user') {
        $_SESSION['user_name'] =$row['name'];
        header ('location: user.php');
     }else {
      $error []='parol yoki email royhatdan otmagan';
     }

};
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>