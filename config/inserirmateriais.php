<?php

session_start();

require "../repository/materiaisRepositoryPDO.php";
require "material.php";

$materaisRepository = new MateriaisRepositoryPDO();
$material = new Material();

$material->titulo     =  $_POST["titulo"];
$material->tipo   = $_POST["tipo"];
$material->categoria    = $_POST["categoria"];
$material->arquivo    = $_POST["arquivo"];





if ($materaisRepository->salvar($material))
    $_SESSION["msg"] = "Material cadastrado com sucesso";
else
    echo "não inserido";


header("Location: ../cadastro.php?msg=Material+cadastrado+com+sucesso");
