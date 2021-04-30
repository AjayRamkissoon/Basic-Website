<!-- ***********************************************************************************
  Page Name  : find.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #4 : Assignment #4
  Purpose    : This is find.php, that finds the users data in MySQL table 
				when the find button is selected
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
	
	<body>
	
	<?php
		
		$sql = "SELECT * FROM customers where Telephone = '$Telephone'";
		
		if ($result = mysqli_query($connection,$sql))
		{
			$rowcount = mysqli_num_rows($result);
			
			while( $row = mysqli_fetch_array($result))
			{
				$Telephone	= $row['Telephone'];
				$FirstName	= $row['FirstName'];
				$LastName	= $row['LastName'];
				$Email		= $row['Email'];
				$Address	= $row['Address'];
				$City		= $row['City'];
				$State		= $row['State'];
				$Country	= $row['Country'];
				$Zip		= $row['Zip'];
				$Comments	= $row['Comments'];
				$IT			= $row['IT'];
				$CS			= $row['CS'];
				$Robotics	= $row['Robotics'];
				$Cyber		= $row['Cyber'];
				$Coffee		= $row['Coffee'];
				$Age		= $row['Age'];
			}
			
			$Telephone = trim($Telephone);
			
			if($rowcount)
			{
				$found = $Telephone;
				$message = "<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
			}
			else if (strlen($Telephone) == 0)
			{
				$message = "<span style=\"color: red;\">Telephone CAN NOT BE EMPTY</span><br\>";
				
				
				$Email  	= "";
				$LastName  	= "";
				$FirstName	= "";
				$Address  	= "";
				$City    	= "";
				$State    	= "";
				$Country  	= "";
				$Zip      	= "";
				$Comments 	= "";
				$IT      	= "";
				$CS      	= "";
				$Robotics 	= "";
				$Cyber  	= "";
				$Coffee 	= "";
				$Age    	= "";
				
				$found		= "";
			}
			else
			{
				$message = "<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span><br\>";
				
				$Email  	= "";
				$LastName  	= "";
				$FirstName	= "";
				$Address  	= "";
				$City    	= "";
				$State    	= "";
				$Country  	= "";
				$Zip      	= "";
				$Comments 	= "";
				$IT      	= "";
				$CS      	= "";
				$Robotics 	= "";
				$Cyber  	= "";
				$Coffee 	= "";
				$Age    	= "";
				
				$found		= "";
			}
			
		}
	
	?>
	
	</body>
	
</html>