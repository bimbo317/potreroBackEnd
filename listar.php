<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/inicio.css" />
    <link rel="stylesheet" href="css/trabajos.css" />
  <title>Document</title>
</head>

<body>
  <h1>Tienda de ropa</h1>
  <button type="submit"><a href="index.html">Inicio</a></button>
  <button type="submit"><a href="listar.php">Listar ropa</a></button>
  <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
  <select class="form-select" aria-label="Default select example">
    <option selected>Todos</option>
    <option value="1">Addidas</option>
    <option value="2">Nike</option>
    <option value="3">Supreme</option>
  </select>
  <h2>Lista de ropa</h2>
  <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

  <section>
    <div class="container">
      <div class="row">


        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "", null, "3366");
        mysqli_select_db($conexion, "tienda");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $consulta = 'SELECT * FROM ropa';

        // 3) Ejecutar la orden y obtenemos los registros
        $datos = mysqli_query($conexion, $consulta);

        //  recorro todos los registros y genero una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) { ?>
          <div class="card col-sm-12 col-md-6 col-lg-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" width="30px" height="30px">
                  <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen1']) ?>" alt="" )>
                </div>
                <div class="carousel-item" width="30px" height="30px">
                  <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen2']) ?>" alt="" )>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
            <span>$ <?php echo $reg['precio']; ?></span>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>