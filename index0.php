<?php
 $conn = mysqli_connect("localhost","root",3260406);
 mysqli_select_db($conn, "opentutorials");
 $result = mysqli_query($conn, "SELECT * FROM topic");
 ?>


<! DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body id="target">
	<header>
	<img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAyMDA3MTBfMjY0%2FMDAxNTk0MzM4NTI1NjE3._EDFg009LvM-6m2FMkAUPGoFA2cucvRF5kfeYQQW12Ug.HSk-guMrDlBMPvefhNgf8fjmjDx1ypdccCUBPHs3HYEg.JPEG.tyuii3%2F1594338524328.jpg&type=sc960_832"
	width="100px" alt="멍멍">
	<h1><a href="http://localhost/index.php">JavaScript</a></h1>
	</header>
	<nav>
	<ol>
		<?php
		while($row = mysqli_fetch_assoc($result)){
			 echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
		}
		 ?>
	</ol>
	</nav>
	<div id="control">
		<input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
		<input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
		<a href="http://localhost/write.php">쓰기</a>
	</div>
	<article>
		<?php
		if(empty($_GET['id'])===false){
			$sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			echo '<h2>'.$row['title'].'</h2>';
			echo $row['description'];
		}
		 ?>
	</article>
<body>
</html>
