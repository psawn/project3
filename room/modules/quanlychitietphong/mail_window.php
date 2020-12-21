<!DOCTYPE html>
<html>
<head>
  <title>Send Email</title>
</head>
<body>
	<div class="form">
    	<div class="input">
        	<label> Emal</label><br>
            <input type="email" id="email" readonly class="long" value="<?php echo $_GET['email'] ?>">
        </div>
        <div class="input">
        	<label> Subject</label><br>
            <input type="text" id="subject" class="long">
        </div>
        <div class="input">
        	<label> Message</label><br>
            <textarea id="message" class="textarea"></textarea>
        </div>
         <button id="send" onclick="send()">Send</button>
    </div>
</body>
<script>
function send() {
  setTimeout(function() {
    window.open("mailto:" + document.getElementById('email').value + "?subject=" + document.getElementById('subject').value + "&body=" + document.getElementById('message').value);
  }, 320);
}
</script>
</html>

<style>
.form {
	line-height:1.5;
	width:500px;
	margin:30px auto;
}
.long {
	padding-left:2px;
	border:1px solid #666;
	width:500px;
	height:25px;
	font-size:16px;
}
label {
	color:#06C;
	font-size:18px;
}
.textarea {
	padding-left:2px;
	width:500px;
	height:75px;
	font-size:19px;
}
#send {
	color:#ffffff;
	border:2px solid #06C;
	font-weight:600;
	margin-top:10px;
	width:200px;
	height:50px;
	font-size:16px;
	border-radius:10px;
	text-transform:uppercase;
	background-image: linear-gradient(to right, #84fab0 0%, #06C 40%, #8fd3f4 61%, #84fab0 100%);
	transition:0.5s;
	background-size: 190% auto;
}
#send:focus {
	outline:none;
}
#send:hover {
	cursor:pointer;
	background-position: right center;
}
</style>
