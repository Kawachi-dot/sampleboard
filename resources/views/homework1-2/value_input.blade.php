<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>数字入力</title>
</head>
<body>
   <form method='POST' action='value_input/sum'>
      <p>数字を入力してください</p>
      <input type='text' name='value' placeholder='1からの合計値を出します'>
      {{csrf_field()}}
      <input type='submit' value='送信' name='send'>
   </form>   
</body>
</html>