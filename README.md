# REBITS LAB

Para este laboratorio usé Xampp para contar con PHP, MySQL, PHPMyAdmin y Apache. También instalé Composer y Laravel. Y el entorno de desarrollo que usé fue Windows 10.

Clonar el proyecto desde github e ingresar al directorio:

```bash
git clone https://github.com/fabnun/rebits-lab.git
cd rebits-lab
```

Instalar las dependencias:

```bash
composer install --ignore-platform-reqs
```

Renombrar el archivo .env.example a .env y editar los datos de conexión a la base de datos y la url de la APP. En mi caso la url estará en 127.0.0.1:8000, usaré MySQL localmente y la base de datos se llamará rebits_lab.

```properties
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rebits_lab
DB_USERNAME=root
DB_PASSWORD=
```

Ejecutar la migracion para crear la estructura de la base de datos:

```bash
php artisan migrate
```

Ejecutar el servidor:

```bash
php artisan serve
```

# Pruebas funcionales con Dusk

Instalar Dusk:

```bash
php artisan dusk:install
```

Ejecutar las pruebas:

```bash
php artisan dusk
```

Sí lanza un error del tipo:

```error
Current browser version is 109.0.5414.122 with binary path C:\Program Files\Google\Chrome\Application\chrome.exe
```

Ejecutar esto, para igualar la versión de Chrome con la de Dusk:

```bash
php artisan dusk:chrome-driver 109
```

Nota: Para ejecutar las pruebas debe estar en ejecución el servidor de Laravel.

## Estructura del proyecto

```bash

# Configuración de la app ('timezone' => 'America/Santiago')
/config/app.php

# modelo de la base de datos (softDeletes)
/database/migrations/2023_02_19_212125_create_usuarios_table.php
/database/migrations/2023_02_19_212438_create_vehiculos_table.php
/database/migrations/2023_02_19_212457_create_historicos_table.php

# Modelos (softDeletes)
/app/Models/Usuario.php
/app/Models/Vehiculo.php
/app/Models/Historico.php

# Controladores (modelos -> vistas)
/app/Http/Controllers/UsuarioController.php
/app/Http/Controllers/VehiculoController.php

# Vistas
/resources/views/layouts/master.blade.php # Plantilla base
/resources/views/index.blade.php # Pagina de inicio
/resources/views/usuarios/index.blade.php # Listado de usuarios
/resources/views/usuarios/create.blade.php # Formulario de creación de usuarios
/resources/views/usuarios/edit.blade.php # Formulario de edición de usuarios
/resources/views/usuarios/show.blade.php # Detalle de usuario
/resources/views/vehiculos/index.blade.php # Listado de vehiculos
/resources/views/vehiculos/create.blade.php # Formulario de creación de vehiculos
/resources/views/vehiculos/edit.blade.php # Formulario de edición de vehiculos
/resources/views/vehiculos/show.blade.php # Detalle de vehiculo

# Rutas
/routes/web.php

# Pruebas funcionales con Dusk
/tests/Browser/RebitsTest.php

# Configuracion del proyecto
/composer.json

# Variables de entorno
/.env

# README
/README.md

```
