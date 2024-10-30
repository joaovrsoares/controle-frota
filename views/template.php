<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de manutenção de viaturas</title>
    <link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/favicons/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="assets/favicons/favicon.svg" />
    <link rel="shortcut icon" href="assets/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png" />
    <link rel="manifest" href="assets/favicons/site.webmanifest" />
</head>
<body>
    <header>
        <h1 class="titulo"><img src="assets/pmsc.png" alt="Logo da Polícia Militar.">Controle de manutenção de viaturas</h1>
        <p>Polícia Militar de Santa Catarina – Videira (10CRPM/15BPM/2CIA)</p> 
    </header>

    <details>
        <summary>Cadastrar nova viatura</summary>
        <form method="POST">
            <div class="campos">
                <div>
                    <label for="prefixo">Prefixo</label>
                    <input type="text" id="prefixo" name="prefixo">
                </div>
                <div>
                    <label for="placa">Placa</label>
                    <input type="text" id="placa" name="placa">
                </div>
                <div>
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" name="marca">
                </div>
                <div>
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" name="modelo">
                </div>
                <div>
                    <label for="ano">Ano</label>
                    <input type="text" id="ano" name="ano">
                </div>
                <div>
                    <label for="limite">Limite de manutenção (km)</label>
                    <input type="text" id="limite" name="limite">
                </div>
            </div>
            <button type="submit">+ Cadastrar nova viatura</button>
        </form>
    </details>

    <h3>Viaturas cadastradas</h3>
    <?php include 'tabela.php'; ?>
</body>
</html>

<!--
<form action="/controle_frota/viaturas/cadastrar" method="POST">
    <label for="prefixo">Prefixo:</label>
    <input type="text" name="prefixo" required>
    
    <label for="placa">Placa:</label>
    <input type="text" name="placa" required>
    
    <label for="marca">Marca:</label>
    <input type="text" name="marca" required>
    
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" required>
    
    <label for="ano">Ano:</label>
    <input type="number" name="ano" required>
    
    <label for="limite_manutencao">Limite de Manutenção (km):</label>
    <input type="number" name="limite_manutencao" required>
    
    <button type="submit">Cadastrar Viatura</button>
</form>
-->