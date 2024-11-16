<?php



$bd = new SQLite3("config/materiais.db");

$sql = "DROP TABLE IF EXISTS materiais";

if ($bd->exec($sql))
    echo "apagado";

$sql = "CREATE TABLE IF NOT EXISTS materiais (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(255) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    arquivo VARCHAR(255) NOT NULL
    
)";

if ($bd->exec($sql))
    echo "Tabela materiais criada";
else echo "Erro";


?>
