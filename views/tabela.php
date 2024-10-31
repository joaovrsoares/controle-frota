<table>
    <tr>
        <th style="width: 120px">Prefixo</th>
        <th style="width: 300px">Modelo</th>
        <th style="width: 150px" colspan="2">Falta para troca</th>
        <th style="width: 100px">Odômetro atual</th>
        <th style="width: 100px">Próxima troca</th>
        <th style="width: 72px">Ações</th>
    </tr>
    <tr>
        <td>VTR PM2272</td>
        <td>VW SPACECROSS</td>
        <td>57 dias</td>
        <td>2.032 km</td>
        <td>61328 km</td>
        <td>63.360 km</td>
        <td>
            <a href="index.php?rota=editar&id=<?php echo $viatura->getId();?>" title="Editar" class="acao">✏️ Editar</a><br>
            <a href="index.php?rota=remover&id=<?php echo $viatura->getId();?>" title="Remover" class="acao">🗑️ Remover</a>
        </td>
    </tr>


    <?php foreach($viaturas as $viatura) : ?>
        <tr>
            <td>
                <a href="index.php?rota=tarefa&id=<?php echo $viatura->getPrefixo();?>"><?php echo 'VTR PM' . htmlentities($viatura->getPrefixo());?></a>
            </td>
            <td><?php echo htmlentities($viatura->getMarca() . ' ' . $viatura->getModelo()); ?></td>
            <td class="centro"><?php echo converte_data_para_tela(dias_restantes('2024-11-01')) . 'dias';?></td>
            <td class="centro"><?php echo quilometros_restantes($viatura);?></td>
            <td class="centro"><?php echo converte_concluida($viatura->getConcluida());?></td>
            <td>
                <a href="index.php?rota=editar&id=<?php echo $viatura->getId();?>" title="Editar" class="acao">✏️ Editar</a><br>
                <a href="index.php?rota=remover&id=<?php echo $viatura->getId();?>" title="Remover" class="acao">🗑️ Remover</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>