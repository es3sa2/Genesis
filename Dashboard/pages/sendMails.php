
<?php

use LDAP\Result;

function sendMails(){
include('./conexion.php');
$que = mysqli_query($conexion, "SELECT pagos.*, clientes.mail, clientes.nombre, clientes.apellido FROM pagos JOIN clientes ON pagos.Solicitud = clientes.solicitud");
    while($cliente = mysqli_fetch_assoc($que)){
        if ($cliente['Estado'] == 0){
            $para      = $cliente['mail'];
            $titulo    = 'Cuota Disponible';
            $mensaje   =  '<html>
            <head>
              <title>GenesisMotors</title>
            </head>
            <body>
            <div style="background-color: rgba(54, 160, 242, 0.1)">
                <br>
                <center>
              <div style="margin-left: 20px; width: 50%;">
                    <img  src="../../assets/img/GM_01-sf.png" alt="">
                    <h4 style="margin-top: 0xp; color: red;"><strong>MENSAJE AUTOMATICO INFORMATIVO, NO RESPONDER</strong><h4>
                    <p style="text-align: justify;">Buenos días, desde GENESIS MOTORS le recordamos que del <strong> 1 al 10 de Abril</strong>  tiene disponible el pago de la cuota de su plan. <strong>RECUERDE: Si al pago lo realiza antes del 1° del mes, el sistema lo registra cómo adelanto de cuota. En caso de abonar el día 10 después de las 18hs se registrará el día 11 y perderá sus beneficios</strong></p>
                    <p>Estimado '.$cliente['nombre'].' '.$cliente['apellido'].', ya tu cuota Nro. '.$cliente['Cuota'].' fue generada, La misma tiene una fecha de vencimiento del: '.$cliente['Vencimiento'].' </p>
                    <h3>Tu cuota es de: '.$cliente['Alicuota'].'</h4>
                    <p style="text-align: justify;">Para abonarla debe acercarse a Av. Marcelo T. de Alvear 748 de Lunes a Viernes de 10hs a 13hs y de 14hs a 17hs, Sábado de 9hs a 12:30. <br>
                      También puede realizar el pago mediante transferencia ó depósito a la siguiente cuenta: <br><br>
                     <strong>Banco Macro <br>
                      Cuenta Corriente <br>
                      Número de CBU: 2850397230094198321891 <br>
                      Alias: TOQUE.ABRAZO.ABUELA <br>
                      PLAN GENESIS S.A.S <br>
                      C.U.I.T:  30717131939 <br>
                      Numero de cuenta: 3-397-0941983218-9 <br><br>
                      *Recordá enviarnos el comprobante correspondiente sino no podremos registrar el pago.*</strong></p>
                    <br>
                
              </div>
              </center>
            </div>
            </body>
            </html>';

            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $cabeceras .= 'From: Recordatorio' . "\r\n";

            $enviado = mail($para, $titulo, $mensaje, $cabeceras);
            if($enviado){
               echo 'Su correo ha sido enviado con exito!';
            }
        }else{
            $para      = $cliente['mail'];
            $titulo    = 'Cuota Vencida';
            $mensaje   =  '<html>
            <head>
              <title>GenesisMotors</title>
            </head>
            <body>
            <div style="background-color: rgba(54, 160, 242, 0.3)">
                <br>
                <center>
                <div style="margin-left: 20px;">
                    <h3 style="background: rgba(180, 127, 112, 0.3); width: 300px; height: 30px; border-radius: 15%;">Genesis Motors.</h3>
                    <h5>Recordatorio de cobro<h5>
                    <p>¡Buenos dias estimado '.$cliente['nombre'].' '.$cliente['apellido'].', ya tu cuota nro. '.$cliente['Cuota'].' fue generada, la misma tiene una fecha de vencimiento del: '.$cliente['Vencimiento'].' </p>
                    <h1>NO SEAS UN MOROS@, PAGAAAAAA<h1>
                    <p>tu cuota es de: '.$cliente['Alicuota'].'</p>
                    <br>
                </center>
                </div>
                
            </div>
            </body>
            </html>';

            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $cabeceras .= 'From: Recordatorio' . "\r\n";

            $enviado = mail($para, $titulo, $mensaje, $cabeceras);
            if($enviado){
               echo 'Su correo ha sido enviado con exito!';
            }
        }

    }


}
sendMails();
?>