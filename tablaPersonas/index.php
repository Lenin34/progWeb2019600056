<?php
ini_set("display_errors", E_ALL);
include_once "Persona.php";

$lista = [
    new Persona("Fulano", "1969/7/02", "5610676489"),
    new Persona("Lenon", "2000/6/02", "5610676480"),
    new Persona("Diogenes", "20001/5/02", "5610676481"),
    new Persona("Rodolfo", "2002/4/02", "5610676482"),
    new Persona("Dulce", "2003/3/02", "5610676483"),
    new Persona("Ximena", "2004/2/02", "5610676484"),
    new Persona("Eric", "2005/10/02", "5610676485"),
    new Persona("Maluh", "2006/9/02", "5610676486"),
    new Persona("Sabino", "2007/8/02", "5610676487"),
    new Persona("Mauro", "2008/7/02", "5610676418"),

];

/**
 * Colección de datos:
 * arrays, pilas, listas
 */
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de personas</title>
    <style>
        td{
            background-color: cyan;
        }
    </style>
</head>

<body>
    <table id="tablaPersonas" class="table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>Edad Actual</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $personas): ?>
                <tr>
                    <td class="text-center"><?php echo $personas->getNombre() ?></td>
                    <td class="text-center"><?php echo $personas->getFecNac() ?></td>
                    <td class="text-center">24</td>
                    <td class="text-center"><?php echo $personas->getTel() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#tablaPersonas').DataTable();
        });
    </script>
</body>

</html>