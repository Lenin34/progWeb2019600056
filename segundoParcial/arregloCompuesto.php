<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de Jugadores del FC Barcelona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #004D98;
            text-align: center;
        }

        h2 {
            color: #A50044;
        }

        .resultado {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #004D98;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>FC Barcelona</h1>

<?php
$jugadores = [
    [
        "nombre" => "Robert Lewandowski",
        "goles" => 25,
        "activo" => true,
        "posicion" => "Delantero",
        "titular" => true
    ],
    [
        "nombre" => "Pedri González",
        "goles" => 8,
        "activo" => true,
        "posicion" => "Centrocampista",
        "titular" => true
    ],
    [
        "nombre" => "Gavi",
        "goles" => 5,
        "activo" => false,
        "posicion" => "Centrocampista",
        "titular" => false
    ],
    [
        "nombre" => "Marc-André ter Stegen",
        "goles" => 0,
        "activo" => true,
        "posicion" => "Portero",
        "titular" => true
    ],
    [
        "nombre" => "Ronald Araújo",
        "goles" => 3,
        "activo" => true,
        "posicion" => "Defensa",
        "titular" => true
    ]
];

$sumaGoles = 0;
$concatenacionNombres = "";
$andBooleanos = true;

echo "<h2>Datos de los Jugadores</h2>";
echo "<table>
            <tr>
                <th>Nombre</th>
                <th>Goles</th>
                <th>Activo</th>
                <th>Posición</th>
                <th>Titular</th>
            </tr>";

foreach ($jugadores as $jugador) {
    echo "<tr>
                <td>{$jugador['nombre']}</td>
                <td>{$jugador['goles']}</td>
                <td>" . ($jugador['activo'] ? 'Sí' : 'No') . "</td>
                <td>{$jugador['posicion']}</td>
                <td>" . ($jugador['titular'] ? 'Sí' : 'No') . "</td>
              </tr>";


    $sumaGoles += $jugador['goles'];


    $concatenacionNombres .= $jugador['nombre'] . ", ";

    $andBooleanos = $andBooleanos && $jugador['activo'] && $jugador['titular'];
}

echo "</table>";
?>

</body>
</html>