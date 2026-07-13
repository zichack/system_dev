# 🎮 Catálogo de Jogos - CRUD em PHP (MVC)

Uma aplicação web desenvolvida em PHP utilizando o padrão de arquitetura **MVC (Model-View-Controller)** e banco de dados relacional. Este projeto foi desenvolvido como atividade prática para consolidar conceitos de orientação a objetos, segurança com banco de dados e componentização de interfaces.

O sistema realiza as operações fundamentais de **CRUD** (Create, Read, Update, Delete) para gerenciar um catálogo de jogos de videogame.

## 🚀 Tecnologias Utilizadas

* **Back-end:** PHP 8+
* **Banco de Dados:** MySQL
* **Conexão de Dados:** PDO (PHP Data Objects) com *Prepared Statements* (Prevenção contra SQL Injection)
* **Front-end:** HTML5, CSS3 e Bootstrap 5
* **Arquitetura:** MVC (Model, View, Controller)

## ⚙️ Funcionalidades

- [x] **Create:** Cadastro de novos jogos (Título, Gênero, Plataforma, Ano de Lançamento).
- [x] **Read:** Listagem dinâmica dos jogos cadastrados em tabela estruturada.
- [x] **Update:** Edição de dados de um jogo já existente.
- [x] **Delete:** Exclusão de registros do banco de dados com confirmação prévia.
- [x] **Feedback Visual:** Alertas dinâmicos de sucesso ou erro (via Bootstrap) para cada ação realizada pelo usuário.

## 📂 Estrutura do Projeto

A organização de pastas foi desenhada para separar claramente as responsabilidades da aplicação:

* `/config`: Contém a classe `Database.php` responsável por gerenciar a conexão PDO com o banco.
* `/models`: Contém a classe `Jogo.php` com as propriedades da entidade e as lógicas de manipulação SQL.
* `/controllers`: Contém o `JogoController.php` que intercepta as requisições e gerencia o fluxo de dados.
* `/views`: Contém os arquivos de interface do usuário (`cadastrar.php`, `editar.php`, `listar.php`, `mensagem.php`).
* `/public`: Armazena os arquivos estáticos (CSS do Bootstrap).

## 🛠️ Como executar o projeto localmente

1. Clone este repositório em sua máquina local.
2. Inicie o seu servidor de banco de dados (ex: MySQL via XAMPP).
3. Importe o script de criação do banco de dados executando o arquivo `banco.sql`.
4. Abra o terminal na raíz do projeto e inicie o servidor embutido do PHP: php -S localhost:8000
5. Acesse no navegador a URL http://localhost:8000