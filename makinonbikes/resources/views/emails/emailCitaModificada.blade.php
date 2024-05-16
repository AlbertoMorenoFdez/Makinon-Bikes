<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificación de estado de la cita.</title>
</head>

<body style="color:black">
    <img src="https://raw.githubusercontent.com/AlbertoMorenoFdez/imagenesReadMe/main/logo_sin_fondo.gif"
        alt="logo Makinon Bikes" width="200px">

    <p>Estimado {{ $name }}: </p>
    <p>Le enviamos este correo para informarle de que el estado de su cita ha sido modificada.</p>
    <p>Los datos de su cita son</p>
    <ul>
        <li>Fecha: {{ $fecha }}</li>
        <li>Hora: {{ $hora }}</li>
        <li>Servicio solicitado: {{ $opcion }}</li>
        <li>Estado: {{ strtoupper($estado) }}</li>
    </ul>
    <p>Para cualquier consulta por favor póngase en contacto a traves del correo de nuestro administrador
        new.makinonbikes@gmail.com</p>
    <br>
    <p>Un saludo</p>
    <p>El equipo de Makinon Bikes</p>

</body>

</html>
