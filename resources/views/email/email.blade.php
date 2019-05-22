<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Enviar correo electrónico con Laravel</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="email.css" rel="stylesheet">

</head>

<body class="text-center pt-0">
    <form class="form-signin" method="POST" action="{{route('enviarcorreo')}}">
      @csrf
        <h1 class="h3 mb-3 font-weight-normal">Enviar email desde Laravel</h1>
        <label class="mb-0">Nombre:</label>
        <input type="text" id="inputNombre" name="nombre" class="form-control mt-auto" placeholder="Nombre" required>
        <label class="mb-0">Correo electrónico:</label>
        <input type="email" id="inputEmail" name="correoelectronico" class="form-control mt-auto" placeholder="Correo electrónico" required>
        <label class="mb-0">Asunto:</label>
        <input type="text" id="inputAsunto" name="asunto" class="form-control" placeholder="Asunto" required data-pg-name="asunto">
        <label class="mb-0">Mensaje:</label>
        <textarea class="form-control" rows="3" name="mensaje" placeholder="Escribe aquí tu mensaje..." id="inputMensaje" required
            data-pg-name="mensaje"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar correo</button>
    </form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
