<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Teclas Interactivas</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
            font-family: sans-serif;
        }

        .tecla {
            display: inline-block;
            width: 60px;
            height: 60px;
            margin: 10px;
            font-size: 24px;
            font-weight: bold;
            line-height: 60px;
            border: 2px solid #333;
            background-color: #3a0bc5;
        }

        .presionada {
            background-color: #670535;
            color: #ffffff;
        }
    </style>
</head>
<body>

<h2>Presiona una tecla: W, A, S, D, Z o X</h2>

<div class="tecla" id="W">W</div>
<div class="tecla" id="A">A</div>
<div class="tecla" id="S">S</div>
<div class="tecla" id="D">D</div>
<div class="tecla" id="Z">Z</div>
<div class="tecla" id="X">X</div>

<script>
        
    document.addEventListener("keydown", function(event) {
        const letra = event.key.toUpperCase();
        const tecla = document.getElementById(letra);
        if (tecla) {
            tecla.classList.add("presionada");
        }
    });


    document.addEventListener("keyup", function(event) {
        const letra = event.key.toUpperCase();
        const tecla = document.getElementById(letra);
        if (tecla) {
            tecla.classList.remove("presionada");
        }
    });
</script>

</body>
</html>
