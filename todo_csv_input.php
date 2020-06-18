<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSVファイル書き込（入力画面）</title>
      <style>
          legend {
            text-align:center
            }

            div{padding: 10px;font-size:20px;
            }

           
            
      </style>
      <link href="http://localhost/05_32_MIYATA/style.css" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=M PLUS Rounded 1c" rel="stylesheet">

</head>

<body>
<form action="todo_csv_create.php" method="POST">
    <fieldset>
      <legend>CSVファイル書き込みリスト</legend>
      <a href="todo_csv_read.php">画面一覧</a>
      <div class=cp_iptxt>
        会社名: <input type="text" name="todo">
        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
      </div>
      <div class=cp_iptxt>
        Email: <input type="text" name="email">
        <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
      </div>
      <div >
        日時: <input type="date" name="deadline">
      </div>

      <div>
        午前･午後：
         <br>
         <input name = "am_pm"type="radio" value="am">午前</br>
         <br>
         <input name="am_pm"type="radio" value="pm">午後</br>
      
      </div>
      
      <div class=information>
        お荷物の情報：
        <br>
         <textArea type="text"name="information"></textArea></br>
      </div>

      <div>
       備考：
       <br>
       <textArea type="text"name="contact"></textArea></br>
      </div>

      


      <div>
        <button class=send_btn>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>