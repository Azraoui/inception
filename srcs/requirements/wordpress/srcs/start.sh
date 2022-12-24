wp plugin install redis-cache --path="/var/www/html/wordpress/" --activate --allow-root
cp /var/www/html/wordpress/wp-content/plugins/redis-cache/includes/object-cache.php /var/www/html/wordpress/wp-content/
php-fpm7.3 -F -R