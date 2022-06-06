<p align="center"><img src="public/assets/images/logotipo.png" width="250" height="250"></p>

# NewModern Loja Virtual

#### Sobre:

Loja Virtual desenvolvida como trabalho obrigatório para a disciplina de **Projeto Integrador I** do curso de **Tecnologia em Ánalise e Desenvolvimento de Sistemas**.

-  **PHP 8.1.6**
-  **Composer version 2.3.5** 
-  **LARAVEL 9.12.2**
-  **MySQL 8.0.29**
-  **Banco de dados tratado com o padrão Factory** 
-  **Padrão MVC**
-  **API PayPal**
---------------------------------------------------------------------------------------------------------------------------------------------------------
<p align="center"><img src="public/assets/images/phplogo.png" width="200" height="200"></p>

## PHP 8.1.6

#### Sobre:

Criada por Rasmus Lerdof, PHP é uma linguagem interpretada livre usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web. Hoje ela é uma das linguagens mais populares para desenvolvimento web.

#### Instalação:

- Atualizar Gerenciador de Pacotes
```
sudo apt update
```
- Adicionar PPA for PHP 8.1
```
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
```
- Instalar PHP 8.1 para Apache
```
sudo apt install php8.1
```
- Verificar se a instalação foi bem-sucedida e a versão instalada
``` 
php -v
```
- Instalar PHP 8.1 para Nginx
```
sudo apt install php8.1-fpm
```
- Verificar se a instalação foi bem-sucedida e a versão instalada
``` 
php-fpm8.1 -v
```

- Instalar Extensões para PHP
```
sudo apt install php8.1-common php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-curl php8.1-gd php8.1-imagick php8.1-cli php8.1-dev php8.1-imap php8.1-mbstring php8.1-opcache php8.1-soap php8.1-zip php8.1-redis php8.1-intl -y
```
----------------------------------------------------------------------------------------------------------------------------------------------------------
<p align="center"><img src="public/assets/images/composerlogo.png" width="250" height="250"></p>

## Composer

#### Sobre:

Composer é uma ferramenta de gerenciamento de dependências em PHP. Essa ferramenta permite a declaração de bibliotecas desejadas no seu projeto e as instala para você.

#### Instalação:

- Atulizar Gerenciador de Pacotes
```
sudo apt update
```

- Instalar os os pacotes necessários
```
sudo apt install php-cli unzip zip
```

- Baixar...
``` cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

- Instalar Composer globalmente
```
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

- Verificar se a instalação foi bem-sucedida e a versão instalada
``` 
composer --version
```

----------------------------------------------------------------------------------------------------------------------------------------------------------
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Instalando Laravel via Composer





## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
