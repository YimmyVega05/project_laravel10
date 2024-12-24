# PROJECT: project_laravel10

Una aplicación para gestionar tareas con diferentes estados (Pendiente, En progreso, Completada).

## Requisitos Previos

1. PHP >= 8.0
2. Composer >= 2.0
3. SQLITE database
4. Node.js y npm para gestionar los assets
5. Servidor web como Apache o Nginx
6. Git para el control de versiones

## Instalación

1. Clona el repositorio: 
   git clone https://github.com/YimmyVega05/project_laravel10.git

2. Accede al directorio del proyecto: cd project_laravel10

3. Instala las dependencias de PHP: composer install

4. Configura el archivo .env: 

    DB_CONNECTION=sqlite
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

5. Crea la base de datos: SQLite php artisan migrate

6. Instala las dependencias de Node.js: npm install

7. Inicia el servidor local: php artisan serve

8. Accede a la aplicación en tu navegador:  http://127.0.0.1:8000



# Uso

1. Hacer click en el boton "Go to Tasks" para navegar a la vista index.blade.php CRUD 
2. Crea una nueva tarea seleccionando el estado (Pendiente, En progreso, Completada).
3. Edita o elimina tareas desde la CRUD de tareas.

# Características

- CRUD completo de tareas.
- Paginación para una mejor navegación.
- Interfaz amigable y responsiva.





