<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Meses del año con ordinal</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Meses del Año con su Ordinal</h1>

<table>
    <thead>
    <tr>
        <th>N° Ordinal</th>
        <th>Mes</th>
        <th>N° de Mes</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $meses = [
        "Enero", "Febrero", "Marzo", "Abril",
        "Mayo", "Junio", "Julio", "Agosto",
        "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    foreach ($meses as $indice => $mes) {
        $numero = $indice + 1;
        if ($numero == 1) {
            $ordinal = $numero . "er";
        } else {
            $ordinal = $numero . "°";
        }

        echo "<tr>
                        <td>$ordinal</td>
                        <td>$mes</td>
                        <td>$numero</td>
                      </tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>