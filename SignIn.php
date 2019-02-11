
<?php
    session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "software1";

// create connection
$conn = new mysqli ($hostname, $username, $password, $dbname);



if(isset($_POST['Submit'])){ // check if form was submitted
if (empty($_POST['Name']) || empty($_POST['Password'])) {
echo "Username and Password can not be empty";
echo"<br>";
}

else{
    $sql = "select * from user where Name = '" . $_POST["Name"] . "' and Password ='" . $_POST["Password"] . "'";
    $result = mysqli_query($conn, $sql);
	

if($result){
    while($row = mysqli_fetch_array($result)){
        $_SESSION["ID"] = $row[0];
        $_SESSION["Name"] = $row["Name"];
        $_SESSION["Password"] = $row["Password"];
        $_SESSION["Type"] = $row["UserTypeID"];
       header("Location:index.php");
	}
    }


	if($_SESSION["Name"]!=$_POST["Name"]||$_SESSION["Password"]!=$_POST["Password"]){
        echo "Invalid Email or Password";
		echo"<br>";

    }
}
}





?>
