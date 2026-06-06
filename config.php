<?php 
    //BASE_URL y BASE_PATH apuntan al mismo lugar (la raíz de tu proyecto), pero una es para el navegador y otra para el servidor. Las dos son rutas absolutas.

    define('BASE_URL','/codigos.php/AgenciaViajesConstantes/'); // esta ruta es para el navegador: http://localhost//codigos.php/AgenciaViajesConstantes/ se utiliza para acceder a los recursos.

    define('BASE_PATH',__DIR__ . '/'); // esta ruta es para el servidor: C:/xampp/htdocs/AgenciaViajesConstantes/ se utiliza para navegar por el servidor (el disco, duro, directorios, programas...)

    //RUTAS COMUNES
    define('CSS_PATH', BASE_URL . 'assets/css/style.css'); 
    define('JS_PATH', BASE_URL . 'assets/js/script.js');
    define('LOGO_PATH', BASE_URL .'assets/img/logo.png');
    // declaramos CSS_PATH y le damos el valor que tiene la constante BASE_URL (/AgenciaViajesConstantes) despues concatenamos "." con el resto de la ruta 'assets/css/style.css'. De esa forma siempre podemos utilizar el inicio de la ruta en cualquier recurso ya que el archivo config esta al lado de la carpeta raíz, junto al index. Lo mismo con las demás


?>



