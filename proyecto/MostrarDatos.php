<?php
require_once("Estudiante.php");
$Estudiantes = Estudiante ::mostrar();
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
 
</head>
<body>
    <table id="userTable">
        <thead>
            <th>Id_estudiante</th>
            <th>Correo</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Documento</th>
            <th>Numero</th>
        </thead>
        <tbody>
                <?php foreach($Estudiantes as $item) { ?>
                    <tr>
                    <td><?php echo $item['Id_estudiante']; ?></td>
                        <td><?php echo $item['Correo']; ?></td>
                        <td><?php echo $item['Nombres']; ?></td>
                        <td><?php echo $item['Apellidos']; ?></td>
                        <td><?php echo $item['Documento']; ?></td> 
                        <td><?php echo $item['Numero']; ?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#userTable').DataTable();
    });
    </script>
</body>
</html>