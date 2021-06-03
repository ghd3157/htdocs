<?php
require_once('conn.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
  </head>
  <body id="body" class="green">
    <header>
      <h1><a href="index.php">생활코딩JavaScript</a></h1>
    </header>
    <nav>
      <ol>
        <?php
        $sql = "SELECT * FROM topic";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
          echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
        }
        ?>
      </ol>
    </nav>
    <div id="content">
      <article>
      <?php
      if(empty($_GET['id'])){
        echo "Welcome";
      }else{
        $id= mysqli_real_escape_string($conn,$_GET['id']);
        $sql = "SELECT topic.id, topic.title, topic.description, user.name, topic.created FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$id;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
      ?>
        <h2><?=htmlspecialchars($row['title'])?></h2>
        <div><?=htmlspecialchars($row['created'])?>|<?=htmlspecialchars($row['name'])?></div>
        <div><?=htmlspecialchars($row['description'])?></div>
        <h2></h2>
      <?php
      }
      ?>

      </article>
      <input type="button" name="name" value="White"
      onclick="document.getElementById('body').className=''">
      <input type="button" name="name" value="Green"
      onclick="document.getElementById('body').className='green'">
      <a href="write.php">쓰기</a>
    </div>
  </body>
</html>
