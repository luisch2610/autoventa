<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Marca</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Eliminar Marca</h1>
    <p>¿Está seguro de que desea eliminar la marca "<?php echo $marca['Nombre']; ?>"?</p>
    <form action="index.php?controller=Marca&action=delete&id=<?php echo $marca['idMarca']; ?>" method="post">
        <input type="submit" value="Sí, eliminar">
    </form>
    <a href="index.php?controller=Marca&action=index">Cancelar</a>
    <script src="/js/main.js"></script>
</body>
</html>