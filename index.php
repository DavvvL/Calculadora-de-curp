<?php
    var_dump($_POST);
    if (isset($_POST["name"]) && !empty($_POST["name"])) {
        $name = $_POST["name"]; 
        $n = substr($name, 0, 1); 
    }
    else {}
    if (isset($_POST["paterno"])) {
        $paterno = $_POST["paterno"]; 
        $p = substr($paterno, 0, 2); 
    }
    else {}
    if (isset($_POST["materno"])) {
        $materno = $_POST["materno"]; 
        $m = substr($materno, 0, 1); 
    }
    else {}
    if (isset($_POST["anio"])) {
        $anio = $_POST["anio"]; 
        $a = substr($anio, -2); 
    }
    else {}
    if (isset($_POST["mes"])) {
        $mes = $_POST["mes"]; 
        $me = str_pad($mes, 2, "0", STR_PAD_LEFT);
    }
    else {}
    /*switch ($_POST["operacion"]) {
            case "suma":
              $result = $numero1 + $numero2;
              break;
            case "rest":
              $result = $numero1 - $numero2;
              break;
            case "mult":
              $result = $numero1 * $numero2;
              break;
            case "divi":
                $result = $numero1 / $numero2;
                break;
            default:
              echo "Elige una operación a realizar";
    }*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br>
    <h2 style="font-family:verdana; color:white" > <center> Formato de CURP </center></h2>

    <form action="" method="POST">
        <div id="content">
            <center>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Apellido Paterno: &nbsp;&nbsp;&nbsp;&nbsp; Apellido Materno:
            <input type="text" id="name" name="name">           
            <input type="text" id="paterno" name="paterno">
            <input type="text" id="materno" name="materno"></p>
            <br>

            <label for="dia">Día:</label>
            <select id="dia" name="dia">
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
            </select>
            
            <label for="mes">Mes:</label>
            <select id="mes" name="mes">
            <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
            </select>

            <label for="anio">Año:</label>
            <select id="anio" name="anio">
            <?php
                for ($i = 2025; $i >= 1920; $i--) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
            </select>

            <br><br>

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="h">Hombre</option>
                <option value="m">Mujer</option>
            </select>

            <br><br>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="c">Chiapas</option>
                <option value="g">Guerrero</option>
            </select>

            <br><br>
            
            <input type="submit" value="Calcular">

            <br><br>
            
            <input type="text" id="resu" name="resu" value="<?= $result ?>" ><br><br>

            <p>La primera letra de "<strong><?= htmlspecialchars($name) ?></strong>" es: <strong><?= htmlspecialchars($n) ?></strong></p>
            <p>La primera letra de "<strong><?= htmlspecialchars($paterno) ?></strong>" es: <strong><?= htmlspecialchars($p) ?></strong></p>
            <p>La primera letra de "<strong><?= htmlspecialchars($materno) ?></strong>" es: <strong><?= htmlspecialchars($m) ?></strong></p>
            <p>La primera letra de "<strong><?= htmlspecialchars($anio) ?></strong>" es: <strong><?= htmlspecialchars($a) ?></strong></p>
            <p>La primera letra de "<strong><?= htmlspecialchars($mes) ?></strong>" es: <strong><?= htmlspecialchars($me) ?></strong></p>

            </center>
        </div>
    </form>     
</body>
</html>