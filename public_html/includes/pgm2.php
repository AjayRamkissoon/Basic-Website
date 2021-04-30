 <!-- ***********************************************************************************
  Page Name  : pgm2.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #2 : Assignment #2
  Purpose    : This is pgm2.php, the main page for program 2 that will
			   call the mainMenu.php and Ramkissoon_header.php
  Due Date   : 10/09/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->

<!DOCTYPE html>

<html>
	
	<head>
	
		<title> RamkissoonApgm2</title>
		
	</head>
	
		<body>
			<?php include('Ramkissoon_header.php'); ?>	
			
			<?php include('mainMenu.php'); ?>
					
					<!-- Start of Table -->
			 <br>
			   <div>
				  <form action="controller2.php" method="post" >
					 <br>					
					 <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
						<tr>
						   <td style="width: 5%; text-align: left;">Telephone &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Telephone" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Email &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Email" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Last Name &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="LastName" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">First Name &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="FirstName" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Address &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Address" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">City &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="City" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">State &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="State" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Country &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Country" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Zip &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Zip" value="" style="width: 100%;">
						   </td>
						</tr>
						
						<tr><td> &nbsp; </td> </tr> 
						
					<!-- TextArea Input -->	
					<tr>
					   <td style="width: 5%; text-align: left;">Comments &nbsp; </td>
					   <td style="width: 20%;">
						 <textarea name="Comments" rows="5" cols="42">
						 </textarea><br><br>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Input Checkboxes -->	
					<tr>
					  <td style="width: 5%; text-align: left">Major &nbsp; </td>
					  <td style="width: 20%;">
						<table>
						  <tr>                                    
							<td><input type="checkbox" name="IT" 
							value="IT" > IT &nbsp; &nbsp; &nbsp; </td>
								
							<td><input type="checkbox" name="CS" 
							value="CS" > CS &nbsp; &nbsp; &nbsp;  </td>
							  
							<td><input type="checkbox" name="Robotics" 
							value="Robotics" > Robotics &nbsp;</td>

							<td><input type="checkbox" name="Cyber" 
							value="Cyber" > Cyber  </td>
						  </tr>      
						</table>
					  </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Input Radio Buttons-->	
					<tr>
					   <td style="width: 5%; text-align: left;">Coffee &nbsp; </td>
					   <td style="width: 20%; text-align: left;">
						  <table>
							 <tr>
							   <td text-align: left> 
								 <input type="radio"  
										name="Coffee" value="Light" > Light&nbsp;
								 <input type="radio"  
										name="Coffee" value="Cuban" > Cuban&nbsp;
								 <input type="radio"  
										name="Coffee" value="Sweet" > Sweet &nbsp; &nbsp; &nbsp;
								 <input type="radio"  
										name="Coffee" value="Decaf" > Decaf
								</td>
							 </tr>
						  </table>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Dropdown Input -->	
					<tr>
					   <td style="width: 5%; text-align: left;">Age &nbsp; </td>
					   <td style="width: 20%; text-align: left;">
						   <select name="Age" style="width: 100%"size="1";>
							  <option value="Under_20" >Under 20   </option>
							  <option value="20-30"    >20-30      </option>
							  <option value="31-40"    >31-40      </option>
							  <option value="41-50"    >41-50      </option>
							  <option value="51-60"    >51-60      </option>
							  <option value="Above_60" >Above 60   </option>
						   </select>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Display the Word $message -->	
					<tr>
					   <td style="width: 15%;"> </td>            
					   <td style="width: 20%;" align=center>                
						   <?php echo $message ?>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Submit Buttons -->	
					<tr>
					   <td style="width: 15%;"> </td>            
					   <td style="width: 20%;" align=center> 
						  <input type="submit" name="Save"   value="Save">&nbsp; &nbsp;
						  <input type="submit" name="Find"   value="Find">&nbsp; &nbsp;
						  <input type="submit" name="Modify" value="Modify">&nbsp; &nbsp;
						  <input type="submit" name="Delete" value="Delete">&nbsp; &nbsp;
						  <input type="reset"  name="ClearScreen"  value="ClearScreen">
						  <input type="hidden" name="found"  value="<?php echo $found ?>" >   <!--this line is a hidden debuging variable-->
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					</table>
					
				  </form>
				  
				</div>
				
			<?php include('mainMenu.php'); ?>
			
		</body>
		
</html>
	