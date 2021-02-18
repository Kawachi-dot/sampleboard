<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>スコア入力</title>
</head>
<body>
    <h1>点数(1~100)を入力してください！！</h1>
    <form method='POST' action='score/result'>
       <input type='text' name='score' placeholder='1~100を入力'>
       {{csrf_field()}}
       <input type='submit' value='送信' name='send'>
    </form>
</body>
</html>