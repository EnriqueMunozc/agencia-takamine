# Agencia Takamine - Proyecto Laravel

## Descripción

Agencia Takamine es una aplicación web desarrollada con Laravel que simula el sitio web de una agencia especializada en guitarras Takamine para el género Regional Mexicano.

El proyecto implementa el patrón de arquitectura MVC (Modelo - Vista - Controlador), autenticación de usuarios, validaciones frontend y backend, gestión de sesiones y conexión con base de datos.

---

# Tecnologías utilizadas

## Backend

* PHP 8.3
* Laravel 13

## Frontend

* HTML5
* CSS3
* JavaScript
* Blade Templates

## Base de Datos

* SQLite

## Control de versiones

* Git
* GitHub

## Entorno de desarrollo

* Laragon
* Composer
* Node.js (opcional para Vite)

---

# Requisitos del sistema

Antes de ejecutar el proyecto es necesario tener instalado:

## 1. Laragon

Descargar e instalar Laragon:

https://laragon.org

Laragon proporciona:

* Apache
* PHP
* MySQL
* Terminal integrada
* Gestión de proyectos locales

---

## 2. Composer

Verificar instalación:

```bash
composer --version
```

Si Composer no está instalado:

https://getcomposer.org

---

## 3. Git

Verificar instalación:

```bash
git --version
```

Si Git no está instalado:

https://git-scm.com

---

## 4. PHP

Verificar instalación:

```bash
php -v
```

Versión utilizada durante el desarrollo:

```text
PHP 8.3
```

---

# Clonación del proyecto

Abrir una terminal y ejecutar:

```bash
git clone URL_DEL_REPOSITORIO
```

Entrar a la carpeta:

```bash
cd Agencia
```

---

# Instalación de dependencias

Instalar todas las dependencias de Laravel:

```bash
composer install
```

Este comando descargará todas las librerías necesarias definidas en:

```text
composer.json
```

---

# Configuración del archivo .env

Crear una copia del archivo de configuración:

```bash
cp .env.example .env
```

Si se trabaja en Windows:

```bash
copy .env.example .env
```

---

# Generación de clave de aplicación

Ejecutar:

```bash
php artisan key:generate
```

Laravel generará automáticamente:

```env
APP_KEY=
```

Esta clave es utilizada para:

* Encriptación
* Sesiones
* Tokens
* Cookies

---

# Configuración de la base de datos

Este proyecto utiliza SQLite.

Crear el archivo:

```text
database/database.sqlite
```

Puede crearse manualmente o mediante terminal.

Ejemplo:

```bash
type nul > database/database.sqlite
```

Verificar que el archivo exista.

---

## Configurar .env

Asegurarse de tener:

```env
DB_CONNECTION=sqlite
```

Las demás variables de MySQL deben permanecer comentadas.

---

# Ejecutar migraciones

Crear las tablas necesarias:

```bash
php artisan migrate
```

Laravel generará automáticamente:

* users
* cache
* jobs
* password_reset_tokens
* sessions

---

# Verificar migraciones

Ejecutar:

```bash
php artisan migrate:status
```

Todas las migraciones deben aparecer como:

```text
Ran
```

---

# Ejecutar el proyecto

Iniciar el servidor local:

```bash
php artisan serve
```

Laravel mostrará algo similar a:

```text
INFO Server running on:

http://127.0.0.1:8000
```

Abrir esa dirección en el navegador.

---

# Funcionalidades implementadas

## Navegación

* Inicio
* Catálogo
* Regional Mexicano
* Nosotros
* Blog
* Contacto
* Ayuda
* Mapa del sitio

---

## Catálogo

* Guitarras de 12 cuerdas
* Guitarras de 6 cuerdas
* Accesorios

---

## Regional Mexicano

* Norteño
* Banda
* Ranchero

---

## Sistema de autenticación

* Registro de usuarios
* Inicio de sesión
* Cierre de sesión
* Protección de rutas mediante middleware
* Gestión de sesiones

---

## Validaciones Frontend

Se implementaron validaciones mediante HTML5:

* required
* email
* password confirmation
* minlength

---

## Validaciones Backend

Implementadas mediante:

* UserValidator
* Request Validation
* Middleware de autenticación

Validaciones realizadas:

* Correo único
* Contraseña segura
* Coincidencia de contraseñas
* Prevención de scripts maliciosos
* Longitud mínima de campos

---

## Validación de usuarios humanos

El sistema implementa validación tipo CAPTCHA mediante checkbox:

```text
No soy un robot
```

---

## Base de Datos

La información de los usuarios registrados se almacena en SQLite.

Tabla principal:

```text
users
```

---

## Búsqueda

Se implementó un buscador integrado en la barra de navegación.

---

## Chat

Se implementó un widget de chat integrado en la interfaz principal.

---

## Páginas de error personalizadas

Se desarrollaron páginas de error para:

### Error 404

Página no encontrada.

### Error 500

Error interno del servidor.

Ubicación:

```text
resources/views/errors
```

---

# Arquitectura MVC

## Controladores

Ubicación:

```text
app/Http/Controllers
```

Controladores implementados:

* HomeController
* AuthController
* ContactController
* SearchController

---

## Vistas

Ubicación:

```text
resources/views
```

Se utilizaron plantillas Blade para la construcción de la interfaz.

---

## Rutas

Ubicación:

```text
routes/web.php
```

Todas las rutas del sistema se encuentran definidas en este archivo.

---

# Autor

Proyecto desarrollado como práctica académica utilizando Laravel 13 y el patrón MVC.
