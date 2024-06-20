# Vet Basic Project

![Laravel](https://img.shields.io/badge/Laravel-11.11.0.x-red)
![PHP](https://img.shields.io/badge/PHP-8.3.6-blue)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.5.2-brightgreen)

## Descrição

**Vet Basic Project** é uma aplicação de gestão para uma clínica veterinária, desenvolvida em Laravel. Permite gerenciar clientes, animais de estimação, consultas e tratamentos de maneira eficiente.

## Funcionalidades

- Gestão de clientes
- Gestão de animais de estimação
- Gestão de consultas
- Gestão de tratamentos
- Modo claro/escuro

## Capturas de Tela

### Página Principal

![Home](https://via.placeholder.com/800x400.png?text=Home+Screenshot)

### Gestão de Clientes

![Clientes](https://via.placeholder.com/800x400.png?text=Clientes+Screenshot)

## Requisitos

- PHP 8.3.6
- Composer
- MySQL
- Node.js y NPM

## Instalação

Siga estes passos para configurar o projeto localmente:

1. Clonar o repositório

    ```bash
    git clone https://github.com/YOUR_GITHUB_USERNAME/vet-basic-project.git
    cd vet-basic-project
    ```

2. Instalar as dependências do Composer

    ```bash
    composer install
    ```

3. Copiar o arquivo de ambiente e configurar as variáveis de ambiente

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configurar o banco de dados no arquivo `.env`

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=vet_basic_project
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. Executar as migrações

    ```bash
    php artisan migrate
    ```

6. Instalar as dependências do Node.js

    ```bash
    npm install
    ```

7. Compilar os assets

    ```bash
    npm run dev
    ```

8. Iniciar o servidor de desenvolvimento

    ```bash
    php artisan serve
    ```

## Uso

Acesse a aplicação em `http://127.0.0.1:8000` e comece a gerenciar sua clínica veterinária.

## Contribuição

Se você deseja contribuir para este projeto, por favor siga os seguintes passos:

1. Faça um fork do repositório
2. Crie uma nova branch (`git checkout -b feature/nova-funcionalidade`)
3. Faça suas alterações e commit (`git commit -am 'Adicionar nova funcionalidade'`)
4. Envie sua branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).

## Contacto

**Miguel Nallar**

- [LinkedIn](https://www.linkedin.com/in/estebannallar)
- [GitHub](https://github.com/Miguel0310)
- [Email](mailto:miguel95.mn@gmail.com)
