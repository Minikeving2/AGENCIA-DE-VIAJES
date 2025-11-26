# 🏢 Agencia – Laravel Project

Este proyecto es una aplicación desarrollada con Laravel, PHP, TailwindCSS, Vite y otras herramientas modernas del ecosistema web. Su estructura sigue el estándar de un proyecto Laravel 10+, lo que permite escalabilidad, seguridad y facilidad de mantenimiento.

------------------------------------------------------------
🚀 CARACTERÍSTICAS PRINCIPALES
------------------------------------------------------------
- Arquitectura MVC de Laravel
- Sistema de rutas organizado
- Integración con Vite para assets modernos
- TailwindCSS para estilos responsivos
- Gestión de dependencias con Composer y NPM
- Estructura lista para desarrollo backend y frontend
- Configuración por entorno (.env)
- Integración con PHPUnit para pruebas

------------------------------------------------------------
📁 ESTRUCTURA DEL PROYECTO
------------------------------------------------------------
app/               → Modelos, controladores y lógica principal
bootstrap/         → Carga inicial del framework
config/            → Configuraciones del sistema
database/          → Migraciones, seeders y factories
public/            → Archivos accesibles públicamente
resources/         → Vistas Blade, CSS, JS, componentes
routes/            → Rutas web, API y consola
storage/           → Archivos generados (logs, cache)
tests/             → Pruebas unitarias y funcionales
vendor/            → Dependencias de Composer
node_modules/      → Dependencias de NPM

# 📁 ESTRUCTURA COMPLETA DEL PROYECTO (CON SUBCARPETAS)

Este es el desglose detallado del proyecto Laravel “agencia”, con todas sus carpetas y subdirectorios más relevantes.

------------------------------------------------------------
ROOT DEL PROYECTO
------------------------------------------------------------
<details> <summary><strong>📦 Ver estructura completa</strong></summary>
/agencia
├── app
│   ├── Console
│   │   └── Kernel.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   └── (Controladores del proyecto)
│   │   ├── Middleware
│   │   │   ├── Authenticate.php
│   │   │   ├── EncryptCookies.php
│   │   │   ├── PreventRequestsDuringMaintenance.php
│   │   │   ├── RedirectIfAuthenticated.php
│   │   │   └── TrimStrings.php
│   │   └── Kernel.php
│   ├── Models
│   └── Providers
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── EventServiceProvider.php
│       └── RouteServiceProvider.php
│
├── bootstrap
│   └── app.php
│
├── config
│   └── (archivos de configuración)
│
├── public
│   ├── index.php
│   ├── favicon.ico
│   └── assets
│
├── resources
│   ├── css
│   │   └── app.css
│   ├── js
│   │   └── app.js
│   ├── views
│   │   ├── welcome.blade.php
│   │   └── layouts
│   │       └── app.blade.php
│   ├── components (Blade)
│   ├── lang
│   │   ├── es
│   │   └── en
│   └── routes
│       ├── web.php
│       ├── api.php
│       ├── channels.php
│       └── console.php
│
├── routes
│   ├── web.php
│   ├── api.php
│   └── console.php
│
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
└── README.md

</details>

------------------------------------------------------------
🔧 REQUERIMIENTOS
------------------------------------------------------------
- PHP >= 8.1
- Composer
- Node.js + NPM
- MySQL o MariaDB
- Extensiones PHP requeridas por Laravel

------------------------------------------------------------
🛠 INSTALACIÓN Y CONFIGURACIÓN
------------------------------------------------------------
1. Clonar el repositorio:
   git clone https://github.com/tu-usuario/agencia.git
   cd agencia

2. Instalar dependencias:
   composer install
   npm install

3. Crear archivo .env:
   cp .env.example .env

4. Configurar base de datos en .env:
   DB_DATABASE=agencia
   DB_USERNAME=root
   DB_PASSWORD=tu_clave

5. Generar key de la app:
   php artisan key:generate

6. Ejecutar migraciones:
   php artisan migrate

7. Compilar assets:
   npm run dev

8. Ejecutar servidor:
   php artisan serve

Proyecto disponible en:
http://localhost:8000



