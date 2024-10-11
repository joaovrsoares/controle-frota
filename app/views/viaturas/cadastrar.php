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
