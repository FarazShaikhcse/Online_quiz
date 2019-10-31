<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $d=mysqli_connect("localhost","root","","WEBPROJECT") or die ("ERROR connecting to database!");
 if(isset($_POST["FName"]) && isset($_POST["LName"]) && !empty($_POST["pwd1"]) && isset($_POST["email"]))
  {
     $f=$_POST["FName"];
     $l=$_POST["LName"];
     $e=$_POST["email"];
     $pw=sha1($_POST["pwd1"]);
     if(mysqli_query($d,"Insert into DETAILS values(default,'$f','$l','$e','$pw')"))
     {
         header('location:LoginPageI.php');
         exit; 
     }
     else
     {
         header('location:SignUpI.php');
         exit;
        
     }    
   }
   mysqli_close($d);
}
else
{
     echo "";
}
?>