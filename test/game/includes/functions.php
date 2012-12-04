<?php

/**
 * functions.php
 *
 * @version 1
 * @copyright 2008 By Chlorel for XNova
 */


// ----------------------------------------------------------------------------------------------------------------
//
// Routine pour la gestion du mode vacance
//




function check_urlaubmodus ($user) {
	if ($user['urlaubs_modus'] == 1) {
		message("You are in vacation mode!", $title = $user['username'], $dest = "", $time = "3");
	}
}

function check_urlaubmodus_time () {
	global $user, $game_config;
	if ($game_config['urlaubs_modus_erz'] == 1) {
		$begrenzung             = 86400; //24x60x60= 24h
		$urlaub_modus_time      = $user['urlaubs_modus_time'];
		$urlaub_modus_time_soll = $urlaub_modus_time + $begrenzung;
		$time_jetzt             = time();
		if ($user['urlaubs_modus'] == 1 && $urlaub_modus_time_soll > $time_jetzt) {
			$soll_datum = date("d.m.Y", $urlaub_modus_time_soll);
			$soll_uhrzeit = date("H:i:s", $urlaub_modus_time_soll);
			message("Vous �tes en mode vacances!<br>Le mode vacance dure jusque $soll_datum $soll_uhrzeit<br>	Ce n'est qu'apr�s cette p�riode que vous pouvez changer vos options.", "Mode vacance");
		}
	}
}

function chance ($percent) {  //MadnessRed function
	$chance = mt_rand(0,100);
	if($percent <= $chance){
		return true;
	}else{
		return false;
	}
}

function mr_encrypt($sting){	//MadnessRed function
	return sha($sting);
}

function rand_in_array($array){  //MadnessRed function
	$total = count($array); $total--;
	return $array[mt_rand(0,$total)];
}

function rand_from_array($array){  //MadnessRed function
	$total = count($array); $total--;
	return mt_rand(0,$total);
}

function idstring($id,$decimal=false){  //MadnessRed function
	if($decimal){$d = '.'; }
	return (preg_replace("/[^0-9".$d."]/", "", $id) * 1);
}

function limitstring($str,$limit = 'a-zA-Z0-9_'){  //MadnessRed function
	return preg_replace("/[^".$limit."]/", "", $str);
}

function cleanstring($string){  //MadnessRed function
	return preg_replace("/[^0-9a-zA-Z]/", "", $string);
}

function onechar($string,$char){  //MadnessRed function
	return $string{$char};
}

function KMnumber($number,$precision = 0,$round = 'nearest'){	//MadnessRed function
	$nnumber = idstring($number,true);
	if($nnumber >= 10000000){
		$number = ($nnumber / 1000000);
		$use = 'M';
	}elseif($nnumber >= 100000){
		$number = ($nnumber / 1000);
		$use = 'K';
	}

	if(strtolower($round) == 'down'){
		$number = floor($number);
	}elseif(strtolower($round) == 'up'){
		$number = ceil($number);
	}else{
		$number = round($number,$precision);
	}

	return pretty_number($number).$use;
}

function url_exists($url) {
	$hdrs = @get_headers($url);
	return is_array($hdrs) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/',$hdrs[0]) : false;
}

function sha($string,$salt=''){
	$str = $string.$salt;
	if (function_exists("hash")){
		return hash("sha256", $str, false);
	}else{
		sha1($str);
	}
}

function LeadingZeros($number,$zeros) {
	return str_pad((int) $number,$zeros,"0",STR_PAD_LEFT);
}

function GetAvatar($email, $size = 0){
	$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5(strtolower($email))."&default=".urlencode(AVATAR)."&r=".AVATAR_RATING;
	if($size > 0){ $grav_url .= '&size='.$size; }
	return $grav_url;
}

// ----------------------------------------------------------------------------------------------------------------
//
// Add message to intercom
//
function intercom_add($message,$to,$from=0,$duration = 120){
	$to = idstring($to); $from = idstring($from); $duration = idstring($duration);
	$message = EscapeString($message);
	doquery("INSERT INTO {{table}} (`to`,`from`,`time`,`expires`,`message`) VALUES ('".$to."', '".$from."', '".time()."', '".(time() + $duration)."', '".$message."');",'im');
}


// ----------------------------------------------------------------------------------------------------------------
//
// Routine Test de validit� d'une adresse email
//
function is_email($email) {
	return(preg_match("/^[".EMAIL_CHARS."[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

// ----------------------------------------------------------------------------------------------------------------
//
// Routine Affichage d'un message administrateur avec saut vers une autre page si souhait�
//
function AdminMessage ($mes, $title = 'Error', $dest = "", $time = "3") {
	$parse['color'] = $color;
	$parse['title'] = $title;
	$parse['mes']   = $mes;

	$page .= parsetemplate(gettemplate('admin/message_body'), $parse);

	display ($page, $title, false, (($dest != "") ? "<meta http-equiv=\"refresh\" content=\"$time;URL=javascript:self.location='$dest';\">" : ""), true);
}

// ----------------------------------------------------------------------------------------------------------------
//
// Routine Affichage d'un message avec saut vers une autre page si souhait�
//
function message ($mes, $title = 'Error', $dest = "", $time = "3") {
	$parse['color'] = $color;
	$parse['title'] = $title;
	$parse['mes']   = $mes;

	$page .= parsetemplate(gettemplate('message_body'), $parse);

	display ($page, $title, false, (($dest != "") ? "<meta http-equiv=\"refresh\" content=\"$time;URL=javascript:self.location='$dest';\">" : ""), false);
}

// ----------------------------------------------------------------------------------------------------------------
//
// Routine d'affichage d'une page dans un cadre donn�
//
// $page      -> la page
// $title     -> le titre de la page
// $topnav    -> Affichage des ressources ? oui ou non ??
// $metatags  -> S'il y a quelques actions particulieres a faire ...
// $AdminPage -> Si on est dans la section admin ... faut le dire ...
function display ($page, $title = '', $topnav = true, $metatags = '', $AdminPage = false) {
	//global $link, $game_config, $debug, $user, $planetrow;	//old
	global $link, $xnova_root_path, $InLogin, $game_config, $debug, $user, $planetrow;



	$DisplayPage = "<center>\n" . $page . $ads . "\n</center>\n";
	//end of new

	// Affichage du Debug si necessaire
	if ($user['authlevel'] == 1 || $user['authlevel'] == 3) {
		if ($game_config['debug'] == 1) $debug->echo_log();
	}

	$DisplayPage .= StdFooter();
	if (isset($link)) {
		@mysql_close($link);
	}

	echo $DisplayPage;

	die();
}

// ----------------------------------------------------------------------------------------------------------------
//
// Entete de page
//
function StdUserHeader ($title = '', $metatags = '') {
	global $user, $dpath, $langInfos, $xnova_root_path;

	$parse             = $langInfos;
	$parse['title']    = $title." - Darkness of Evolution";
	if ( defined('LOGIN') ) {
		$parse['dpath']    = "skins/xnova/";
		$parse['-style-']  = "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/styles.css\">\n";
		$parse['-style-'] .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/about.css\">\n";
	} else {
		$parse['dpath']    = $dpath;
		$parse['-style-']  = "<link rel=\"stylesheet\" type=\"text/css\" href=\"". $dpath ."default.css\" />";
		$parse['-style-'] .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"". $dpath ."formate.css\" />";
	}

	$parse['-meta-']  = ($metatags) ? $metatags : "";
	$parse['-body-']  = "<body>"; //  class=\"style\" topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
	$parse['rpath']   = $xnova_root_path;
	return parsetemplate(gettemplate('simple_header'), $parse);
}

// ----------------------------------------------------------------------------------------------------------------
//
// Entete de page administration
//
function AdminUserHeader ($title = '', $metatags = '') {
	global $user, $dpath, $langInfos, $xnova_root_path;

	$parse           = $langInfos;
	$parse['dpath']  = $dpath;
	$parse['title']  = $title;
	$parse['-meta-'] = ($metatags) ? $metatags : "";
	$parse['-body-'] = "<body>"; //  class=\"style\" topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
	$parse['rpath']   = $xnova_root_path;
	return parsetemplate(gettemplate('admin/simple_header'), $parse);
}

// ----------------------------------------------------------------------------------------------------------------
//
// Pied de page
//
function StdFooter() {
	global $game_config, $lang, $xnova_root_path;
	$parse['copyright']     = $game_config['copyright'];
	$parse['root_path']     = $xnova_root_path;
	$parse['TranslationBy'] = $lang['TranslationBy'];
	return parsetemplate(gettemplate('overall_footer'), $parse);
}

// ----------------------------------------------------------------------------------------------------------------
//
// Calcul de la place disponible sur une planete
//
function CalculateMaxPlanetFields (&$planet) {
	global $resource;

	return $planet["field_max"] + ($planet[ $resource[33] ] * 5);
}

?>
