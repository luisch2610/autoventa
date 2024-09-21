<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vehículo</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Crear Nuevo Vehículo</h1>
    <form action="index.php?controller=Vehiculo&action=create" method="post">
        <label for="idVehiculo">ID Vehículo:</label>
        <input type="number" id="idVehiculo" name="idVehiculo" required>
        
        <label for="Anio">Año:</label>
        <input type="number" id="Anio" name="Anio" required>
        
        <label for="idModelo">Modelo:</label>
        <select id="idModelo" name="idModelo" 1>
            <?php foreach ($modelos as $modelo): ?>
                <option value="<?php echo $modelo['idModelo']; ?>"><?php echo $modelo['Nombre']; ?></option>
            <?php endforeach; ?>
        </select>
        
        <label for="idMarca">Marca:</label>
        <select id="idMarca" name="idMarca" 1>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?php echo $marca['idMarca']; ?>"><?php echo $marca['Nombre']; ?></option>
            <?php endforeach; ?>
        </select>
        
        <label for="Chasis">Chasis:</label>
        <input type="text" id="Chasis" name="Chasis" required>
        
        <label for="Precio">Precio:</label>
        <input type="number" id="Precio" name="Precio" step="0.01" required>
        
        <label for="VIN">VIN:</label>
        <input type="text" id="VIN" name="VIN" required>
        
        <label for="Color">Color:</label>
        <input type="text" id="Color" name="Color" required>
        
        <label for="Disponible">Disponible:</label>
        <select id="Disponible" name="Disponible" required>
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
        
        <input type="submit" value="Crear Vehículo">
    </form>
    <a href="index.php?controller=Vehiculo&action=index">Volver a la lista</a>
    <script src="/js/main.js"></script>
</body>
</html>