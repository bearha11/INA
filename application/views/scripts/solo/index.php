
<style>
	
	body{
		padding:0px;
		margin:0px;
	}
	
   #home
    {
			z-index: 20;
			 margin-left: auto;
			margin-right: auto;
			margin-top:50px;
			width:300px;
			background-color:pink;
		
    }

	 #logo
    {
		margin-left: auto;
		margin-right: auto;
		width: 300px;
		height: 300px;	
    }
	
	#back
    {
		z-index: 10;
		position: absolute;
		height:100%;
		width:100%;
		
    }
	
	.vertical-menu {
		margin-left: auto;
		margin-right: auto;
		width: 200px; /* Set a width if you like */
		;
	}

	.vertical-menu a {
		background-color: black; /* Grey background color */
		color: white; /* Black text color */
		display: block; /* Make the links appear below each other */
		padding: 12px; /* Add some padding */
		text-decoration: none; /* Remove underline from links */
		margin-bottom:5px;
		margin-top:5px;
		border-radius:20px;
	}

	.vertical-menu a:hover {
		background-color: #ccc; /* Dark grey background on mouse-over */
	}

	.vertical-menu a.active {
		background-color: #4CAF50; /* Add a green color to the "active/current" link */
		color: white;
	}
	
  
</style>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
		<div id="home">
			
					<!--<img src="../application/image/logo.png" id="logo" alt="Mountain View">-->
				<div id="menu">
					<div class="vertical-menu">
						<dl>
							<?php foreach ($this->entries as $entry): ?>
							<dt><?php echo $this->escape($entry->email) ?></dt>
							<dd><?php echo $this->escape($entry->comment) ?></dd>
							<?php endforeach ?>
						</dl>
					</div>			
				</div>
				
		</div>
		
	
	
	<!--	<img src="../application/image/back_ground.jpg" id="back" alt="Mountain View">-->

		
</body>

