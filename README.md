<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## CRUD

Se creó un api manejado en POSTMAN para el controlador SALES con una conexión MySQL Workbench 

## En caso de clonar

Para clonar un proyecto de Laravel se necesita:
<ol>
    <li> Correr composer install en el terminal</li>
    <li> Copiar todo dentro de .env.example hacia .env</li>
    <li> Cambia dentro de .env el nombre de la base de datos y las credenciales de la misma.</li>
    <li> Correr el siguiente código: php artisan serve</li>
    <li> (Opcional) En caso de no correr el código colocar en terminal: php artisan key:generate</li>
</ol>

## Comandos utiles

Si desea crear un nuevo controlador:
- php artisan make:controller SalesController --api

Si desea ver las rutas para POSTMAN:
- php artisan route:list
