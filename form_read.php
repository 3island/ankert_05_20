<?php
// データまとめ用の空文字変数
$str = '';
$array = array();

// ファイルを開く（読み取り専用）
$file = fopen('data/form.csv', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if ($file) {
  while ($line = fgetcsv($file)) {
    $str .="<tr>";
    // 取得したデータを`$str`に追加する
    for($i = 0; $i < count($line); $i++){
      $str .="<td>".$line[$i]."</td> \n";
      array_push($array, $line);
    }

  }
  $str .="</tr>";
}

// $string = implode(' ', $array);

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// `$str`に全てのデータ（タグに入った状態）がまとまるので，HTML内の任意の場所に表示する．
// var_dump($file);
// exit();



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>


<body>
  <fieldset>
    <legend>アンケート結果</legend>
    <a href="form_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>アンケート結果</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
  </fieldset>


  
  <canvas id="mychart-pie"></canvas>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
</body>


<script>
  const js_array = <?= json_encode($array) ?>;
  console.log(array);



  // パイチャート表
  var ctx = document.getElementById('mychart-pie');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Red', 'Green', 'Blue'],
      datasets: [{
        data: [10, 20, 30],
        backgroundColor: ['#f88', '#484', '#48f'],
        weight: 100,
      }],
    },
    options: {
      title: {
      display: true,
      text: '気温（8月1日~8月7日）'
    },
    scales: {
    yAxes: [{
      ticks: {
        suggestedMax: 40,
        suggestedMin: 0,
        stepSize: 10,
        callback: function(value, index, values){
        return  value +  '度'
      }
    }
  }]
},
  });

</script>




</html>