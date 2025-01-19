FROM php:7.4-apache

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

# Start Apache in the foreground
CMD ["apache2-foreground"]