<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                font-family: segoe ui light;
            }
            .container_1{
                width: 800px;
                margin: 10px auto 0;
            }
			.mail {
				border:1px solid #000000;
			}
            #send-email-form label {
                width: 150px;
                display: inline-block;
            }
            #send-email-form input {
                margin-bottom: 10px;
                line-height: 17px;
            }
            #send-email-form textarea {
                width: 500px;
                height: 200px;
            }
            #send-email-form input[type=submit] {
                margin-top: 35px;
                height: 23px;
                margin-left: 150px;
            }
        </style>
    </head>
    <body>
        <?php

        use PHPMailer\PHPMailer\PHPMailer; // Thư viện
        use PHPMailer\PHPMailer\Exception; // Thư viện

if (isset($_GET['action']) && $_GET['action'] == "send") {
            if (empty($_POST['email'])) { //Kiểm tra xem trường email có rỗng không?
                $error = "Bạn phải nhập địa chỉ email";
            } elseif (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = "Bạn phải nhập email đúng định dạng";
            } elseif (empty($_POST['content'])) { //Kiểm tra xem trường content có rỗng không?
                $error = "Bạn phải nhập nội dung";
            }
            if (!isset($error)) {
                include 'library.php'; // include the library file
                require 'vendor/autoload.php';
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "Đoàn Đức Bảo");
                    $mail->addAddress($_POST['email'], $_POST['email']);     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
					$file_name = $_FILES["file"]["name"];
					move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
					
					$mail->addAttachment($file_name);
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $_POST['title'];
                    $mail->Body = $_POST['content'];
                    $mail->AltBody = $_POST['content']; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
            ?>
            <div class = "container">
                <div class = "error"><?= isset($error) ? $error : "Gửi email thành công" ?></div>
                <a href="javascript:goBack();">Quay lại form gửi mail</a>
            </div>
        <?php } else {
            ?>
            <div class="container_1">
                <h1>Form Gửi Mail</h1>
                <form id="send-email-form" method="POST" action="http://localhost:8080/techweb/room/index.php?quanly=quanlychitietphong&ac=mail-gg&action=send" enctype="multipart/form-data">
                    <label>Gửi đến email: </label>
                    <input class="mail" type="text" name="email" value="<?php echo $_GET['email'] ?>"" /><br/>
                    <label>Tiêu đề: </label>
                    <input class="mail" type="text" name="title" value="" /><br/>
                    <label>Nội dung: </label>
                    <textarea name="content"></textarea><br/><br/>
                    <label>File đính kèm: </label>
                    <input type="file" name="file" /> <br/>
                    <input class="btn" type="submit" value="GỬI" />
                </form>
            </div>
<?php } ?>
    </body>
    <script type="text/javascript"> 
    	function goBack() {
        	window.history.back();
        }
    </script>
</html>
<style>
.btn {
	width:120px;
	font-family: 'Amiko';
	cursor: pointer;
	background-color: white; 
	color: black; 
	border: 2px solid #008CBA;
	transition:0.5s;
	overflow: hidden;
	border-radius: 8px;
	
}
.btn:hover {
  background-color: #008CBA;
  color: white;
}
.btn_in {
	border: 2px solid #008CBA;
	color:#008CBA;
	font-size:25px;
	transition:0.5s;
	cursor: pointer;
	transition-duration: 0.4s;
	padding: 5px 8px;
	float:right;
	border-radius: 8px;
	margin-top:-5px;
	margin-right:5px;
}

</style>