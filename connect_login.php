<?php
$host="localhost:3307";
$user="root";
$password="";
$db="ismda3";
$login=false;
$con=mysqli_connect($host,$user,$password);
if(!$con){
    echo "not";
}
    $uname=$_POST['email'];
    $Password=$_POST['Password'];
    $sql="Select * from `ismda3`.`passkeys` WHERE  Password= '$Password' ";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
    }
    else{
        echo " You Have Entered Incorrect Password";
    }
if($login){
echo '<script type ="text/JavaScript">';  
echo 'alert(" Successfully Logged in !!!! ")';  
echo '</script>';       
    }
else{
echo '<script type ="text/JavaScript">';  
echo 'alert(" Incorrect Password !!!! ")';  
echo '</script>';  
}

?>
