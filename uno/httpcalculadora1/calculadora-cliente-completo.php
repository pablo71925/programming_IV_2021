<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>This is the title</title>
    </head>
    <body>
        <form action="calculadora-cliente-completo.html" method="POST">
            N1: <input name="n1"/> <br/>
            N2: <input name="n2"/><br/>
           respuesta: <?php echo $suma; ?>
            <input type="submit" value="Sumar"/>
        </form>
    </body>
</html>