# Vet Basic Project

![Laravel](https://img.shields.io/badge/Laravel-11.11.0.x-red)
![PHP](https://img.shields.io/badge/PHP-8.3.6-blue)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.5.2-brightgreen)

## Descripción

**Vet Basic Project** es una aplicación de gestión para una clínica veterinaria, desarrollada en Laravel. Permite gestionar clientes, mascotas, citas y tratamientos de manera eficiente.

## Características

- Gestión de clientes
- Gestión de mascotas
- Gestión de citas
- Gestión de tratamientos

## Requisitos

- PHP 8.3.6
- Composer
- MySQL
- Node.js y NPM

## Instalación

Sigue estos pasos para configurar el proyecto localmente:

1. Clonar el repositorio

    ```bash
    git clone https://github.com/Miguel0310/veterinaria-crud.git
    cd vet-basic-project
    ```

2. Instalar las dependencias de Composer

    ```bash
    composer install
    ```

3. Copiar el archivo de entorno y configurar las variables de entorno

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configurar la base de datos en el archivo `.env`

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=vet_basic_project
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. Ejecutar las migraciones

    ```bash
    php artisan migrate
    ```

6. Instalar las dependencias de Node.js

    ```bash
    npm install
    ```

7. Compilar los assets

    ```bash
    npm run dev
    ```

8. Iniciar el servidor de desarrollo

    ```bash
    php artisan serve
    ```

## Uso

Accede a la aplicación en `http://127.0.0.1:8000` y comienza a gestionar tu clínica veterinaria.

## Contribución

Si deseas contribuir a este proyecto, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio
2. Crea una rama nueva (`git checkout -b feature/nueva-funcionalidad`)
3. Realiza tus cambios y haz commit (`git commit -am 'Agregar nueva funcionalidad'`)
4. Sube tu rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).

## Contacto

**Miguel Nallar**

- [LinkedIn](https://www.linkedin.com/in/estebannallar)
- [GitHub](https://github.com/Miguel0310)
- [Email](mailto:miguel95.mn@gmail.com)
