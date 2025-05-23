<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Simples</title>

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à minha página em Laravel</h1>
        <p>Essa é uma página simples criada usando Laravel e Blade.</p>
        
        <button onclick="alert('Você clicou no botão!')">Clique Aqui</button>

        <p>Data e Hora Atual: <strong>{{ $dataHoraAtual }}</strong></p>

        <footer class="footer">
            <p>&copy; 2025 Minha Página Laravel</p>
        </footer>
    </div>
</body>
</html>