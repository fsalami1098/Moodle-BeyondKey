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
 * @package    local_mb2megamenu
 * @copyright  2019 - 2020 Mariusz Boloz (mb2themes.com)
 * @license    Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();

global $PAGE;

if ( ! defined( 'LOCAL_MB2MEGAMENU_PATH_THEME' ) )
{
    define( 'LOCAL_MB2MEGAMENU_PATH_THEME', local_mb2megamenu_get_theme_path() );
}

if ( ! defined( 'LOCAL_MB2MEGAMENU_PATH_THEME_ASSETS' ) )
{
    define( 'LOCAL_MB2MEGAMENU_PATH_THEME_ASSETS', LOCAL_MB2MEGAMENU_PATH_THEME . '/assets' );
}


// Load styles and script on editing page only
if ( is_object( $PAGE ) && $PAGE->pagetype === 'local-mb2megamenu-edit' )
{
    $PAGE->requires->jquery();
    //$PAGE->requires->jquery_plugin( 'ui' );
    $PAGE->requires->css( '/local/mb2megamenu/builder/css/styles.css' );
    $PAGE->requires->js( '/local/mb2megamenu/builder/js/builder.js' );
}


/**
 * Serve the files from the MYPLUGIN file areas
 *
 * @param stdClass $course the course object
 * @param stdClass $cm the course module object
 * @param stdClass $context the context
 * @param string $filearea the name of the file area
 * @param array $args extra arguments (itemid, path)
 * @param bool $forcedownload whether or not force download
 * @param array $options additional options affecting the file serving
 * @return bool false if the file not found, just send the file otherwise and do not return anything
 */
function local_mb2megamenu_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options=array()) {

    global $PAGE;

    // Check the contextlevel is as expected - if your plugin is a block, this becomes CONTEXT_BLOCK, etc.
    if ($context->contextlevel != CONTEXT_SYSTEM)
    {
        return false;
    }

    // Make sure the filearea is one of those used by the plugin.
    if ( $filearea !== 'mb2megamenumedia' )
    {
        return false;
    }

    // Leave this line out if you set the itemid to null in make_pluginfile_url (set $itemid to 0 instead).
    $itemid = array_shift($args); // The first item in the $args array.

    // Extract the filename / filepath from the $args array.
    $filename = array_pop($args); // The last item in the $args array.

    if (!$args)
    {
        $filepath = '/';
    }
    else
    {
        $filepath = '/' . implode('/', $args) . '/';
    }

    // Retrieve the file from the Files API.
    $fs = get_file_storage();
    $file = $fs->get_file($context->id, 'local_mb2megamenu', $filearea, $itemid, $filepath, $filename);

    if (!$file)
    {
        return false; // The file does not exist.
    }

    // We can now send the file back to the browser - in this case with a cache lifetime of 1 day and no filtering.
    // From Moodle 2.3, use send_stored_file instead.
    send_stored_file($file, null, 0, $forcedownload, $options);
}



function local_mb2megamenu_get_theme_path()
{
    global $CFG;

    return $CFG->dirroot . '/' . local_mb2megamenu_themedir() . '/mb2nl';
}


function local_mb2megamenu_themedir()
{
    global $CFG;

    $themedir = 'theme';

    if ( isset( $CFG->themedir ) && $CFG->themedir !== '' )
    {
        $themedir = explode('/', $CFG->themedir);
        $themedir = end($themedir);
    }

    return $themedir;

}