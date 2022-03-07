<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estructura.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/responsive_login.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>Iniciar Sessió</title>
  </head>
  <body>
    <?php
      include("php/conexio.php");
    ?>
    <header>
      <h1>Iniciar Sessió</h1>
    </header>
    <nav id="login">
      <ul>
        <li><a href="index.php">Pàgina Inici</a></li>
      </ul>
    </nav>
    <main>

      <!-- <?php
       $consulta="SELECT * from client";
       $result=mysqli_query($connexio,$consulta);
       while ($mostrar=mysqli_fetch_array($result)) {
         ?>
         <p>
           <?php echo $mostrar['DNI_C']; ?>
         </p>
         <?php
       }
      ?> -->

      <form class="" action="login.php" method="post">
        <div class="login">
          <label for="Unom">Nom Usuari:</label><br>
          <input type="text" name="Unom" id="Unom" placeholder="Nom"><br>
          <label for="contra">Contrasenya:</label><br>
          <input type="password" name="contra" id="contra" placeholder="Contrasenya"><br>
          <button type="button" name="button">Iniciar Cessió</button>
        </div>
      </form>
    </main>
  </body>
  </body>
</html>
