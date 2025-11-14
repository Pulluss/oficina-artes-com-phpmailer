# Oficina de Artes — versão simples (PHPmailer + HTML)

## Requisitos
- PHP 7.4+ com PDO (extensão pdo_mysql)
- MySQL ou MariaDB
- Servidor web (Apache, Nginx, PHP built-in etc.)

## Instalação rápida
1. Clone o repositório.
2. Crie a pasta `uploads/` na raiz do projeto e dê permissão de escrita ao servidor web (ex.: `mkdir uploads && chmod 755 uploads`).
3. Importe o SQL `sql/create_db.sql` no seu servidor MySQL (ou rode o script via cliente MySQL).
4. Edite `db.php` com as credenciais do seu banco.
5. Abra no navegador `http://seu-servidor/oficina-artes/index.php`.

## Observações
- Não há CSS por requisito — sinta-se livre para estilizar depois.
- Uploads aceitos: jpg, jpeg, png, gif, webp.
- Uso de PDO com tratamento de erros por exceção.
