<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estructura.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/taula_act.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>Gimnas DAM</title>
  </head>
  <body>
    <?php
      include("php/conexio.php");
    ?>
    <header>
      <h1>Gimnas DAM</h1>
    </header>
    <!-- Menú per a PC i Tauleta -->
    <nav id="nav1">
      <ul>
        <li><a href="login.php">Iniciar sessió</a></li>
        <li><a href="xml/curses.xml">Curses</a></li>
        <li><a href="login.php">Activitats</a></li>
        <li><a href="login.php">Reserves</a></li>
      </ul>
    </nav>
    <!-- Menú per a Mobil -->
    <nav id="nav2">
      <ul>
        <li>☰ Menú
          <ul>
            <li><a href="login.php">Iniciar sessió</a></li>
            <li><a href="xml/curses.xml">Curses</a></li>
            <li><a href="login.php">Activitats</a></li>
            <li><a href="login.php">Reserves</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <main>
      <section>
        <h2>Activitats disponibles:</h2>
        <table id="index_act">
          <tr>
            <th>Nom</th>
            <th class="border-left">Durada (h)</th>
            <th class="border-left">Descripció</th>
          </tr>
          <?php
            $mostraract = "SELECT * from activitats,sales where Activitats.ID_S=Sales.ID_S";
            $mostraract2=mysqli_query($connexio,$mostraract);
            while ($mostrar3=mysqli_fetch_array($mostraract2)) {
              ?>
              <tr>
                <td>
                  <?php echo $mostrar3['nom']; ?>
                </td>
                <td class="border-left">
                  <?php echo $mostrar3['durada']; ?>
                </td>
                <td class="border-left">
                  <?php echo $mostrar3['descripcio_a']; ?>
                </td>
              </tr>
              <?php
            }
           ?>
        </table>

      </section>

      <!-- Slideshow d'imatges del Gimnas -->
      <div id="slideshow" class="hcg-slider">
        <div class="hcg-slide-container">
        	<div class="hcg-slider-body">
        		<a class="hcg-slides animated" style="display:block">
        			<span class="hcg-slide-number">1/5</span>
        			<img src="img/gimnas1.png" alt="image 1">
        			<span class="hcg-slide-text">image 1</span>
        		</a>
        	</div>
        </div>
        <div class="hcg-slide-dot-control"></div>
      </div>
      <script src="js/slideshow.js"></script>

    </main>
  </body>
</html>
