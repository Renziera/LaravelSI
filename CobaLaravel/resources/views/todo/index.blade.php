<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Todo List</title>
</head>
<body>
    <h1>Daftar To Do List</h1>
    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo->content }}</li>
        @endforeach
    </ul>
</body>
</html>