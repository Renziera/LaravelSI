<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Todo</title>
</head>
<body>
    <h1>Masukkan entry baru</h1>
    <form action="/todo" method="post">
        @csrf 
        <input type="text" name="content" id="content">
        <input type="submit" value="Submit">
    </form>
</body>
</html>