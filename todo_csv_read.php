<?php
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
$str = "";
// ファイルを開く処理
$file = fopen('data/todo.csv', 'r');
// ファイルロックの処理
flock($file, LOCK_EX);
// ファイル書き込み処理
// 1行づつ取り出す
if ($file) {
  while ($line = fgets($file)) {
    $str .="<tr><td>{$line}</trd></tr>";
  }
}
// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイル閉じる
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://localhost/05_32_MIYATA/style3.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">
  <title>CSVファイル書き込みリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>CSVファイル書き込みリスト（一覧画面）</legend>
    <a class=nnn href="todo_csv_input.php">入力画面に戻る</a>
    <table>
      <thead>
        <tr>
          <th>会社のお荷物情報</th>
        </tr>
      </thead>
      <tbody>
        <?=$str ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>