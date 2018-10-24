<?php
$remitente = $_POST['Email'];
$destinatario = 'corzoccomercializadora@gmail.com'; // en esta línea va el mail del destinatario, puede ser una cuenta de hotmail, yahoo, gmail, etc
$asunto = 'Nuevo Afiliado Cobertura Personal'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo .= "Nombre: " . $_POST["Nombre"] . "\r \n"; 
    $cuerpo .= "Apellido: " . $_POST["Apellido"] . "\r \n";
	$cuerpo .= "DNI: " . $_POST["DNI"] . "\r \n"; 
    $cuerpo .= "Domicilio: " . $_POST["Domicilio"] . "\r \n";
    $cuerpo .= "Nacimiento: " . $_POST["Nacimiento"] . "\r \n"; 
    $cuerpo .= "Telefono: " . $_POST["Telefono"] . "\r \n";
	$cuerpo .= "Email: " . $_POST["Email"] . "\r \n"; 
    $cuerpo .= "Familiares: " . $_POST["Familiares"] . "\r \n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['Nombre']." ".$_POST['Apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'gracias.html'; //se debe crear un html que confirma el envío
}
?>
