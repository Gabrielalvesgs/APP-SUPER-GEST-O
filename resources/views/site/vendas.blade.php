
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Painel de Vendas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo_vw_vendas.css') }}">

    
</head>

<body>

    <div class="container">

        <div class="titulo">
            <h1>Painel de Vendas</h1>
            <p>Acompanhe o desempenho da sua equipe</p>
        </div>

        <div class="letra_vermelha">
            <h2>Lista de vendedores</h2>

            @foreach ($vendedor as $item)
                <div class="vendedor">
                    <h3>{{ $item['nome'] }}</h3>

                    <p>Vendas: {{ $item['vendas'] }}</p>

                    <p>Meta: {{ $item['meta'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="formulario">
            <h2>Consultar vendas</h2>

            <form>
                <div class="campo">
                    <label for="nome">Nome do vendedor</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite o nome do vendedor"
                    >
                </div>

                <div class="campo">
                    <label for="data">Data da consulta</label>
                    <input
                        type="date"
                        id="data"
                        name="data"
                    >
                </div>

                <button type="submit" class="botao">
                    Consultar
                </button>
            </form>
        </div>

    </div>

</body>
</html>
