<?php

require_once "servico.class.php";
require_once "exame.class.php";

$exame = new Exame(TipodeExame: "RX", preco: 100.00);
echo $exame -> getTipoExame();