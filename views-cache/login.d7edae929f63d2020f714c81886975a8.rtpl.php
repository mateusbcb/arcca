<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="../../../">
		<meta charset="utf-8" />
		<title>Arcca | Login</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="/res/admin/assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="/res/admin/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/res/admin/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="/res/admin/assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="/res/admin/assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="/res/admin/assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="/res/admin/assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="/res/admin/assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(/res/admin/assets/media/bg/bg-3.jpg);">
					<div class="kt-login__left">
						<div class="kt-login__wrapper">
							<div class="kt-login__content">
								<a class="kt-login__logo" href="#">
									<img src="/res/admin/assets/media/logos/logo-5.png">
								</a>
								<h3 class="kt-login__title">Entre ou crie uma Conta</h3>
								<span class="kt-login__desc">
									The ultimate Bootstrap & Angular 6 admin theme framework for next generation web apps.
								</span>
								<div class="kt-login__actions">
									<button type="button" id="kt_login_signup" class="btn btn-outline-brand btn-pill">Criar Nova Conta</button>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-login__divider">
						<div></div>
					</div>
					<div class="kt-login__right">
						<div class="kt-login__wrapper">
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Entrar na sua Conta</h3>
								</div>
								<div class="kt-login__form">

									<?php if( $error != '' ){ ?>

										<div class="alert alert-danger btn-danger" role="alert">
											<?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

										</div>
									<?php } ?>


									<form action="/login" id="login-form-wrap" class="login kt-form" method="post">
										
										<div class="form-group">
											<input type="text" id="login" name="login" class="form-control input-text" placeholder="Login ou E-mail">
										</div>
										<div class="form-group">
											<input type="password" id="senha" name="password" class="form-control input-text" placeholder="Senha">
										</div>

										<div class="row kt-login__extra">
											<div class="col kt-align-left">
												<label class="kt-checkbox">
													<input type="checkbox" name="rememberme"> Lembre-me
													<span></span>
												</label>
											</div>
											<div class="col kt-align-right">
												<a href="javascript:;" id="kt_login_forgot" class="kt-link">Esqueceu a Senha?</a>
											</div>
										</div>
										
										<div class="form-group">
											<div class="kt-login__actions">
												<input type="submit" value="Login" class="btn btn-brand btn-pill btn-elevate">
											</div>
										</div>
									</form>                    
								</div>
							</div>
							<div class="kt-login__signup">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Cadastrar</h3>
									<div class="kt-login__desc">Entre com as informações de sua Conta:</div>
								</div>

								<?php if( $errorRegister != '' ){ ?>

									<div class="alert alert-danger btn-danger" role="alert">
										<?php echo htmlspecialchars( $errorRegister, ENT_COMPAT, 'UTF-8', FALSE ); ?>

									</div>
								<?php } ?>


								<div class="kt-login__form">
									<form id="register-form-wrap" action="/register" class="register kt-form" method="post">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Nome Completo" id="nome" name="name" value="<?php echo htmlspecialchars( $registerValues["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
										</div>
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Email" id="email" name="email" autocomplete="off" value="<?php echo htmlspecialchars( $registerValues["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
										</div>
										<div class="form-group">
											<input class="form-control" type="password" placeholder="Senha" id="senha" name="password" required>
										</div>
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Telefone" id="phone" name="phone" value="<?php echo htmlspecialchars( $registerValues["phone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
										</div>
										<div class="row kt-login__extra">
											<div class="col kt-align-left">
												<label class="kt-checkbox">
													<input type="checkbox" name="agree">Eu aceito os <a href="#" class="kt-link kt-login__link kt-font-bold">Termos e Condiçõess</a>.
													<span></span>
												</label>
												<span class="form-text text-muted"></span>
											</div>
										</div>
										<div class="kt-login__actions">
											<button id="kt_login_signin_submit" name="login" class="btn btn-brand btn-pill btn-elevate">Cadastrar</button>
											<button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancelar</button>
										</div>
									</form>
								</div>
							</div>
							<div class="kt-login__forgot">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Esqueceu a Senha?</h3>
									<div class="kt-login__desc">Entre com seu E-mail para refaser sua Senha:</div>
								</div>
								<div class="kt-login__form">                    
									<form id="login-form-wrap" class="kt-form login" method="post" action="/forgot">
										<div class="form-group">
											<input type="email" id="kt_email email" name="email" class="form-control input-text" placeholder="Email">
											
										</div>
										<div class="kt-login__actions">
											<input type="submit" value="Enviar" name="login" class="btn btn-brand btn-pill btn-elevate">
											<button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancelar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="/res/admin/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="/res/admin/assets/js/scripts.bundle.js" type="text/javascript"></script>
		
		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="/res/admin/assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>