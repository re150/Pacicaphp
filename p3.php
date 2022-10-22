<?php
$verificar = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $verificar = true;

    $num = $_POST ["num"]; 
    $op = $_POST ["op"];
    $num = intval($num);
   // var_dump($num);

    // if($op == 1){
    //     $fah =$num *1.8 +32;
    //     $kel = $num +273.15; 

    //     echo "<h2> Fahrenheit :  ".round($fah ,2)."</h2>";
    //     echo "<h2> kelvin :  ".round($kel ,2)."</h2>";
    // }
   

}


include "plantilla.php";
?>



<main>

<div class ="text-center">
<form method = "POST">

<input name ="num"  type="text">  
 <select name="op">
     <option value="1">Centigrados </option>
     <option value="2">Fahrenheit</option>
     <option value="3">kelvin </option>
     </select>
<input class = "btn btn-dark" type="submit">
</form>
<?php if($verificar) : ?>
       <?php 
       if($op == 1){
        $fah =$num *1.8 +32;
        $kel = $num +273.15; 

        echo "<h2> Fahrenheit :  ".round($fah ,2)."</h2>";
        echo "<h2> kelvin :  ".round($kel ,2)."</h2>";
         }
      ?>

      <?php  
       if($op == 2){
        $cal =($num -32)*1.8;
        $kel = ($num -32) *1.8 +273.15; 

        echo "<h2> centigrados :  ".round($cal ,2)."</h2>";
        echo "<h2> kelvin :  ".round($kel ,2)."</h2>";
        }
      ?>

      <?php 
        if($op == 3){
            $cal =$num - 273.15;
            $fah = ($num - 273.15) * 9/5 + 32; 
    
            echo "<h2> centigrados :  ".round($cal ,2)."</h2>";
            echo "<h2> kelvin :  ".round($fah ,2)."</h2>";
            }
       
      ?>
       <?php endif; ?>
</div>
  

</main>

    
</body>
</html>