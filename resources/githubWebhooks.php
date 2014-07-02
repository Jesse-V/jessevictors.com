<?php
    require_once("../_private/githubWebhookKey.php");

    $headers = getallheaders();
    if (!isset($headers['X-Hub-Signature']))
    {
        http_response_code(400);
        die("Invalid request");
    }

    $payload = file_get_contents('php://input');
    $data    = json_decode($payload);

    $hubSignature = $headers['X-Hub-Signature'];
    list($algo, $hash) = explode('=', $hubSignature, 2);
    $payloadHash = hash_hmac($algo, $payload, $_WEBHOOK_KEY);

    if (_secureStringCompare($hash, $payloadHash))
        echo "Approved!";
    else
    {
        http_response_code(412);
        die("Bad secret");
    }

    print_r($data);
?>
