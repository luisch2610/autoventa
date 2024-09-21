<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vehículo</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Eliminar Vehículo</h1>
    <p>¿Está seguro de que desea eliminar el vehículo con ID "<?php echo $vehiculo['idVehiculo']; ?>"?</p>
    <form action="index.php?controller=Vehiculo&action=delete&id=<?php echo $vehiculo['idVehiculo']; ?>" method="post">
        <input type="submit" value="Sí, eliminar">
    </form>
    <a href="index.php?controller=Vehiculo&action=index">Cancelar</a>
    <script src="/js/main.js"></script>
</body>
</html>