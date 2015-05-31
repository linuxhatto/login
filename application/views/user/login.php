<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
		<img src="<?=URL::Base()?>static/xxxxxx" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->

<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="login" method="post">
		<h3 class="form-title">Login sua conta</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Entre com usuário e senha.
			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Usuário</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuário" name="username"/>
						<?php if (Arr::get($errors, 'username')) { ?>
			<div class="alert alert-danger">
				<?= Arr::get($errors, 'username'); ?>
			</div>
		<?php } ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Senha</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Senha" name="password"/>
						<?php if (Arr::get($errors, 'password')) { ?>
			<div class="alert alert-danger">
				<?= Arr::get($errors, 'password'); ?>
			</div>
		<?php } ?>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Lembre-me </label>
			<button type="submit" class="btn green pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
		<div class="create-account">
			<p>
				 Voce não conta ainda ?&nbsp;
					<?= HTML::anchor('user/create', 'Crie uma nova conta'); ?>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	

</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2015 &copy; Hatt0). Todos direitos reservados.
</div>
<!-- END COPYRIGHT -->
