<?php
require_once __DIR__ . '/config.php';

try {
    //a conexao esta guardada na variavel pdo
$pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
)

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    echo "Conexão funcionou!!"
}
catch (PDOException $e) {
    echo "Erro de conexão." . $e->getMessage();

}

?>