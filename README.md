![home de notificaciones](https://github.com/juanlti/Notificaciones/assets/47389717/e1eacad7-6158-4e98-9cd7-6d9c1ab6a3dd)




Para ejecutar la aplicacion de Agenda con persistencia de datos:
Instalacion:
-clone el repositorio
-ejecute la instalacion de composer, en mi caso es: composer install
-cree un archivo .env. Una opcion, es buscar el archivo que se llama 'env.example', y lo copia en el mismo lugar pero con el nombre de .env. Conclusion tiene 2 archivos a partir de uno.
-ejecute el comando: php artisan key:generate, copie la key y pegela en el archivo .env (previamente ya generado), en la variable: 3) APP_KEY=<<clave generada >>
- por ultimo realize  una migracion a su servidor: php artisan migrate
- por ultimo ejecute un servidor: php artisan serve
