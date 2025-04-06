# 🐘 CRUD em PHP com PDO + Bulma + Docker

Este projeto é um sistema simples de cadastro de usuários (CRUD) feito em PHP com PDO, estilizado com Bulma, utilizando MySQL como banco de dados e Docker para facilitar a execução do projeto.

---

## 🚀 Funcionalidades

- ✅ Listagem de usuários
- ✅ Cadastro de novo usuário
- ✅ Edição de dados
- ✅ Exclusão com confirmação
- ✅ Setup automático do banco de dados (Infraestrutura como Código)

---

## 🐳 Como Rodar com Docker

Certifique-se de que possui o [Docker](https://www.docker.com/) instalado.

1. Clone o repositório:
```bash
git clone https://github.com/fessouza-23/crud_php.git
cd crud_php
```

2. Execute o Docker Compose:
```bash
docker-compose up -d
```

3. Acesse no navegador:
```bash
http://localhost/crud_php/config/setup.php
```

Você verá a mensagem:
```
✅ Banco de dados 'crud_php' criado ou já existente.
```

Pronto! Você verá a lista de usuários e poderá utilizar o CRUD normalmente.

---

## 🔧 Como Parar os Containers

Para parar e remover os containers, rode:

```bash
docker-compose down
```

---

**Agora você pode usar o CRUD com PHP facilmente através do Docker!**
