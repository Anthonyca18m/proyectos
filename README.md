##### PROYECTOS PERSONALES Anthonyca18m

## Crear el proyecto:
- composer create--project  --prefer-dist laravel/laravel NOMBRE_PROYECTO  -> con laravel 6
- composer create-project  --prefer-dist laravel/laravel NOMBRE_PROYECTO   -> con laravel 7
- composer create-project  --prefer-dist laravel/laravel NOMBRE_PROYECTO  "6.*"   -> con laravel personalizado
  
## Estilos para el proyecto: 
- composer require laravel/ui --dev
  
## Para activar vue y el sistema de autentificacion de laravel
- php artisan ui vue  --auth
  
## para cambiar el nombre a la app:
- composer require andrey-helldar/laravel-app --dev    -> soporte para el command app:name
- php artisan app:name NOMBRE_PROYECTO

## Comandos más utilizados
- php artisan make:model NAME_MODEL (OPTIONAL)-migrate
- php artisan make:controller NAME_CONTROLLER (OPTIONAL)--api --resource --migrate
- php artisan make:request NAME_REQUEST
- php artisan make:migration create_NAMETABLE_table
- php artisan migrate
- php artisan migrate (OPTIONAL)--force
- php artisan migrate:rollback
- php artisan migrate:reset
- php artisan migrate:refresh
- php artisan migrate:refresh (OPTIONAL)--seed
- php artisan key:generate
- php artisan passport:install

## Extras

- 'debug' => env('APP_DEBUG', true)

 para que nos muestre errores ya que estamos en etapa de desarrollo, por defecto eso estara en modo false,
 una ves que publiquemos nuestra app lo cambiamos a false 

- 'timezone' => 'UTC'
- 'timezone' => 'America/Lima' // PERU lima

Cambiamos la zona horarios dependiendo en que lugar estes, googleamos nomas el timezone
https://www.php.net/manual/es/timezones.america.php

- 'locale' => 'es',

Por defecto estara en modo en => ingles pero lo cambiamos al que nos acomodes
https://github.com/Laraveles/spanish
por cada idioma debemos crearle su carpeta en la ruta resources/lang/AQUI_CARPETA_DE_IDIOMA

## Instalación
  Es como cualquier otro proyecto de Laravel. Básicamente aquí es cómo lo usas para ti. (aún no se ha completado)

- Clona el repositorio git clone https://github.com/Anthonyca18m/proyectos.git
- cd to project folder.
- Run composer install
- Guarde como .env.example en .env y configure la información de su base de datos
- Ejecute php artisan key: generate para generar la clave de la aplicación
- Ejecute npm install
- Ejecute php artisan migrate
- Hecho !!! Disfruta de personalizar y crear una aplicación increíble


>by Anthonyca18m
