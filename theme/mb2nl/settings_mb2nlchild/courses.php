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

$temp = new admin_settingpage( 'theme_mb2nlenrol3_settingscourses',  get_string( 'settingscourses', 'theme_mb2nl' ) );

$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startcourselist', get_string('courseslist','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursegrid';
	$title = get_string('coursegrid','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/sidebarposcindex';
	$title = get_string('sidebarpos','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 'left', array(
		'classic' => get_string('classic','theme_mb2nl'),
		'left' => get_string('left','theme_mb2nl'),
		'right' => get_string('right','theme_mb2nl')
	));
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/excludecat';
	$title = get_string('excludecat','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', '');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/exctags';
	$title = get_string('exctags','theme_mb2nl');
	$setting = new admin_setting_configtext($name, $title, '', '');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/expiredcourses';
	$title = get_string('expiredcourses','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);


	// $name = 'theme_mb2nlenrol3/courseswitchlayout';
	// $title = get_string('courseswitchlayout','theme_mb2nl');
	// $setting = new admin_setting_configcheckbox($name, $title, '', 1);
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursespacer5';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/quickview';
	$title = get_string('quickview','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/shortnamecourse';
	$title = get_string( 'shortnamecourse' );
	$setting = new admin_setting_configcheckbox($name, $title,'',0);
	$temp->add($setting);

	// $name = 'theme_mb2nlenrol3/coursebtn';
	// $title = get_string('coursebtn','theme_mb2nl');
	// $setting = new admin_setting_configcheckbox($name, $title,'',1);
	// $temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursestudentscount';
	$title = get_string('coursestudentscount','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursecustomfields';
	$title = get_string('coursecustomfields','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursedate';
	$title = get_string('coursedate','theme_mb2nl');
	$setting = new admin_setting_configselect($name,$title,'',2, array(
		0 => get_string('none', 'theme_mb2nl'),
		1 => get_string('coursestartdate', 'theme_mb2nl'),
		2 => get_string('coursemodifieddate', 'theme_mb2nl')
	) );
	$temp->add($setting);

	
	$name = 'theme_mb2nlenrol3/togglecat';
	$title = get_string('togglecat','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);


	$name = 'theme_mb2nlenrol3/coursetags';
	$title = get_string('coursetags','tag');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/courseprice';
	$title = get_string('courseprice','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursinstructor';
	$title = get_string('coursinstructor','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endcourselist');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startcourse', get_string('coursesettings','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/fullscreenmod';
    $title = get_string('fullscreenmod','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 1);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/fsmodhome';
    $title = get_string('fsmodhome','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 1);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursetoc';
    $title = get_string('coursetoc','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 1);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/tocsep';
    $title = get_string('tocsep','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 0);
    $temp->add($setting);

    $name = 'theme_mb2nlenrol3/cbanner';
    $title = get_string('cbannerstyle','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 0);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/cbtntext';
    $title = get_string('cbtntext','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 0);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/showmorebtn';
	$title = get_string('showmorebtn','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursenav';
    $title = get_string('coursenav','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 1);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/cpricedecimal';
	$title = get_string('pricedecimal','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', '.', array(
		'.' => ' . ',
		',' => ' , '
	));
	$temp->add($setting);	

	$name = 'theme_mb2nlenrol3/cpricereverse';
    $title = get_string('cpricereverse','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 0);
    $temp->add($setting);	

    $name = 'theme_mb2nlenrol3/coursespacer3';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);
    $name = 'theme_mb2nlenrol3/studentroleshortname';
    $title = get_string('studentroleshortname','theme_mb2nl');
    $setting = new admin_setting_configtext($name, $title, '', 'student');
    $temp->add($setting);

    $name = 'theme_mb2nlenrol3/teacherroleshortname';
	$title = get_string('teacherroleshortname','theme_mb2nl');
	$setting = new admin_setting_configtext($name,$title,'','editingteacher');
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/coursespacer10';
	$setting = new admin_setting_configmb2spacer($name);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/courseplaceholder';
	$title = get_string('courseplaceholder','theme_mb2nl');
	$setting = new admin_setting_configstoredfile($name, $title, '', 'courseplaceholder');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endcourse');
$temp->add($setting);

$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startcoursepage', get_string('coursepage','theme_mb2nl'));
$temp->add($setting);

	$name = 'theme_mb2nlenrol3/courselayout';
	$title = get_string('layout','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 0, array(
		0 => get_string('none', 'theme_mb2nl'),
		1 => get_string( 'layoutn', 'theme_mb2nl', array( 'layout' => 1 ) ),
		2 => get_string( 'layoutn', 'theme_mb2nl', array( 'layout' => 2 ) )
	));
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/c2cols';
    $title = get_string('c2cols','theme_mb2nl');
    $setting = new admin_setting_configcheckbox($name, $title, '', 1);
    $temp->add($setting);

	$name = 'theme_mb2nlenrol3/sidebarposcpage';
	$title = get_string('sidebarpos','theme_mb2nl');
	$setting = new admin_setting_configselect($name, $title, '', 'right', array(
		'classic' => get_string('classic','theme_mb2nl'),
		'left' => get_string('left','theme_mb2nl'),
		'right' => get_string('right','theme_mb2nl')
	));
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/csection';
	$title = get_string('csection','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);

	$name = 'theme_mb2nlenrol3/cvideo';
	$title = get_string('cvideo','theme_mb2nl');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endcoursepage');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2nlenrol3/startenrolmentpage', get_string('enrollmentpage','theme_mb2nl'));
$temp->add($setting);

$name = 'theme_mb2nlenrol3/enrollayout';
$title = get_string('layout','theme_mb2nl');
$setting = new admin_setting_configselect($name, $title, '', 3, array(
	0 => get_string('none', 'theme_mb2nl'),
	1 => get_string( 'layoutn', 'theme_mb2nl', array( 'layout' => 1 ) ),
	2 => get_string( 'layoutn', 'theme_mb2nl', array( 'layout' => 2 ) ),
	3 => get_string( 'layoutn', 'theme_mb2nl', array( 'layout' => 3 ) )
));
$temp->add($setting);

$name = 'theme_mb2nlenrol3/elrollsections';
$title = get_string('elrollsections','theme_mb2nl');
$setting = new admin_setting_configcheckbox($name, $title, '', 1);
$temp->add($setting);

$name = 'theme_mb2nlenrol3/ecinstructor';
$title = get_string('coursinstructor','theme_mb2nl');
$setting = new admin_setting_configcheckbox($name, $title, '', 1);
$temp->add($setting);

$name = 'theme_mb2nlenrol3/shareicons';
$title = get_string('shareicons','theme_mb2nl');
$setting = new admin_setting_configcheckbox($name, $title, '', 1);
$temp->add($setting);

$name = 'theme_mb2nlenrol3/enrolbtn';
$title = get_string('enrolbtn','theme_mb2nl');
$setting = new admin_setting_configcheckbox($name, $title, '', 1);
$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2nlenrol3/endenrolmentpage');
$temp->add($setting);

$ADMIN->add('theme_mb2nlenrol3', $temp);
