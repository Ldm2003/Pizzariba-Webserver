<?php

 $conexao = mysqli_connect("localhost", "id11075110_ldm2003","Fafnir14123", "id11075110_Pizzariba");
$valor = $_POST['sabor'];
$sabor = $_POST['valor'];
$query = "insert into tb_pizza values(null,'$sabor','$valor')"
mysqli_connect($conexao,$query);
echo "Registro Salvo com Sucesso!";
