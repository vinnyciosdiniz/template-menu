# template-menu
template-menu

### Depois de clonar o projeto

### Acesse o projeto
```
cd template-menu
```
### Instale as dependências e o framework
```
composer install --no-scripts
```
### Copie o arquivo .env.example
```
cp .env.example .env
```
### Crie uma nova chave para a aplicação
```
php artisan key:generate
```
### Configure o arquivo .env e rode as migrations
```
php artisan migrate --seed
```
