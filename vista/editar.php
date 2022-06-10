<?php 

require_once("layout/header.php");
?>


<h1 class="text-center">editar</h1>
<form action="" method="get">

    <?php 
        foreach ($dato as $key => $value): 
            foreach($value as $v):?>
        
                <input type="text" name="nombre" value="<?php echo $v['nombre'] ?>"><br>
                <input type="text" name="precio" value="<?php echo $v['precio'] ?>"><br>
                <input type="hidden" name="id" value="<?php echo $v['id'] ?>"><br>
                <input type="submit" name="btn" class="btn" value="actualizar" ><br>
                <input type="hidden" name="m" value="actualizar">
        
            <?php endforeach; ?>
        <?php endforeach; ?>

</form>


<?php
require_once("layout/footer.php");

?>