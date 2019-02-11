      <?php
  session_start();
        if(!empty($_SESSION['Name'])){
            echo "<h1> Welcome " . $_SESSION["Name"] . "</h1>";
		echo"<br>";
		if( $_SESSION["Type"]==1){
			echo"this is admin's page";
						echo"<br>";
			echo"n7ot hena links el admin";
		}
			else if( $_SESSION["Type"]==2){
			 			echo"this is supervisor's page";
												echo"<br>";
            echo"n7ot hena links el supervisor";


		}
		else{
            echo"this is user's page";
			echo"<br>";

			echo"n7ot hena links el user";


		}
		echo"<br>";
            echo "<a href='signout.php'> Sign Out Here </a>";

		}
	
		        else{
				echo "you are not Logged in";
				echo"<br>";
				}
			
			?>
