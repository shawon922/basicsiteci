<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>

	<style type="text/css">
		
		*{margin:0; padding:0;}

		body{
			font-family:Arial, Helvetica, sans-serif;
			font-size:14px;
			line-height:20px;
			color:#000000;
			margin:20px;
		}

		#container{
			width:960px;
			margin:0 auto;
			display:block;
			overflow:hidden;
			background:#DDDDDD;
			padding:15px 0px;
		}

		#line{
			width:960px;
			height:1px;
			color:#333333;
		}

		#nav{
			background:#999999;
			overflow:hidden;
			margin:0 auto;
			width:960px;
		}

		
		#nav ul{
			margin:0;
			padding:0;
			list-style:none;
		}

		#nav ul li{
			float:left;
			border-right:1px solid #333333;
		}

		#nav ul li a{
			display:block;
			color:#000000;
			padding:10px 15px;
			text-decoration:none;
		}

		#nav ul li a:hover{
			color:#006600;
			background:#CCCCCC;
			font-weight:bold;
			letter-spacing:3px;
			text-shadow:#000000 1px 1px;
		}
	
	</style>
</head>
<body>

<div id="container">
	
	<div id="header">
		<div id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>

			</ul>
		</div>
	</div>

	<div id="body">
		<div id="main_content">
			<h2>Home Page</h2>
			<p>Welcome to my awesome site</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
	</div>

	<div id="footer">
		<p>Copyright &copy;2014. All Rights Reserved</p>
	</div>
</div>

</body>
</html>