# REBITS LAB

Para este laboratorio usé Xampp para contar con PHP, MySQL, PHPMyAdmin y Apache. Tambien instalé Composer y Laravel.

Clonar el proyecto desde github e ingresar al directorio:

```bash
git clone https://github.com/fabnun/rebits-lab.git
cd rebits-lab
```

Instalar las dependencias:

```bash
composer install --ignore-platform-reqs
```

Renombrar el archivo .env.example a .env y editar los datos de conexión a la base de datos y la url de la APP. En mi caso la url estara en 127.0.0.1:8000, usare MySQL localmente y la base de datos se llamará rebits_lab.

```properties
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rebits_lab
DB_USERNAME=root
DB_PASSWORD=
```

Finalmente creamos los datos de la base de datos:

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

Si lanza un error del tipo:

```error
Current browser version is 109.0.5414.122 with binary path C:\Program Files\Google\Chrome\Application\chrome.exe
```

Ejecutar esto, para igualar la versión de Chrome con la de Dusk:

```bash
php artisan dusk:chrome-driver 109
```

Nota: Para ejecutar las pruebas debe estar en ejecución el servidor de Laravel.
