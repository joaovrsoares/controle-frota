<?php

$repositorio_viaturas->remover($_GET['id']);

header('Location: index.php?rota=viaturas');
