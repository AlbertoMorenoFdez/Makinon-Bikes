<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/logo_sin_fondo.gif" width="400" alt="Makinon logo"></p>


## Sobre Makinon Bikes

Makinon Bikes es una aplicación web de comercio electrónico desarrollada en Laravel. La aplicación está diseñada para proporcionar una plataforma donde los usuarios pueden explorar y comprar una variedad de productos relacionados con bicicletas y accesorios pra el ciclista. La aplicación se ha desarrollado con un enfoque en la facilidad de uso, la eficiencia y la escalabilidad.
Esto en cuanto al usuario final, pero en cuanto al enfoque hacia el administrador de la página nos permite un control total sobre proveedores, productos y los propios usuarios.  

Actualmente la página se está sirviendo desde una instancia EC2 de AWS y haciendo uso del servicio RDS para la base de datos, y del servicio gratuito de redirección de DNS de duckdns.org.   
El link de la página es:  
http://www.makinonbikes.duckdns.org  

<br>

<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/portada.png" width="500" alt="Makinon logo"></p>

</br>

## Un paseo por Makinon en imágenes

Cuando el usuario accede a nuestra página podrá, de manera intuitiva, acceder a todos los apartados disponibles para él, pero también podrá decidir si logearse o crear su cuenta rellenando los campos del formulario de registro, el cual cuenta con un sistema de control de errores para todos los campos como por ejemplo que el código postal no sea distinto a 5 cifras o que su ni constará de 8 digitos mas una letra al final.  

<div style="display: flex; flex-direction: row; justify-content: center;">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/productos.png" width="300">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/login.png" width="300">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/registro.png" width="300">    
</div>

</br>

Una vez se ha logueado podrá acceder a un resumen de su perfil desde el cual tendrá la posibilidad de modificar sus datos, cambiar la contraseña o eliminar la cuenta.  

<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/perfilUsuario.png" width="400"></p>

</br>

En el caso de acceder con perfil de administrador desde el dropdown que aparece junto al nombre del usuario se accede al "Panel de Administración" donde tendremos, como ya dijimos, un control total sobre proveedores, prodcutos y los usuarios registrados en nuestra página.

<div style="display: flex; flex-direction: row; justify-content: center;">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/dropdownPrefil.png" width="200">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/panelAdmin.png" width="250">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/listadoProveedores.png" width="250">    
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/fichaProducto.png" width="250">
</div>

</br>

## Tecnologías utilizadas
</br>
<div style="display: flex; flex-direction: row; justify-content: center;">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/laravel.jpeg" width="100">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/mysqllogo.png" width="100">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/bootstraplogo.jpeg" width="100">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/tailwindlogo.png" width="100">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/vitelogo.jpeg" width="100">
    <img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/githublogo.png" width="100">
</div>
</br>

- **Laravel**: Laravel es un marco de trabajo de PHP que se utiliza para desarrollar la aplicación. Nos proporciona una estructura y una serie de herramientas útiles para desarrollar aplicaciones web robustas y seguras.

- **MySQL**: MySQL se utiliza como sistema de gestión de bases de datos. Almacena todos los datos relacionados con la aplicación, incluyendo productos, proveedores y usuarios.

- **Bootstrap**: Bootstrap se utiliza para el diseño y el estilo de la aplicación, haciendo que la aplicación sea responsive y se vea bien en una variedad de dispositivos y tamaños de pantalla.

- **Tailwind CSS**: Según su propio sitio web, es un "framework CSS que prioriza las utilidades", proporciona varias de estas clases de utilidades de un solo propósito que puedes utilizar directamente dentro de tu HTML para diseñar un elemento.

- **Vite**: Nos proporciona un entorno de desarrollo instantáneo y con tiempos de compilación muy rápidos. Utiliza un enfoque de desarrollo basado en el servidor y nos sirve el código en tiempo real durante el desarrollo. Esto significa que no es necesario realizar una compilación completa cada vez que se realizan cambios en el código, lo que resulta en tiempos de respuesta mucho más rápidos.

- **Git**: Git se utiliza para el control de versiones. Ayudando a rastrear los cambios en el código a lo largo del tiempo y facilita la colaboración entre los posibles desarrolladores.

</br>

## Detalles Técnicos Notables

- **Middleware personalizado**: He implementado un middleware personalizado, `CheckUserRole`, que verifica el rol del usuario autenticado. Si el usuario tiene el rol de administrador (denominado en la base de datos como "admin"), se le permite continuar a las rutas realacionadas con su función. De lo contrario, si esta logeado, se le redirige a la página de inicio. Este middleware me permite proteger fácilmente las rutas que sólo deben ser accesibles para ususarios con este rol.
  
<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/middleware.png" width="500"></p>

- **Agrupación de rutas**: Laravel nos permite organizar y gestionar las rutas de una manera más estructurada y eficiente. Y en este caso se aprovecha el Middelware común del rol del administrador para agrupar todas las rutas relacionadas con él.

<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/agrupacionRutas.png" width="700"></p>

- **Componentes personalizados**: Hemos creado varios componentes personalizados para reutilizar su código en diferentes vistas del proyecto, de tal modo, por ejemplo, todos los botones son iguales y tienen las mismas características.

<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/componentes.png" width="500"></p>

- **Agrupación de las diferentes vistas en carpetas**: De este modo tenemos todo mas organizado y sabemos donde poder buscar una vista específica.

<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/vistas.png" width="500"></p>

- **Uso de los Seeders**: Estas clases de Laravel nos permiten poblar la base de datos sin tener que ir añadiendo uno a uno a traves de phpMyAdmin por ejemplo. Ademas se ejecutan de forma secuencial, de modo que no hay un error por la ausencia de una clave foránea.

<p align="center"><img src="https://github.com/AlbertoMorenoFdez/imagenesReadMe/blob/main/seeder.png" width="500"></p>

</br>

## Instalación y configuración
Para instalar y configurar la aplicación, sigue estos pasos: </br>

1- Clona el repositorio en tu máquina local o descarga el archivo zip.  
2- Si usas Xampp como es mi caso, copia la carpeta del proyecto dentro de la carpeta htdocs de Xampp que es desde donde se servirá el localhost, en el puerto 80, como en el puerto 3306 para phpMyAdmin.  
3- Instala las dependencias con el comando "composer install".  
4- Instala las librerias con el comando "npm install".  
5- Configura tu archivo .env con tus detalles de la base de datos.
6- Ejecuta las migraciones y los seeders con "php artisan migrate --sedd".  
7- Ejecuta el comando "npm run dev" para permitir la compilacion del código fuente en tiempo real.  

</br>

## Licencia

Makinon Bikes es un software de código abierto bajo la licencia MIT.
