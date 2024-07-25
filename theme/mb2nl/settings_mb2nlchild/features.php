<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2022 Mariusz Boloz (mb2moodle.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */


defined('MOODLE_INTERNAL') || die();


$temp = new admin_settingpage('theme_mb2nlenrol3_settingsfeatures',  get_string('settingsfeatures', 'theme_mb2nl'));
$yesNoOptions = array('1'=>get_string('yes','theme_mb2nl'), '0'=>get_string('no','theme_mb2nl'));


$bgPositionOpt = array(
	'center center'=>'center center',
	'left top'=>'left top',
	'left center'=>'left center',
	'left bottom'=>'left bottom',
	'right top'=>'right top',
	'right center'=>'right center',
	'right bottom'=>'right bottom',
	'center top'=>'center top',
	'center bottom'=>'center bottom'
);


$bgRepearOpt = array(
	'no-repeat'=>'no-repeat',
	'repeat'=>'repeat',
	'repeat-x'=>'repeat-x',
	'repeat-y'=>'repeat-y'
);


$bgSizeOpt = array(
	'cover'=>'cover',
	'auto'=>'auto',
	'contain'=>'contain'
);


$bgAttOpt = array(
	'scroll'=>'scroll',
	'fixed'=>'fixed',
	'local'=>'local'
);


$bgPredefinedOpt = array(
	''=>get_string('none','theme_mb2nl'),
	'strip1'=>get_string('strip1','theme_mb2nl'),
	'strip2'=>get_string('strip2','theme_mb2nl')
);


$langPosOpt = array(
	0 => get_string('none','theme_mb2nl'),
	1 => get_string('lang1','theme_mb2nl'),
	2 => get_string('lang2','theme_mb2nl')
);

// Leave this array for old child themes
$coursepanelposOpt = array();

$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startaccessibility', get_string('accessibility','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/acsboptions';
	$title = get_string('acsboptions','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);	

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endaccessibility');
$temp->add($setting);

$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startblog', get_string('blogsettings','theme_mb2nl'));
$temp->add($setting);

		

	$name = 'theme_mb2nlenrol3/blogplaceholder';
	$title = get_string('blogplaceholder','theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, '', 'blogplaceholder');
	$temp->add($setting);	
	

	$temp->add(new admin_setting_configmb2spacer('theme_mb2nlenrol3/blogspacer1'));
	$temp->add(new admin_setting_configmb2heading('theme_mb2nlenrol3/blogheading1', get_string('blogpage','theme_mb2nl') ));	

	$name = 'theme_mb2nlenrol3/bloglayout';
	$title = get_string('layout','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 'col3', array(
			'list'=> get_string('layoutlist', 'theme_mb2nl'),
			'col2'=> get_string('xcolumns', 'theme_mb2nl', 2),
			'col3'=> get_string('xcolumns', 'theme_mb2nl', 3)
		) 
	);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogsidebar';
	$title = get_string('sidebar','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogdateformat';
	$title = get_string('dateformat','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', 'M d, Y');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogpageintro';
	$title = get_string('blogintro','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogmore';
	$title = get_string('blogmore','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);	


	$temp->add(new admin_setting_configmb2spacer('theme_mb2nlenrol3/blogspacer2'));
	$temp->add(new admin_setting_configmb2heading('theme_mb2nlenrol3/blogheading2', get_string('blogsinglepage','theme_mb2nl') ));
	
	$name = 'theme_mb2nlenrol3/blogsinglesidebar';
	$title = get_string('sidebar','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogsingledateformat';
	$title = get_string('dateformat','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', 'M d, Y, H:i A');
	$temp->add($setting);
	
	$name = 'theme_mb2nlenrol3/blogfeaturedmedia';
	$title = get_string('blogfeaturedmedia','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$temp->add($setting);
	
	$name = 'theme_mb2nlenrol3/blogsingleintro';
	$title = get_string('blogintro','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogmodify';
	$title = get_string('blogmodify','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/blogshareicons';
	$title = get_string('shareicons','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endblog');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startbookmarks', get_string('bookmarks','theme_mb2nl'));
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/bookmarks';
	$title = get_string('bookmarks','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/bookmarkslimit';
	$title = get_string('bookmarkslimit','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', 15);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endbookmarks');
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startcoursepanel', get_string('coursepanel','theme_mb2nl'));
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/coursepanel';
	$title = get_string('coursepanel','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'', 1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursepanelspacer1';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/teacheremail';
	$title = get_string('teacheremail','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/teachermessage';
	$title = get_string('teachermessage','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/cpaneldesclimit';
	$title = get_string('cpaneldesclimit','theme_mb2nl');
	$setting = new admin_setting_configtext($name,$title,'',24);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursepanelspacer2';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/certificatestr';
	$title = get_string('certificatestr','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/certificatelinks';
	$title = get_string('certificatelinks','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, get_string('certificatelinksdesc','theme_mb2nl'), '');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endcoursepanel');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startevents', get_string('events', 'calendar'));
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/eventsplaceholder';
	$title = get_string('eventsplaceholder','theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, '', 'eventsplaceholder');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endevent');
$temp->add($setting);




// $setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startdashboard', get_string('myhome'));
// $temp->add($setting);

// 	$name = 'theme_mb2nlenrol3/dashboard';
// 	$title = get_string('myhome');
// 	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
// 	$temp->add($setting);

// 	$name = 'theme_mb2nlenrol3/activeuserstime';
// 	$title = get_string('activeuserstime','theme_mb2nl');
// 	$setting = new admin_setting_configtext($name, $title, '', 6);
// 	$temp->add($setting);

// 	$name = 'theme_mb2nlenrol3/newuserstime';
// 	$title = get_string('newuserstime','theme_mb2nl');
// 	$setting = new admin_setting_configtext($name, $title, '', 30);
// 	$temp->add($setting);

// $setting = new admin_setting_configmb2end('theme_mb2nlenrol3/enddashboard');
// $temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startlang', get_string('language','theme_mb2nl'));
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/langpos';
	$title = get_string('langpos','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 2, $langPosOpt);
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endlang');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startlogin', get_string('cloginpage','theme_mb2nl'));
$temp->add($setting);


	//$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startlogingeneral', get_string('general','theme_mb2nl'));
	//$temp->add($setting);


		$name = 'theme_mb2nlenrol3/cloginpage';
		$title = get_string('cloginpage','theme_mb2nl');
		$setting = new admin_setting_configcheckbox($name, $title, '', 0);
		$temp->add($setting);


		// $name = 'theme_mb2nlenrol3/loginlogo';
		// $title = get_string('logoimg','theme_mb2nl');
		// $desc = get_string('loginlogodesc','theme_mb2nl');
		// $setting = new admin_setting_configstoredfile($name, $title, $desc, 'loginlogo');
		// $temp->add($setting);


		// $name = 'theme_mb2nlenrol3/loginlogow';
		// $title = get_string('logow','theme_mb2nl');
		// $desc = get_string('logowdesc', 'theme_mb2nl');
		// $setting = new admin_setting_configtext($name, $title, $desc, '');
		// $temp->add($setting);


	//$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endlogingeneral');
	//$temp->add($setting);


	//$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startloginstyle', get_string('style','theme_mb2nl'));
	//$temp->add($setting);

		$name = 'theme_mb2nlenrol3/loginbgcolor';
		$title = get_string('bgcolor','theme_mb2nl');
		$setting = new admin_setting_configmb2color($name, $title, get_string('pbgdesc','theme_mb2nl'), '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2nlenrol3/loginbgpre';
		$title = get_string('pbgpre','theme_mb2nl');
		$setting = new admin_setting_configselect($name, $title, '', '', $bgPredefinedOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2nlenrol3/loginbgimage';
		$title = get_string('bgimage','theme_mb2nl');
		$setting = new admin_setting_configstoredfile($name, $title, get_string('pbgdesc','theme_mb2nl'), 'loginbgimage');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		// $name = 'theme_mb2nlenrol3/loginbgrepeat';
		// $title = get_string('bgrepeat','theme_mb2nl');
		// $setting = new admin_setting_configselect($name, $title, '', 'no-repeat', $bgRepearOpt);
		// $setting->set_updatedcallback('theme_reset_all_caches');
		// $temp->add($setting);


		// $name = 'theme_mb2nlenrol3/loginbgpos';
		// $title = get_string('bgpos','theme_mb2nl');
		// $setting = new admin_setting_configselect($name, $title, '', 'center center', $bgPositionOpt);
		// $setting->set_updatedcallback('theme_reset_all_caches');
		// $temp->add($setting);


		// $name = 'theme_mb2nlenrol3/loginbgattach';
		// $title = get_string('bgattachment','theme_mb2nl');
		// $setting = new admin_setting_configselect($name, $title, '', 'fixed', $bgAttOpt);
		// $setting->set_updatedcallback('theme_reset_all_caches');
		// $temp->add($setting);


		// $name = 'theme_mb2nlenrol3/loginbgsize';
		// $title = get_string('bgsize','theme_mb2nl');
		// $setting = new admin_setting_configselect($name, $title, '', 'cover', $bgSizeOpt);
		// $setting->set_updatedcallback('theme_reset_all_caches');
		// $temp->add($setting);

	//$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endloginstyle');
	//$setting->set_updatedcallback('theme_reset_all_caches');
	//$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endlogin');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startloading', get_string('loadingscreen','theme_mb2nl'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/loadingscr';
	$title = get_string('loadingscreen','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, get_string('loadingscrdesc', 'theme_mb2nl'), 0);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/loadinghide';
	$title = get_string('loadinghide','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', 1000);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/spinnerw';
	$title = get_string('spinnerw','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', 50);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/lbgcolor';
	$title = get_string('bgcolor','theme_mb2nl');
	$setting = new admin_setting_configmb2color($name, $title, '', '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/loadinglogo';
	$title = get_string('logoimg','theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, get_string('loadinglogodesc','theme_mb2nl'), 'loadinglogo');
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	// $name = 'theme_mb2nlenrol3/loadinglogow';
	// $title = get_string('logow','theme_mb2nl');
	// $setting = new admin_setting_configtext($name, $title, '', 50);
	// //$setting->set_updatedcallback('theme_reset_all_caches');
	// $temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endloading');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startloginform', get_string('loginsearchform','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/modaltools';
	$title = get_string('modaltools','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/loginlinktopage';
	$title = get_string('loginlinktopage','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);

	$layoutArr = array(
		'1' => get_string('loginpage','theme_mb2nl'),
		'2' => get_string('forgotpage','theme_mb2nl')
	);
	// $name = 'theme_mb2nlenrol3/loginlink';
	// $title = get_string('loginlink','theme_mb2nl');
	// $setting = new admin_setting_configselect($name, $title, '', 'fw', $layoutArr);
	// $temp->add($setting);

	// $name = 'theme_mb2nlenrol3/logintext';
	// $title = get_string('logintext','theme_mb2nl');
	// $setting = new admin_setting_configtextarea($name, $title, '', '');
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/loginsearchspacer1';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/signuplink';
	$title = get_string('signuplink','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/signuppage';
	$title = get_string('signuppage','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', '');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/loginsearchspacer2';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/searchlinks';
	$title = get_string('searchlinks','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, get_string('searchlinksdesc','theme_mb2nl'), '');
	$temp->add($setting);



$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endloginform');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


// $setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startpages', get_string('pagecls','theme_mb2nl'));
// $setting->set_updatedcallback('theme_reset_all_caches');
// $temp->add($setting);
//
//
// 	$name = 'theme_mb2nlenrol3/pagecls';
// 	$title = get_string('pagecls','theme_mb2nl');
// 	$desc = get_string('pageclsdesc','theme_mb2nl');
// 	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
// 	$setting->set_updatedcallback('theme_reset_all_caches');
// 	$temp->add($setting);
//
//
// 	$name = 'theme_mb2nlenrol3/coursecls';
// 	$title = get_string('coursecls','theme_mb2nl');
// 	$desc = get_string('courseclsdesc','theme_mb2nl');
// 	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
// 	$setting->set_updatedcallback('theme_reset_all_caches');
// 	$temp->add($setting);
//
//
// $setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endpages');
// $setting->set_updatedcallback('theme_reset_all_caches');
// $temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startscrolltt', get_string('scrolltt','theme_mb2nl'));
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/scrolltt';
	$title = get_string('scrolltt','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title,'', 0);
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/scrollspeed';
	$title = get_string('scrollspeed','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', 400);
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endscrolltt');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startsitemenu', get_string('quicklinks','theme_mb2nl'));
$temp->add($setting);

	// $name = 'theme_mb2nlenrol3/quicklinks';
	// $title = get_string('quicklinks','theme_mb2nl');
	// $setting = new admin_setting_configcheckbox( $name, $title, '', 1);
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/excludedlinks';
	$title = get_string('excludedlinks','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title,get_string('excludedlinksdesc','theme_mb2nl'), 'badges,addcourse,addcategory,editcategory');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/customsitemnuitems';
	$title = get_string('customquicklinkitems','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, get_string('customquicklinkitemsdesc','theme_mb2nl'), '');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endsitemenu');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startganalitycs', get_string('ganatitle','theme_mb2nl'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/ganaid';
	$title = get_string('ganaid','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title,$title = get_string('ganaiddesc','theme_mb2nl'), '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/ganaasync';
	$title = get_string('ganaasync','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title,'', 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endganalitycs');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$ADMIN->add('theme_mb2nlenrol3', $temp);
