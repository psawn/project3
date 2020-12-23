<link rel="stylesheet" type="text/css" href="room/libs/bootstrap-3.3.7/css/bootstrap.css" />
<form action="modules/user/xuly.php" method="post" class="form-login">
  	<div class="form-group">
    	<label>User Name</label>
    	<input type="text" class="form-control" id="username" name="username" required>
  	</div>
  	<div class="form-group">
    	<label>Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  	</div>
    <div class="form-group">
    	<label>Email</label>
    <input type="text" class="form-control" id="email" name="email">
  	</div>
    <div class="form-group">
    	<label>Điện Thoại</label>
    <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai">
  	</div>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" required>
    <label class="form-check-label">Tôi đồng ý với các điều khoản của website</label>
  </div>
  	<center>
  		<button type="submit" class="btn btn-primary" name="signup">Sign Up </button>
  	</center>
</form>
<style>
.form-login {
	margin-top:30px;
}
</style>