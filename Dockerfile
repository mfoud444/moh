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

# Install MariaDB server, client, and PHP MySQL extensions
RUN apt-get update && apt-get install -y \
    mariadb-server \
    mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Configure MariaDB
RUN { \
        echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';"; \
        echo "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"; \
        echo "FLUSH PRIVILEGES;"; \
    } > /tmp/init.sql

# Initialize MariaDB and set root password
RUN service mariadb start && \
    mysql -u root -p"${MYSQL_ROOT_PASSWORD}" -e "source /tmp/init.sql;" && \
    service mariadb stop

# Copy the SQL file to the container
COPY moh.sql /tmp/moh.sql

# Import the SQL file into the database
RUN service mariadb start && \
    mysql -u root -p"${MYSQL_ROOT_PASSWORD}" ${MYSQL_DATABASE} < /tmp/moh.sql && \
    service mariadb stop

# Start MariaDB and Apache when the container starts
CMD service mariadb start && apache2-foreground