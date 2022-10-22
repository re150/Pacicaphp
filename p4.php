<?php
$verificar = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $verificar = true;
    $texto = $_POST["txt"];
   


    $texto =  strtoupper($texto);
    $texto = trim($texto);
    // $texto = str_replace(" ",null,$texto);
    //var_dump($texto);
}


include "plantilla.php";
?>


<div class ="text-center">

<form method = "POST">
<label > Texto a cambiar </label>
<input name="txt" type="text"> 

<input class = "btn btn-dark text-center" type="submit">
</form>
<div class ="text-center">
      <?php if($verificar) : ?>
        <?php echo $texto ?>
        <?php endif; ?>
</div>
</div> 

</body>
</html>