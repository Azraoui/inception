apt-get update
apt-get upgrade -y
apt-get -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap
mkdir -p /var/run/php
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf


mkdir -p /var/www/html
cd /var/www/html/
apt-get update
apt-get upgrade -y
apt-get install -y vim curl
chown -R www-data:www-data /var/www/html
curl -LO https://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz

mv /wp-config.php .