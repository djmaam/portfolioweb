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
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="titleC">¡Trabajemos juntos!</h1>
      </div>
      <div class="col-12 ">
        <h2 class="subtitleC">Para más detalles sobre mi<br> trabajo podes ver mi Linkedin,<br> descargar mi CV o Mandarme<br> un mensaje.</h4>
      </div>
    </div>
  </div>
  <section class="form">
  <form action="procesar-formulario.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-12">
          <div class="form-group">
            <input type="email" name="txtEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="EMAIL">
          </div>
        </div>
        <div class="col-sm-4 col-12">  
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="txtName" value="NOMBRE">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-12">  
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="txtSubject" value="ASUNTO">
          </div>
        </div>
      </div>  
      <div class="row">
        <div class="col-sm-8 col-12">    
          <div class="form-group">
            <label for="exampleFormControlTextarea1">MENSAJE</label>
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
  </section>
</section>  
  <section id="footer">
    <div class="container">
    <?php include_once("footer.php"); ?>
    </div>
  </section>   
  </div>     
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>