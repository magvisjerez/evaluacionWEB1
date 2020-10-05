<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <header>

    </header>
    <main>
    <div class=container>
              <div class="row justify-content-center">
                   <h5>jerez company</h5>  
              </div>
              <div class="row justify-content-center">
                 <form class="mt-5" action="ejercicio3.php" method="POST" >
                    <div class="row">
                        <div class="col mt-4">
                           <input type="text" class="form-control" placeholder="nombre trabajador" name="trabajador">
                        </div>
                        <div class="col mt-4">
                           <input type="text" class="form-control" placeholder="horas trabajadas" name="horas">
                        </div> 
                                                       
                    </div>
                         <button type="submit" class="btn btn-primary mt-5 btn-block"name="botoncalcular">Imprimir</button>
                  </form> 
                </div>
                <div class="row justify-content-center">
                    <?php

                    if(isset($_POST["botoncalcular"])) 
                        {
                            $trabajador=$_POST["trabajador"];
                            $horas=$_POST["horas"];
                        

                            if($horas<=40){
                                $salario=$horas*20000;
                                echo("el total a pagar es : ".$salario);
                            }
                            else{
                                $salario=$horas*25000;
                                echo("el total a pagar es : ".$salario);
                            }
                           
                        
                        }         
                    
                        ?>
                        
         
       
  </div>  
  <div class="row">
            <a href="index.php">Volver a inicio</a>
            </div>   
    </main>
    <footer>

    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>