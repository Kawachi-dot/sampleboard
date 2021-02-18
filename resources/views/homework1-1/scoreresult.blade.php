<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>結果</title>
</head>
<body>
    <h1>結果</h1>
    <p>
      @if($score>0 && 50>$score)
        <p>もっと頑張りましょう</p>
      @elseif($score>=50 && 80>$score)
        <p>よくできました</p>
      @elseif($score>=80 && 100>=$score)
        <p>大変よくできました</p>
      @else
        <p>1~100を入力してください</p>
      @endif
    </p>
    <a href="{{url('/score')}}"><input type='submit' value='戻る' class='back'></a>
</body>
</html>