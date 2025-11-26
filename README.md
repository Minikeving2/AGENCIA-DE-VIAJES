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
```
agencia
├── app                
│   ├── Http                         # Manejo de peticiones HTTP
│   │   ├── Controllers              # Controladores del proyecto (lógica de negocio)
│   │   ├── Middleware               # Filtros de seguridad y validación de peticiones
│   │   │   ├── Authenticate.php                 
│   │   │   ├── EncryptCookies.php               
│   │   │   ├── PreventRequestsDuringMaintenance.php 
│   │   │   ├── RedirectIfAuthenticated.php     
│   │   │   └── TrimStrings.php 
│   ├── Models                        # Modelos Eloquent (representan tablas)
│   └── Providers                     # Servicios principales de Laravel
│       ├── AppServiceProvider.php           
│       ├── AuthServiceProvider.php          
│       ├── EventServiceProvider.php         
│       └── RouteServiceProvider.php         
│
├── bootstrap                        # Inicializa la aplicación Laravel
│   └── app.php                      # Crea la instancia principal de Laravel
│
├── config                           # Archivos de configuración global
│   ├── app.php                      
│   ├── auth.php                     # Configuración de autenticación
│   ├── broadcasting.php             
│   ├── cache.php                    # Configuración de caché
│   ├── filesystems.php              
│   ├── logging.php                
│   ├── mail.php                    
│   ├── queue.php                    
│   ├── sanctum.php                  # Configuración para tokens de API
│   ├── services.php                 # API keys y servicios externos
│   ├── session.php                  # Configuración de sesiones
│   └── view.php                     # Configuración de vistas Blade
│
├── public                           # Carpeta pública (se sirve por Apache/Nginx)
│   ├── index.php                    # Punto de entrada de Laravel
│   ├── favicon.ico                  # Icono del proyecto
│   ├── css                          # Archivos CSS compilados
│   └── js                           # Archivos JS compilados
│
├── resources                        # Archivos fuente (no compilados)
│   ├── css                          # CSS/Tailwind original
│   │   └── app.css
│   ├── js                           # Código JS modificado por Vite
│   │   └── app.js
│   ├── views                        # Plantillas Blade (frontend)
│   │   ├── welcome.blade.php        # Vista principal por defecto
│   │   └── layouts                  # Layouts base para las páginas
│   │       └── app.blade.php
│   ├── components                   # Componentes Blade reutilizables
│
├── routes                           # Archivo de rutas del proyecto
│   ├── web.php                      # Rutas web (vistas y controladores)
│   ├── api.php                      # Rutas API (JSON)
│   ├── channels.php                 # Canales para broadcasting
│   └── console.php                  # Comandos Artisan basados en rutas
│                     
```

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



