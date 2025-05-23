<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Administrador</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- Upper Bar -->
    <div class="navbar">
        <h2>Área Administrativa</h2>

        <div class="user-info">
            <p>Logado como: <strong>{{ $nomeUsuario }}</strong></p>
            <a href="{{ route('login.show') }}" class="btn-logout">Sair</a>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <h1>Bem-vindo, {{ $nomeUsuario }}</h1>
        <p>Aqui você pode gerenciar o sistema. Escolha uma das opções abaixo:</p>

        <div class="dashboard">
            <div class="card">
                <h3>Gerenciar Usuários</h3>
                <p>Adicionar ou remover usuários do sistema.</p>
                <button>Ir para Usuários</button>
            </div>

            <div class="card">
                <h3>Relatórios</h3>
                <p>Visualizar e exportar relatórios de desempenho..</p>
                <button>Ver Relatórios</button>
            </div>

            <div class="card">
                <h3>Configurações</h3>
                <p>Alterar configurações gerais do sistema.</p>
                <button>Abrir Configurações</button>
            </div>
        </div>
    </div>
</body>
</html>