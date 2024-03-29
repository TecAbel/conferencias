<?php 
    if(isset($_POST['submit'])):   
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

    //eventos

    $registro = $_POST['registro'];

    $eventos = eventos_json($registro);
    echo '<pre>';
    var_dump($eventos);
    echo '</pre>';

    try {
        require_once('includes\functions\bd_conexion.php');
        $stmt =  $conn->prepare("INSERT INTO `registrados`(`nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $correo, $fecha, $pedido, $eventos, $relago, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        header('Location: validar_registro?exitoso=1');
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    ?>
    <?php endif; ?>
<?php include_once 'includes\templates\header.php' ?>
<section class="seccion contenedor">
    <h2>Resumen de regstro</h2>

    
    

    <pre>
        <?php var_dump($_POST) ?>
    </pre>

   
</section>

<?php include_once 'includes\templates\footer.php' ?>