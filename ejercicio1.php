<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-5">
              <form class="mt-5" action="ejercicio1.php" method="POST" >
                    <div class="row">
                        <div class="col mt-8">
                        <input type="text" class="form-control" placeholder="numero1" name="numero1">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="operador" name="operador">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="numero2" name="numero2">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 btn-block"name="botoncalcular">Calcular</button>
                </form>
                  <?php

                   if(isset($_POST["botoncalcular"])) 
                    {
                        $numero1=$_POST["numero1"];
                        $numero2=$_POST["numero2"];
                        $operador=$_POST["operador"];

                        if($operador=="+"){
                            $total=$numero1+$numero2;
                            echo("La suma de los dos numeros es : ".$total);
                        }
                        else if($operador=="-"){
                            $total=$numero1-$numero2;
                            echo("La resta de los dos numeros es : ".$total);
                        }
                        else if($operador=="*"){
                            $total=$numero1*$numero2;
                            echo("La multiplicacion de los dos numeros es : ".$total);
                        }
                        else if($operador=="/"){
                            $total=$numero1/$numero2;
                            echo("La division de los dos numeros es : ".$total);
                        }
                    }         
                  
                  ?>


              </div>
            </div>
            <div class="row">
            <a href="index.php">volver a pagina principal</a>
            </div>
        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>