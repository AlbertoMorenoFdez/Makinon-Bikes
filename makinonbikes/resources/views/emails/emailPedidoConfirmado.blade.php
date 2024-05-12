<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email de Bienvenida</title>
</head>

<body>
    <img src="https://raw.githubusercontent.com/AlbertoMorenoFdez/imagenesReadMe/main/logo_sin_fondo.gif"
        alt="logo Makinon Bikes" width="200px">

    <p>Estimado {{ $name }}: </p>
    <p>Gracias haber confiado en nosotros para realizar su compra. Su número de pedido es el {{ $numeroPedido }}.</p>
    <p>Puede obtener mas detalles del estado acudiendo a "Mis pedidos" en su perfil de usuario</p>
    <p>Para cualquier problema por favor póngase en contacto a traves del correo de nuestro administrador
        new.makinonbikes@gmail.com</p>
    <br>
    <p>Un saludo</p>
    <p>El equipo de Makinon Bikes</p>

</body>

</html>
