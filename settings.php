<?php
/**
 * Moodle's mycampus theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 *
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_mycampus
 * @copyright Mycampus LLC
 * @website   http://www.mycampus.us
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // wonderfulcourse.
    $name = 'theme_mycampus/wonderfulcourse';
    $title = get_string('wonderfulcourse', 'theme_mycampus');
    $description = get_string('wonderfulcoursedesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// wonderfulcoursenumber.
    $name = 'theme_mycampus/wonderfulcoursenumber';
    $title = get_string('wonderfulcoursenumber', 'theme_mycampus');
    $description = get_string('wonderfulcoursenumberdesc', 'theme_mycampus');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// hotcourse.
    $name = 'theme_mycampus/hotcourse';
    $title = get_string('hotcourse', 'theme_mycampus');
    $description = get_string('hotcoursedesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);


	// isshowcoursedescinfor.
    $name = 'theme_mycampus/isshowcoursedescinfor';
    $title = get_string('isshowcoursedescinfor','theme_mycampus');
    $description = get_string('isshowcoursedescinfordesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// day30userinfor.
    $name = 'theme_mycampus/day30userinfor';
    $title = get_string('day30userinfor','theme_mycampus');
    $description = get_string('day30userinfordesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// day30accessinfor.
    $name = 'theme_mycampus/day30accessinfor';
    $title = get_string('day30accessinfor','theme_mycampus');
    $description = get_string('day30accessinfordesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// day30accessinfor.
    $name = 'theme_mycampus/adodbcacheseconds';
    $title = get_string('adodbcacheseconds','theme_mycampus');
    $description = get_string('adodbcachesecondsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// adodbcacheseconds.
    $name = 'theme_mycampus/adodbcacheseconds';
    $title = get_string('adodbcacheseconds','theme_mycampus');
    $description = get_string('adodbcachesecondsdesc', 'theme_mycampus');
	$adodbcachesecondsArray = array(180=>180,600=>600,1800=>1800,3600=>3600,28800=>28800);
    $setting = new admin_setting_configselect($name, $title, $description,3600,$adodbcachesecondsArray);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// indexshowcoursenumber.
    $name = 'theme_mycampus/indexshowcoursenumber';
    $title = get_string('indexshowcoursenumber','theme_mycampus');
    $description = get_string('indexshowcoursenumberdesc', 'theme_mycampus');
	$indexshowcoursenumberArray = array(4=>4,5=>5);
    $setting = new admin_setting_configselect($name, $title, $description,4,$indexshowcoursenumberArray);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// isshowlogo.
    $name = 'theme_mycampus/isshowlogo';
    $title = get_string('isshowlogo','theme_mycampus');
    $description = get_string('isshowlogodesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description,1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_mycampus/logo';
    $title = get_string('logo','theme_mycampus');
    $description = get_string('logodesc', 'theme_mycampus');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_mycampus/footer';
    $title = get_string('footer', 'theme_mycampus');
    $description = get_string('footerdesc', 'theme_mycampus');
    $default = '<p><a href="http://www.mycampus.us" target="_blank">welcome to use Mycampus LLC services</a></p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// coursestatistics.
    $name = 'theme_mycampus/coursestatistics';
    $title = get_string('coursestatistics', 'theme_mycampus');
    $description = get_string('coursestatisticsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// coursecategorystatistics.
    $name = 'theme_mycampus/coursecategorystatistics';
    $title = get_string('coursecategorystatistics', 'theme_mycampus');
    $description = get_string('coursecategorystatisticsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// useraccessstatistics.
    $name = 'theme_mycampus/useraccessstatistics';
    $title = get_string('useraccessstatistics', 'theme_mycampus');
    $description = get_string('useraccessstatisticsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	/*
	// pageaccessstatistics.
    $name = 'theme_mycampus/pageaccessstatistics';
    $title = get_string('pageaccessstatistics', 'theme_mycampus');
    $description = get_string('pageaccessstatisticsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
	*/

	// activeteachersstatistics.
    $name = 'theme_mycampus/activeteachersstatistics';
    $title = get_string('activeteachersstatistics', 'theme_mycampus');
    $description = get_string('activeteachersstatisticsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

	// activestudentsstatistics.
    $name = 'theme_mycampus/activestudentsstatistics';
    $title = get_string('activestudentsstatistics', 'theme_mycampus');
    $description = get_string('activestudentsstatisticsdesc', 'theme_mycampus');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}
