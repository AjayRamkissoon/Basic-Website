<!-- ***********************************************************************************
  Page Name  : modify.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #4 : Assignment #4
  Purpose    : This is modify.php, that finds the users data in MySQL table 
				when the modify button is selected and modifys their data
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
	
	<body>
	
	<?php
		$found = $_POST['found'];
		
		if((strlen(trim($found)) > 0) && ($found == $Telephone))
		{
			$query = "UPDATE customers
					  SET 	FirstName 	= 	'$FirstName',
							LastName	=	'$LastName',
							Email		=	'$Email',
							Address		=	'$Address',
							City		=	'$City',
							State		=	'$State',
							Country		=	'$Country',
							Zip			=	'$Zip',
							Comments	=	'$Comments',
							IT			=	'$IT',
							CS			=	'$CS',
							Robotics	=	'$Robotics',
							Cyber		=	'$Cyber',
							Coffee		=	'$Coffee',
							Age			=	'$Age'
							
					  WHERE Telephone 	= 	'$Telephone'";
					  
			$sql = mysqli_query($connection,$query);
			
			if ($sql)
			{
				$message = "<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
			}
			else
			{
				$message = "<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
			}
		}
		else
		{
			$message ="<span style=\"color: red;\">RECORD $found CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
		}

	?>
	
	</body>
	
</html>