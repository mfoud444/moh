FROM php:8.0-apache

# Set working directory
WORKDIR /var/www/html

# Copy your application files
COPY upload .

# Set environment variables
ENV PORT=8000
EXPOSE ${PORT}

# Change Apache listening port
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Suppress deprecation warnings
RUN echo "error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT" > /usr/local/etc/php/conf.d/error-reporting.ini

# Fix file permissions
RUN chown -R www-data:www-data /var/www/html/system/storage
RUN chmod -R 777 /var/www/html/system/storage

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    wget \
    unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Download and install phpMyAdmin
RUN wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.zip -O /tmp/phpmyadmin.zip \
    && unzip /tmp/phpmyadmin.zip -d /var/www/html/ \
    && mv /var/www/html/phpMyAdmin-* /var/www/html/phpmyadmin \
    && rm /tmp/phpmyadmin.zip

# Copy configuration file for phpMyAdmin
COPY config.inc.php /var/www/html/phpmyadmin/

# Install and configure MariaDB server
RUN apt-get update && apt-get install -y mariadb-server \
    && service mariadb start \
    && mysql -e "CREATE DATABASE moh;" \
    && mysql -e "CREATE USER 'bootmy'@'localhost' IDENTIFIED BY 'pmapass';" \
    && mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'bootmy'@'localhost';" \
    && mysql -e "FLUSH PRIVILEGES;"

# Start Apache in the foreground
CMD service mariadb start && apache2-foreground