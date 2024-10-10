#!/bin/bash

WEBHOOK_URL="https://rikkeisoft0.webhook.office.com/webhookb2/6eb74a6c-f9eb-4b78-accb-909a7861211c@d43d7b87-367a-4e2c-9e40-9ded6a42bf83/IncomingWebhook/03fc40de21944edeb847354ca079d664/5cb0da65-064b-4a0c-8ead-6c95bc9f8b9b"   
MESSAGE="Greeting from Kali Linux"

# Gửi tin nhắn
curl -H 'Content-Type: application/json' -d "{\"text\": \"${MESSAGE}\"}" $WEBHOOK_URL
