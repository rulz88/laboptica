<?php
$nombre = $_POST['Name'];
$mail = $_POST['Email'];
$comentario = $_POST['message'];
//echo $nombre;
//echo $mail;
//echo $comentario;

$header = "From: " . $mail . " \r\n";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: ".$nombre."<".$mail.">\r\n";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "laboptica@sandunga.unistmo.edu.mx";
//$para = "ross_089@hotmail.com";
$asunto = "Asunto del mail recibido";

if (mail($para, $asunto, utf8_decode($mensaje), $header)){
		echo "<script type=\"text/javascript\"> alert('El correo fue enviado correctamente.'); window.location.replace('http://www.unistmo.edu.mx/~laboptica/'); </script>"; 

	}
	else{
				echo "<script type=\"text/javascript\"> alert('El correo no se pudo enviar.'); window.location.replace('http://www.unistmo.edu.mx/~laboptica/'); </script>"; 
}
//header("location:http://127.0.0.1/sitio_optica/index.php") ;
?>