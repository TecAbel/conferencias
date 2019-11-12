<?php include_once 'includes\templates\header.php' ?>
<section class="seccion contenedor">
    <h2>Resumen de regstro</h2>

    <?php
    if(isset($_POST['submit'])):?>

    <?php
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email'];
        $relago = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');

        //pedidos

        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];
        $boletos = $_POST['boletos'];

        include_once 'includes\functions\funciones.php';

        $pedido = productos_json($boletos, $camisas, $etiquetas);

        echo '<pre>';
        var_dump($pedido);
        echo '</pre>';

    ?>

    <pre>
        <?php var_dump($_POST) ?>
    </pre>

   <?php endif; ?>
</section>

<?php include_once 'includes\templates\footer.php' ?>