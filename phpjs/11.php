<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <ul>
    <script>
      list = new Array("홍준기","이예은","뚱이","이쁘니","쿄쿄");
      i = 0;
      while (i < list.length) {
        document.write("<li>"+list[i]+"</li>");
        i++;
      }
    </script>
    </ul>
    <h1>php</h1>
    <ul>
    <?php
      $list = array("홍준기","이예은","뚱이","이쁘니","쿄쿄");
      $i = 0;
      while ($i < count($list)) {
        echo "<li>".$list[$i]."</li>";
        $i++;
      }
     ?>
    </ul>
  </body>
</html>
