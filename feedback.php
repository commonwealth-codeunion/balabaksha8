<?include $_SERVER['DOCUMENT_ROOT'].'/scripts/phpmailer/PHPMailer.php';
include $_SERVER['DOCUMENT_ROOT'].'/scripts/phpmailer/SMTP.php';
include $_SERVER['DOCUMENT_ROOT'].'/scripts/phpmailer/Exception.php';
if($_POST['mail']==true){
$email=$_POST['mail'];
}else{
$email='Почта';
};
if($_POST['gender']==true){
$gender=$_POST['gender'];
}else{
$gender='Пол';
};
if($_POST['age']==true){
$age=$_POST['age'];
}else{
$age='Возраст';
};
if($_POST['msg']==true){
$message=$_POST['msg'];
}else{
$message='Сообщение';
};
$mail=new PHPMailer\PHPMailer\PHPMailer(true);
$msg="ok";
$mail->isSMTP();
$mail->CharSet="UTF-8";
$mail->Host = 'webmail.ps.kz';              
$mail->Port = 25;                                    
$mail->SMTPAuth = true;                              
$mail->Username = 'info@balabaksha8.kz';             
$mail->Password = 'balabakshaemail12345'; 
$mail->SMTPDebug = 2;
$mail->From = 'info@balabaksha8.kz';
$mail->addAddress('c10ver.obj@gmail.com');
$mail->isHTML(true);
$mail->Subject='Новая заявка!';
$mail->Body='<html><body>';
$mail->Body.='<h1>Пришла новая заявка!</h1><br>';
$mail->Body.='<table rules="all" style="border-color: #666; max-width: 200px;" cellpadding="10">';
$mail->Body.="<tr style='background: #eee;'><td>
                        <strong>Почта:</strong>
                        </td><td>".strip_tags($email)."</td></tr>";
$mail->Body.="<tr><td>
                        <strong>Пол:</strong>
                        </td><td>".strip_tags($age)."</td></tr>";
$mail->Body.="<tr><td>
                        <strong>Возраст:</strong>
                        </td><td>".strip_tags($age)."</td></tr>";
$mail->Body.="<tr><td>
                        <strong>Сообщение:</strong>
                        </td><td>".strip_tags($message)."</td></tr>";
$mail->Body.="</table>";
$mail->Body.="</body></html>";
if($mail->send()){echo "Заявка успешно отправлена.";}
else{echo 'Произошла ошибка, попробуйте позже.';}
?>
