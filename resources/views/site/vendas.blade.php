
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel de Vendas</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .titulo {
            background-color: #1d4ed8;
            color: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 30px;
        }

        .titulo h1 {
            margin: 0 0 8px;
        }

        .titulo p {
            margin: 0;
            color: #dbeafe;
        }

        .letra_vermelha {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .letra_vermelha h2 {
            margin-top: 0;
            color: #1e40af;
        }

        .vendedor {
            background-color: #f8fafc;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 8px;
            border-left: 4px solid #eb2525;
        }

        .vendedor h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .vendedor p {
            margin: 6px 0;
        }

        hr {
            border: none;
            border-top: 1px solid #e2e8f0;
        }

        .formulario {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .formulario h2 {
            margin-top: 0;
            color: #1e40af;
        }

        .campo {
            margin-bottom: 28px;
        }

        .campo label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        .campo input {
            width: 100%;
            padding: 12px;
            border: 1px solid #28d428;
            border-radius: 6px;
            font-size: 16px;
        }

        .campo input:focus {
            outline: 2px solid #93c5fd;
            border-color: #2563eb;
        }

        .botao {
            background-color: #1d4ed8;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .botao:hover {
            background-color: #1e40af;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }
        }
    </style>
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
