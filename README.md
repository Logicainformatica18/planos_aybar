
# PROYECTO APLICACIÓN LARAVEL PLANOS

Este repositorio contiene una aplicación basada en Laravel 10, para el almacenamientos de documentos de Aybar Corp con una arquitectura moderna, autenticación robusta y herramientas para integraciones externas, exportación de datos y manejo de usuarios con roles y permisos.

## Tecnologías Usadas

![PHP](https://img.shields.io/badge/PHP-8.1-blue)
![Laravel](https://img.shields.io/badge/Laravel-10-red)
![Composer](https://img.shields.io/badge/Composer-Dependency-orange)
![MySQL](https://img.shields.io/badge/MySQL-Database-lightblue)
![Sanctum](https://img.shields.io/badge/Sanctum-TokenAuth-blueviolet)
![Socialite](https://img.shields.io/badge/Socialite-OAuth-green)
![Excel](https://img.shields.io/badge/Excel-Import%2FExport-success)
![QR](https://img.shields.io/badge/QR--Code-Generator-informational)

## Requisitos

- PHP ^8.1
- Composer
- Base de datos MySQL
- Extensiones PHP necesarias: OpenSSL, PDO, Mbstring, Tokenizer, JSON, Fileinfo, Ctype, BCMath, XML

## Instalación

```bash
git clone https://github.com/Logicainformatica18/planos_aybar
cd repositorio
composer install
cp .env.example .env
php artisan key:generate
```

Configura el archivo `.env` con los valores de conexión a tu base de datos y correo.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_basededatos
DB_USERNAME=root
DB_PASSWORD=secret
```

Ejecuta las migraciones y seeders:
```bash
php artisan migrate --seed
```

Inicia el servidor:
```bash
php artisan serve
```

## Funcionalidades

- Autenticación tradicional y con Microsoft (OAuth)
- API segura con Laravel Sanctum
- Gestión de usuarios, roles y permisos (Spatie)
- Exportación e importación de datos vía Excel
- Generación de códigos QR
- Manejo de imágenes con Intervention Image
- Integración con APIs de Google (Google Client)
- Autenticación en dos pasos con Google2FA

## Estructura del Proyecto

- `app/` – Lógica de aplicación, modelos, controladores, servicios
- `routes/` – Rutas web y API
- `resources/views` – Vistas Blade
- `database/` – Migraciones, seeders, factories
- `public/` – Recursos públicos y punto de entrada
- `tests/` – Pruebas automatizadas

## Paquetes Destacados

### Producción

- `laravel/framework`
- `laravel/sanctum`
- `laravel/socialite` + `socialiteproviders/microsoft`
- `spatie/laravel-permission`
- `maatwebsite/excel`
- `simplesoftwareio/simple-qrcode`
- `intervention/image`
- `guzzlehttp/guzzle`
- `google/apiclient`
- `pragmarx/google2fa-laravel`
- `laravel/ui`

### Desarrollo

- `barryvdh/laravel-debugbar`
- `fakerphp/faker`
- `laravel/pint`
- `laravel/sail`
- `mockery/mockery`
- `phpunit/phpunit`
- `spatie/laravel-ignition`
- `nunomaduro/collision`

## Comandos Útiles

```bash
php artisan migrate:fresh --seed
php artisan config:cache
php artisan route:list
php artisan optimize:clear
php artisan vendor:publish
```

## Licencia

Este proyecto está bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

## Recursos

- [Laravel Docs](https://laravel.com/docs)
- [Composer Docs](https://getcomposer.org/doc/)
- [Spatie Permission](https://spatie.be/docs/laravel-permission)
- [Laravel Excel](https://docs.laravel-excel.com)
- [Google Client API](https://github.com/googleapis/google-api-php-client)
