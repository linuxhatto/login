<!-- BEGIN BODY -->
<body class="login">
<div class="logo">
	<a href="index.html">
		<img src="<?=URL::Base()?>static/xxxxxx" alt=""/>
	</a>
</div>
<div class="content">
<form method="POST" action="create" class="login-form>
			<h3 class="form-title">Criar usuario</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Entre com seu usuario.
			</span>
		</div>
<div class="page-header"/>

<? if ($message) : ?>
	<div class="alert alert-warning">
		<?= $message; ?>
	</div>
<? endif; ?>

<div class="form-group">
 <label class="control-label visible-ie8 visible-ie9">Username</label>
	<div class="input-icon">
				<i class="fa fa-user"></i>
		<input autocomplete="off" type="text" name="username"  placeholder="Username" class="form-control placeholder-no-fix" value="<?= HTML::chars(Arr::get($_POST, 'username')); ?>">
		<?php if (Arr::get($errors, 'username')) { ?>
			<div class="alert alert-danger">
				<?= Arr::get($errors, 'username'); ?>
			</div>
		<?php } ?>
	</div>
</div>

<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
		<input autocomplete="off" type="email" name="email" placeholder="Email" class="form-control placeholder-no-fix" value="<?= HTML::chars(Arr::get($_POST, 'email')); ?>">
		<?php if (Arr::get($errors, 'email')) { ?>
			<div class="alert alert-danger">
				<?= Arr::get($errors, 'email'); ?>
			</div>
		<?php } ?>
	</div>
</div>

<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
		<input autocomplete="off" type="password" name="password" placeholder="Password" class="form-control placeholder-no-fix">
		<?php if (Arr::path($errors, '_external.password')) { ?>
			<div class="alert alert-danger">
				<?= Arr::path($errors, '_external.password'); ?>
			</div>
		<?php } ?>
	</div>
</div>

<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
		<input autocomplete="off" type="password" name="password_confirm" placeholder="Confirm Password" class="form-control placeholder-no-fix">
		<?php if (Arr::path($errors, '_external.password_confirm')) { ?>
			<div class="alert alert-danger">
				<?= Arr::path($errors, '_external.password_confirm'); ?>
			</div>
		<?php } ?>
	</div>
</div>

<div class="form-group">
<div class="col-xs-8 col-md-offset-4"><input autocomplete="off" type="submit" class="btn btn-primary"></div>
</div>

<?= Form::close(); ?>

Ou faça o <?= HTML::anchor('user/login', 'login'); ?>
</div>
