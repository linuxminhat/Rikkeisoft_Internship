<?php
function sendToTeams($message) {
    $webhook_url = "https://rikkeisoft0.webhook.office.com/webhookb2/6eb74a6c-f9eb-4b78-accb-909a7861211c@d43d7b87-367a-4e2c-9e40-9ded6a42bf83/IncomingWebhook/03fc40de21944edeb847354ca079d664/5cb0da65-064b-4a0c-8ead-6c95bc9f8b9b";
    $data = json_encode(["text" => $message]);
    
    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ],
    ];

    $context = stream_context_create($options);
    file_get_contents($webhook_url, false, $context);
}



$error_code = isset($_GET['code']) ? $_GET['code'] : 'Unknown Error'; 
sendToTeams("HTTP Error: " . $error_code);

echo "<div style='text-align: center; margin-top: 50px;'>";
echo "<h1>Oops! An error occurred: HTTP $error_code</h1>";
echo "<p>Please try again later or contact support if the problem persists.</p>";
echo "</div>";
?>
<link rel="stylesheet" type="text/css" href="style.css">
