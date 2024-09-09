# Gestão de Produtos 


## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Assista ao **[curso](https://www.udemy.com/course/laravel-10-do-basico-ao-avancado/)** para saber como implantar o projeto.

### 📋 Pré-requisitos

```
PHP versão 8.1.10
Laravel versão 9
```

### 🔧 Instalação

- Clone o repositório:

```
git clone https://github.com/vinidevel/vinidevel.git
```
- Instale o composer e as dependências

```
composer install
```

- Crie um arquivo .env na raiz do projeto ou duplique o .env(example) para configurar as seguintes infformações:

  . Nome do projeto:

```
APP_NAME=Laravel
```

  . Banco de Dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

- Gerar o key generate:

  ```
  php artisan key:generate
```


## ⚙️ Basta rodar o comando a seguir para rodar a aplicação caso não esteja usando algum pacote de ferramentas, ex: Laragon.


```

```
php artisan serve
```
