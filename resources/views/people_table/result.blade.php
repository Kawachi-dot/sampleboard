<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録画面</title>
</head>
<body>
      <h1>登録されました！</h1>
      <ul>
        <li>{{$name}}</li>
        <li>{{$email}}</li>
        <li>{{$tel}}</li>
        <li>{{$age}}</li>
        <li>{{$address}}</li>
        <li>{{$birthday}}</li>
      </ul>
      <a href="{{url('/input')}}"><input type='submit' value='戻る' name='back'></a>
</body>
</html>