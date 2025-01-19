FROM php:apache

# Set working directory
WORKDIR /var/www/html

# Copy your application files
COPY upload .

# Set environment variables
ENV PORT=8000
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=moh

# Expose the specified port
EXPOSE ${PORT}

# Change Apache listening port
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

# Install MySQL server, client, and PHP MySQL extensions
RUN apt-get update && apt-get install -y \
    default-mysql-server \
    default-mysql-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Configure MySQL
RUN service mysql start && \
    mysql -e "CREATE DATABASE ${MYSQL_DATABASE};" && \
    mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '${MYSQL_ROOT_PASSWORD}';" && \
    mysql -e "FLUSH PRIVILEGES;"

# Copy the SQL file to the container
COPY moh.sql /tmp/moh.sql

# Import the SQL file into the database
RUN service mysql start && \
    mysql -u root -p${MYSQL_ROOT_PASSWORD} ${MYSQL_DATABASE} < /tmp/moh.sql

# Start MySQL and Apache when the container starts
CMD service mysql start && apache2-foreground