<?php ob_start(); ?>
    <?php 
        $estudiante = $_GET['est'];
        $cedula = $_GET['ced'];
        $telefono = $_GET['tlf'];
        $fecha = date("j, n, Y");
        $hora = date("H:i:s");
        //echo "" .$estudiante. " " .$cedula. " " .$telefono. " " .$fecha. " " .$hora;
    ?>
    <div class="container">
        <div class="card card-body p-10">
            <br/>
            <p align="right" class="lead">
                Barquisimeto, Edo. Lara <?php echo $fecha ?> 
            </p>    
            <p align="left" class="lead">
                A QUIEN CORRESPONDA:
            </p>
            <p align="justify" class="lead">
                Por medio de la presente, el director de la Universidad Yacambu, Juan Carlos Moya Duarte, hace CONSTAR: Que <?php echo $estudiante ?>, C.I. <?php echo $cedula ?>, numero de telefono <?php echo $telefono ?> alumno de esta institucion, inscrito en el 7mo semestre de la carrera de Ingeneria Electronica en Computacion, en el turno vespertino, matricula 11089, se encuentra actualmente cursando de manera satisfactoria el periodo escolar septiembre-diciembre de 2020.

                Se extiende la presente para los fines que al interesado convengan.

            </p>
            <br/>
            <br/>        
            <p align="center" class="lead">
                FIRMA Y SELLO
                <br/>
                <br/> 
                <br/>
                ___________________  <br/><br/>

                Juan Carlos Moya Duarte <br/>

                DIRECTOR <br/>

                Universidad Yacambu <br/>
            </p>
        </div>
    </div>
<?php

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "ejemplo.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);

?>