<?php 
include 'db.php';
session_start();
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
?>
<html>
<head>
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	body{
		background: #c2e59c;  
		background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c); 
		background: linear-gradient(to right, #64b3f4, #c2e59c); 
	}
	.container1{
		font-family:Verdana;
		font-size:35px;
		font-weight:bold;
		color:white;
		text-align:center;
	}
	</style>
</head>
<body>
	<header>
		<div class="container1">
		<p>Our Quiz App</p>
		</div>
	</header>
	<main>
			<div class="container">
				<h2 style="font-size:30px;">Your Result &#128519;</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; echo "/"; echo $total_questions; ?> </p>
			</div>
	</main>
			<?php
				$score_cookien = "score";
				$score_cookiev = $_SESSION['score'];
				setcookie($score_cookien, $score_cookiev, time() + (86400 * 30), "/"); 
				 unset($_SESSION['score']);
			?>
</body>
</html>