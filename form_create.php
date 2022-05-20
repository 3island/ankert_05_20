<?php
// var_dump($_POST);
// exit();

$q_1 = $_POST['age'];
$q_2 = $_POST['gender'];
$q_3 = $_POST['q_3'];
$q_4 = $_POST['hight&low'];
$q_5 = $_POST['q_5'];
$q_6 = $_POST['q_6'];
$q_7 = $_POST['q_7'];

// var_dump($_POST);
// exit();


$write_data = "{$q_1} {$q_2} {$q_3} {$q_4} {$q_5} {$q_6} {$q_7} \n";
$file = fopen('data/form.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

header("Location:form_read.php");