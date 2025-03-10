#https://github.com/kodekloudhub/learning-app-ecommerce

cd ~

sudo yum install -y firewalld
sudo service firewalld start
sudo systemctl enable firewalld
sudo service firewalld status
sudo firewall-cmd --list-all

sudo yum install -y mariadb-server
sudo vi /etc/my.cnf #no changes necessary
sudo service mariadb start
sudo systemctl enable mariadb
sudo service mariadb status

sudo firewall-cmd --permanent --zone=public --add-port=3306/tcp
sudo firewall-cmd --list-all
sudo firewall-cmd --reload
sudo firewall-cmd --list-all

#$ mysql
#MariaDB > CREATE DATABASE ecomdb;
#MariaDB > CREATE USER 'ecomuser'@'localhost' IDENTIFIED BY 'ecompassword';
#MariaDB > GRANT ALL PRIVILEGES ON *.* TO 'ecomuser'@'localhost';
#MariaDB > FLUSH PRIVILEGES;

# Create db-load-script.sql
cat > db-load-script.sql <<-EOF
USE ecomdb;
CREATE TABLE products (id mediumint(8) unsigned NOT NULL auto_increment,Name varchar(255) default NULL,Price varchar(255) default NULL, ImageUrl varchar(255) default NULL,PRIMARY KEY (id)) AUTO_INCREMENT=1;

INSERT INTO products (Name,Price,ImageUrl) VALUES ("Laptop","100","c-1.png"),("Drone","200","c-2.png"),("VR","300","c-3.png"),("Tablet","50","c-5.png"),("Watch","90","c-6.png"),("Phone Covers","20","c-7.png"),("Phone","80","c-8.png"),("Laptop","150","c-4.png");

EOF

# Run sql script to load data
mysql < db-load-script.sql


##mysql
#mysql -u root
##jBmbf6!Vt.HHE6_F
#alter user 'root'@'localhost' identified by 'jBmbf6!Vt.HHE6_F';
#create database ecomdb;
#show databases;
#create user 'ecomuser'@'localhost' identified by 'ecompassword';
#grant all privileges on *.* to 'ecomuser'@'localhost';
#flush privileges;
#exit

#cat > db-load-script.sql
#mysql -u ecomuser -pecomuser
#USE ecomdb;
#CREATE TABLE products (id mediumint(8) unsigned NOT NULL auto_increment,Name varchar(255) default NULL,Price varchar(255) default NULL, ImageUrl varchar(255) default NULL,PRIMARY KEY (id)) AUTO_INCREMENT=1;
#INSERT INTO products (Name,Price,ImageUrl) VALUES ("Laptop","100","c-1.png"),("Drone","200","c-2.png"),("VR","300","c-3.png"),("Tablet","50","c-5.png"),("Watch","90","c-6.png"),("Phone Covers","20","c-7.png"),("Phone","80","c-8.png"),("Laptop","150","c-4.png");

#mysql -u ecomuser -pecomuser < db-load-script.sql

mysql
use ecomdb;
show tables;
select * from products;
exit

#centos7
sudo yum install -y httpd php php-mysql
#centos8
#sudo yum install -y httpd php php-mysqlnd

# Change 'index.html' to 'index.php' in the apache config
sudo sed -i 's/index.html/index.php/g' /etc/httpd/conf/httpd.conf
#sudo vi /etc/httpd/conf/httpd.conf #DirectoryIndex index.php instead of index.html
#sudo service httpd restart


# Install and enable apache
sudo service httpd start
sudo systemctl enable httpd
sudo service httpd status

# Configure firewall for apache
sudo firewall-cmd --permanent --zone=public --add-port=80/tcp
sudo firewall-cmd --reload

# Test firewall connectivity
curl http://localhost

# Pull down code from github repo
sudo yum install -y git
sudo git clone https://github.com/kodekloudhub/learning-app-ecommerce.git /var/www/html/

curl http://localhost

# Update index.php to use the right database address, name and credentials; look for "$link = mysqli_connect"
sudo sed -i 's/172.20.1.101/localhost/g' /var/www/html/index.php

# Test website
curl http://localhost


