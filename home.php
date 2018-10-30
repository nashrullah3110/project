<?php
			$logerr='';
			$conn=mysqli_connect('localhost','root','','school');
			if(!$conn)
				{
					die("connection failed");
				}
			else
				{
					$sql="select message from student;";
                    $result=mysqli_query($conn,$sql);
                           if($row=mysqli_fetch_assoc($result))
						{
							$logerr=$row['message'];
						}
                       else
                       {
                        $logerr="No Message";
                       }
				} 
			?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
	<style type="text/css">
		/*font-family: 'Abel', sans-serif;
font-family: 'Montserrat', sans-serif;
font-family: 'Patua One', cursive;
*/
			*{
				padding: 0;
				margin: 0;

			}	
			body
			{
				background-color: #000;
			}
			.bg-image
			{
				width: 100%;
				height: 600px;
				background: url('building.jpg') no-repeat 50% 20%;
			}
			.bw-gradient
			{
				width: 100%;
				height: 600px;
				
				position: absolute;
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&1+5,0+100 */
background: -moz-linear-gradient(top, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 5%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 0%,rgba(0,0,0,1) 5%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(0,0,0,1) 0%,rgba(0,0,0,1) 5%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
			}
			.container
			{
				 width: 960px;
				 height: 600px;
				 position: relative;
				 margin: 0 auto;
			}
			.header
			{
				width: 960px;
				padding: 20px;
			}
			nav>ul
			{
				position: absolute;
				right: 150px;
			}
			nav>ul>li
			{
				list-style: none;
				float: left;
				height: 40px;
				line-height: 40px;
			}
			nav>ul>li>a
			{
				text-decoration: none;
				font-family: 'Abel', sans-serif;
				color: #fff;
				font-size: 14px;
				font-weight: bold;
				padding: 0 20px 0 20px;
			}
			.btn
			{
				width: 130px;
				height: 40px;
				background: rgb(191,30,45);
				font-size: 16px;
				font-weight: bold;
				font-family: 'Abel', sans-serif;
				border: none;
				border-radius: 5px;
				color: #fff;
				position: absolute;
				right: 0;

			}
			.logo
			{
				height: 200px;
				width: 200px;
				padding-left: 180px;
			}
			.brand-qoute
			{
				color: #fff;
				font-family: 'Montserrat', sans-serif;
				font-size: 50px;
				padding-left: 20px;
				position: relative;
				top: 100px;
			}
			.para
			{
				width: 500px;
				font-family: 'Montserrat', sans-serif;
				color: #fff;
				position: relative;
				top: 120px;
				padding-left:20px; 
			}
			.middle
			{
				margin-top: 12px;
				margin-left: 10px;
				height: 350px;
				width: 1330px;
				background: rgb(191,30,45);
			}
			.skew
			{
				float: right;	
				height: 350px;
				width: 1080px;
			}
		.trap
		{
			background: rgb(191,30,45);
			margin-left: 10px;
			margin-top: 10px;
			width: 425px;
			height: 300px;
			
			float: left;
		}
		.trap h1
		{
			margin-left: 20px;
			font-size: 25px;
			margin-top: 18px;
			font-family: 'Abel', sans-serif;
			color: white;
		}
		.trap p
		{
			margin-left: 15px;
			font-size: 20px;
		
			font-family: 'Abel', sans-serif;
			color: white;	
		}
		.bet
		{
			background: rgb(191,30,45);
			margin-right: 10px;
			margin-top: 10px;
			width: 430px;
			height: 300px;
			
			float: right;
		}
		.bet h1
		{
			margin-left: 20px;
			font-size: 25px;
			margin-top: 18px;
			font-family: 'Abel', sans-serif;
			color: white;	
		}
		.bet p
		{
			margin-left: 15px;
			font-size: 20px;
		
			font-family: 'Abel', sans-serif;
			color: white;	
		}
		.last
		{
			background: rgb(191,30,45);
			margin-right: 12px;
			margin-top: 10px;
			margin-left: 446px;
			width: 450px;
			height: 300px;
			
		}
		.last h1
		{
			margin-left: 20px;
			font-size: 25px;
			
			font-family: 'Abel', sans-serif;
			color: white;	
		}
		.last p
		{
			margin-left: 15px;
			font-size: 20px;
		
			font-family: 'Abel', sans-serif;
			color: white;		
		}
		.footer
		{
			
			margin-top: 10px;
			margin-left: 10px;
			height: 250px;
			width: 1330px;
			background: #000;

		}
		.footer h1
		{
			font-family: 'Montserrat', sans-serif;
			color: white;
			margin-top: 10px;

		}
		.footer1
		{
			background:  rgb(191,30,45);
			height: 40px;
			width: 1330px;
		}
		.footer2
		{
			margin-top: 80px;
			height: 30px;
			width: 1330px;
			background:  rgb(191,30,45);
		}
		.line
		{
			margin-top: 10px;
			margin-left: 120px;
			height: 1px;
			width: 1080px;
			background: rgb(191,30,45);
		}
		.footer h2
		{
			margin-top: 10px;
			font-family: 'Abel', sans-serif;
			color: white;
		}
		#message
		{
			height: 200px;
			width: 300px;
			float: right;
			background: rgb(191,30,45);
			color: white;
		}
		#message p
		{
			color: black;
			font-size: 25px;
		}
	</style>
</head>
<body>
<div class="bg-image">
	<div class="bw-gradient">
		<img class="logo" src="sitelogo.png">
	</div>
	<div class="container">
		
		<div class="header">
			<nav>
				<ul>
					<li><a href="landing.html">Landing Page</a></li>
					<li><a href="about.html">About</a></li>
					
					<li><a href="faculty.html">Faculty</a></li>
				</ul>
			</nav>
			<button class="btn" onclick="location.href='contact.html'">Contact   Us</button>
		</div><br><br><br><br><br>
		<h1 class="brand-qoute">Hogwarts</h1>
		<h2 class="brand-qoute" style="color: rgb(191,30,45);">High School</h1>
		<p class="para">You are capable of more than you know. Choose a goal that seems right for you and strive to be the best, however hard the path. Aim high. Behave honorably. Prepare to be alone at times, and to endure failure. Persist! The world needs all you can give.</p>
		<div id="message">
			<center><h2><u>Message</u></h2><br><div class=""><p class="err"><?php echo $logerr;  ?></p></div></center>
		</div>
	</div>
</div>
<div class="middle"><img class="skew" src="skew.png"></div>
<div class="trap"><h1>we turn ideas into works of art</h1><br><br><br><p>For each project we establish relationships with parents who we know will help us create added value for your project.As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other.</p></div>
<div class="bet"><h1>Great Sculpture:<br>Ancient to Contemporary</h1><br><br><p>From the beginings of christianity to the rise of the Renaissance,travel through a millenium of great monuments that conjure imperial courts,Gothic cathedrals,and princely  castles.</p></div>
<div class="last"><h1>Construction of sports facelities</h1><br><br><p>With a steadily rising global population, associated demographic shifts, and the environmental impacts of resource consumption icreasing exponentially.</p></div>
<div class="footer">
	<div class="footer1"></div>
	<center><h1>CONTACT US</h1></center>
	<div class="line"></div>
	<center><h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMail:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     hogwartsschool@gmail.com</h2></center>
	<center><h2>Call Us:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     +91-022-3535-3535</h2></center>
	<center><h2>&nbsp&nbsp&nbsp&nbspAddress:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     Park Street, Esplanade</h2></center>
	<div class="footer2"></div>
</div>
</body>
</html>