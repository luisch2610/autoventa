<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Lista de Vehículos</h1>
    <a href="index.php?action=create">Crear nuevo vehículo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Año</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Chasis</th>
                <th>Precio</th>
                <th>VIN</th>
                <th>Color</th>
                <th>Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculos as $vehiculo): ?>
                <tr>
                    <td><?php echo $vehiculo['idVehiculo']; ?></td>
                    <td><?php echo $vehiculo['Anio']; ?></td>
                    <td><?php echo $vehiculo['idModelo']; ?></td>
                    <td><?php echo $vehiculo['idMarca']; ?></td>
                    <td><?php echo $vehiculo['Chasis']; ?></td>
                    <td><?php echo $vehiculo['Precio']; ?></td>
                    <td><?php echo $vehiculo['VIN']; ?></td>
                    <td><?php echo $vehiculo['Color']; ?></td>
                    <td><?php echo $vehiculo['Disponible'] ? 'Sí' : 'No'; ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $vehiculo['idVehiculo']; ?>">Editar</a>
                        <a href="index.php?action=delete&id=<?php echo $vehiculo['idVehiculo']; ?>" onclick="return confirm('¿Está seguro de eliminar este vehículo?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="/js/main.js"></script>
</body>
</html>