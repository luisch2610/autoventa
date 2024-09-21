<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Modelo</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Editar Modelo</h1>
    <form action="index.php?controller=Modelo&action=edit&id=<?php echo $modelo['idModelo']; ?>" method="post">
        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php echo $modelo['Nombre']; ?>" required>
        
        <label for="idMarca">Marca:</label>
        <select id="idMarca" name="idMarca" required>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?php echo $marca['idMarca']; ?>" <?php echo ($marca['idMarca'] == $modelo['idMarca']) ? 'selected' : ''; ?>>
                    <?php echo $marca['Nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <input type="submit" value="Actualizar Modelo">
    </form>
    <a href="index.php?controller=Modelo&action=index">Volver a la lista</a>
    <script src="/js/main.js"></script>
</body>
</html>