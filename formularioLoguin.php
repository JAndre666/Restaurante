<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
<title>Loguin</title>

</head>
<body>
    
    <section class="container col-md-8 col-sm-12 formulario shadow-lg p-3 mb-5 bg-white rounded">
    <div class="row">
        <div class="col-md-4 col-sm-8 ">
        <h2 class="text-center">Login Now</h2>
        <form action="mysql-loguin.php" method="post">
        <p>Usuario: <input type="text" class="form-control form-control-lg" id="usuario" name="usuario"></p>

        <p>Contraseña: <input type="password" class="form-control form-control-lg" id="contraseña" name="contraseña" size="40"></p>

        <p class="text-center btn_acceder "><button type="submit" class="btn btn-outline-primary btn-lg ">Acceder</button></p>
        
        </form>

        
        </div>
        <div class="col-md-8 col-sm-8">
        <img class="img-fluid" src="img/img1.jpg">
        </div>


    </div>
    </section>
    
</body>
</html>