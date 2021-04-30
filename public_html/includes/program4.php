 <!-- ***********************************************************************************
  Page Name  : program4.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #4 : Assignment #4
  Purpose    : This is program4.php, the main page for program 4 that will
			   call the mainMenu.php and Ramkissoon_header.php
  Due Date   : 11/17/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->

<!DOCTYPE html>

<html>
	
	<head>
	
		<title> RamkissoonApgm4</title>
		
	</head>
	
		<body>
			<?php include('Ramkissoon_header.php'); ?>	
			
			<?php include('mainMenu.php'); ?>
					
					<!-- Start of Table PHP Updated -->
			 <br>
			   <div>
				  <form action="controller4.php" method="post" >
					 <br>					
					 <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
						<tr>
						   <td style="width: 5%; text-align: left;">Telephone &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Telephone" value="<?php echo $Telephone ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Email &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Last Name &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="LastName" value="<?php echo $LastName ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">First Name &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="FirstName" value="<?php echo $FirstName ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Address &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Address" value="<?php echo $Address ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">City &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="City" value="<?php echo $City ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">State &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="State" value="<?php echo $State ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Country &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Country" value="<?php echo $Country ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr>
						   <td style="width: 5%; text-align: left;">Zip &nbsp; </td>
						   <td style="width: 20%;">
							  <input type="text" name="Zip" value="<?php echo $Zip ?>" style="width: 100%;">
						   </td>
						</tr>
						
						<tr><td> &nbsp; </td> </tr> 
						
					<!-- TextArea Input PHP Updated-->	
					<tr>
					   <td style="width: 5%; text-align: left;">Comments &nbsp; </td>
					   <td style="width: 20%;">
						 <textarea name="Comments" rows="5" cols="42">
							<?php echo $Comments;?>
						 </textarea><br><br>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Input Checkboxes PHP Updated-->	
					<tr>
					  <td style="width: 5%; text-align: left">Major &nbsp; </td>
					  <td style="width: 20%;">
						<table>
						  <tr>                                    
							<td><input type="checkbox" name="IT" 
							<?php if ($IT == "IT") echo checked;?> value="IT" > IT &nbsp; &nbsp; &nbsp; </td>
								
							<td><input type="checkbox" name="CS" 
							<?php if ($CS == "CS") echo checked;?> value="CS" > CS &nbsp; &nbsp; &nbsp;  </td>
							  
							<td><input type="checkbox" name="Robotics" 
							<?php if ($Robotics == "Robotics") echo checked;?> value="Robotics" > Robotics &nbsp;</td>

							<td><input type="checkbox" name="Cyber" 
							<?php if ($Cyber == "Cyber") echo checked;?> value="Cyber" > Cyber  </td>
						  </tr>      
						</table>
					  </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Input Radio Buttons PHP Updated-->	
					<tr>
					   <td style="width: 5%; text-align: left;">Coffee &nbsp; </td>
					   <td style="width: 20%; text-align: left;">
						  <table>
							 <tr>
							   <td text-align: left> 
								 <input type="radio" <?php if ($Coffee == "Light") echo "checked"; ?>
										name="Coffee" value="Light" > Light&nbsp;
								 <input type="radio" <?php if ($Coffee == "Cuban") echo "checked"; ?> 
										name="Coffee" value="Cuban" > Cuban&nbsp;
								 <input type="radio" <?php if ($Coffee == "Sweet") echo "checked"; ?> 
										name="Coffee" value="Sweet" > Sweet &nbsp; &nbsp; &nbsp;
								 <input type="radio" <?php if ($Coffee == "Decaf") echo "checked"; ?>
										name="Coffee" value="Decaf" > Decaf
								</td>
							 </tr>
						  </table>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Dropdown Input PHP Updated-->	
					<tr>
					   <td style="width: 5%; text-align: left;">Age &nbsp; </td>
					   <td style="width: 20%; text-align: left;">
						   <select name="Age" style="width: 100%"size="1";>
							  <option value="Under_20" <?php if ($Age == "Under_20") echo selected ?> >Under 20   </option>
							  <option value="20-30"    <?php if ($Age == "20-30")    echo selected ?> >20-30      </option>
							  <option value="31-40"    <?php if ($Age == "31-40")    echo selected ?> >31-40      </option>
							  <option value="41-50"    <?php if ($Age == "41-50")    echo selected ?> >41-50      </option>
							  <option value="51-60"    <?php if ($Age == "51-60")    echo selected ?> >51-60      </option>
							  <option value="Above_60" <?php if ($Age == "Above_60") echo selected ?> >Above 60   </option>
						   </select>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Display the Word $message PHP Updated-->	
					<tr>
					   <td style="width: 15%;"> </td>            
					   <td style="width: 20%;" align=center>                
						   <?php echo $message ?>
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					<!-- Submit Buttons PHP Updated-->	
					<tr>
					   <td style="width: 15%;"> </td>            
					   <td style="width: 20%;" align=center> 
						  <input type="submit" name="Save"   value="Save">&nbsp; &nbsp;
						  <input type="submit" name="Find"   value="Find">&nbsp; &nbsp;
						  <input type="submit" name="Modify" value="Modify">&nbsp; &nbsp;
						  <input type="submit" name="Delete" value="Delete">&nbsp; &nbsp;
						  <input type="submit" name="Clear"  value="Clear">
						  <input type="hidden" name="found"  value="<?php echo $found ?>" >   <!--this line is a hidden debuging variable-->
					   </td>
					</tr>
					
					<tr><td> &nbsp; </td> </tr> 
					
					</table>
					
				  </form>
				  
				</div>
				
			<font face="Times New Roman" color=blue size=5><center>Ajay Ramkissoon</center></font>
			
		</body>
		
</html>
	