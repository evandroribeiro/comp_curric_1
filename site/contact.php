<!DOCTYPE HTML>
<html lang="pt-br">
<<<<<<< HEAD
<head>
  <meta charset="UTF-8">
  <title></title>

  <link rel="stylesheet" href="css/bootstrap.css">
=======
  <head>
    <meta charset="utf-8">
    <title>meu site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="evandro ribeiro">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
>>>>>>> 65291a97fd439a1a80e27d61e7963d98eb932382
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="brand" href="#">Meu Site</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="active"><a href="page1.php">Página 1</a></li>
            <li><a href="page2.php">Página 2</a></li>
            <li><a href="aboutme.php">Sobre Mim</a></li>
            <li><a href="contact.php">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>





    <div class="container-fluid">
      <div class="row-fluid">

        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Lateral</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">

          <div class="hero-unit">
            <h1>Contato</h1>
          </div>


          <form action="formulario.php" method="POST">

            <fieldset>
              <legend>Formulário de Contato</legend>

              <input type="hidden" name="pagina" value="contato">

              <label for="idNome">Nome:</label>
              <input type="text" name="nome" id="idNome">

              <label for="idEmail">E-mail:</label>
              <input type="email" name="email" id="idEmail">

              <label for="idMensagem">Mensagem:</label>
              <textarea name="mensagem" id="idMensagem" rows="3"></textarea>

              <br>

              <button class="btn btn-primary">Enviar Informações</button>

            </fieldset>

          </form>

        </div><!--/span-->
      </div><!--/row-->



      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

</body>
</html>
