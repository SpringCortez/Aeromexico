    <?php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href="estilo.css">
        <title>aeromexico</title>
    </head>
    <body>
        <h1>VENTA DE BOLETOS</h1>
        <form class = "formulario" action= "guardar.php" method = "POST">
            <label for = "cliente">Cliente</label>
            <input type = "text" id = "cliente" name = "cliente" maxlength = "40" required><br><br>

            <label for = "boleto">Boleto</label>
            <input type = "text" id = "boleto" name = "boleto" maxlength = "5" required><br><br>

            <label for = "destino">Destino</label>
            <input type = "text" id = "destino" name = "destino" maxlength = "40" required><br><br>

            <button class = "submit" type = "submit">ENVIAR</button>
        </form>

    </body>
    </html>
    ?>