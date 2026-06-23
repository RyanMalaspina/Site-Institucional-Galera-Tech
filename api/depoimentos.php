<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../config/database.php';

try {
    $stmt = $pdo->query("
        SELECT nome,cargo,empresa,texto,foto,tipo,destaque
        FROM depoimentos
        WHERE ativo = 1
        ORDER BY destaque DESC, RAND()
    ");

    $depoimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$depoimentos) {
        echo json_encode(['principal'=>null,'laterais'=>[]], JSON_UNESCAPED_UNICODE);
        exit;
    }

    $principal = array_shift($depoimentos);

    echo json_encode([
        'principal' => $principal,
        'laterais' => array_slice($depoimentos,0,3)
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['erro'=>'Falha ao carregar depoimentos'], JSON_UNESCAPED_UNICODE);
}