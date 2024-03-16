<?php
include("config.php");
if(isset($_POST['submit']))
{

    $name=$_POST['name'];
   $email=$_POST['email'];

    $age=$_POST['age'];
    $DOB=$_POST['DOB'];
    $result=mysqli_query($mysqli,"INSERT into user values('','$name','$email','$age','$DOB')");  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo " valid email /n";  
}  
if ( $age<0) {  
    $ErrMsg = "age should be positive";  
            echo $ErrMsg;  
} else {  
    echo " valid number";  
}  
}
?>