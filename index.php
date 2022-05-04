<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>

<?php 

$x = 20;
$y = 5;
$r = $x + $y;
print($r);


?>



  <!--   <div class="container">
         <div class="row">
             <div class="col-md-4 col-md-offset-4">
                 <div class="panel panel-success">
                      <div class="panel-body">
                          <form action="" method="GET">
                              <div class="form-group">
                                  <label for="">Ciudades</label>
                                  <select name="ciudad" id="ciudad" class="form-control" required>
                                     <option  value="" selected>Seleccionar...</option>
                                      <option <?php print($_GET['ciudad'] == 'bogota' ? 'selected' : '')  ?> value="bogota">Bogota</option>
                                      <option <?php print($_GET['ciudad'] == 'cali' ? 'selected' : '')  ?> value="cali">Cali</option>
                                      <option <?php print($_GET['ciudad'] == 'medellin' ? 'selected' : '')  ?> value="medellin" >Medellin</option>
                                      <option <?php print($_GET['ciudad'] == 'barranquilla' ? 'selected' : '')  ?> value="barranquilla">Barranquilla</option>
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-info pull-right">Enviar </button>
                          </form>
                      </div>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-8 col-md-offset-2">
                   <?php 
                     $ciudad  = $_GET['ciudad'];

                      if($ciudad == 'bogota'){
                          print("<img src='./img/bogota.jpg' alt='esta imagen es de la ciudad de Bogota.'>");
                      
                      }else if($ciudad == 'cali'){
                          print("<img src='./img/cali.jpg' alt='esta imagen es de la ciudad de Cali.'> ");
                      
                        }else if($ciudad == 'medellin') {
                          print("<img class='img-responsive' src='./img/medellin.jpg' alt='esta imagen es de la ciudad de Medellin.'> ");
                      
                        }else if($ciudad == 'barranquilla'){
                        print("<img class='img-responsive' src='./img/barranquilla.jpg' alt='esta imagen es de la ciudad de Barranquilla.'> ");

                      }else{
                          print("<h1>Seleccionar una img por favor</h1>");
                      }
                     
                   ?>
                       
                   
             </div>
         </div>
     </div>
                    -->
</body>
</html>