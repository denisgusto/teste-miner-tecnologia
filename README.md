<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://minertecnologia.com/wp-content/uploads/2021/11/Logo-01-1-768x323.png" width="400" alt="Miner Logo"></a></p>

## Instalação

### Configuração .env
Criado com PHP 8.1 e Laravel 10

```
cp .env.example .env
```

```
APP_URL="URL_DE_DEV"

DB_DATABASE=teste_miner_tecnologia
DB_USERNAME=root
DB_PASSWORD=
```

### Execução
Rodar as dependências:
```
composer install && npm install
```

Criar o APP_KEY:
```
php artisan key:generate
```

Subir as migrations:
```
# Executar o --seed pois criei seeders pra não precisar cadastrar dados no banco de dados para o teste.
php artisan migrate:fresh --seed
```

Rodando o projeto:
```
php artisan serve
```
```
npm run dev
```

Usuários e administradores pré-criados:
```
admin@minertecnologia.com
12345678

user1@minertecnologia.com
12345678

user2@minertecnologia.com
12345678
```

### Observações de utilização
Para modificar as permissões dos usuários clique em cima de cada permissão:

<img src="https://i.ibb.co/drFRdJk/projeto-miner-tecnologia.png">
