<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	if(!isset($_SESSION['score']))
	{
		$_SESSION['score']=0;
	}
	
	if($_POST )
	{
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next =$number+1;
		
		$query="SELECT * FROM questions";
		
		$results=$mysqli->query($query) or die ($mysqli->error.__LINE__);
		$total =$results->num_rows;
		
		
		$query="SELECT * FROM choices WHERE question_number=$number AND is_correct=1"; // doğru cevabı al
		
		$result =$mysqli->query($query) or die($mysqli->error.__LINE__);
		
		$row=$result->fetch_assoc();   //sonucu al
		
		$correct_choice =$row['id'];
		
		if($correct_choice==$selected_choice)//doğruysa skora 1 ekle
		{
			$_SESSION ['score']++;
		}
		
	if($number==$total)//sorular bitince final sayfasına yönlendir
		{
			header("Location: final.php");
			exit();}
	else
		{
			header("Location:question.php?n=".$next);// bitmediyse sorulara devam
		
		}
		
	}

?>

