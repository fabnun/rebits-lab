# REBITS LAB

Para este laboratorio usé Xampp para contar con PHP, MySQL, PHPMyAdmin y Apache. Tambien instalé Composer y Laravel.

Clonar el proyecto desde github:

```bash
git clone https://github.com/fabnun/rebits-lab.git
```

Instalar las dependencias:

```bash
composer install --ignore-platform-reqs
composer require --dev laravel/dusk --ignore-platform-reqs
```

Editar el archivo .env con los datos de conexión a la base de datos. En mi caso usare MySQL localmente y la base de datos se llamará rebits_lab.

```properties
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rebits_lab
DB_USERNAME=root
DB_PASSWORD=
```

Editar phpunit.xml para ejecutar los test en sqlite en memoria:

```xml
<php>
    <env name="DB_CONNECTION" value="sqlite"/>
    <env name="DB_DATABASE" value=":memory:"/>
</php>
```

Finalmente creamos los datos de la base de datos:

```bash
php artisan migrate
```

Generar las llaves de aplicación:

```bash
php artisan key:generate
```

Ejecutar el servidor:

```bash
php artisan serve
```

# Pruebas funcionales con Dusk

Instalar Dusk:

```bash
composer require --dev laravel/dusk --ignore-platform-reqs
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
