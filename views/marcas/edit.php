<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Marca</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Editar Marca</h1>
    <form action="index.php?controller=Marca&action=edit&id=<?php echo $marca['idMarca']; ?>" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php echo $marca['Nombre']; ?>" required>
        
        <input type="submit" value="Actualizar Marca">
    </form>
    <a href="index.php?controller=Marca&action=index">Volver a la lista</a>
    <script src="/js/main.js"></script>
</body>
</html>