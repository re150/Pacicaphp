<?php
$verificar = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $verificar = true;
    $registro = $_POST["re"];
    $name = $_POST["name"];
    $direccion = $_POST["di"];
    $pais = $_POST["pais"];
    $estado = $_POST["estado"];
    $fecha = $_POST["fecha"];
    $sexo = $_POST["sexo"];
    $telfono = $_POST["num"];
    $aficciones = $_POST["afi"];
    $comentarios = $_POST["com"];

   

   
}


include "plantilla.php";
?>


<div class ="forn-grop  text-center"  >
    <form method = "POST">
        <div >
            <div>
            <label > Registro</label>
            <input name ="re" type="text">
            </div>

            <div>
            <label > Nombre</label>
            <input name ="name" type="text">
            </div>

            <div>
            <label > Dirrección </label>
            <input name ="di" type="text">
            </div>

            <div>
            <label > Pais</label>
            <input name ="pais" type="text">
            </div>

            <div>
            <label > Estado </label>
            <input name ="estado" type="text">
            </div>

            <div>
            <label > Fecha de nacimiento </label>
            <input name ="fecha" type="text">
            </div>

             <div>
            <label > sexo</label>
            <select name="sexo">
                <option value=""> </option>
                <option value="1">Hombre</option>
                <option value="2">Mujer </option>
            </select>
            </div>  

            <div>
            <label > Numero de telefo</label>
            <input name ="num" type="text">
            </div>

            <div>
            <label > Aicciones</label>
            <select name="afi">
                <option value=""> </option>
                <option value="1">Leer</option>
                <option value="2">Ir al cine </option>
            </select>
            </div>  

            <div>
            <label > Comentarios</label>
            <input name ="com" type="text">
            </div>

</div>
        <input class = "btn btn-dark" type="submit">
</form>
<?php if($verificar) : ?>
 <table class = "table table-dark">
    <thead>
        <tr>
            <th>Registro</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Pais</th>
            <th>Estado</th>
            <th>Fecha de nacimiento</th>
            <th>sexo</th>
            <th>telefono</th>
            <th>aficciones</th>
            <th>comentario</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td> <?php  echo  $registro?></td>
                <td> <?php  echo $name ?></td>
                <td> <?php echo $direccion ?> </td>
                <td> <?php echo  $pais  ?> </td>
                <td>  <?php  echo $estado ?></td>
                <td> <?php   echo $fecha ?></td>
                <td>  <?php if($sexo == 1) {
                      $sex = "Hombre";
                      echo $sex;
                 } 
                 if($sexo == 2){
                        $sex ="mujer";
                        echo $sex;
                 }
                ?></td>

                <td> <?php echo $telfono ?> </td>
                <td> <?php  if($aficciones == 1){
                    $aficciones ="Leer";
                    echo $aficciones;
                } 
                if ($aficciones == 2){
                    $aficciones ="Ir al cine";
                    echo $aficciones;
                }
                ?></td>
                <td> <?php  echo $comentarios?></td>
            </tr>

    </tbody>
    </table>
<?php endif; ?>
</div> 

</body>
</html>