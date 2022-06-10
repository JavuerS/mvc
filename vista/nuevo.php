<?php 

require_once("layout/header.php");
?>


<h1 class="text-center">nuevo</h1>
<form action="" method="get">
    <input type="text" name="nombre" placeholder="Ingresa nombre"><br>
    <input type="text" name="precio" placeholder="Ingresa precio"><br>
    <input type="submit" name="btn" class="btn" value="guardar" ><br>
    <input type="hidden" name="m" value="guardar">
</form>
<?php
require_once("layout/footer.php");

?>