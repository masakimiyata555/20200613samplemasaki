<?php
    // var_dump($_POST);
    // exit();

// データの受取
$todo = $_POST["todo"]; // データ受け取り
$deadline = $_POST["deadline"];
$information = $_POST["information"];
$contact = $_POST["contact"];
$email = $_POST["email"];


// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_data = "{$todo} {$deadline} {$emai} {$information} {$contact}\n";

// ファイルを開く処理
$file = fopen('data/todo.csv', 'a');
// ファイルロックの処理
flock($file, LOCK_EX);
// ファイル書き込み処理
// var_dump($_POST);
//    exit();
fwrite($file, $write_data);
// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイルを閉じる処理
fclose($file);
// 入力画面へ移動
 header("Location:todo_csv_input.php");

// txtファイルへの書き込みのみ行うので表示する画面は存在しない