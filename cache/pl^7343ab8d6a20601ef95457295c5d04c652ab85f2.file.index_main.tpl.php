<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 00:52:33
         compiled from "/usr/home/blizznet/domains/tarion.net/public_html/styles/templates/index/index_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54155408650bd3b4113f030-08075166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7343ab8d6a20601ef95457295c5d04c652ab85f2' => 
    array (
      0 => '/usr/home/blizznet/domains/tarion.net/public_html/styles/templates/index/index_main.tpl',
      1 => 1345457136,
      2 => 'file',
    ),
    '54699ef6eb7694bb5fef534e0d5f644281ec850a' => 
    array (
      0 => '/usr/home/blizznet/domains/tarion.net/public_html/styles/templates/index/index.tpl',
      1 => 1344030619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54155408650bd3b4113f030-08075166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 1,
    'REV' => 1,
    'servername' => 1,
    'VERSION' => 1,
    'forum_url' => 1,
    'LNG' => 0,
    'contentbox' => 1,
    'RegClosedUnis' => 1,
    'game_captcha' => 1,
    'ref_active' => 1,
    'cappublic' => 1,
    'fb_active' => 1,
    'fb_key' => 1,
    'langs' => 1,
    'UNI' => 1,
    'htaccess' => 1,
    'code' => 1,
    'ga_active' => 1,
    'ga_key' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd3b41360364_82496712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd3b41360364_82496712')) {function content_50bd3b41360364_82496712($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/home/blizznet/domains/tarion.net/public_html/includes/libs/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
<link rel="stylesheet" type="text/css" href="styles/css/login.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
<link rel="stylesheet" type="text/css" href="styles/css/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_index'];?>
 - <?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
</title>
<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
<!-- 
	This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

	2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
	2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
	Information and contribution at http://2moons.cc/
-->
<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
<!--[if lt IE 9]>
<script src="scripts/base/html5.js"></script>
<![endif]-->
</head>	
<body>
<div id="page">
	<header>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['forum_url']->value;?>
" target="board"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['forum'];?>
</a></li>
				<li><a href="index.php?page=news"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
</a></li>
				<li><a href="index.php?page=rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_rules'];?>
</a></li>
				<li><a href="index.php?page=top100"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_top100'];?>
</a></li>
				<li><a href="index.php?page=pranger"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_pranger'];?>
</a></li>
				<li><a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a></li>
			</ul>
		</nav>
		<nav>
			<ul id="lang">
			</ul>
		</nav>
	</header>
	<div id="content"><?php if ($_smarty_tpl->tpl_vars['contentbox']->value===true){?>
		<section>
			<table class="box-out">
				<tr class="box-out-header">
					<td class="box-out-header-left"></td>
					<td class="box-out-header-center"></td>
					<td class="box-out-header-right"></td>
				</tr>
				<tr class="box-out-content">
					<td class="box-out-content-left"></td>
					<td class="box-out-content-center">
						<table class="box-inner">
							<tr class="box-inner-header">
								<td class="box-inner-header-left"></td>
								<td class="box-inner-header-center"><h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_index'];?>
</h1></td>
								<td class="box-inner-header-right"></td>
							</tr>
							<tr class="box-inner-content">
								<td class="box-inner-content-left"></td>
								<td class="box-inner-content-center"><?php }?>
									
<section>
<div id="content">		<section>
			<table class="box-out">
				<tr class="box-out-header">
					<td class="box-out-header-left"></td>
					<td class="box-out-header-center"></td>
					<td class="box-out-header-right"></td>
				</tr>
				<tr class="box-out-content">
					<td class="box-out-content-left"></td>
					<td class="box-out-content-center">
						<table class="box-inner">
							<tr class="box-inner-header">
								<td class="box-inner-header-left"></td>
								<td class="box-inner-header-center"><h1><?php echo $_smarty_tpl->tpl_vars['welcome_to']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
</h1></td>
								<td class="box-inner-header-right"></td>
							</tr>
							<tr class="box-inner-content">
								<td class="box-inner-content-left"></td>
								<td class="box-inner-content-center">
                                <?php echo $_smarty_tpl->tpl_vars['mainhello']->value;?>

								</td>
								<td class="box-inner-content-right"></td>
							</tr>
							<tr class="box-inner-footer">
								<td class="box-inner-footer-left"></td>
								<td class="box-inner-footer-center"></td>
								<td class="box-inner-footer-right"></td>
							</tr>
						</table>					
					</td>
					<td class="box-out-content-right"></td>
				</tr>
				<tr class="box-out-footer">
					<td class="box-out-footer-left"></td>
					<td class="box-out-footer-center"></td>
					<td class="box-out-footer-right"></td>
				</tr>
			</table>
		</section>
	</div>
	</section>
<!-- <section>
	<h1><?php echo $_smarty_tpl->tpl_vars['welcome_to']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
</h1>
	<p class="desc"><?php echo $_smarty_tpl->tpl_vars['server_description']->value;?>
</p>
	<p class="desc"><ul id="desc_list"><?php  $_smarty_tpl->tpl_vars['InfoRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['InfoRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['server_infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['InfoRow']->key => $_smarty_tpl->tpl_vars['InfoRow']->value){
$_smarty_tpl->tpl_vars['InfoRow']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['InfoRow']->value;?>
</li><?php } ?></ul>
</section> -->
<section>
	<table class="contentbox">
		<tr class="contentbox-header">
			<td class="contentbox-header-left"></td><td class="contentbox-header-center"></td><td class="contentbox-header-right"></td>
		</tr>
		<tr class="contentbox-content">
			<td class="contentbox-content-left"></td><td class="contentbox-content-center">
				<div id="loginbox"><h1><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
					<form id="login" name="login" action="index.php?page=login" method="post">
						<label for="universe"><?php echo $_smarty_tpl->tpl_vars['universe']->value;?>
</label><select name="uni" id="universe"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['AvailableUnis']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>
</select><br>
						<label for="username"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</label><input name="username" id="username" type="text"><br>
						<label for="password"><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</label><input name="password" id="password" type="password"><br>
						<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
					</form>
					<?php if ($_smarty_tpl->tpl_vars['fb_active']->value){?><a href="javascript:FBlogin();" class="fb_login"><img src="http://b.static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif" alt=""></a><?php }?>
					<br><span class="small"><?php echo $_smarty_tpl->tpl_vars['login_info']->value;?>
</span>
				</div>
				<div id="regbox"><h1><?php echo $_smarty_tpl->tpl_vars['register']->value;?>
</h1>
					<form id="reg" name="reg" action="index.php?page=reg&amp;action=send" method="post" onsubmit="return false;">
						<?php if ($_smarty_tpl->tpl_vars['fb_active']->value){?><input type="hidden" name="fb_id" id="fb_id"><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['ref_id']->value){?><input type="hidden" name="ref_id" id="ref_id" value="<?php echo $_smarty_tpl->tpl_vars['ref_id']->value;?>
"><input type="hidden" name="uni" id="ref_uni" value="<?php echo $_smarty_tpl->tpl_vars['ref_uni']->value;?>
"><?php }else{ ?>
						<label for="reg_universe"><?php echo $_smarty_tpl->tpl_vars['universe']->value;?>
</label><select name="uni" id="reg_universe"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['AvailableUnis']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>
</select><br><?php }?>
						<label for="reg_username"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</label><input name="username" id="reg_username" type="text"><br>
						<label for="reg_password"><?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</label><input name="password" id="reg_password" type="password"><br>
						<label for="reg_password_2"><?php echo $_smarty_tpl->tpl_vars['pass_2']->value;?>
</label><input name="password_2" id="reg_password_2" type="password"><br>
						<label for="reg_email"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</label><input name="email" id="reg_email" type="text"><br>
						<label for="reg_email_2"><?php echo $_smarty_tpl->tpl_vars['email_2']->value;?>
</label><input name="email_2" id="reg_email_2" type="text"><br>
						<label for="reg_planet"><?php echo $_smarty_tpl->tpl_vars['planetname']->value;?>
</label><input name="planetname" id="reg_planet" type="text"><br>
						<label for="reg_lang"><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
</label><select name="lang" id="reg_lang" class="lang"></select><br>
						<?php if ($_smarty_tpl->tpl_vars['game_captcha']->value){?>
						<div id="recaptcha_image"></div>
						<label for="recaptcha_response_field"><?php echo $_smarty_tpl->tpl_vars['captcha_reg']->value;?>
</label><input type="text" id="recaptcha_response_field" name="recaptcha_response_field"><br>
						<?php }?>
						<label for="reg_rgt"><?php echo $_smarty_tpl->tpl_vars['accept_terms_cond']->value;?>
</label><input id="reg_rgt" name="rgt" type="checkbox"><br>
						<input name="submit" value="<?php echo $_smarty_tpl->tpl_vars['register']->value;?>
" type="button" onclick="Submit('reg');">
					</form>
					<?php if ($_smarty_tpl->tpl_vars['fb_active']->value){?><a href="javascript:FBlogin();" class="fb_login"><img src="http://b.static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif" alt=""></a><?php }?>
				</div>
				<div id="lostbox"><h1><?php echo $_smarty_tpl->tpl_vars['lostpassword']->value;?>
</h1>
					<form id="lost" name="lost" action="index.php?page=lostpassword" method="post" onsubmit="return false;">
						<label for="universe_lost"><?php echo $_smarty_tpl->tpl_vars['universe']->value;?>
</label><select name="uni" id="universe_lost"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['AvailableUnis']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>
</select><br>
						<label for="username_lost"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</label><input name="username" id="username_lost" type="text"><br>
						<label for="email_lost"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</label><input name="email" id="email_lost" type="text"><br>
						<input name="submit" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" type="button" onclick="Submit('lost');">
					</form>
				</div>
			</td><td class="contentbox-content-right"></td>
		</tr>
		<tr class="contentbox-footer">
			<td class="contentbox-footer-left"></td><td class="contentbox-footer-center"></td><td class="contentbox-footer-right"></td>
		</tr>
	</table>
</section>
<section>
	<div class="button-box">
		<div class="button-box-inner">
			<div class="button-important multi">
				<a href="#" onclick="return Content('login');">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['login'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
			<div class="button-important multi">
				<a href="#" onclick="return Content('register');">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['register_now'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
	
	<div class="button-box">
		<div class="button-box-inner">
			<?php if ($_smarty_tpl->tpl_vars['mail_active']->value){?> 
			<div class="button multi">
				<a href="#" onclick="return Content('lost');">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lostpassword'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
			<div class="button multi">
			<?php }else{ ?>
			<div class="button">
			<?php }?>
				<a href="index.php?page=screens">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['screenshots'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
</section>

								<?php if ($_smarty_tpl->tpl_vars['contentbox']->value===true){?></td>
								<td class="box-inner-content-right"></td>
							</tr>
							<tr class="box-inner-footer">
								<td class="box-inner-footer-left"></td>
								<td class="box-inner-footer-center"></td>
								<td class="box-inner-footer-right"></td>
							</tr>
						</table>					
					</td>
					<td class="box-out-content-right"></td>
				</tr>
				<tr class="box-out-footer">
					<td class="box-out-footer-left"></td>
					<td class="box-out-footer-center"></td>
					<td class="box-out-footer-right"></td>
				</tr>
			</table>
		</section>
	<?php }?></div>
	<footer>
		<!-- <a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a><br>-->2009-2012 <a href="http://2moons.cc" title="2Moons" target="copy">2Moons</a>
	</footer>
</div>
<div id="dialog" style="display:none;"></div>
<script type="text/javascript" src="scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
<script type="text/javascript" src="scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
<script type="text/javascript" src="scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
<script type="text/javascript" src="scripts/game/login.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
<script type="text/javascript">
var CONF			= {
	RegClosedUnis	: <?php if (isset($_smarty_tpl->tpl_vars['RegClosedUnis']->value)){?><?php echo $_smarty_tpl->tpl_vars['RegClosedUnis']->value;?>
<?php }else{ ?>[]<?php }?>,
	IsCaptchaActive : <?php echo $_smarty_tpl->tpl_vars['game_captcha']->value;?>
,
	ref_active		: <?php echo $_smarty_tpl->tpl_vars['ref_active']->value;?>
,
	cappublic		: "<?php echo $_smarty_tpl->tpl_vars['cappublic']->value;?>
",
	FBActive		: <?php echo $_smarty_tpl->tpl_vars['fb_active']->value;?>
,
	FBKey			: "<?php echo $_smarty_tpl->tpl_vars['fb_key']->value;?>
",
	Lang			: <?php echo $_smarty_tpl->tpl_vars['langs']->value;?>
,
	MultiUniverse	: $('#universe').children().length !== 1 ? true : false,
	uni				: <?php echo $_smarty_tpl->tpl_vars['UNI']->value;?>
,
	avaLangs		: new Array(),
	lang			: "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
",
	htaccess		: <?php echo $_smarty_tpl->tpl_vars['htaccess']->value;?>

};
var LANG			= {
	register		: "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['register_now'];?>
",
	login			: "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['login'];?>
",
	uni_closed		: "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['uni_closed'];?>
"
};

<?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>
alert("<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
");
<?php }?>
</script>
<?php if ($_smarty_tpl->tpl_vars['fb_active']->value){?>
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = FBinit;
	(function(d){
		var js, id = 'facebook-jssdk'; if (d.getElementById(id)) return;
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/en_US/all.js";
		d.getElementsByTagName('head')[0].appendChild(js);
	}(document));
</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['game_captcha']->value){?>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ga_active']->value){?>
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
");
pageTracker._trackPageview();
} catch(err) {}</script>
<?php }?>

</body>
</html><?php }} ?>