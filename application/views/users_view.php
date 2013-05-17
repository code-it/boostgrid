<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>Welcome to boostGrid</title>
	
	<!-- load css -->	
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/bootstrap.css" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/grid.css" />	
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/style.css" />				 
	
	<!-- load js -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/grid.js"></script>
	
	<title>boostGrid</title>			
	
</head>

<body>
	<div id="wrap">
		<div class="navbar navbar-inverse">
		  <div class="navbar-inner">
		    <div class="container">		 		 		      
		      <a class="brand" href="#">boostGrid</a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">contact</a></li>
					<li><a href="#">about</a></li>
				</ul>		 
		    </div>
		  </div>
		</div>
		
		
		<div class="container">				
			<div class="hero-unit">
				<h3 class="title">Users</h3>
				
				<script>	
					$(document).ready(function() {		
					    gridRender('user');
					}); 
				</script>
				
				<div class="grid">										
					<table id="user" class="grid" action="<?php echo base_url();?>users/ajaxGetUsers" dir="ltr">				
						<tr>																
							<th col="id" type="text">ID</th>
							<th col="name" type="text">User name</th>
							<th col="password"  type="text">Password</th>		
							<th col="email" type="date">Email</th>
						</tr>										
					</table>	
				</div>
				
			</div>
			<div id="push"></div> 	
		</div>	
		
	</div>
	
	
	<!-- the footer of the page --> 
	<div id="footer">
	  <div class="container">
	    <p class="muted credit">Powered by <a href="http://www.computech-sy.com" target="_blank">CompuTech Group</a>.</p>
	  </div>
	</div>	
</body>

</html>