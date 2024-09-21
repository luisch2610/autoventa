<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Marcas</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Lista de Marcas</h1>
    <a href="index.php?controller=Marca&action=create">Crear nueva marca</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marcas as $marca): ?>
                <tr>
                    <td><?php echo $marca['idMarca']; ?></td>
                    <td><?php echo $marca['Nombre']; ?></td>
                    <td>
                        <a href="index.php?controller=Marca&action=edit&id=<?php echo $marca['idMarca']; ?>">Editar</a>
                        <a href="index.php?controller=Marca&action=delete&id=<?php echo $marca['idMarca']; ?>" onclick="return confirm('¿Está seguro de eliminar esta marca?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="/js/main.js"></script>
</body>
</html>