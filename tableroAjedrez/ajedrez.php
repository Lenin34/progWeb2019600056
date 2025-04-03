/**
* @Route("proveedor/tableroAjedrez", name="tablero")
*/
public function tablero(): Response
{
$FICHAS = [
"&#9814;","&#9816;","&#9815;","&#9813;","&#9812;","&#9815;","&#9816;","&#9814;",
"&#9817;","&#9817;","&#9817;","&#9817;","&#9817;","&#9817;","&#9817;","&#9817;",
"","","","","","","","",
"","","","","","","","",
"","","","","","","","",
"","","","","","","","",
"&#9823;","&#9823;","&#9823;","&#9823;","&#9823;","&#9823;","&#9823;","&#9823;",
"&#9820;","&#9822;","&#9821;","&#9818;","&#9819;","&#9821;","&#9822;","&#9820;"
];

$html = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        .celda { width: 32px; height: 32px; font-size: 20px;}
        .claro { background-color: pink; }
        .oscuro { background-color: purple;}
    </style>
</head>
<body>
<table border='1'>";

    for ($i = 0; $i < 8; $i++) {
    $html .= "<tr>";
        for ($j = 0; $j < 8; $j++) {
        $clase = $j % 2 == 0 ? 'claro' : 'oscuro';
        $pieza = $FICHAS[$i * 8 + $j];
        $html .= "<td class='celda $clase'>$pieza</td>";
        }
        $html .= "</tr>";
    }

    $html .= "</table>
</body>
</html>
";


return new Response($html);
}