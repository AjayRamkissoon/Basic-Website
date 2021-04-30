 <!-- ***********************************************************************************
  Page Name  : controller2.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #2 : Assignment #2
  Purpose    : this is controller2.php to be used to develop print out
			   the information submitted into the information boxes in pgm2.php
  Due Date   : 10/09/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
 <!DOCTYPE html>
 
 <html>
	<head>
		<title>controller2</title>
	</head>
	
	<body>
			<?php
	   //extract the data inputed by the user creating global php fields 
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
               
       //Determining what button was pressed                 
       if ( $_POST['Save'] )
       { 
          echo "You pressed the Save Button";
       }
       else if ( $_POST['Find'] )
       { 
          echo "You pressed the Find Button";
       }
       else if ( $_POST['Modify'] )
       {  
          echo "You pressed the Modify Button";
       }
       else if ( $_POST['Delete'] )
       { 
          echo "You pressed the Delete Button";
       }
       else
       { 
          echo "<br><h1> You pressed an UNKOWN button</h1>";   
       }
		?>
		
	</body>

</html>