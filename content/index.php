<?php
    $usuario = new Usuario();
    if ($usuario->esUsuario()){

?>
<?php

/**
 * Created by Alan.
 * User: 4D
 * Date: 26/03/13
 * Time: 14:15
 * To change this template use File | Settings | File Templates.
 */


?>

<!--HEADER -->
<!DOCTYPE html>
<html>
<head>
<title><?php echo 'Titulo impreso'; ?></title>
    <script src="<?php echo $_POST['funcjs'] ?>/js/main.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL . 'css/' ?>main.css" type="text/css">
<link rel="stylesheet" href="<?php echo BASE_URL . 'css/' ?>bootstrap-responsive.css" type="text/css">
<link rel="stylesheet" href="<?php echo BASE_URL . 'css/' ?>bootstrap.css" type="text/css">
<script src="<?php echo BASE_URL . 'js/' ?>JQuery1-9-1.js" type="text/javascript"></script>



<script>
    $(document).ready(function() {
        lanzar();
        // Handler for .ready() called.
    });
</script>
</head>
<body>

<div class="navbar  navbar-inverse">
    <div class="navbar-inner">
        <a class="brand" href="#">Crucius</a>
        <ul class="nav">
            <li class="link1"><a href='#'>Link</a></li>
            <li class="link2"><a href='#'>Link2</a></li>
        </ul>
    </div>
</div>
<!-- FIN HEADER -->

<!-- CONTENIDO -->
<div id="contenido">

</div>
<!-- FIN CONTENIDO -->


<?php

echo '<br>';

echo '<br>';
echo 'index general content';
?>


<?php
//-----------------------------FOOTER
?>
<footer class="well well-large-inverse">
    <p>&copy;Crucius.com 2013</p>
</footer>

</body>
</html>
<?php
    }else{
        include_once 'login.php';
    }
?>