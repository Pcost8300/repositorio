<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/nucleo.js" defer="true"></script>
    <!-- Volver responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Js JOoper Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- Boot Strap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fin -->
    <link rel="stylesheet" href="css/stuff.css">
    <meta charset="UTF-8">
    <title>Repositorio</title>
</head>
<body>

<div class="cabecera">
    <p class="cabecera-texto monda">L-REPO</p>
</div>
<!--  Busqueda normal -->
<div id="index_inicio_normal">
    <div class="container-fluid">
        <div class="divisor"></div>
        <p class="istok" style="text-align: center">Puedes buscar por tema, libro, area, enemas, etc.</p>
        <form id="index_form_busqueda_normal" action="core/php/funcs/index_ac.php">
            <div class="row justify-content-center">
                <div class="form-group" style="width: 90%;">
                    <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Buscar lo que sea...">
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" id="index_boton_buscar" class="btn btn-dark" style="margin-right: 0.5em;">Buscar</button>
                <button id="index_boton_bavanzada" class="btn btn-dark" style="margin-left: 0.5em;">Busqueda Avanzada</button>
            </div>
        </form>
    </div>
</div>

<!-- Busqueda avanzada -->
<div id="index_inicio_avanzado" style="display: none;">
    <div class="container-fluid">
        <div class="divisor"></div>
        <p class="istok" style="text-align: center;">Busqueda Avanzada Para Pro's</p>
        <div class="row justify-content-center">
            <div class="input-group" style="width: 90%;">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Elección
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Buscar Mas</a>
                        <a class="dropdown-item" href="#">Listitismo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resultados de la busqueda -->
<div class="container-fluid" id="index_resultados"></div>
</body>
</html>