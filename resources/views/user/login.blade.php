<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"  media="print" onload="this.media='all'">
    <title>ログインページ</title>
</head>
<body>
    <h2>ログイン</h2>
    <form action="" method="post">
        @csrf
        名前：<input type="text" name="name">
        パスワード：<input type="password" name="password">
        <input type="submit" value="ログイン">
    </form>

    <dl>
        <div>
            <dt>柴犬</dt>
            <dd>柴犬は、日本原産の日本犬の一種。<br>日本犬の中で唯一の小型犬です。<br>日本の天然記念物に指定された7つの日本犬種の1つです。</dd>
        </div>
        </dl>
<h5>testのやつです</h5>
    <a href="register">新規登録</a>
</body>
</html>