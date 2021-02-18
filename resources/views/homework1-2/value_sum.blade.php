<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>合計値</title>
</head>
<body>
    <p>1から{{$value}}までの合計値は、</p>
     <script>  
       @php
        $sum=0;
       @endphp
       @for ($i=1;$i<=$value;$i++)
           {{$sum+=$i}}
       @endfor
     </script>      
    <p>{{$sum}}</p>
    <a href="{{url('/value_input')}}"><input type='submit' value='戻る' name='back'></a>
</body>
</html>