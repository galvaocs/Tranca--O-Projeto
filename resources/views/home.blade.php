<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/home.css">
    <script defer src="./public/js/home.js"></script>
    <title>Document</title>
</head>
    <body>     
        <a href="{{ route('items.ItemCreate') }}">Cadastrar usuário ou tag</a>
        <a href="{{ route('items.ItemRead') }}">Ler histórico do armário</a>
        <a href="{{ route('items.ItemUpdate') }}">Atualizar Tag ou informações de usuário</a>
    </body>
</html> 
