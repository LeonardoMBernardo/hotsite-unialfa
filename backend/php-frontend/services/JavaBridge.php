//Ignorar por Enquanto a simplificação das urls

RewriteEngine On

# Remove .php da URL
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^([^/]+)$ $1.php [L]

# /area/NOME → eventos.php?area=NOME
RewriteRule ^eventos/area/([a-zA-Z0-9_%\s-]+)$ eventos.php?area=$1 [L,QSA]

# /eventos_detalhe/ID → eventos_detalhe.php?id=ID
RewriteRule ^eventos_detalhe/([0-9]+)$ eventos_detalhe.php?id=$1 [L,QSA]

ErrorDocument 404 /hotsite-unialfa/php-frontend/pages/404.php
