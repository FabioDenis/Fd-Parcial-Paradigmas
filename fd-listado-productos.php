<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/fd-estilos.css">
    <title>Document</title>
</head>
<body>
    <header class="fd-header">
      
        <div class="fd-divtitulo">
            <h1 class="fd-tituloh1">PARCIAL-DENIS-FABIO</h1>

        </div>
        <div class="fd-divnav">
            <nav>
                <ul class="fd-ulheader">
                  <li class="fd-linav"><a class="fd-hipervinculoheader" href="index.html">Home</a></li>
                  <li class="fd-linav"><a class="fd-hipervinculoheader"  href="fd-listado-productos.html">Listado Productos</a></li>
                  <li class="fd-linav"><a class="fd-hipervinculoheader" href="fd-productos.html">Productos</a></li>
                  <li class="fd-linav"><a class="fd-hipervinculoheader" href="fd-contacto.html">Contacto</a></li>
                </ul>
              </nav>

        </div>

        <main>

          <?php
                        $sql = "SELECT *FROM fd-parcialparadigmasiii ";
                        $sql =mysqli_query($con,$sql);
                        if(mysqli_num_rows($sql) !=0){
                            while($r= mysqli_fetch_array($sql))

                            {
                                ?>
                                 <li>
                                <a class="hipervinculo" href="fd-listado-productos.php?pagina=<?php echo $r['Nombre'];?>" ><?php echo $r['Precio'];?></a>
                                </li>
                                <?php


                            }
                        }
                        ?>
        </main>
        
        
      
      </header>
    </div>
<hr>
    
</body>
</html>