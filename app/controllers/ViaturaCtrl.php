<?php
class ViaturaCtrl {
    private $viaturaModel;

    public function __construct($viaturaModel) {
        $this->viaturaModel = $viaturaModel;
    }

    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtém os dados do formulário
            $dados = [
                'prefixo' => $_POST['prefixo'],
                'placa'   => $_POST['placa'],
                'marca'   => $_POST['marca'],
                'modelo'  => $_POST['modelo'],
                'ano'     => $_POST['ano'],
                'limite_manutencao' => $_POST['limite_manutencao']
            ];

            try {
                $this->viaturaModel->cadastrar($dados);
                echo "Viatura cadastrada com sucesso!";
            } catch (Exception $e) {
                echo "Erro ao cadastrar viatura: " . $e->getMessage();
            }            
        } else {
            // Exibe a view de cadastro
            include '../app/views/viaturas/cadastrar.php';
        }
    }

    public function listar() {
        $viaturas = $this->viaturaModel->listar();  // Chama o método de listar do modelo
        include '../app/views/viaturas/listar.php'; // Renderiza a view com a lista de viaturas
    }
}