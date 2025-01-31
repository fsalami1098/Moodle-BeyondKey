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

// global $PAGE;
//
// function theme_mb2nl_themes_selector()
// {
// 	$themes = array();
// 	$themeobjects = get_list_of_themes();
//
// 	foreach ( $themeobjects as $theme )
// 	{
// 		if ( empty( $theme->hidefromselector ) )
// 		{
// 			$themes[$theme->name] = get_string( 'pluginname', 'theme_' . $theme->name );
// 		}
// 	}
//
// 	$themes = array_merge(array( '' => get_string('none','theme_mb2nl')), $themes);
//
// 	return $themes;
// }

$temp = new admin_settingpage('theme_mb2nlenrol3_settingsgeneral',  get_string('settingsgeneral', 'theme_mb2nl'));

$headerToolsStyleOpt = array(
	'icon' => get_string('toolsicon','theme_mb2nl'),
	'text' => get_string('toolstext','theme_mb2nl'),
);

$headerStyleOpt = array(
	'light' => get_string('light','theme_mb2nl'),
	'light2' => get_string('light','theme_mb2nl') . ' 2',
	'dark' => get_string('dark','theme_mb2nl'),
	'transparent' => get_string('transparent','theme_mb2nl'),
	'transparent_light' => get_string('transparent_light','theme_mb2nl')
);

$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startlogo', get_string('logo','theme_mb2nl'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/logo';
	$title = get_string('logoimg','theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, '', 'logo');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/logodark';
	$title = get_string('logodarkimg','theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, '', 'logodark');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/logoh';
	$title = get_string('logoh','theme_mb2nl');
	$desc = get_string('logohdesc', 'theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, $desc, '48');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	// $name = 'theme_mb2nlenrol3/logospacer2';
	// $setting = new admin_setting_configmb2spacer($name);
	// $temp->add($setting);
	//
	// $name = 'theme_mb2nlenrol3/logosm';
	// $title = get_string('logoimgsm','theme_mb2nl');
	// $setting = new admin_setting_configstoredfile($name, $title, '', 'logosm');
	// $temp->add($setting);
	//
	// $name = 'theme_mb2nlenrol3/logodarksm';
	// $title = get_string('logodarkimgsm','theme_mb2nl');
	// $setting = new admin_setting_configstoredfile($name, $title, '', 'logodarksm');
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/logohsm';
	$title = get_string('logohsm','theme_mb2nl');
	$desc = get_string('logohdesc', 'theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, $desc, '38');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	// $name = 'theme_mb2nlenrol3/logow';
	// $title = get_string('logow','theme_mb2nl');
	// $desc = get_string('logowdesc', 'theme_mb2nl');
	// $setting = new admin_setting_configtext($name, $title, $desc, '155');
	// $setting->set_updatedcallback('theme_reset_all_caches');
	// $temp->add($setting);

	// $name = 'theme_mb2nlenrol3/logotitle';
	// $title = get_string('logotitle','theme_mb2nl');
	// $desc = get_string('logotitledesc', 'theme_mb2nl');
	// $setting = new admin_setting_configtext($name, $title, $desc, 'New Learning');
	// $temp->add($setting);

	// $name = 'theme_mb2nlenrol3/logoalttext';
	// $title = get_string('logoalttext','theme_mb2nl');
	// $desc = get_string('logoalttextdesc', 'theme_mb2nl');
	// $setting = new admin_setting_configtext($name, $title, $desc, 'New Learning');
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/logospacer1';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/favicon';
	$title = get_string('favicon','theme_mb2nl');
	$desc = get_string('favicondesc', 'theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, $desc, 'favicon', 0, array('accepted_types'=>array('.ico')));
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startlayout', get_string('layout','theme_mb2nl'));
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/pagewidth';
	$title = get_string('pagewidth','theme_mb2nl');
	$setting = new admin_setting_configtext($name,$title,'',1240);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$layoutArr = array(
		'fw' => get_string('layoutfw','theme_mb2nl'),
		'fx' => get_string('layoutfx','theme_mb2nl'),
		//'fxw' => get_string('layoutfxc','theme_mb2nl')
	);
	$name = 'theme_mb2nlenrol3/layout';
	$title = get_string('layout','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'fw', $layoutArr);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/sidebarpos';
	$title = get_string('sidebarpos','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 'right', array(
		'classic' => get_string('classic','theme_mb2nl'),
		'left' => get_string('left','theme_mb2nl'),
		'right' => get_string('right','theme_mb2nl')
	));
	$temp->add($setting);



	$sidebarBtArr = array(
		'0' => get_string('none','theme_mb2nl'),
		'1' => get_string('sidebaryesshow','theme_mb2nl'),
		'2' => get_string('sidebaryeshide','theme_mb2nl')
	);

	$name = 'theme_mb2nlenrol3/sidebarbtn';
	$title = get_string('sidebarbtn','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', '1', $sidebarBtArr);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/sidebarbtntext';
	$title = get_string('sidebarbtntext','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/editingfw2';
	$title = get_string('editingfw','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	//$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endlayout');
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startheader', get_string('headerstyleheading','theme_mb2nl'));
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

	

	$name = 'theme_mb2nlenrol3/headertoolstext';
	$title = get_string('headertoolstext','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/navbarplugin';
	$title = get_string('navbarplugin','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/headerspacer1';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/headercontent';
	$title = get_string('headercontent','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, get_string('headercontentdesc','theme_mb2nl'), '');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/headerspacer3';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/headerbtn';
	$title = get_string('headerbtn','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, get_string('headerbtndesc','theme_mb2nl'),'');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endheader');
//$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startfrontpage', get_string('frontpage','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/slider';
	$title = get_string('slider','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$setting->set_updatedcallback('theme_reset_all_caches'); // This is require for load slides css style
	$temp->add($setting);

	// $name = 'theme_mb2nlenrol3/fptheme';
	// $title = get_string('forcetheme');
	// $setting = new admin_setting_configselect($name, $title, '', '', theme_mb2nl_themes_selector());
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/fp2course';
	$title = get_string('fp2course','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endfrontpage');
$temp->add($setting);





//$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startregions', get_string('regions','theme_mb2nl'));
//$temp->add($setting);


	// $regionOptions = array(
	// 	'none'=>get_string('none','theme_mb2nl'),
	// 	'slider'=>get_string('region-slider','theme_mb2nl'),
	// 	'after-slider'=>get_string('region-after-slider','theme_mb2nl'),
	// 	'before-content'=>get_string('region-before-content','theme_mb2nl'),
	// 	'after-content'=>get_string('region-after-content','theme_mb2nl'),
	// 	'bottom'=>get_string('region-bottom','theme_mb2nl')
	// );
	// $name = 'theme_mb2nlenrol3/regionnogrid';
	// $title = get_string('regionnogrid','theme_mb2nl');
	// $desc = '';
	// $setting = new admin_setting_configmultiselect($name, $title, $desc, array(), $regionOptions);
	// $temp->add($setting);


	// $name = 'theme_mb2nlenrol3/blockstyle';
	// $title = get_string('blockstyle','theme_mb2nl');
	// $desc = get_string('blockstyledesc','theme_mb2nl');
	// $setting = new admin_setting_configtextarea($name, $title, $desc, '');
	// $temp->add($setting);


//$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endregions');
//$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startfooter', get_string('footer','theme_mb2nl'));
$temp->add($setting);

	/* =========================== */

	global $DB;

	$dbman = $DB->get_manager();
	$table_footers = new xmldb_table( 'local_mb2builder_footers' );
	$footers = array( 0 => get_string('none', 'theme_mb2nl') );

	if ( $dbman->table_exists( $table_footers ) )
	{
		$sqlquery = 'SELECT id, name FROM {local_mb2builder_footers}';
		$records = $DB->get_records_sql( $sqlquery, array() );

		if ( count( $records ) )
		{
			foreach ( $records as $f )
			{
				$footers[$f->id] = $f->name;
			}
		}
	}

	/* =========================== */


	$name = 'theme_mb2nlenrol3/footer';
	$title = get_string('customfooter','theme_mb2nl');
	$setting = new admin_setting_configselect( $name, $title, get_string('footer_desc','theme_mb2nl'), 0, $footers );
	$temp->add( $setting );

	$name = 'theme_mb2nlenrol3/footerspacer1';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$footerstyleOptions = array(
		'dark' => get_string( 'dark','theme_mb2nl' ),
		'light' => get_string( 'light','theme_mb2nl' )
	);
	$name = 'theme_mb2nlenrol3/footerstyle';
	$title = get_string('style','theme_mb2nl');
	$setting = new admin_setting_configselect( $name, $title, '', 'dark', $footerstyleOptions );
	$setting->set_updatedcallback( 'theme_reset_all_caches' );
	$temp->add( $setting );

	$name = 'theme_mb2nlenrol3/foottext';
	$title = get_string('foottext','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, '', 'Copyright (c) New Learning Theme 2017 - [year]. All rights reserved.');
	$temp->add($setting);

	// $name = 'theme_mb2nlenrol3/footlogin';
	// $title = get_string('footlogin','theme_mb2nl');
	// $desc = '';
	// $setting = new admin_setting_configcheckbox($name, $title, $desc, 0);
	// $temp->add($setting);
	//
	// $name = 'theme_mb2nlenrol3/footerpacer1';
	// $setting = new admin_setting_configmb2spacer($name);
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/footerspacer2';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/partnerlogos';
	$title = get_string('partnerlogos','theme_mb2nl');
	$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 99);
	$setting = new admin_setting_configstoredfile($name, $title, '', 'partnerlogos', 0, $opts );
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/partnerlogoh';
	$title = get_string('logoh','theme_mb2nl');
	$desc = get_string('logohdesc', 'theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, $desc, '46');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/partnerslinks';
	$title = get_string('partnerslinks','theme_mb2nl');
	$setting = new admin_setting_configtextarea($name, $title, get_string('partnerslinksdesc', 'theme_mb2nl'), '');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endfooter');
$temp->add($setting);


$ADMIN->add('theme_mb2nlenrol3', $temp);
