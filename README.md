# 🐘 Projeto Laravel Dockerizado

![Laravel + Docker](https://user-images.githubusercontent.com/000000/laravel-docker.png)

## 🚀 Sobre

Este projeto é uma aplicação PHP utilizando o framework Laravel, totalmente containerizada com Docker. Ele tem como objetivo oferecer um ambiente de desenvolvimento padronizado e de fácil replicação.

## 🧰 Stack utilizada

- **PHP 8.x**
- **Laravel 10**
- **Docker + Docker Compose**
- **MySQL 8**
- **Nginx**
- **Composer**
- **Node.js + npm (para frontend e assets)**

## ⚙️ Instalação

### Pré-requisitos

- Docker
- Docker Compose
- Make (opcional, para facilitar os comandos)

### Passos

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/nome-do-projeto.git
cd nome-do-projeto

# Copie o arquivo de ambiente
cp .env.example .env

# Suba os containers
docker-compose up -d --build

# Instale as dependências do PHP
docker exec -it app composer install

# Gere a chave da aplicação
docker exec -it app php artisan key:generate

# Rode as migrations
docker exec -it app php artisan migrate

# Instale os assets frontend (opcional)
docker exec -it app npm install && npm run dev



