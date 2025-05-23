<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Simples</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Preencha o formulário</h1>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulary -->
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="text" id="email" name="email" value="{{ old('email') }}"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>