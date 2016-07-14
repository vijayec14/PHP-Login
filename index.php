HTML  FORM

 <form method="post" enctype="multipart/form-data" action="#">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
  
  PHP CODE

<?php
if(isset($_POST["login"])){
 $username = $_POST["username"];
 $password = $_POST["password"];
 $status =0;
 $qry= "SELECT  username,password FROM tablename WHERE  username='$username' and password= '$password' ";
 $result = mysql_query($qry);
 $row = (mysql_fetch_assoc($result));
 if(!$row){
 echo "<div style='color:red; text-align:center;'>Invalid Username or Password !</div>";}
 else{
  
 echo "You Have Successfully Loged In";
  }
 }
?>
