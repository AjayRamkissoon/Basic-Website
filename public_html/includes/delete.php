<!-- ***********************************************************************************
  Page Name  : delete.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #4 : Assignment #4
  Purpose    : This is delete.php, that finds the users data in MySQL table 
				when the delete button is selected and deletes their data
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
	
	<body>
	
	<?php
	
		$record = "RECORD " . $Telephone . " DELETED";
		
		$found = $_POST['found'];
		
		$sql = "DELETE FROM customers WHERE Telephone = '$Telephone'";
		
		$Telephone = trim($Telephone);
		
		if ((strlen(trim($found)) > 0) && ($found == $Telephone))
		{
			if (mysqli_query($connection, $sql))
			{
				$message = "<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
				$found ="";
			}
			else
			{
				$message = "Error deleting record: " . mysqli_error($connection);
			}
		}
		else
		{
			$message = "<span style=\"color: red;\">RECORD $found 	CAN NOT BE DELETED, IT DOES NOT EXISTS</span><br\>";
		}
	
	?>
	
	</body>
	
</html>