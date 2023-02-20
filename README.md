# REBITS LAB

Para este laboratorio se uso Xampp para contar con PHP, MySQL, PHPMyAdmin y Apache. Tambien se instalo Composer y Larabel.

Para clonar el proyecto desde github, ejecutar el siguiente comando:

git clone https://github.com/fabnun/rebits-lab.git

Luego hay que editar el archivo .env con los datos de conexión a la base de datos. En mi caso usare MySQL localmente y la base de datos se llamará rebits_lab.

```properties
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rebits_lab
DB_USERNAME=root
DB_PASSWORD=
```

Finalmente creamos los datos de la base de datos con el comando:

```bash
php artisan migrate
```

Para ejecutar el proyecto, ejecutar el comando:

```bash
php artisan serve
```

Para ejecutar los test, ejecutar el comando:

```bash
php artisan test
```
