<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録リスト</title>
    
</head>
<body>
<a href="/input">新規作成</a> 
<h1>登録情報一覧</h1>
<table border='1'>
    <tr>
          <th>ID</th>
          <th>名前</th>
          <th>メールアドレス</th>
          <th>電話番号</th>
          <th>年齢</th>
          <th>住所</th>
          <th>生年月日</th>
          <th></th>
          <th></th>
    </tr>
        
  @foreach($people as $person)   
    <tr>
          <th>{{$person->user_id}}</th>
          <th>{{$person->name}}</th>
          <th>{{$person->email}}</th>
          <th>{{$person->tel}}</th>
          <th>{{$person->age}}</th>
          <th>{{$person->address}}</th>
          <th>{{$person->birthday}}</th>
          <th><a href="/edit/{{$person->user_id}}"><input type='submit' value='編集'></a></th>
          <th><form action="/delete/{{$person->user_id}}" method='post'>{{csrf_field()}}<input type='submit' value='削除' onclick="return check();"></form></th>
    </tr>  
  @endforeach
 
  <script type='text/javascript'>
    function check(){
    if(window.confirm('本当に削除しますか？')){
       return true;
    }else{
       return false;
    }
  }
  </script>
</table>
</body>
</html>