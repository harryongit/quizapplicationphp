<html>
<head>
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap');

	body{
	background: #606c88;  
	background: -webkit-linear-gradient(to right, #3f4c6b, #606c88); 
	background: linear-gradient(to right, #3f4c6b, #606c88); 

	}
	.button{
		font-family: 'Roboto Slab', serif;
		font-size:20px;
		border-radius:20px;
		background: #00C9FF;  
		background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF);  
		background: linear-gradient(to right, #92FE9D, #00C9FF); 
		color:#000;
	}
	.button:hover{
		transform: skew(11deg);
		-webkit-transform: skew(11deg);
		-moz-transform: skew(11deg);
	}
	.container{
		font-family:Verdana;
		font-size:35px;
		font-weight:bold;
		color:lightyellow;
		text-align:center;
	}
	</style>
</head>
<body>

	<header>
		<div class="container">
			<p>Our Quiz App</p>
		</div>
	</header>

	<main>
    	<div class = "menu">
			<a href="main.php" class="button">Take Quiz</a>
			<a class="button" onclick="admin()">Add questions</a>
		</div>
	</main>

<script>
function admin()
{
var un =prompt("Enter the Admin Username");
var pass =prompt("Enter the Admin Password");
if(un=="anonymousadmin")
{
	if(pass="anonymousadmin123")
	{
		window.location.href="add.php";
	}
	else{
	document.writeln("Error! You are not allowed...");
}
}
else{
	document.writeln("Error! You are not allowed...");
}
}
</script>

</body>
</html>
