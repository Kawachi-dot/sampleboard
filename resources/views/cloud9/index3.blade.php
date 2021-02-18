<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="css/stylesheet3.css">
    <script type="text/javascript" src="sample1.js"></script>
</head>
<body>
    <div>
        お問い合わせ
    </div>
    <div id="nav">
        <ul>
            <li><a href="index">TOP</a></li>
            <li><a href="#">記事一覧</a></li>
            <li><a href="#">画像一覧</a></li>
            <li><a href="index2">プロフィール</a></li>
            <li><a href="index3">お問い合わせ</a></li>
        </ul>
    </div>

        
    <form name="form" method="post" action="#">
        
        <div class="item">
            <p class="side">名前</p>
            <input type="text" name="name">
        </div>
        
        <div class="item">
            <p class="side">名前</p>
            <input type="text" name="name1">
        </div>
        
        <div class="item">
           <p class="side">性別</p>
           <div class="main">
              <input type="radio" name="q1" value="男">男
              <input type="radio" name="q1" value="女">女
           </div>
        </div>
        <div class="item">
            <p class="side">問合内容</p>
            <textarea name="comment" cols="30" rows="5" class="main"></textarea>
        </div>
        <div class="item">
            <p class="side">添付ファイル</p>
            <input type="file" name="example1" class="main">
        </div>
        <input type="submit" onClick="return check();" value="送信" class="send">
    </form>
    
    <div id="footer">
        <p>&copy:2021 All Rights Reserved.</p>
    </div>
</body>
</html>