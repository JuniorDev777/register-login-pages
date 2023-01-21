
<?php
   
	  session_start ();
     include("db.php");
     
     if (isset ($_POST['email']) && isset ($_POST ['password'])   ) {
         function  validate  ($date) {
            $date = trim ($date);
            $date =stripcslashes ($date);
            $date =htmlspecialchars ($date);
            return $date;

         }
     
    
	
    
  
    $gmail =  $_POST['email'];
    $pas = $_POST['password'];
  
   $sql ="SELECT * FROM userss WHERE `name`='$gmail' AND `password`='$pas' ";
   $result = $conn->query($sql);

   if (empty($gmail) && empty($pas)) {
    echo 'Barcha maydonlarni toldrin !!!';
    return false;
  }
   if ($result->num_rows > 0) {
    
     while($row = $result->fetch_assoc()) {
       header ("location:user.php?user=$gmail");
     }
   } else {
     echo "parol yoki email xato!";
    
    
   }
   $conn->close();
}

	















	
?>
