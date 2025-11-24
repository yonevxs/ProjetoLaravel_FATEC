# 🌊 Projeto Institucional - Desenvolvimento Web 2 (FATEC PG)

## 📌 Sobre o Projeto

Este repositório contém o código-fonte do projeto final da disciplina de **Desenvolvimento Web 2** da **FATEC de Praia Grande**.

O projeto consiste no desenvolvimento de um **Site Institucional de Tema Livre** focado em aplicar os conceitos de programação orientada a objetos (POO), arquitetura MVC e manipulação de banco de dados, utilizando o framework Laravel.

## 🛠️ Tecnologias Utilizadas

O projeto foi construído sobre a arquitetura MVC (Model-View-Controller) do Laravel, utilizando:

* **Framework:** Laravel
* **Linguagem de Programação:** PHP
* **Banco de Dados:** MySQL/MariaDB (Gerenciado via PHPMyAdmin)
* **Estilização:** Tailwind CSS (Conforme indicado nos commits)
* **Dependências:** Composer e NPM/Yarn

---

## ⚙️ Instalação e Configuração

Siga os passos abaixo para configurar e rodar o projeto em sua máquina local.

### Pré-requisitos

Certifique-se de ter instalado em sua máquina:

1.  **PHP** (Versão 8.0+ é recomendada para versões recentes do Laravel).
2.  **Composer** (Gerenciador de dependências do PHP).
3.  **Node.js/NPM** (Para compilar assets front-end com Tailwind CSS).
4.  Um servidor de banco de dados (Ex: MySQL ou MariaDB).

### 1. Clonar o Repositório e Instalar Dependências

```bash
git clone [https://github.com/yonevxs/ProjetoLaravel_FATEC.git](https://github.com/yonevxs/ProjetoLaravel_FATEC.git)
cd ProjetoLaravel_FATEC
composer install
npm install
```
###2. Configurar o Ambiente:
   
  1. Crie uma cópia do arquivo de ambiente de exemplo:
     ```Bash
     cp .env.exemplo .env
     ```
   2. Gere a chave da aplicação:
      ```Bash
      php artisan key:generate
      ```
   3.Edite o arquivo .env e configure a conexão com o seu banco de dados:
   
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=[...SEU_NOME_DO_BANCO...]
        DB_USERNAME=[...SEU_USUARIO_DO_BANCO...]
        DB_PASSWORD=[...SUA_SENHA_DO_BANCO...]

  3.1 Executar Migrations e Seeders (Estrutura do Banco)
  ```Bash
    php artisan migrate --seed
  ```
  4. Compilar Assets (Tailwind CSS)
  ```Bash
    npm run dev
    # Durante o desenvolvimento, você pode usar: npm run watch
  ```
  5. Iniciar o Servidor de Desenvolvimento
     ```Bash
     php artisan serve
     ```
---
     
## 🤝 Colaboradores

O desenvolvimento deste projeto foi realizado pelos seguintes alunos:

* **GustavoInCode24** - [https://github.com/GustavoInCode24](https://github.com/GustavoInCode24)
* **yonevxs** - [https://github.com/yonevxs](https://github.com/yonevxs)
  
