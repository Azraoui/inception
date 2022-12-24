
apt-get update
apt-get upgrade -y
apt-get install -y nginx

chmod 777 /etc/nginx/nginx.conf
echo "daemon off;" >> /etc/nginx/nginx.conf