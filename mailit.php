<?php
require 'fpdf.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// define variables and set to empty values
$name = $date = $gender = "";
$to = 'recepientemai;';                       //set email of recepient
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $gender = test_input($_POST["gender"]);
  $date = test_input($_POST["date"]);



        $pdf=new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(40, 10, "User Detail");
        $pdf->Ln();
        $pdf->SetFont("Arial", "", 12);
        $pdf->Cell(40, 10, "Name:");
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(40, 10, $name);
        $pdf->Ln();
        $pdf->SetFont("Arial", "", 12);
        $pdf->Cell(40, 10, "Gender:");
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(40, 10, $gender);
        $pdf->Ln();
        $pdf->SetFont("Arial", "", 12);
        $pdf->Cell(40, 10, "Date:");
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(40, 10, $date);
        $pdf->Ln();
		$pdf->Output("F",'./pdf/attachment.pdf'); 
        $pdf->Ln(45);


$mail = new PHPMailer;
$mail->isSMTP();                                // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // SMTP server
$mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = 'youremail@gmailcom';                 // SMTP username
$mail->Password = 'yourpassword';                 // SMTP password
$mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
$mail->From = "druiyot@gmail.com";              //Sender email
$mail->Port = 587;                              // SMTP Port
$mail->FromName  = $name;

$mail->Subject   = 'Form data';
$mail->Body      = 'find attachment';
$mail->AddAddress($to);
$mail->AddAttachment("./pdf/attachment.pdf", '', $encoding = 'base64', $type = 'application/pdf');
return $mail->Send();


        header('Location: 	index.php');


}else{
	echo 'submission error';

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>