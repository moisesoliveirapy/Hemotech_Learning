<?php

$bd = new SQLite3("materiais.db");

$titulo     =  $bd->escapeString($_POST["titulo"]);
$tipo   = $bd->escapeString($_POST["tipo"]);
/* $file = $_POST["file"]; */
$categoria    = $bd->escapeString($_POST["categoria"]);
$arquivo    = $bd->escapeString($_POST["arquivo"]);


$sql = "Insert Into materiais(titulo, tipo, categoria, arquivo) 
    Values(:titulo, :tipo, :categoria, :arquivo)";
$stmt = $bd->prepare($sql);
$stmt->bindValue(":titulo", $titulo, SQLITE3_TEXT);
$stmt->bindValue(":tipo", $tipo, SQLITE3_TEXT);
$stmt->bindValue(":categoria", $categoria, SQLITE3_TEXT);
$stmt->bindValue(":arquivo", $arquivo, SQLITE3_TEXT);



if ($stmt->execute())
    echo '"inserido"';
else
    echo "não inserido";


    header("Location: ../cadastro.php");
