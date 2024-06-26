FROM php:7.4-fpm

# Instalação de dependências
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    unzip \
    p7zip-full \
    git \
    && rm -rf /var/lib/apt/lists/*

# Instalação da extensão PDO para PostgreSQL
RUN docker-php-ext-install pdo_pgsql

# Instalação da extensão zip
RUN docker-php-ext-install zip

# Instalação do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configuração do diretório de trabalho
WORKDIR /var/www/html

# Copiando o código da aplicação
COPY . .

# Instalando dependências da aplicação
RUN composer install --no-interaction --no-scripts --no-suggest --prefer-dist

# Configurando permissões de diretório
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Geração da chave de aplicação Laravel
RUN php artisan key:generate

RUN php artisan config:cache

# Comando padrão para iniciar o servidor PHP
CMD php artisan serve --host=0.0.0.0 --port=8000
