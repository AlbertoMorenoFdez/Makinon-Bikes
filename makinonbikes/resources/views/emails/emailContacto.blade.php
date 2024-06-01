<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de contacto</title>
</head>

<body>
    <h2>Información de contacto</h2>
    <p>Nombre: {{ $contacto['nombre'] }}</p>
    <p>Email: {{ $contacto['email'] }}</p>
    <p>Teléfono: {{ $contacto['telefono'] }}</p>
    <p>Mensaje: {{ $contacto['mensaje'] }}</p>
</body>

</html>
