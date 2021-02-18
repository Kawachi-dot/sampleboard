<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録状況</title>
</head>
<body>
    <p>ID:{{$id}}は、</p>
    <script>
      @php
        $true_id=[100,101,102,103,104,105,106,107];
        $result='';
        $true='登録されています';
        $false='登録されていません';
      @endphp
      @if(in_array($id,$true_id))
           {{$result=$true}}
      @else
           {{$result=$false}}
      @endif    
    </script>  
    <p>{{$result}}</p>
    <a href="{{url('/id')}}"><input type='submit' value='戻る' name='back'></a>
</body>
</html>