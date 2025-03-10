# SSL Remote Key Setup

ssh-keygen -q -b 2048 -t rsa -f /home/thor/.ssh/maria -N ""
ssh-keygen -q -b 2048 -t rsa -f /home/thor/.ssh/john -N ""

#sudo yum install -y openssl

ssh-copy-id -i /home/thor/.ssh/maria maria@lamp-db
ssh-copy-id -i /home/thor/.ssh/john john@lamp-web

ssh -i /home/thor/.ssh/maria maria@lamp-db
ssh -i /home/thor/.ssh/john john@lamp-web