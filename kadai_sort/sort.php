<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
         // ソート関数　並べ替えたい配列,ソート方向（TRUE：昇順/FALSE：降順）
        function sort_2way($array, $order) {
          if($order === TRUE){
            echo '昇順にソートします。<br>';
            sort($array);

          }else{
            echo '降順にソートします。<br>';
            rsort($array);
          }
          // ソートした配列のデータを1行ずつ表示する 
          foreach ($array as $value) {
            echo "{$value}<br>" ;
          }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順ソート呼び出し
        sort_2way($nums, TRUE);

        // 降順ソート呼び出し
        sort_2way($nums, FALSE);

      ?>
    </p>

  </body>

</html>