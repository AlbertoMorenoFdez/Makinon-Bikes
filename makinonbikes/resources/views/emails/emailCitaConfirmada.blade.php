<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmacíon de cita.</title>
</head>

<body style="color:black">
    <img src="https://raw.githubusercontent.com/AlbertoMorenoFdez/imagenesReadMe/main/logo_sin_fondo.gif"
        alt="logo Makinon Bikes" width="200px">

    <p>Estimado {{ $name }}: </p>
    <p>Le enviamos este correo para confirmar que su cita ha quedado registrada en nuestor sistema.</p>
    <p>Los datos de su cita son</p>
    <ul>
        <li>Fecha: {{ $fecha }}</li>
        <li>Hora: {{ $hora }}</li>
        <li>Servicio solicitado: {{ $opcion }}</li>
        <li>Estado: {{ strtoupper($estado) }}</li>
    </ul>
    <p>Por favor, tenga en cuenta que la cita no se considerará confirmada hasta que reciba un correo de confirmación
        por parte de nuestro equipo.</p>
    <p>Para cualquier problema por favor póngase en contacto a traves del correo de nuestro administrador
        new.makinonbikes@gmail.com</p>
    <br>
    <p>Un saludo</p>
    <p>El equipo de Makinon Bikes</p>

</body>

</html>
