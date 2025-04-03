<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de fotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
</head>

<body>
    <header>
        <?php include("topo.php") ?>
    </header>

    <div class="container">
        <div class="text-center">
            <h1 class="titulosBorda">Galeria de Fotos</h1>
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                <a href="galeriaDetalhes.php">
                    <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                    <h5>Formatura dos Alunos</h5>
                </a>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Jogos Municipais</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Expoagro</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Curso de Formação de Docenter</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Apresentação</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Feira de Tecnologia</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Apresentação Cultural</h5>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
                <h5>Locais</h5>
            </div>
        </div>
    </div>


    <footer>
        <?php include("footer.php") ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>