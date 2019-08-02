
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta property="og:title" content="Welcome to UTF"></meta>
 		
		<meta property="og:description" content="" /> 
		
		<title>UFT | welcome</title> 

		<link rel="canonical" href="https://blog.gitea.io/2016/12/welcome-to-gitea/">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
		<link rel="stylesheet" href="https://blog.gitea.io/styles/main.css">

		<link rel="shortcut icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<link rel="icon" type="image/x-icon" href="https://blog.gitea.io/images/favicon.png">
		<style>
		 	body{background-color:mistyrose;}
		 	#headline{font-size:30px; font-weight:400;  margin-bottom:60px; color:gray; background:deepskyblue; top:-30px; 
		 		position:absolute; width:100%; padding:7px; padding-left:10%; text-align:center;}
		 	a{text-decoration:none; }
		 	.navbar-logo{position:absolute; left:5%; top:4px; border:1px solid white; box-shadow:5px 5px 15px black; z-index:10; 
		 		border-radius:50%; background:gray; font-weight:800; padding:20px; font-size:40px; font-color:black;} 
		 	#navMenu{position:relative; width:98%; padding:0px;  
		 		background:skyblue; z-index:5; border-top:6px solid deepskyblue; color:black; font-weight:600;}
		 	#navMenu div{background:Powderblue; padding:10px; margin-top:1px; color:blue;}
		 	#navMenu div:hover{background:deepskyblue; color:white;}
		 	#add-more-container{border:2px solid deepskyblue; z-index:7; background:silver; border-radius:5px; padding:4px; color:gray; position:absolute; left:2%; top:400px; width:16%; z-index:5; }
		 	#members-to-upgrade{ background:silver; border-radius:5px; padding:2px; color:gray; width:98%; }
		 	#add-more-container:hover{border:2px solid white; color:white} 
		 	#add-more-button{font-size:40px; color:gray; }
		 	#recomendr_div{position:absolute; left:2%; top:400px; width:16%; z-index:5;}
		 	#recomendr_div table{border-top:1px solid skyblue;}
		 	tr:nth-child(1) th{background:skyblue; } 
		 	table tr:nth-child(odd){background:linen;}
		 	table{background-color:gainsboro; }
		 	td,th{padding:4px; }
		 	section{margin-left:450px; margin-right:5%; background:green;}
			footer{background:deepskyblue; width:100%; text-align:center; z-index:30; float:bottom; padding:10px;} 
			#sidebarr{position:absolute; z-index:1; background:skyblue; width:20%; height:485px; padding-top:100px; }
			#content_wrapper{ margin-left:20%; }
			#sub_headline{ background:deepskyblue;  }
		</style> 
	</head>
	
	
	<body>  
		<nav class="navbar">
			<div class="container"> 
				<div class="navbar-background" id="navbar-background"></div>
			</div>
		</nav>
		<div id="sidebarr">
			<center><h1 style="position:absolute; background:deepskyblue; top:-25px; width:100%;">U T F</h1></center>
			<div class="navbar-menu" id="navMenu">	 
				<a class="navbar-item" href="/home"><div>  Home </div> </a> 
				<a class="navbar-item" href="/donations"><div>  Donations </div></a> 
				<a class="navbar-item" href="/districts"><div>  Districts </div></a> 
				<a class="navbar-item" href="payments"> <div> Payments </div> </a> 
				<a class="navbar-item" href="/agents"><div>  Agents </div></a> 
				<a class="navbar-item" href="/members"><div>  Members </div> </a>   
			</div> 
		</div> 
		<center> <h2 id="headline"><b>United Front for Transformation   </b></h2> </center> 
		<div id="content_wrapper">
			<div style="min-height:30px;"></div> 
			@yield('content')  
		</div> 
	
	
		@yield('footer')
		
	</body>
</html>


