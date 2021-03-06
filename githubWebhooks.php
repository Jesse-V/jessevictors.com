<?php
   require_once("_private/githubWebhookKey.php");

   $headers = getallheaders();
   if (!isset($headers['X-Hub-Signature']))
   {
      http_response_code(400);
      die("Invalid request");
   }

   $payload = file_get_contents('php://input');
   //$data    = json_decode($payload);

   $hubSignature = $headers['X-Hub-Signature'];
   list($algo, $hash) = explode('=', $hubSignature, 2);
   $payloadHash = hash_hmac($algo, $payload, $_WEBHOOK_KEY);

   if (!_secureStringCompare($hash, $payloadHash))
   {
      http_response_code(412);
      die("Bad secret");
   }

   try
   {
      date_default_timezone_set("America/Anchorage");
      $db = new PDO("sqlite:_private/sqlite.db");
      $query = "INSERT INTO Github VALUES (".date('U').", '".$payload."')";
      echo $query;
      $r = $db->query($query);
      var_dump($r);
      print_r($db->errorInfo());
   }
   catch (PDOException $e)
   {
      echo $e->getMessage();
   }
?>
