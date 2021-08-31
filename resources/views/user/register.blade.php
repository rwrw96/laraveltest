<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
    <h2>新規登録</h2>
    <form action="register" method="post">
        @csrf
        @if($errors->first('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        名前：<input type="text" name="name">
        メールアドレス：<input type="email" name="email">
        パスワード：<input type="password" name="password">
        <input type="submit" value="新規登録">
    </form>

    <h4>fetchのテストをします</h4>
</body>
</html>