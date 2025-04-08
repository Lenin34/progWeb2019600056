<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora del Barça</title>
    <style>
        body {
            text-align: center;
            font-family: sans-serif;
            margin-top: 50px;
            background-color: #15317E;
            color: #FFD700;
        }

        h2 {
            color: #FFD700;
        }

        #display {
            width: 220px;
            height: 40px;
            font-size: 24px;
            text-align: right;
            margin-bottom: 15px;
            border: none;
            background-color: #FFE873;
            color: #000;
            padding: 5px;
        }

        .boton {
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            border: none;
            color: white;
            background-color: #A50044;
        }

    </style>
</head>
<body>

<h2>Calculadora Barça</h2>

<input type="text" id="display" readonly><br>


<button class="boton" onclick="btn_click('7')">7</button>
<button class="boton" onclick="btn_click('8')">8</button>
<button class="boton" onclick="btn_click('9')">9</button><br>

<button class="boton" onclick="btn_click('4')">4</button>
<button class="boton" onclick="btn_click('5')">5</button>
<button class="boton" onclick="btn_click('6')">6</button><br>

<button class="boton" onclick="btn_click('1')">1</button>
<button class="boton" onclick="btn_click('2')">2</button>
<button class="boton" onclick="btn_click('3')">3</button><br>

<button class="boton" onclick="btn_click('0')">0</button>
<button class="boton" onclick="btn_click('+')">+</button>
<button class="boton" onclick="btn_click('-')">-</button><br>

<button class="boton" onclick="btn_click('=')">=</button>

<script>
    function btn_click(val) {
        var display = document.getElementById("display");
        if (val == "=") {
            display.value = eval(display.value);
        } else {
            display.value += val;
        }
    }
</script>

</body>
</html>
