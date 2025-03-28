<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
    <title>Document</title>
</head>

<body>

    <?php include("topo.php"); ?>

    <div class="container">
    <div class="row">
            <div class="text-center mb-3"><h1>Cursos Subsequentes</h1></div>
        </div>
        <div class="row">
            <div class="col-6">
                <div>
                    <h2 class="text-center">DEV</h2>
                </div>
                <div>
                    <a href="desenvolvimentoSub.php"><img src="img/imgDev.jpg" class="img-fluid"></a>
                </div>
            </div>

            <div class="col-6">
                <div>
                    <h2 class="text-center">Enfermagem</h2>
                </div>
                <div>
                    <a href="enfermagemSub.php"><img src="img/imgEnfermagem.jpeg" class="img-fluid"></a>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-6">
                <div>
                    <h2 class="text-center">Edificações</h2>
                </div>
                <div>
                    <a href="edificacoesSub.php"><img src="img/imgEdificacoes.jpg" class="img-fluid"></a>
                </div>
            </div>

            <div class="col-6">
                <div>
                    <h2 class="text-center">Estetica</h2>
                </div>
                <div>
                    <a href="esteticaSub.php"><img src="img/imgEstetica.jpg" class="img-fluid"></a>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-6">
                <div>
                    <h2 class="text-center">Eletrotécnica </h2>
                </div>
                <div>
                    <a href="eletrotecnicaSub.php"><img src="img/imgEletrotecnica.jpg" class="img-fluid"></a>
                </div>
            </div>  

            <div class="col-6">
                <div>
                    <h1 class="text-center">Farmacia</h1>
                </div>
                <div>
                    <a href="farmaciaSub.php"><img src="img/imgFarmacia.jpg" class="img-fluid"></a>
                </div>
            </div>
        </div>





    </div>


    <footer>
        <br>
        <?php include("footer.php"); ?>
    </footer>


</body>

</html>