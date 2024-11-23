<?php
header('Content-Type: application/json');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Enregistrement des logs pour débogage
file_put_contents('debug.log', json_encode([
    'method' => $_SERVER['REQUEST_METHOD'],
    'body' => file_get_contents('php://input'),
    'headers' => getallheaders(),
]), FILE_APPEND);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['pseudo'], $input['rating'], $input['comment']) || empty($input['pseudo']) || empty($input['comment']) || intval($input['rating']) <= 0) {
        http_response_code(400);
        echo json_encode(['message' => 'Champs invalides']);
        exit;
    }

    echo json_encode(['message' => 'Avis enregistré avec succès']);
    exit;
}

http_response_code(405);
echo json_encode(['message' => 'Méthode non autorisée']);
?>
