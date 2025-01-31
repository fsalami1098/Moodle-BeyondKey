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


$temp = new admin_settingpage('theme_mb2nlenrol3_settingstypography',  get_string('settingstypography', 'theme_mb2nl'));


$fontsGlobalOpt = array(
	'nfont1'=>get_string('nfont','theme_mb2nl') . ' #1',
	'nfont2'=>get_string('nfont','theme_mb2nl') . ' #2',
	'nfont3'=>get_string('nfont','theme_mb2nl') . ' #3',
	''=>'------------',
	'gfont1'=>get_string('gfont','theme_mb2nl') . ' #1',
	'gfont2'=>get_string('gfont','theme_mb2nl') . ' #2',
	'gfont3'=>get_string('gfont','theme_mb2nl') . ' #3',
	' '=>'------------',
	'cfont1'=>get_string('cfont','theme_mb2nl') . ' #1',
	'cfont2'=>get_string('cfont','theme_mb2nl') . ' #2',
	'cfont3'=>get_string('cfont','theme_mb2nl') . ' #3'
);


$fontsOpt = array(
	'0'=>get_string('global','theme_mb2nl'),
	'nfont1'=>get_string('nfont','theme_mb2nl') . ' #1',
	'nfont2'=>get_string('nfont','theme_mb2nl') . ' #2',
	'nfont3'=>get_string('nfont','theme_mb2nl') . ' #3',
	''=>'------------',
	'gfont1'=>get_string('gfont','theme_mb2nl') . ' #1',
	'gfont2'=>get_string('gfont','theme_mb2nl') . ' #2',
	'gfont3'=>get_string('gfont','theme_mb2nl') . ' #3',
	' '=>'------------',
	'cfont1'=>get_string('cfont','theme_mb2nl') . ' #1',
	'cfont2'=>get_string('cfont','theme_mb2nl') . ' #2',
	'cfont3'=>get_string('cfont','theme_mb2nl') . ' #3'
);


$fontsWeightOpt = array(
	'normal'=>get_string('normal','theme_mb2nl'),
	'bold'=>get_string('bold','theme_mb2nl'),
	'bolder'=>get_string('bolder','theme_mb2nl'),
	'lighter'=>get_string('lighter','theme_mb2nl'),
	'100'=>'100',
	'200'=>'200',
	'300'=>'300',
	'400'=>'400',
	'500'=>'500',
	'600'=>'600',
	'700'=>'700',
	'800'=>'800',
	'900'=>'900',
	'inherit'=>get_string('inherit','theme_mb2nl')
);

$fontsWeightOpt2 = array(
	'fwlight'=>get_string('light','theme_mb2nl'),
	'fwnormal'=>get_string('normal','theme_mb2nl'),
	'fwmedium'=>get_string('medium','theme_mb2nl'),
	'fwbold'=>get_string('bold','theme_mb2nl')
);

$ftextTransfromOpt = array(
	'none'=>get_string('none','theme_mb2nl'),
	'uppercase'=>get_string('uppercase','theme_mb2nl'),
	'capitalize'=>get_string('capitalize','theme_mb2nl'),
	'lowercase'=>get_string('lowercase','theme_mb2nl')
);


$fontStyleOpt = array(
	'normal'=>get_string('normal','theme_mb2nl'),
	'italic'=>get_string('italic','theme_mb2nl'),
	'oblique'=>get_string('oblique','theme_mb2nl')
);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startfgeneral', get_string('global','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/ffgeneral';
	$title = get_string('ffamily','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'gfont1', $fontsGlobalOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/fsbase';
	$title = get_string('fsizepx','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, 15);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fwgeneral3';
	$title = get_string('fweight','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'fwnormal', $fontsWeightOpt2);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$temp->add( new admin_setting_configmb2spacer('theme_mb2nlenrol3/typo1') );

	$name = 'theme_mb2nlenrol3/fwlight';
	$title = get_string('fweightlight','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 300, $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fwnormal';
	$title = get_string('fweightnormal','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 400, $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fwmedium';
	$title = get_string('fweightmedium','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 500, $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fwbold';
	$title = get_string('fweightbold','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 700, $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endfgeneral');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startfheadings', get_string('headings','theme_mb2nl'));
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/ffheadings';
	$title = get_string('ffamily','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, '0', $fontsOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fwheadings3';
	$title = get_string('fweight','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'fwmedium', $fontsWeightOpt2);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	for ($i=1; $i<=6; $i++)
	{

		$name = 'theme_mb2nlenrol3/fsheading' . $i;
		$title = get_string('hsize','theme_mb2nl', array( 'hsize' => $i ) );
		$setting = new admin_setting_configtext($name, $title, '', '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

	}

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endfheadings');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);






$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startfmenu', get_string('menu','theme_mb2nl'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2nlenrol3/ffmenu';
	$title = get_string('ffamily','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, '0', $fontsOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/fsmenu';
	$title = get_string('fsize','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/fwmenu3';
	$title = get_string('fweight','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'fwbold', $fontsWeightOpt2);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/ttmenu';
	$title = get_string('ttransform','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'none', $ftextTransfromOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);





$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endfmenu');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startfddmenu', get_string('ddmenu','theme_mb2nl'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/ffddmenu';
	$title = get_string('ffamily','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc,'0', $fontsOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fsddmenu2';
	$title = get_string('fsize','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fwddmenu3';
	$title = get_string('fweight','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'fwnormal', $fontsWeightOpt2);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/ttddmenu';
	$title = get_string('ttransform','theme_mb2nl');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'none', $ftextTransfromOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endfddmenu');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$ADMIN->add('theme_mb2nlenrol3', $temp);
