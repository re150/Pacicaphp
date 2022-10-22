<?php
//$xd = chr(52);
$verificar = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $verificar = true;
    
    $tope = 32;
    $valor = $_POST ["v"]; 
    $valor = intval($valor);
    $tope  += $valor;
    $a = []; 
    $i = 0;
    for($j = 32; $j <=$tope; $j++){
        array_push($a, chr($j));
       // var_dump($a);
    }
}



include "plantilla.php";
?>




<div class ="text-center">
    <form method = "POST" >
    <input name ="v"  type="text">  
  

    <input class = "btn btn-dark" type="submit">
    </form>
    <?php if($verificar) : ?>
        <table class = "table table-dark">
        <thead>
                <tr>
                    <th>Codigo</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($a as $as) : ?>
                <tr>
                    <td> <?php echo $as ?> </td>               
                </tr>
                <?php endforeach; ?>
            </tbody>
      
       </table>
    <?php endif; ?>


</div>


<script src ="js/bootstrap.min.js"></script>
</body>
</html>