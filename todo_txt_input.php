<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>code実績</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>code実績</legend>
      <a href="todo_txt_read.php">read画面</a>
      <div>
        項目: <input type="text" name="todo"> <!-- vscodeで固定-->
      </div>
      <div>
        日付：<input type="date"  name="deadline">
      </div>
      <div>
        時間（オートにしたい）：<input type="text"  name="naiyou">時間
      </div>

      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>