tarefa3


SELECT  idpais  FROM  t_pais WHERE  nomepais  = "Brasil" ;








<?php

$sql = "SELECT idpais
    FROM  t_pais  AS pais
    WHERE pais.nomepais = 'Brasil'";


$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

   