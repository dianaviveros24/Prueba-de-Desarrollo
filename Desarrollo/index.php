<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <header>
        <div class="o-content">
            <nav class="navbar justify-content-center">
                <span class="navbar-brand my-4">
                    <img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png"
                        alt="logo sigma-studios">
                </span>
            </nav>
        </div>
    </header>

    <section class="o-banner row justify-content-center">
        <div class="o-content-banner col-md-6 text-center">
            <h2>Prueba de desarrollo Sigma</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ex tortor, tempus non odio id, posuere
                vestibulum lacus. In leo neque, viverra at lorem eget, mattis tempus urna. Sed ac aliquam ante. Integer
                sit amet rhoncus nulla. Praesent ut erat lacus. </p>
        </div>
    </section>

    <div class="o-data-content mt-5">
        <div class="o-content-w-img">
            <img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" alt="">
        </div>

        <form class="o-form" method="POST">
            <div class="row form-group px-5">
                <label><b>Departamento*</b></label>
                <select name="state" id="selectDepartment" class="form-control">
                    <option value="Antioquia">Antioquia</option>

                </select>
            </div>

            <div class="row form-group px-5">
                <label><b>Ciudad*</b></label>
                <select name="city" id="selectCity" class="form-control">
                    <option value="Medellín">Medellin</option>
                </select>
            </div>

            <div class="row form-group px-5">
                <label><b>Nombre*</b></label>
                <input type="string" name="name" class="form-control" id="inputname">
            </div>

            <div class="row form-group px-5">
                <label><b>Correo*</b></label>
                <input type="text" name="email" class="form-control" id="inputemail">
            </div>

            <div class="o-content-button">
                <input name="enviar" type="submit" class="o-buttonenviar" value="ENVIAR" id="btnModal"></input>
            </div>
        </form>
    </div>


    <?php
        include("registrar.php");
    ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>