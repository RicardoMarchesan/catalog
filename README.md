
# Quick Start project with Docker

## Rodar o Laravel

Clone Repositório
```sh
git clone https://github.com/RicardoMarchesan/catalog.git infra
```

```sh
cd infra/
```

Remova o versionamento (opcional)
```sh
rm -rf .git/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Laravel"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=db_videos
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```

Se estiver utilizando PhpStorm pode utilizar o services localizado no canto inferior esquerdo:
1. Clique no menu Services
2. Clique em Add Service
3. Clique em Docker
4. Clique em Connection From Contexts

A partir disso você terá acesso a todos os containers, logs, dash e terminal.


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8000](http://localhost:8000)
