<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Modelo</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Eliminar Modelo</h1>
    <p>¿Está seguro de que desea eliminar el modelo "<?php echo $modelo['Nombre']; ?>"?</p>
    <form action="index.php?controller=Modelo&action=delete&id=<?php echo $modelo['idModelo']; ?>" method="post">
        <input type="submit" value="Sí, eliminar">
    </form>
    <a href="index.php?controller=Modelo&action=index">Cancelar</a>
    <script src="/js/main.js"></script>
</body>
</html>