<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 00:52:36
         compiled from "/usr/home/blizznet/domains/tarion.net/public_html/styles/templates/index/index_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204543781650bd3b444e3dd1-41048993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6279d0daa3ac1a37e5f07c2e270270ecddfe488d' => 
    array (
      0 => '/usr/home/blizznet/domains/tarion.net/public_html/styles/templates/index/index_news.tpl',
      1 => 1343943588,
      2 => 'file',
    ),
    '54699ef6eb7694bb5fef534e0d5f644281ec850a' => 
    array (
      0 => '/usr/home/blizznet/domains/tarion.net/public_html/styles/templates/index/index.tpl',
      1 => 1344030619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204543781650bd3b444e3dd1-41048993',
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
    'RegClosedUnis' => 0,
    'game_captcha' => 1,
    'ref_active' => 1,
    'cappublic' => 1,
    'fb_active' => 1,
    'fb_key' => 1,
    'langs' => 1,
    'UNI' => 1,
    'htaccess' => 1,
    'code' => 0,
    'ga_active' => 1,
    'ga_key' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd3b44609a17_85698281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd3b44609a17_85698281')) {function content_50bd3b44609a17_85698281($_smarty_tpl) {?><!DOCTYPE html>

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
<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
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
								<td class="box-inner-header-center"><h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
</h1></td>
								<td class="box-inner-header-right"></td>
							</tr>
							<tr class="box-inner-content">
								<td class="box-inner-content-left"></td>
								<td class="box-inner-content-center"><?php }?>
									
<?php  $_smarty_tpl->tpl_vars['NewsRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NewsRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NewsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['NewsRow']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['NewsRow']->key => $_smarty_tpl->tpl_vars['NewsRow']->value){
$_smarty_tpl->tpl_vars['NewsRow']->_loop = true;
 $_smarty_tpl->tpl_vars['NewsRow']->index++;
 $_smarty_tpl->tpl_vars['NewsRow']->first = $_smarty_tpl->tpl_vars['NewsRow']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['News']['first'] = $_smarty_tpl->tpl_vars['NewsRow']->first;
?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['News']['first']){?><hr><?php }?>
<h2><?php echo $_smarty_tpl->tpl_vars['NewsRow']->value['title'];?>
</h2><br>
<div class="info"><?php echo $_smarty_tpl->tpl_vars['NewsRow']->value['from'];?>
</div>
<br><div><p><?php echo $_smarty_tpl->tpl_vars['NewsRow']->value['text'];?>
</p></div>
<?php }
if (!$_smarty_tpl->tpl_vars['NewsRow']->_loop) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['news_does_not_exist']->value;?>
</h1>
<?php } ?>

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