<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/partials/chi-siamo">CHI chi-siamo</a></li>
        </ul>
    </header>
    <main>
        <h1>Primo_Contatto</h1>
        @foreach ($credentials as $item)
            <p>{{$item["nome"]}}, {{$item["cognome"]}}</p>
        @endforeach
    </main>
</body>
</html>