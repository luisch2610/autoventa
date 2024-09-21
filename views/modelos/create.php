<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Modelo</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Crear Nuevo Modelo</h1>
    <form action="index.php?controller=Modelo&action=create" method="post">
        <label for="idModelo">ID Modelo:</label>
        <input type="number" id="idModelo" name="idModelo" required>
        
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" required>
        
        <label for="idMarca">Marca:</label>
        <select id="idMarca" name="idMarca" required>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?php echo $marca['idMarca']; ?>"><?php echo $marca['Nombre']; ?></option>
            <?php endforeach; ?>
        </select>
        
        <input type="submit" value="Crear Modelo">
    </form>
    <a href="index.php?controller=Modelo&action=index">Volver a la lista</a>
    <script src="/js/main.js"></script>
</body>
</html>