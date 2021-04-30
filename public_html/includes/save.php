<!-- ***********************************************************************************
  Page Name  : save.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #4 : Assignment #4
  Purpose    : This is save.php, that saves the users data in MySQL table 
				when the save button is selected
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
	
	<body>
	
	<?php
/*	
			echo "Telephone: $Telephone"."<br>"; 
			echo "Email: $Email"."<br>";  
			echo "Last Name: $LastName"."<br>";  
			echo "First Name: $FirstName"."<br>";  
			echo "Address: $Address"."<br>";  
			echo "City: $City"."<br>";  
			echo "State: $State"."<br>";  
			echo "Country: $Country"."<br>";  
			echo "Zip: $Zip"."<br>";  
			echo "Comments: $Comments"."<br>";  
			echo "Major: $IT";  
			echo " $CS";
			echo " $Robotics";
			echo " $Cyber"."<br>";
			echo "Coffee: $Coffee"."<br>";
			echo "Age: $Age"."<br>"; 
		
			echo "Inserting record into table " . $tableName . "<br>";
*/			
			$Telephone = trim($Telephone);
			
			if(strlen($Telephone) > 0)
			{
				$sql = "INSERT INTO customers (
							Telephone,
							FirstName,
							LastName,
							Email,
							Address,
							City,
							State,
							Country,
							Zip,
							Comments,
							IT,
							CS,
							Robotics,
							Cyber,
							Coffee,
							Age
						)
						VALUES
						(
							'$Telephone',
							'$FirstName',
							'$LastName',
							'$Email',
							'$Address',
							'$City',
							'$State',
							'$Country',
							'$Zip',
							'$Comments',
							'$IT',
							'$CS',
							'$Robotics',
							'$Cyber',
							'$Coffee',
							'$Age'
						)";
			
				if (mysqli_query($connection, $sql))
				{
					//echo "<br> New record created successfully";
					
					$message = "<span style=\"color: blue;\">RECORD $Telephone ADDED</span><br\>";
				}
				else
				{
					//echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
					$message = "<span style=\"color: red;\">RECORD $Telephone EXISTS NOT ADDED</span><br\>";
				}
			}
			else
			{
				$message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
			}
	
	?>
	
	</body>
	
</html>