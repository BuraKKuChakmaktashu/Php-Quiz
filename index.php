<?php include 'database.php'; ?>
<?php

	$query="SELECT * FROM questions";

	$results =$mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$total =$results->num_rows;
?>

<html>

	<head>
	<title> Quiz</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>
<body>
		<header>
			<div class="container">
				<h1 > Quiz </h1>
				<img src="M.jpg" alt="Devil's horn" style="width:500px; height:600px; float:right; margin-left:20px;>
			</div>	
		</header>
		<main>
			<div class="container">
				<h2> Test Your Metal Knowledge</h2>
				<p>Multiple Choice quiz about metal groups</p>
				<ul>
					<li><strong>Number of Questions : </strong> <?php echo $total; ?></li>            
					<li><strong>Estimated time : </strong> <?php echo $total * 1; ?> Minutes</li>
				</ul>
				<a href ="question.php?n=1" class="start">Start The Quiz !</a>
			</div>
		</main>
		<footer>
			<div class="container">
				Burak Çakmaktaş 200017987
			</div>
		</footer>



</body>
</html>