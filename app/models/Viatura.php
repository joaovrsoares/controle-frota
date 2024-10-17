<?php
class Viatura {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Cadastrar uma nova viatura
    public function cadastrar($data) {
        $sql = "INSERT INTO viaturas (prefixo, placa, modelo_completo, marca, modelo, ano, limite_manutencao) 
                VALUES (:prefixo, :placa, :modelo_completo, :marca, :modelo, :ano, :limite_manutencao)";
        
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':prefixo' => $data['prefixo'],
            ':placa' => $data['placa'],
            ':modelo_completo' => $data['modelo_completo'],
            ':marca' => $data['marca'],
            ':modelo' => $data['modelo'],
            ':ano' => $data['ano'],
            ':limite_manutencao' => $data['limite_manutencao']
        ]);
    }

    // Buscar viatura por ID
    public function buscarPorId($id) {
        $sql = "SELECT * FROM viaturas WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Atualizar uma viatura
    public function atualizar($id, $data) {
        $sql = "UPDATE viaturas 
                SET prefixo = :prefixo, placa = :placa, marca = :marca, modelo = :modelo, ano = :ano, limite_manutencao = :limite_manutencao 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':prefixo' => $data['prefixo'],
            ':placa' => $data['placa'],
            ':marca' => $data['marca'],
            ':modelo' => $data['modelo'],
            ':ano' => $data['ano'],
            ':limite_manutencao' => $data['limite_manutencao']
        ]);
    }

    // Excluir viatura
    public function excluir($id) {
        $sql = "DELETE FROM viaturas WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    // Listar todas as viaturas
    public function listarTodas() {
        $sql = "SELECT * FROM viaturas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
