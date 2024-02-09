<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($alert)
        <h1 style="background-color: {{ $alert ? 'red' : 'green' }}">
            Hello World from
            {{ $firstname }}
            {{ $lastname }}!
        </h1>
    @else
        <h1 style="background-color: green">
            Hello World from
            {{ $firstname }}
            {{ $lastname }}!
        </h1>
    @endif

    <h2>Users:</h2>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user['firstname'] }}
                {{ $user['lastname'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
