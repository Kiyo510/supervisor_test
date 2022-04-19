<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="form" method="POST" action="{{ route('user.post') }}">
    {{ csrf_field() }}
    <input name="body" type="text">
    <button type="submit" value="送信">送信</button>
</form>
</body>
</html>
