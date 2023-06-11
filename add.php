<?php  include 'db.php';
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

	$query = "INSERT INTO questions (";
	$query .= "question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection,$query);
	
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}		
				$query = "INSERT INTO options (";
				$query .= "question_number,is_correct,coption)";
				$query .= " VALUES (";
				$query .=  "'{$question_number}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($connection,$query);
				

				if($insert_row){
					continue;
				}
				else
				{
					die("2nd Query for Choices could not be executed" . $query);
					
				}
			}
		}
		$message = "Question has been added successfully";
	}
}
		$query = "SELECT * FROM questions";
		$questions = mysqli_query($connection,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;
?>
<html>
<head>
	<title>Quiz App</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body onload="admin()">

	<header>
		<div class="container">
				<p>Our Quiz App</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Add A Question &#10024;</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>
								
				<form method="POST" action="add.php">
						<p>
							<label>Question Number:</label>
							<input type="number" name="question_number" value="<?php echo $next;  ?>">
						</p>
						<p>
							<label>Question Text:</label>
							<input type="text" name="question_text">
						</p>
						<p>
							<label>Choice 1:</label>
							<input type="text" name="choice1">
						</p>
						<p>
							<label>Choice 2:</label>
							<input type="text" name="choice2">
						</p>
						<p>
							<label>Choice 3:</label>
							<input type="text" name="choice3">
						</p>
						<p>
							<label>Choice 4:</label>
							<input type="text" name="choice4">
						</p>
						<p>
							<label>Choice 5:</label>
							<input type="text" name="choice5">
						</p>
						<p>
							<label>Correct Option Number</label>
							<input type="number" name="correct_choice">
						</p>
						<input type="submit" name="submit" value ="submit">
				</form>
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
		window.stop();
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