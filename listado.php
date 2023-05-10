<!-- Aqui comienza nuestra estructura de nuestra pagina en HTML -->
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>1er Desempeño</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<?php
    /* Aqui empezaremos agregando PHP */
    /* Lugar donde definiremos nuestro Array multidimensional */


    $Articulos = array();

    $Articulos[0]['Imagen'] = "assets/img/Reloj.jpg";
    $Articulos[0]['Descripcion'] = "Reloj Led Pulsera Unisex Deportivo Ajustable";
    $Articulos[0]['Stock'] = 94; 
    $Articulos[0]['Votos_totales'] = 41;
    $Articulos[0]['Votos_positivos'] = 15; 
   
    $Articulos[1]['Imagen'] = "assets/img/Auriculares1.jpg";
    $Articulos[1]['Descripcion'] = "Auriculares in-ear inalámbricos Soundpeats TrueFree 2 negro";
    $Articulos[1]['Stock'] = 15;
    $Articulos[1]['Votos_totales'] = 104;
    $Articulos[1]['Votos_positivos'] = 22;
   
    $Articulos[2]['Imagen'] = "assets/img/Auriculares2.jpg";
    $Articulos[2]['Descripcion'] = "Auricular inalámbrico JBL Tune 510BT blanco";
    $Articulos[2]['Stock'] = 45;
    $Articulos[2]['Votos_totales'] = 89;
    $Articulos[2]['Votos_positivos'] = 72;
   
    $Articulos[3]['Imagen'] = "assets/img/soporte.jpg";
    $Articulos[3]['Descripcion'] = "Soporte Extensible Apoya Celular Para Notebook Holder Iman";
    $Articulos[3]['Stock'] = 50 ;
    $Articulos[3]['Votos_totales'] = 114;
    $Articulos[3]['Votos_positivos'] = 72;
   
    $Articulos[4]['Imagen'] = "assets/img/funda.jpg";
    $Articulos[4]['Descripcion'] = "Funda Deportiva Para iPhone 6s 7 8 X Plus Brazalete Correr";
    $Articulos[4]['Stock'] = 8 ;
    $Articulos[4]['Votos_totales'] = 67;
    $Articulos[4]['Votos_positivos'] = 47;


  /* Hasta aqui queda definido nuestro Array multidimensional  
      con todas las caracteristicas particulares de cada articulo*/

  /* Aqui colocaremos una funcion la cual dependiendo la 
      cantidad de stock nuestra barra actualizara los colores*/
    
  function setColor ($Total) /* Aqui la defino colocandole un nombre*/
  {
    /* Si el total es menor a 20*/
    if ($Total<20) {
      return "<div class='progress-bar progress-bar-striped bg-danger progress-bar-animated'role='progressbar' style='width: $Total%' valuenow=' 15' aria-valuemin='0' aria-valuemax='100'title='Stock Final: 15'></div>";
    }   


    /* Si el total es menor a 50*/
    elseif($Total<50)
    return "<div class='progress-bar progress-bar-striped bg-warning progress-bar-animated'role='progressbar' style='width: $Total%' valuenow=' 15' aria-valuemin='0' aria-valuemax='100'title='Stock Final: 15'></div>";


    /* Si no cuample ninguna de las anteriores condiciones retorna otro valor*/
    else {
    return "<div class= 'progress-bar progress-bar-striped bg-success progress-bar-animated'role='progressbar' style='width: $Total%' valuenow=' 15' aria-valuemin='0' aria-valuemax='100'title='Stock Final: 15'></div>";
    }
  }



  /* Aqui colocaremos una funcion la cual calcularemos los porcentajes */

  function Participacion($Positivos, $Totales) /* Aqui la defino colocandole un nombre*/
  {
    $Participacion = number_format(($Positivos*100) / $Totales, 2);

    $Negativos = $Totales - $Positivos;

    $Barra_de_Color_Roja = "<td><h3><span title=' Positivos: $Positivos y negativos: $Negativos'class='badge border-danger border-1 text-danger'>$Participacion % <i class='bi bi-heart-fill danger'> </i> </span> </h3> Total de votos: $Totales </h3></td>";
    $Barra_de_Color_Amarilla = "<td><h3><span title=' Positivos: $Positivos y negativos: $Negativos' class='badge border-warning border-1 text-warning'>$Participacion %  <i class='bi bi-heart-fill danger'> </i></span> </h3> Total de votos: $Totales  </h3></td>";
    $Barra_de_Color_Celeste = "<td><h3><span title=' Positivos: $Positivos y negativos: $Negativos' class='badge border-info border-1 text-info'>$Participacion % <i class='bi bi-heart-fill danger'> </i> </span> </h3> Total de votos: $Totales </i> </h3></td>";
    $Barra_de_Color_Verde = "<td><h3><span title=' Positivos: $Positivos y negativos: $Negativos' class='badge border-success border-1 text-success'>$Participacion %  <i class='bi bi-heart-fill danger'> </i> </span> </h3> Total de votos: $Totales </i> </h3></td>";


    /* Si nuestro porcentaje es menor a 25% la barrra sera Roja*/
    if ($Participacion<25) {
     return $Barra_de_Color_Roja;
    }

    /* Si nuestro porcentaje es menor a 50% la barrra sera Amarilla*/
    elseif($Participacion<50) {
      return $Barra_de_Color_Amarilla;
    }

    /* Si nuestro porcentaje es menor a 80% la barrra sera Celeste*/
    elseif ($Participacion<80) {
     return $Barra_de_Color_Celeste;
    }

    /* Si nuestro porcentaje es mayor al 80% la barrra sera Verde*/
    else {
    return $Barra_de_Color_Verde;
    }
  }



  /* Aqui colocaremos una funcion donde dependiendo del porcentaje de positivos
     indicaremos cuantas cuotas se ofrecen, de igual manera cambiara tambien el valor*/

  function cuotas($Positivos, $Total)
  {
    $Participacion = number_format(($Positivos*100) / $Total, 2);
    $Negativos = $Total - $Positivos;
    $Cuota_Color_Verde = "<td><h4> <span class='badge bg-success'><i class='bi bi-check-circle me-1'></i> 12 cuotas</span> </h4> </td>";
    $Cuota_Color_Celeste = "<td><h4> <span class='badge bg-info'><i class='bi bi-check-circle me-1'></i> 6 cuotas</span> </h4> </td>";
    $Cuota_Color_Amarilla = "<td><h4> <span class='badge bg-warning'><i class='bi bi-check-circle me-1'></i> 3 cuotas</span> </h4> </td>";
    $Cuota_Color_Roja = "<td><h4> <span class='badge bg-danger'><i class='bi bi-check-circle me-1'></i> Sin cuotas</span> </h4> </td>";


    /* Si nuestro porcentaje es menor a 35% la barrra sera Roja (Sin cuotas)*/
    if ($Participacion<35) {
    return $Cuota_Color_Roja;
    }

    /* Si nuestro porcentaje es menor a 65% la barrra sera Amarilla (3cuotas)*/
    elseif($Participacion<65) {
    return $Cuota_Color_Amarilla;
    }

    /* Si nuestro porcentaje es menor a 80% la barrra sera Celeste (6 cuoatas)*/
    elseif ($Participacion<80) {
     return $Cuota_Color_Celeste;
    }

    /* Si nuestro porcentaje es mayor al 80% la barrra sera Verde (12 cuoatas)*/
    else {
    return $Cuota_Color_Verde;
    }
  }
?>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->



  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="listado.html">
              <i class="bi bi-circle"></i><span>Los mas vendidos</span>
            </a>
          </li>
          <li>
            <a href="recuperatorio.html">
              <i class="bi bi-circle"></i><span>Recuperatorio</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>
  </aside><!-- End Sidebar-->



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Listado de Productos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Productos</a></li>
          <li class="breadcrumb-item active">Los mas vendidos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Los mas vendidos </h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Valoración</th>
                        <th scope="col">Financiación</th>
                      </tr>
                    </thead>
                    <tbody>
                    

                    
                    <!-- Aca con "echo" vamos a empezar a visualizar todos la informacion que habiamos colocado 
                          en los Array y en PHP, en conjunto con los resultados de las funciones-->
                    
                    <tr>
                        <th scope="row">1</th>
                        <th scope="row">
                        <a href="#"><img src="<?php echo $Articulos[0]['Imagen']?>" /></a>
                    </th>

                        
                    <td>
                        <a href="#" class="text-primary fw-bold">
                          <?php echo $Articulos[0]['Descripcion'] ?>
                        </a>
                        <div class="progress mt-3"> 
                          <?php echo setColor($Articulos[0]['Stock']) ?> 
                        </div>
                    </td>


                    <?php echo Participacion($Articulos[0]['Votos_positivos'],$Articulos[0]['Votos_totales'])?>
                    <?php echo cuotas($Articulos[0]['Votos_positivos'],$Articulos[0]['Votos_totales'])?>

                        
                    <tr>
                        <th scope="row">2</th>
                        <th scope="row">
                          <a href="#"><img src="<?php echo $Articulos[1]['Imagen']?>" /></a>
                        </th>
                        <td>
                          <a href="#" class="text-primary fw-bold">
                            <?php echo $Articulos[1]['Descripcion'] ?>
                          </a>
                          <div class="progress mt-3">
                            <?php echo setColor($Articulos[1]['Stock'])?> 
                          </div>
                        </td>

                        <?php echo Participacion($Articulos[1]['Votos_positivos'],$Articulos[1]['Votos_totales']) ?>
                        <?php echo cuotas($Articulos[1]['Votos_positivos'],$Articulos[1]['Votos_totales']) ?>

                    </tr>



                    <tr>
                        <th scope="row">3</th>
                        <th scope="row">
                          <a href="#"><img src="<?php echo $Articulos[2]['Imagen']?>" />
                          </a>
                        </th>

                        <td>
                          <a href="#" class="text-primary fw-bold">
                            <?php echo $Articulos[2]['Descripcion']?>
                          </a>
                          <div class="progress mt-3">
                          <?php echo setColor($Articulos[2]['Stock'])?> 
                          </div>
                        </td>

                        <?php echo Participacion($Articulos[2]['Votos_positivos'],$Articulos[2]['Votos_totales']) ?>
                        <?php echo cuotas($Articulos[2]['Votos_positivos'],$Articulos[2]['Votos_totales']) ?>

                    </tr>


                    <tr>
                        <th scope="row">4</th>
                        <th scope="row">
                          <a href="#"><img src="<?php echo $Articulos[3]['Imagen']?>" />
                          </a>
                        </th>

                        <td>
                          <a href="#" class="text-primary fw-bold">
                          <?php echo $Articulos[3]['Descripcion']?>
                          </a>
                          <div class="progress mt-3">
                            <?php echo setColor($Articulos[3]['Stock']) // aca ?> 
                          </div>
                        </td>

                        <?php echo Participacion($Articulos[3]['Votos_positivos'],$Articulos[3]['Votos_totales']) ?>
                        <?php echo cuotas($Articulos[3]['Votos_positivos'],$Articulos[3]['Votos_totales']) ?>
                        
                    </tr>



                    <tr>
                        <th scope="row">5</th>
                        <th scope="row">
                          <a href="#"><img src="<?php echo $Articulos[4]['Imagen']?>" />
                          </a>
                        </th>

                        <td>
                          <a href="#" class="text-primary fw-bold">
                          <?php echo $Articulos[4]['Descripcion']?>
                          </a>
                          <div class="progress mt-3">
                            <?php echo setColor($Articulos[4]['Stock'])?> 
                          </div>
                        </td>


                        <?php echo Participacion($Articulos[4]['Votos_positivos'],$Articulos[4]['Votos_totales']) ?>
                        <?php echo cuotas($Articulos[4]['Votos_positivos'],$Articulos[4]['Votos_totales']) ?>

                        
                    </tr>



                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->


            <!-- Aca vamos a terminar de visualizar la informacion que conteniamos en los Array-->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Votos <span>| Total positivos</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hand-thumbs-up-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $Positivos =0;
                      for ($i=0; $i <= 4 ; $i++) 
                      {
                        $Positivos = $Positivos+$Articulos[$i]['Votos_positivos'];
                      }  
                      echo $Positivos;
                      ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Votos <span>| Total negativos</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hand-thumbs-down-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $Neg = 0;
                      $Negativos = 0;
                      for ($i=0; $i <= 4 ; $i++) 
                      {
                        $Neg = $Articulos[$i]['Votos_totales']-$Articulos[$i]['Votos_positivos'];
                        $Negativos = $Negativos+$Neg;
                      }  
                      echo $Negativos;
                      ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>


          </div><!-- End Left side columns -->
        </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working html/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files 2023-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File 2023-->
  <script src="assets/js/main.js"></script>

</body>

</html>
