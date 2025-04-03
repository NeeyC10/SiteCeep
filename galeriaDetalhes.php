<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" href="geral.css">
</head>

<body>
  <header>
    <?php include("topo.php") ?>
  </header>
  <div class="container">
    <div class="text-center">
      <h1 class="titulosBorda">Veja todas as fotos</h1>
    </div>

    <div class="row">
      <div class="col-md-2">
        <a href="https://www.guiaviagensbrasil.com/imagens/linda-praia-brava-buzios-rj.jpg" data-fancybox="imagem">
          <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
        </a>
      </div>
      <div class="col-md-2">
        <a href="https://ichef.bbci.co.uk/ace/ws/640/cpsprodpb/F403/production/_109476426_jheison3.png.webp" data-fancybox="imagem">
          <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
        </a>
      </div>
      <div class="col-md-2">
        <a href="https://ichef.bbci.co.uk/ace/ws/640/cpsprodpb/8FA4/production/_103927763_44190191_2160165127350452_3001085544559017984_n.jpg.webp" data-fancybox="imagem">
          <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
        </a>
      </div>
      <div class="col-md-2">
        <a href="https://agrafica.com.br/wp-content/uploads/2016/01/resolucao_300dpi.jpg" data-fancybox="imagem">
          <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
        </a>
      </div>
      <div class="col-md-2">
        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-6MmGpov5lggqUBp-1xorN9DTJBfFh6ayET5JnVSEoWV0FkVKXHznVxFxYV6FRwx2fXI&usqp=CAU" data-fancybox="imagem">
          <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
        </a>
      </div>
      <div class="col-md-2">
        <a href="https://www.guiaviagensbrasil.com/imagens/linda-praia-brava-buzios-rj.jpg" data-fancybox="imagem">
          <img src="https://wallpapers.com/images/hd/nature-pictures-ffm1xnpcdzxox0y7.jpg" alt="" class="img-fluid imgBorda">
        </a>
      </div>
    </div>
  </div><br>

  <footer>
    <?php include("footer.php") ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script>
    Fancybox.bind("[data-fancybox='imagem']", {});
  </script>
</body>

</html>