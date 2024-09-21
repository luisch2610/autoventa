<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehículo</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Editar Vehículo</h1>
    <form action="index.php?controller=Vehiculo&action=edit&id=<?php echo $vehiculo['idVehiculo']; ?>" method="post">
        <label for="Anio">Año:</label>
        <input type="number" id="Anio" name="Anio" value="<?php echo $vehiculo['Anio']; ?>" required>
        
        <label for="idModelo">Modelo:</label>
        <select id="idModelo" name="idModelo" required>
            <?php foreach ($modelos as $modelo): ?>
                <option value="<?php echo $modelo['idModelo']; ?>" <?php echo ($modelo['idModelo'] == $vehiculo['idModelo']) ? 'selected' : ''; ?>>
                    <?php echo $modelo['Nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <label for="idMarca">Marca:</label>
        <select id="idMarca" name="idMarca" required>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?php echo $marca['idMarca']; ?>" <?php echo ($marca['idMarca'] == $vehiculo['idMarca']) ? 'selected' : ''; ?>>
                    <?php echo $marca['Nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <label for="Chasis">Chasis:</label>
        <input type="text" id="Chasis" name="Chasis" value="<?php echo $vehiculo['Chasis']; ?>" required>
        
        <label for="Precio">Precio:</label>
        <input type="number" id="Precio" name="Precio" step="0.01" value="<?php echo $vehiculo['Precio']; ?>" required>
        
        <label for="VIN">VIN:</label>
        <input type="text" id="VIN" name="VIN" value="<?php echo $vehiculo['VIN']; ?>" required>
        
        <label for="Color">Color:</label>
        <input type="text" id="Color" name="Color" value="<?php echo $vehiculo['Color']; ?>" required>
        
        <label for="Disponible">Disponible:</label>
        <select id="Disponible" name="Disponible" required>
            <option value="1" <?php echo ($vehiculo['Disponible'] == 1) ? 'selected' : ''; ?>>Sí</option>
            <option value="0" <?php echo ($vehiculo['Disponible'] == 0) ? 'selected' : ''; ?>>No</option>
        </select>
        
        <input type="submit" value="Actualizar Vehículo">
    </form>
    <a href="index.php?controller=Vehiculo&action=index">Volver a la lista</a>
    <script src="/js/main.js"></script>
</body>
</html>