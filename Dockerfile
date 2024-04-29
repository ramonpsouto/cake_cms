#SimpleXML e mbstring são pré instaladas
FROM php:8.2-cli 

#Baixa o script de instalação de extensões
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

#Instala as extensões e o composer
RUN install-php-extensions gd pdo_mysql intl @composer