CREATE DATABASE wordpress;
CREATE USER 'jul'@'localhost' IDENTIFIED BY 'jul';
GRANT ALL PRIVILEGES ON wordpress.* TO 'jul'@'localhost'
	IDENTIFIED BY 'jul';
FLUSH PRIVILEGES;