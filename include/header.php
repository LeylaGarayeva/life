<header class="main-header" itemtype="http://schema.org/WPHeader" itemscope="">
<div class="top-line">
<div class="container">

<div class="modal fade" id="login-modal" role="dialog">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header login-modal-header">
<button type="button" class="close" data-dismiss="modal">X</button>
<h4 id="loginModalLabel" class="modal-title text-center">User authentication</h4>
</div>
<div class="modal-body">
<div class="login-tab" role="tabpanel">

<ul role="tablist" class="nav nav-tabs">
<li class="active" role="presentation">
<a data-toggle="tab" role="tab" aria-controls="signin" href="#signin" id="signin-taba" aria-expanded="true">
Sign in
</a>
</li>
<li role="presentation" class="">
<a data-toggle="tab" role="tab" aria-controls="email-verification" href="#email-verification" id="email-verification-taba" aria-expanded="false">
Send an email verification
</a>
</li>
<li role="presentation" class="">
<a data-toggle="tab" role="tab" aria-controls="forget_password" href="#forget_password" id="forgetpass-taba" aria-expanded="false">
Forgot Password
</a>
</li>
</ul>

<div class="tab-content">
<div id="signin" class="tab-pane text-center active" role="tabpanel">
&nbsp;&nbsp;
<span style="display: none;" class="response_error" id="login_fail">Login failed, please try again</span>
<div class="clearfix"></div>
<form action="https://www.onelife.eu/tech/accounts/login/" method="POST" data-captcha="/captcha" data-recaptcha="/captcha?token=">
<div class="form-group">
<span id="login-error" class="col-xs-12 alert-danger help-block has-error color-red bold"></span>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<input type="text" placeholder="Username" name="username_login" id="login_username" class="form-control" tabindex="1">
</div>
<span id="login-username-error" class="help-block has-error"></span>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-lock"></i></div>
<input type="password" placeholder="Password" name="password" id="password" class="form-control" tabindex="2">
</div>
<span id="password-error" class="help-block has-error"></span>
</div>
<div class="form-group mb-20 capcha">
<div class="row">
<div id="capcha-new-image" class="col-xs-8 no-robot border">
<img id="capcha-image" src="#" alt="" style="width: 100%;" />
</div>
<div class="col-xs-3 no-robot border">
<a href="#" class="">
<i id="recaptcha" class="fa fa-refresh fa-4x"></i>
</a>
</div>
<div class="col-xs-12 mt-10">
<input id="captcha" name="captcha" type="text" class="form-control" tabindex="3">
</div>
</div>
 </div>
<button type="button" data-loading-text="Signing In...." class="btn red-btn btn-block bt-login" id="login_btn">
Login
</button>
<input type="hidden" name="_csrf_token" value="purOpHVoFVZb-7TYdKeqStDKikbVsFqX9ev8zJZOR3Y">
</form>
</div>
<div id="email-verification" class="tab-pane" role="tabpanel">
&nbsp;&nbsp;
<span style="display: none;" class="response_error" id="registration_fail">Failed, please try again</span>
<div class="clearfix"></div>
<form action="https://www.onelife.eu/tech/accounts/sendVerEmail/" method="POST">
<div class="form-group">
<div id="verification_form_error" class="col-xs-12 alert-danger bottom10"></div>
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<input type="text" placeholder="Username" id="femail" name="ver_code_username" class="form-control">
</div>
<span id="femail-error" data-error="0" class="help-block has-error"></span>
</div>
<button data-loading-text="Sending...." class="btn red-btn btn-block bt-login" id="send_verification_mail" type="button">
Send
</button>
</form>
</div>
<div id="forget_password" class="tab-pane text-center" role="tabpanel">
&nbsp;&nbsp;
<span class="col-xs-12 alert-danger bottom10" id="reset_fail"></span>
<div class="clearfix"></div>
<form action="https://www.onelife.eu/tech/profile/changePasswordStep1">
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<input type="text" placeholder="Username" id="username" name="username" class="form-control">
</div>
<span id="username-error" data-error="0" class="help-block has-error"></span>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-at"></i></div>
 <input type="text" name="email" placeholder="Email" id="remail" class="form-control">
</div>
<span id="remail-error" data-error="0" class="help-block has-error"></span>
</div>
<button data-loading-text="Please wait...." class="btn red-btn btn-block bt-login" id="reset_btn" type="button">
Forgot Password
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<!-- <div class="pull-right">
<div class="topbar-search dropdown">
<a href="#" class="dropdown-toggle white" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-lg fa-search"></i></a>
<ul class="dropdown-menu pull-right">
<li>
<form name="" method="get" action="https://www.onelife.eu/en/search" class="input-group" data="js-search-form.html">
<input type="search" id="search" name="search" required="required" class="form-control" placeholder="Search" />
<span class="input-group-btn">
<button class="btn btn-default"><i class="fa fa-search"></i></button>
</span>
</form>
</li>
</ul>
</div>
</div>
 --><div class="languge pull-right pt-5">
<div class="btn-group">
<!-- <button type="button" class="language-dropdown-toggle dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="lang-ico pull-left" style="background-image:url('<?php echo $site_url;?>uploads/media/default/0001/01/thumb_555_default_very_small.png')"></span>
</button> -->
<!-- <div class="dropdown-menu dropdown-menu-lang pl-10 pr-10">
<a class="dropdown-item block mb-5" rel="alternate" hreflang="en" href="index.html">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/9a4b418c8c91f5216ae78864bf0ae59a178862b0.png" width="20" class="mr-5" alt="" />
English
</a>
<a class="dropdown-item block mb-5" rel="alternate" hreflang="zh" href="https://www.onelife.eu/zh/">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/c4c40a553977a0364aeb4e3d7ecd20ac40778db1.png" width="20" class="mr-5" alt="" />
简体中文
</a>
<a class="dropdown-item block mb-5" rel="alternate" hreflang="es" href="https://www.onelife.eu/es/">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/03a563bc29cdb439d57d6a67762d83555b777848.png" width="20" class="mr-5" alt="" />
Español
</a>
<a class="dropdown-item block mb-5" rel="alternate" hreflang="pt" href="https://www.onelife.eu/pt/">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/1538ac2107f7b338495087cb45c8919d47819aa4.png" width="20" class="mr-5" alt="" />
Português
</a>
<a class="dropdown-item block mb-5" rel="alternate" hreflang="ru" href="https://www.onelife.eu/ru/">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/68ddeb3c998439c4ef5950b88ac517bd1dd794a0.png" width="20" class="mr-5" alt="" />
Russian
</a>
<a class="dropdown-item block mb-5" rel="alternate" hreflang="de" href="https://www.onelife.eu/de/">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/a344e1d1889f05951af0c61f2402e9a6c4f6ce63.png" width="20" class="mr-5" alt="" />
German
</a>
<a class="dropdown-item block mb-5" rel="alternate" hreflang="ja" href="https://www.onelife.eu/ja/">
<img src="<?php echo $site_url;?>uploads/media/default/0001/01/309ff6dacc9bbd54a0de4ca349fbbf176a7273bc.png" width="20" class="mr-5" alt="" />
日本語
</a>
</div> -->
</div>
</div>
</div>
</div>
</div>
<?php include "include/menu.php";?>
</header>