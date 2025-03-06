FROM debian:12

## Version php 8.1 para que funcione docker
RUN apt update && apt install -y lsb-release apt-transport-https ca-certificates wget gnupg
RUN wget -q https://packages.sury.org/php/apt.gpg -O- | apt-key add -
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list
RUN apt update && apt install -y php8.1


RUN apt install -y apache2 


## Requerimientos de prestashop
RUN apt install -y php8.1-curl \
php8.1-dom \
php8.1-fileinfo \
php8.1-gd \
php8.1-iconv \
php8.1-intl \
php8.1-mbstring \
php8.1-pdo \
php8.1-mysql \
php8.1-simplexml \
php8.1-zip

# Habilitar módulos de Apache necesarios
RUN a2enmod rewrite headers ssl

# Configurar Apache para PrestaShop

# COPY prestashop.conf /etc/apache2/sites-available/prestashop.conf
# RUN a2dissite 000-default.conf && a2ensite prestashop.conf

# Definir o directorio de traballo
WORKDIR /var/www/html

# Expor os portos 80 e 443
EXPOSE 80
EXPOSE 443

# Iniciar Apache
ENTRYPOINT ["apachectl", "-D", "FOREGROUND"]