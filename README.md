# 🍔 Sistema de Cantina Escolar

🌎 English version available below.

## 📖 Sobre o Projeto

Este sistema foi desenvolvido como **Trabalho de Conclusão de Curso (TCC)** do curso Técnico em Informática.  
O objetivo principal era apresentar uma solução para a **cantina da escola**, permitindo que os alunos realizassem pedidos e pagamentos online, evitando filas longas e otimizando o espaço no refeitório.

O sistema possibilita que:
- Alunos façam seus pedidos e pagamentos pelo site.
- Retirem o lanche na cantina apenas informando a **senha gerada**, sem necessidade de fila extensa.
- Funcionários da cantina tenham acesso ao **histórico de pedidos**.

## 🚀 Funcionalidades

- 🛒 **Carrinho de compras** (adicionar, remover itens e limpar carrinho).  
- 🍔 **Catálogo de produtos** (lanches, bebidas e doces).  
- 🔑 **Login para alunos e funcionários** (usando credenciais já fornecidas pela escola).  
- 📊 **Histórico de pedidos para funcionários**.  
- 💳 **Pagamentos online simulados**.  

## 🛠️ Tecnologias Utilizadas

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Banco de Dados**: MySQL  
- **Servidor local**: XAMPP (Apache + MySQL)  

## ⚙️ Instalação e Execução (Passo a Passo)

### 1️⃣ Pré-requisitos

- [XAMPP](https://www.apachefriends.org/index.html) instalado (com Apache e MySQL).
- Git (opcional, apenas se quiser clonar o repositório direto).

### 2️⃣ Baixar o projeto

Clone este repositório:

  ```bash
  git clone https://github.com/Cyzeone/sistema_cantina.git
  ```
ou faça o download do .zip e extraia.

### 3️⃣ Configurar no XAMPP

1. Mova a pasta do projeto para dentro do diretório:

```makefile
C:\xampp\htdocs\
```

ficando assim:

```makefile
C:\xampp\htdocs\sistema_cantina
```

2. Inicie o XAMPP e ative os módulos:

    - Apache ✅
    - MySQL ✅

3. Acesse o phpMyAdmin pelo navegador:

```arduino
http://localhost/phpmyadmin
```

4. Crie um banco de dados (exemplo: cantina_db).

    Importe o arquivo .sql do projeto (caso já esteja incluído na pasta, normalmente algo como banco.sql).

5. Configure o arquivo de conexão do banco no projeto (config.php ou similar) para corresponder ao nome do seu banco, usuário e senha do MySQL.

### 4️⃣ Acessar o sistema

Abra no navegador:

```arduino
http://localhost/sistema_cantina
```

## 👥 Público-alvo do sistema

- Alunos: fazem login, realizam pedidos e pagamentos.
- Funcionários da cantina: acessam histórico de pedidos e gerenciam atendimentos.

## ✍️ Autores

- Projeto desenvolvido por alunos do curso Técnico em Informática como TCC.

---

# 🍔 School Canteen System

## 📖 About the Project

This system was developed as the **Final Course Project (TCC)** of the Technical Course in Informatics.  
The main goal was to present a solution for the **school canteen**, allowing students to place orders and make payments online, avoiding long queues and optimizing the use of the cafeteria space.

The system allows:
- Students to place their orders and payments through the website.  
- Collect their snack at the canteen by simply providing the **generated code**, without waiting in long lines.  
- Canteen staff to access the **order history**.  

## 🚀 Features

- 🛒 **Shopping cart** (add, remove items and clear cart).  
- 🍔 **Product catalog** (snacks, drinks, and sweets).  
- 🔑 **Login for students and staff** (using credentials previously provided by the school).  
- 📊 **Order history for staff**.  
- 💳 **Simulated online payments**.  

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  
- **Local server**: XAMPP (Apache + MySQL)  

## ⚙️ Installation and Execution (Step by Step)

### 1️⃣ Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed (with Apache and MySQL).  
- Git (optional, only if you want to clone the repository directly).  

### 2️⃣ Download the project

Clone this repository:

```bash
git clone https://github.com/Cyzeone/sistema_cantina.git
```

or download the .zip file and extract it.

### 3️⃣ Configure in XAMPP

1. Move the project folder into the directory:

```makefile
C:\xampp\htdocs\
```

So it becomes:

```makefile
C:\xampp\htdocs\sistema_cantina
```

2. Start XAMPP and enable the modules:

    - Apache ✅
    - MySQL ✅

3. Access phpMyAdmin in your browser:

```arduino
http://localhost/phpmyadmin
```

4. Create a database (example: cantina_db).

    Import the .sql file from the project (if included in the folder, usually named banco.sql).

5. Configure the database connection file in the project (config.php or similar) to match your database name, user, and MySQL password.

### 4️⃣ Access the system

Open in your browser:

```arduino
http://localhost/sistema_cantina
```

## 👥 Target Audience of the System

- Students: log in, place orders, and make payments.
- Canteen staff: access order history and manage service.

## ✍️ Authors

- Project developed by students of the Technical Course in Informatics as a Final Course Project (TCC).