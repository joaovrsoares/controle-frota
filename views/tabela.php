<table>
    <tr>
        <th style="width: 120px">Prefixo</th>
        <th style="width: 300px">Modelo</th>
        <th style="width: 150px" colspan="2">Falta para troca</th>
        <th style="width: 100px">Odômetro atual</th>
        <th style="width: 100px">Próxima troca</th>
        <th style="width: 70px">Ações</th>
    </tr>
    <tr>
        <td>VTR PM2272</td>
        <td>VW SPACECROSS</td>
        <td>57 dias</td>
        <td>2.032 km</td>
        <td>61328 km</td>
        <td>63.360 km</td>
        <td class="acao">Editar<br>Excluir</td>
    </tr>


    <!--<?php foreach($tarefas as $tarefa) : ?>
        <tr>
            <td>
                <a href="index.php?rota=tarefa&id=<?php echo $tarefa->getId();?>"><?php echo htmlentities($tarefa->getNome());?></a>
            </td>
            <td><?php echo htmlentities($tarefa->getDescricao()); ?></td>
            <td class="centro"><?php echo converte_data_para_tela($tarefa->getPrazo());?></td>
            <td class="centro"><?php echo converte_prioridade($tarefa->getPrioridade());?></td>
            <td class="centro"><?php echo converte_concluida($tarefa->getConcluida());?></td>
            <td>
                <a href="index.php?rota=editar&id=<?php echo $tarefa->getId();?>" title="Editar" class="acao">✏️ Editar</a><br>
                <a href="index.php?rota=remover&id=<?php echo $tarefa->getId();?>" title="Remover" class="acao">🗑️ Remover</a>
            </td>
        </tr>
    <?php endforeach; ?>-->
</table>