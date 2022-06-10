<?php 

require_once("layout/header.php");
?>


<a href="index.php?m=nuevo" class="btn">nuevo</a>
<table>
    <tr>
        <td>id</td>
        <td>nombre</td>
        <td>accion</td>
    </tr>
    <tbody>
        <?php 
       
        if(!empty($datos)){
            foreach ($datos as $key => $value) 
                foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['id']?></td>
                        <td><?php echo $v['nombre']?></td>
                        <td>
                            <a class="btn" href="/mvc/index.php?m=editar&id=<?php echo $v['id'] ?>">Editar</a>
                            <a class="btn" href="/mvc/index.php?m=eliminar&id=<?php echo $v['id'] ?>" onclick="return confirm('Estas Seguro');false">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach;  ?>
        <?php } else {  ?>
            <td colspan="3">No ay registro</td>
        <?php }?>
        
    </tbody>
</table>

<?php
require_once("layout/footer.php");

?>