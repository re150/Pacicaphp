<?php
$producto = 'Prueba variable';
$verificar = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $verificar = true;
    $total = 0;
    $P1 = $_POST ["P1"];
    $P2 = $_POST ["P2"];
    $P3 = $_POST ["P3"];

    $P1 = intval($P1);
    $P2 = intval($P2);
    $P3 = intval($P3);

     var_dump($P1,$P2,$P3);
     $total = 1.16*(($P1 *50) +($P2*30) +($P3*40));
    var_dump($total);

}

include "plantilla.php";
?>


    <div>
    <main> 

    
    

    <div>
        <form method = "POST">
        <table class = "table table-dark">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 111 </td>
                    <td>Motor</td>
                    <td> 50</td>
                    <td><input name ="P1"  type="number"> </td>

                </tr>
                <tr>
                    <td> 222 </td>
                    <td>Aceite</td>
                    <td> 30</td>
                    <td><input name ="P2" type="number"> </td>
                </tr>
                <tr>
                    <td> 333 </td>
                    <td>Filtro de aire</td>
                    <td> 40</td>
                    <td><input name ="P3"  type="number"> </td>
                </tr>
            </tbody>
        </table>
           <input class = "btn btn-dark" type="submit">
        </form>

        <?php if($verificar) : ?>
            <table class = "table table-dark">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>total con iva</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 111 </td>
                    <td>Motor</td>
                    <td> 50</td>
                    <td><?php echo $P1 ?> </td>
                    <td><?php echo( $P1 *50)* 1.16 ?></td>
                </tr>
                <tr>
                    <td> 222 </td>
                    <td>Aceite</td>
                    <td> 30</td>
                    <td><?php echo $P2 ?> </td>
                    <td><?php echo ($P2 *30) * 1.16 ?></td>
                </tr>
                <tr>
                    <td> 333 </td>
                    <td>Filtro de aire</td>
                    <td> 40</td>
                    <td> <?php echo $P3 ?> </td>
                    <td><?php echo ($P3 * 40)*1.16 ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td>  <?php echo $total?></td>
                </tr>
            </tbody>
        </table>
            <?php endif; ?>
    </div>
    </main>
    </div>
    <script src ="js/bootstrap.min.js"></script>
    
</body>
</html>