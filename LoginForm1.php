<html>
<head>
    <title> Login Form</title>
</head>
    <body>
    <h1>Software Project Log-In</h1>
<form action="" method="post">
   Name:<br>
   <input type="text" name="Name" placeholder="Name..."><br><br>
   Password:<br>
   <input type="text" name="Password" placeholder="Password..."><br>
   <br>

   <input type="submit" name="Submit" value="LogIn">
</form>    
    </body>
</html>

<?php 
session_start();

$mysqli = new mysqli('localhost','root','','users') or die(mysqli_error($mysqli));

if(isset($_POST['Submit'])) {
    
    
   $Result = $mysqli->query("Select * FROM user where Name = '".$_POST['Name']."' and Password ='".$_POST['Password']."'") or die(mysqli_error($mysqli));
    
    
    while($row = mysqli_fetch_array($Result)){
        $_SESSION["UT"]=$row["UserType"];

        $Result2 = $mysqli->query("SELECT pages.* ,link.* FROM pages inner join link on pages.linkID=link.id where pages.id=".$_SESSION["UT"]) or die(mysqli_error($mysqli));
    if($row2 = mysqli_fetch_array($Result2)){
echo"
<a href='$row2[link]'>$row2[FriendlyName]</a>

";
   } 
}
}
?>