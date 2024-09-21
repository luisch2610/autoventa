<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Modelos</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <h1>Lista de Modelos</h1>
    <a href="index.php?controller=Modelo&action=create">Crear nuevo modelo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>ID Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modelos as $modelo): ?>
                <tr>
                    <td><?php echo $modelo['idModelo']; ?></td>
                    <td><?php echo $modelo['Nombre']; ?></td>
                    <td><?php echo $modelo['idMarca']; ?></td>
                    <td>
                        <a href="index.php?controller=Modelo&action=edit&id=<?php echo $modelo['idModelo']; ?>">Editar</a>
                        <a href="index.php?controller=Modelo&action=delete&id=<?php echo $modelo['idModelo']; ?>" onclick="return confirm('¿Está seguro de eliminar este modelo?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="/js/main.js"></script>
</body>
</html>