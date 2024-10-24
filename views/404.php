<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1 class="titulo"><img src="../assets/pmsc.png" alt="Logo da Polícia Militar.">Controle de manutenção de viaturas</h1>
        <p>Polícia Militar de Santa Catarina – Videira (10CRPM/15BPM/2CIA)</p> 
    </header>

    <h3>Ops, página não encontrada!</h3>
    <p><a href="../index.php?rota=viaturas">Ir para a lista de viaturas.</a></p>
    <?php echo "Requisitando por <code>controllers/" . $rota . ".php</code>."; ?>
</body>
</html>