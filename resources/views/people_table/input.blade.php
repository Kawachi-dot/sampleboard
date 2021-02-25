<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>情報入力</title>
</head>
<body>
   <form method='POST' action='input/result'>
   {{csrf_field()}}
      <p>名前：　　　　　
        <input type='text' name='name'>
      </p>
      <p>メールアドレス：
        <input type='text' name='email'>
      </p>
      <p>電話番号：　　　
        <input type='text' name='tel'>
      </p>
      <p>年齢：　　　　　
        <input type='text' name='age'>
      </p>
      <p>住所：　　　　　
        <input type='text' name='address'>
      </p>
      <p>生年月日：　　　
        <input type='text' name='birthday'>
      </p>
      <input type='submit' value='登録' name='send'>
   </form> 
</body>
</html>