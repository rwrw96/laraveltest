<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<h5>testのやつです</h5>
    <a href="register">新規登録</a>
    {{ dd($filtered) }}
</body>
</html>