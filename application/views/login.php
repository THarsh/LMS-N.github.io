 <?php include(FCPATH . "assets/includes/nav.php"); ?>

 <div class="container-fluid">
	 
	<div class="login-card"><img src="http://via.placeholder.com/500x500" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin"><span class="reauth-email"> </span>
            <input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail">
            <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
        </form>
        <a href="#" class="forgot-password">Forgot your password?</a>
        <a class="text-warning" href="<?= base_url()?>index.php/welcome/registration" target="_blank"> Registration </a>
	</div>

 </div>

 