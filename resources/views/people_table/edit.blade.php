<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集画面</title>
</head>
<body>
    <form action='/update/{{$person->user_id}}' method='post'>
    {{csrf_field()}}
    <input type='hidden' name='id' value='{{$person->user_id}}'>
    <p>ID:{{$person->user_id}}</p>
      <p>名前：　　　　　
        <input type='text' name='name' value="{{$person->name}}">
      </p>
      <p>メールアドレス：
        <input type='text' name='email' value="{{$person->email}}">
      </p>
      <p>電話番号：　　　
        <input type='text' name='tel' value="{{$person->tel}}">
      </p>
      <p>年齢：　　　　　
        <input type='text' name='age' value="{{$person->age}}">
      </p>
      <p>住所：　　　　　
        <input type='text' name='address' value="{{$person->address}}">
      </p>
      <p>生年月日：　　　
        <input type='text' name='birthday' value="{{$person->birthday}}">
      </p>
      <input type='submit' value='更新' onClick='check();'>
    </form>
    <script type='text/javascript'>
    function check(){
      if(window.comfirm('kousinnsimasuka')){

      }else{

      }
    }
    </script>
</body>
</html>