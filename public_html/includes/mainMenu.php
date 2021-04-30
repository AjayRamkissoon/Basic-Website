 <!-- ***********************************************************************************
  Page Name  : mainMenu.php 
  Author     : Ajay Ramkissoon 
  Your URL   : ocelot-aul.fiu/~aramk011
  Course     : CGS 4854-U04 WEB-Online Fall 2020
  Program #2 : Assignment #2
  Purpose    : This is mainMenu.php to be called by any program
			   and will show a default main menu for all programs
  Due Date   : 10/09/2020 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Ajay Ramkissoon }..........
 ******************************************************************************* -->
 <! DOCTYPE html>
 
<html>

	<head> <!-- here goes browser information, keywords for web searching -->

	  <title>CSS dropdown menu</title>
	
		<style type="text/css">
			nav ul ul 
			{
				display: none;
			}
			
			
			nav ul li:hover > ul 
			{
				display: block;
			}
			
			  
			nav ul 
			{
				background: #efefef; 
				background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
				background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
				background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
				box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
				padding: 0 20px;
				border-radius: 10px;  
				list-style: none;
				position: relative;
				display: inline-table;
			}
			
				
			nav ul:after 
			{
					content: ""; clear: both; display: block;
		}
					
					
			nav ul li 
			{
					float: left;
			}
			
			
		nav ul li:hover 
			{
					background: #4b545f; 
					background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
					background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
					background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
			}
					
					
			nav ul li:hover a 
			{
					color: #ffffff; /*=white#ff00ff; /*#fff; */ /*menu name color */
			}
					
					
			nav ul li a 
			{
					display: block; padding: 25px 40px;
					color: red; /* main menu name #757575;*/ text-decoration: none;
		}
					
					
			nav ul ul 
			{
					background: lightslategray; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
					position: absolute; top: 100%;
			}
			
			
		nav ul ul li 
			{
			float: none; 
			border-top: 1px solid white; /*#6b727c; */ /*border top */
			border-bottom: 1px solid #575f6a; /*border down */
			position: relative;
		}
		
		
			nav ul ul li a 
			{
					padding: 10px 40px;
					color: #fff;
			}	
					
					
			nav ul ul li a:hover 
			{
					background: blue; /* #4b545f; */ /*submenu background color*/
			}
					
					
			nav ul ul ul 
			{
					position: absolute; left: 100%; top:0;
			}


		</style>
		
	</head>
	
	<body>
	
		<nav align = "center">
			<ul>
				<li><a href="http://ocelot.aul.fiu.edu/~aramk011/index.html">Home</a></li>
				<li><a href="#">Program 1</a>
					<ul>
						<li><a href="http://ocelot.aul.fiu.edu/~aramk011/includes/page1.html">page1</a></li>
						<li><a href="http://ocelot.aul.fiu.edu/~aramk011/includes/page2.html">page2</a></li>
						<li><a href="http://ocelot.aul.fiu.edu/~aramk011/includes/page3.html">page3</a></li>
						<li><a href="http://ocelot.aul.fiu.edu/~aramk011/includes/page4.html">page4</a></li>
						<li><a href="http://ocelot.aul.fiu.edu/~aramk011/index.html">Home</a></li>
					</ul>
				</li>	
				<li><a href="pgm2.php">Program 2</a></li>
				<li><a href="program4.php">Program 4</a></li>
			</ul>
		</nav>
		
	</body>

</html>
 