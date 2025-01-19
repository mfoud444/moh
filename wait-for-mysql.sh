#!/bin/bash
set -e

until mysqladmin ping -h localhost -u bootmy -ppmapass --silent; do
    echo "Waiting for MariaDB to be ready..."
    sleep 2
done

echo "MariaDB is ready!"