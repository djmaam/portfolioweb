<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">   
    <title>Marcos Arrieta</title>
</head>
<body>
<div class="bg-contacto">   
  <section id="header">
    <header class="header">
       <?php include_once("navbar.php"); ?>  
    </header>    
  </section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>¡Trabajemos juntos!</h1>
      </div>
      <div class="col-12">
        <h4>Para más detalles sobre mi trabajo po

  <section class="form">
  <form action="procesar-formulario.php" method="post">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo Electronico</label>
          <input type="email" name="txtEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tus datos con nadie.</small>
        </div>
      </div>
      <div class="col-4">  
        <div class="form-group">
          <label for="formGroupExampleInput">Nombre y Apellido</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="txtName">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8">  
        <div class="form-group">
          <label for="formGroupExampleInput">Asunto</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="txtSubject">
        </div>
      </div>
    </div>  
    <div class="row">
      <div class="col-8">    
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea class="form-control" name="txtMessage" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
      </div>
    </div>  
    <div class="row">
      <div class="col-2">  
        <button type="submit" class="btn btn-dark">ENVIAR</button>
      </div>
    </div>
  </div>  
</form>
</div>
  </section>
  <section id="footer">
    <?php include_once("footer.php"); ?>
  </section>        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>