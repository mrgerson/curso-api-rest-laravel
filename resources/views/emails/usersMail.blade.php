<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>información del correo</h2>
    <ul>
        @foreach($infoUsuario as $user)
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->email_verified_at}}</li>
        @endforeach
    </ul>


</body>
</html>