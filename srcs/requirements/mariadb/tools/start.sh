if [ ! -d "/var/lib/mysql/wordpress" ]; then
    service mysql start
        mysql -u root -e "CREATE USER '$USER'@'%' IDENTIFIED BY '$PASSWORD';"
        mysql -u root -e "CREATE DATABASE $DB_WP_NAME;"
        mysql -u root -e "GRANT ALL PRIVILEGES ON $DB_WP_NAME.* TO '$USER'@'%';"
        mysql $DB_WP_NAME --user=$USER --password=$PASSWORD < /wp_db.sql
        mysql -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$PASSWORD');"
        mysql -u root -e "FLUSH PRIVILEGS;"
        service mysql stop
        mysqld_safe
else
    mysqld_safe --skip-grant-table
fi