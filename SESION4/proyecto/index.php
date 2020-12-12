<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario HTML & PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
    <!--formulario-->
<div class="container is-fluid">
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Formulario
                    </h1>
                    <h2 class="subtitle">
                        HTML & PHP
                    </h2>
                </div>
            </div>
        </section>
    <form action="servidor.php" method="post" class="columns">        
            <div class="column is-half">
                <div class="field is-horizontal">
                    <div class="field-label">
            <label for="nombre">Nombre</label>
                    </div>
                <div class="field-body">
                <div class="field">
                <div class="control">
            <input type="text" name="nombre" id="nombre">
                </div>
            </div>
        </div>
    </div>
    </div>    
        <div class="column">
            <div class="field">
        <label for="correo">Correo Electronico</label>
            <div class="control">
        <input type="email" name="correo" id="email">
            </div>
        </div>
    </div>

    <input type="submit" value="Enviar">
    </form>
        <form action="servidor.php" method="get">

        <label for="producto">Nombre del producto</label>
        <input type="text" name="producto" id="producto">

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad">

        <input type="submit" value="Enviar">
        </form>
</div>
</body>
</html>