<?php  
 $connect = mysqli_connect("localhost", "root", "zap", "editable");  
 $sql = "DELETE FROM name_tbl WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>