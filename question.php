<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	$number = (int)$_GET['n'];
	
	$query="SELECT * FROM questions WHERE question_number= $number ";
	
	$result =$mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question=$result->fetch_assoc();
	
	
	$query="SELECT * FROM choices WHERE question_number= $number ";
	
	$choices =$mysqli->query($query) or die($mysqli->error.__LINE__);
	
	
	
?>

<html>
	<head>
	<title> Quiz</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>
<body>

		<header>
			<div class="container">
			</div>	
		</header>
		<main>
			<div class="container">
				<p class="question">
					<?php echo $question['text']; ?>
				</p>
				
				<form method="post" action="process.php">
					<ul class="choices">
						<?php while($row =$choices->fetch_assoc()): ?>
							<li><input name ="choice" type="radio" value="<?php echo $row['id']; ?> " /> <?php echo $row ['text']; ?> </li>
						<?php endwhile; ?>
					</ul>
					<input type="submit" value="Submit" />
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
			</div>
		</main>
		<footer>
			<div class="container">
				Burak Çakmaktaş 200017987
			</div>
		</footer>



</body>
</html>