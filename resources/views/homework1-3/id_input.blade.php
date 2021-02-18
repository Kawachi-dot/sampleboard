<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ID入力</title>
</head>
<body>
    <p>IDを入力してください</p>
    <form method='POST' action='id/result'>
       <p>ID:
         <input type='text' name='id'>
         {{csrf_field()}}
         <input type='submit' value='送信' name='send'>
       </p>
    </form>
</body>
</html>