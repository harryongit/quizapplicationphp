<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap');

	body{
	background: #606c88;  
	background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}
	.start{
		font-family: 'Roboto Slab', serif;
		font-size:20px;
		border-radius:20px;
		background: #00C9FF;  
		background: -webkit-linear-gradient(to right, #92FE9D, #00C9FF); 
		background: linear-gradient(to right, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		color:#000;
	}
	.start:hover{
		transform: skew(11deg);
		-webkit-transform: skew(11deg);
		-moz-transform: skew(11deg);
	}
	.container{
		font-family:Verdana;
		font-size:24px;
		line-height: 1.6;
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
			<div class="container">
		
				<h2>Test Your PHP Knowledge</h2>
				<p>
					This is a multiple choice quiz to test your PHP Knowledge!!!
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choice</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">Start Quiz</a>

			</div>

	</main>



