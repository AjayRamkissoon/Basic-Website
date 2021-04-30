<!-- ***********************************************************************************
  Page Name  : controller4.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #4 : Assignment #4
  Purpose    : This is controller4.php, it connects to MySQL Server where the database is 
				located and creates a table to store information
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>

	<head>
	
		<title>Controller 4</title>
		
	</head>
          
		<body>
			
			<?php
			//echo "<h3>I am going to connect to MySQL";
			
			//								Server				Username		Password	Database Name
			$connection = mysqli_connect("ocelot.aul.fiu.edu","fall20_aramk011","4932503","fall20_aramk011");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			else
			{
				//echo "<br>I have connected to MySQL<br>";
				$dbName = "fall20_aramk011";
				$db_selected = mysqli_select_db($connection, $dbName);
				
				if (!$db_selected)
				{
					die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
				}
				else
				{
					//echo "I selected database: " . $db_selected . " " . $dbName . "<br></h3>";
					
					$tableName = "customers";
					
					$query = mysqli_query( $connection, "SELECT * FROM $tableName");
					
					if(!$query)
					{
						echo "The " . $tableName . " does not exists<br>";
						
						echo "<br> Creating table : " . $tableName . "<br>";
						
						$sql = "CREATE TABLE " . $tableName ."(
								Telephone VARCHAR(20) NOT NULL,
								PRIMARY KEY(Telephone),
								FirstName VARCHAR(30),
								LastName VARCHAR(30),
								Email VARCHAR(30),
								Address VARCHAR(50),
								City VARCHAR(30),
								State VARCHAR(30),
								Country VARCHAR(30),
								Zip VARCHAR(30),
								Comments VARCHAR(200),
								IT VARCHAR(2),
								CS VARCHAR(2),
								Robotics VARCHAR(8),
								Cyber VARCHAR(5),
								Coffee VARCHAR(6),
								Age VARCHAR(8)
								)";
								
								$result = mysqli_query( $connection, $sql);
								
								if ($result)
								{
									echo "table " . $tableName . " Created<br>";
								}
								else
								{
									die ("Can\'t create " . $tableName . " " . mysqli_error() );
								}
					}
				}
			}
			
			$Telephone    = $_POST['Telephone'];
			$Email        = $_POST['Email'];
			$LastName     = $_POST['LastName'];
			$FirstName    = $_POST['FirstName'];
			$Address      = $_POST['Address'];
			$City         = $_POST['City'];
			$State        = $_POST['State'];
			$Country      = $_POST['Country'];
			$Zip          = $_POST['Zip'];
			$Comments     = $_POST['Comments'];
			$IT           = $_POST['IT'];
			$CS           = $_POST['CS'];
			$Robotics     = $_POST['Robotics'];
			$Cyber        = $_POST['Cyber'];
			$Coffee       = $_POST['Coffee'];
			$Age          = $_POST['Age'];    
		   
			$found = $_POST['found']; 
			
				   //verify that the data entered by the user is being received
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
		*/
		
			if ( $_POST['Save'] )
		    { 
				include('save.php');
		    }
		    else if ( $_POST['Find'] )
		    { 
				include('find.php');
		    }
		    else if ( $_POST['Modify'] )
		    {  
				include('modify.php');
		    }
		    else if ( $_POST['Delete'] )
		    { 
				include('delete.php');
		    }
			else if ( $_POST['Clear'] )
			{
				include('clear.php');
			}
		    else
		    { 
				echo "<br><h1> you pressed UNKNOWN button.</h1>";
		    }
			
			mysqli_close($connection);
			
			include("program4.php");
			
			?> 
		</body>
	
</html>