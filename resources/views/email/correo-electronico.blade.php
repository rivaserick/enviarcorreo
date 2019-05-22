<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Correo Electrónico</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="visualizar.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-md-3"></div class="col-md-3">
        <div class="col-md-6">
            <div class="card">
                <div class="modal-header bg-primary text-white">
                        <h4 class="card-title">
                            Nuevo mensaje de: 
                            {{$contenido['nombre']}} 
                            ({{$contenido['correoelectronico']}})
                    </h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Asunto: <strong>{{$contenido['asunto']}}</strong></h5>
                    <h5 class="text-center">Mensaje:</h5>
                    <h5>{{$contenido['mensaje']}}</h5>
                </div>
            </div>
        </div class="col-md-6">
        <div class="col-md-3"></div class="col-md-3">
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/holder.min.js"></script>
</body>

</html>
