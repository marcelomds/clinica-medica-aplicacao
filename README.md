# Aplicação - Clínica Médica

### - Foi utilizado o PHP 7.4 com o Framework Laravel para o desenvolvimento da aplicação.
### - Foi utilizado o MySQL como banco de dados do teste.

## Para rodar este projeto

```bash
$ git clone https://github.com/marcelomds/clinica-medica-aplicacao.git
$ cd clinica-medica-aplicacao
$ composer install #baixar a pasta vendor
$ npm install #baixar a pasta node_modules
$ cp .env.example .env #serve para configurar o Banco de Dados da aplicação

 ------------ Configurar Banco de Dados no Arquivo .env ------------
 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    
 -------------------------------------------------------------------

$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando para criar o banco, verifique sua configuracao com banco em .env
$ php artisan serve #acesse ao link que este comando gera
$ npm run watch #em outro terminal dentro da aplicação, esse comando fica 'ouvindo' toda a aplicação
```
