<p align="center"><img src="https://yt3.googleusercontent.com/RJ8DYV_O9Vx9-V3oy0XmRhIa1Nvog0L4XdE-Z6Kj6UjgQweMnZXBm16Z1mLuR3zuiHi8xQ_ArQ=s900-c-k-c0x00ffffff-no-rj" width="200"></p>

<p align="center">Aplicação para processo seletivo do Ministério da Gestão e da Inovação! 🚀</p>

<p align="center">
<a href="#"><img src="https://img.shields.io/static/v1?label=Build&message=Success&color=1C713A&style=for-the-badge"/></a>
<a href="#"><img src="https://img.shields.io/static/v1?label=Deploy&message=Pending&color=FFB903&style=for-the-badge"/></a>
<a href="#"><img src="https://img.shields.io/static/v1?label=Composer&message=v2.6.6&color=1C713A&style=for-the-badge"/></a>
<a href="#"><img src="https://img.shields.io/static/v1?label=PHP&message=v8.3&color=1C713A&style=for-the-badge"/></a>
<a href="#"><img src="https://img.shields.io/static/v1?label=Laravel&message=v10.x&color=1C713A&style=for-the-badge"/></a>
<a href="#"><img src="https://img.shields.io/static/v1?label=PostgreSQL&message=v15&color=1C713A&style=for-the-badge"/></a>
<a href="#"><img src="https://img.shields.io/static/v1?label=License&message=MIT&color=044A84&style=for-the-badge"/></a>
</p>

## 🚀 Começando

Projeto realizado para o processo seletivo do Ministério da Gestão e da Inovação.

Para isso, a aplicação conta com 1 funcionalidade:

* Página com formulário para cadastro de usuários na base de dados;

### 🛠️ Construído com

* [Laravel v10.x](https://laravel.com/docs/10.x) - Framework Back-end
* [PostgreSQL v15.0](https://www.postgresql.org/docs/15/index.html) - Banco de Dados

## 🔧 Instalação

### Instalação - via Docker

O Docker é uma ferramenta para executar aplicativos e serviços em "contêineres" pequenos e leves que não interferem na configuração ou no software instalado em seu computador local.

Porém, para utilizar desse recurso, é preciso ter instalado o [Docker Desktop](https://www.docker.com/products/docker-desktop).

E para ambiente Windows, é necessário garantir que o Subsistema Windows para Linux 2 (WSL2) esteja instalado e ativado. As informações sobre como instalar e habilitar o WSL2 podem ser encontradas na [documentação da Microsoft](https://docs.microsoft.com/en-us/windows/wsl/install-win10).

* Clone esse repositório: `git clone https://github.com/gabriel-fn/teste-mgi.git`.
* `cd teste-mgi` vá para a raiz do seu projeto.
* `composer install --no-scripts` para instalar as dependências.
* `cp .env.docker .env` para criar o arquivo de configuração.
* `./vendor/bin/sail up` inicia o container Docker pelo sail.
* `./vendor/bin/sail artisan key:generate` para gerar a chave de criptografia.
* `./vendor/bin/sail artisan migrate --seed` para migrar o banco de dados.
* `./vendor/bin/sail npm install` para instalar as dependências do front-end.
* `./vendor/bin/sail npm run dev` ou `npm run watch-poll` para compilar os arquivos do CSS e JS.
* Pronto. :tada:

### Instalação - Local

* Clone esse repositório: `git clone https://github.com/gabriel-fn/teste-mgi.git`.
* `cd teste-mgi` vá para a raiz do seu projeto.
* `composer install --no-scripts` para instalar as dependências.
* `cp .env.example .env` para criar o arquivo de configuração.
* `php artisan key:generate` para gerar a chave de criptografia.
* `php artisan migrate --seed` para migrar o banco de dados.
* `npm install` para instalar as dependências do front-end.
* `npm run dev`, `npm run watch-poll` ou `npm run prod` para compilar os arquivos do CSS e JS.
* Pronto. :tada:

## 📦 Desenvolvimento

Algumas informações adicionais para implantar a aplicação em um sistema ativo.

Você precisa configurar as variáveis da aplicação e do banco de dados no arquivo **.env** criado (para atender ao seu ambiente de desenvolvimento/produção):

```
...

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=teste_mgi
DB_USERNAME=root
DB_PASSWORD=

...
```

Também fique atento a outras variáveis importantes da aplicação (e altere elas conforme seu ambiente):

```
...

APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8081
APP_PORT=8081

...
```

## 🔧 Testes

Para executar os teste, digite o seguinte comando no terminal: `php artisan test`

E caso esteja rodando a aplicação em ambiente Docker, execute o comando utilizando o sail: `./vendor/bin/sail artisan test`

---
⌨️ com ❤️ por [Gabriel Nascimento](https://www.linkedin.com/in/gabriel-fn/) 😊
