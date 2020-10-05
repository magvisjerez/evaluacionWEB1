<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salpicon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
              <div class="row justify-content-center">
                   <h5>Salpicones Jerez</h5>  
              </div>
    </header>
    <main>
    <div class="container">
            <div class="row justify-content-center">
              <div class="col-7">
                 <form class="mt-4" action="ejercicio4.php" method="POST" >
                    <div class="row">
                        <div class="col mt-8">
                        <input type="text" class="form-control" placeholder="fruta1" name="fruta1">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="fruta2" name="fruta2">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="fruta3" name="fruta3">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="fruta4" name="fruta4">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="fruta5" name="fruta5">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 btn-block"name="botoncalcular">Calcular</button>
                   </form>

                    <?php

                   if(isset($_POST["botoncalcular"])) 
                    {
                        $fruta1=$_POST["$fruta1"];
                       

                        if($fruta1=="manzana"){
                            echo "<img src='evaluacionWEB1/'.$valor./'manzanaverde.jpg' border='0' width='300' height='100'>";
                            
                        }
                       
                    }         
                  
                  ?>


                </div>
            </div>
            <div class="row">
            <a href="index.php">Volver a inicio</a>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
