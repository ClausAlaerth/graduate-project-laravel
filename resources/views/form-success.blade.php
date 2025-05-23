<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Formulário enviado com sucesso!</h1>

    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>E-mail:</strong> {{ $email }}</p>

    <a href="{{ route('form.show') }}">Voltar ao formulário</a>
</body>
</html>