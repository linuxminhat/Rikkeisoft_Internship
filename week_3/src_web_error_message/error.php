<?php
$code = $_GET['code'] ?? 'Unknown Error';
$webhook_url = 'https://rikkeisoft0.webhook.office.com/webhookb2/6eb74a6c-f9eb-4b78-accb-909a7861211c@d43d7b87-367a-4e2c-9e40-9ded6a42bf83/IncomingWebhook/03fc40de21944edeb847354ca079d664/5cb0da65-064b-4a0c-8ead-6c95bc9f8b9b';  

$message = "Website encountered an error: HTTP $code";



$data = json_encode([
    'text' => $message
]);

// Gửi message đến Teams qua webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_exec($ch);
curl_close($ch);

// Hiển thị trang lỗi cho người dùng
http_response_code($code);
echo "An error occurred: HTTP $code";
?>
