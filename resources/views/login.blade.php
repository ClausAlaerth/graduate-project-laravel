<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Login</h1>

    <!-- Success message -->
    @if (session("success"))
        <div style="color: green;">
            {{ session("success") }}
        </div>
    @endif

    <!-- Shows validation errors -->
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
    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" value="{{ old('password') }}"><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>