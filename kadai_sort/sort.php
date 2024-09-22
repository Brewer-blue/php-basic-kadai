<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      

      function sort_2way($array, $order) {
        $nums = [15, 4, 18, 23, 10];   
          if ($order) {
              echo '昇順にソートします。<br>';
              sort($array);
          } else {
              echo '降順にソートします。<br>';
              rsort($array);
          }
          foreach ($array as $nums) {
              echo $nums . '<br>';
          }
      }

      $array = [15, 4, 18, 23, 10];
      
      sort_2way($array, TRUE);
      sort_2way($array, FALSE);
      ?>
  </p>
</body>

</html>