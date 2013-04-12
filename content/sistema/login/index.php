<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 11/04/13
 * Time: 9:11
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo 'T&iacute;tulo impreso'; ?></title>
    <script src="<?php echo BASE_URL . $_POST['funcjs'] ?>/js/main.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL . $_POST['funcjs'] ?>self.css" type="text/css">
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
<div id="content">

    <form class="navbar-form pull-left span4 offset4">
        <input type="text" class="span2" name="nombre">
        <br>
        <input type="text" class="span2" name="pass">
        <br>
    </form>
    <button type="submit" class="btn" id="abrir">abrir</button>
    <button type="submit" class="btn" id="cerrar">cerrar</button>
    <br>
    <br>
    <br>
    <br>

    <?php
    include_once 'mostrar.php';
    ?>
</div>
</body>