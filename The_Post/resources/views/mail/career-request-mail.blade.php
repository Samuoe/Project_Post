<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Abbiamo ricevuto</h1>
    <h4>Una richiesta per il ruolo di {{$info['role']}}</h4>
    <p>ricevuta da {{$info['email']}}</p>

    <h4>Messaggio:</h4>
    <p>{{$info['message']}}</p>
</body>
</html>