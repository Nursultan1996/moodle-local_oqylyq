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
 * Global configuration settings for the quizaccess_oqylyq plugin.
 *
 * @package    quizaccess_oqylyq
 * @author     Eduard Zaukarnaev <eduard.zaukarnaev@gmail.com>
 * @copyright  2020 Ertumar LLP
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

global $ADMIN;

if ($hassiteconfig) {

    $settings->add(new admin_setting_configtext('quizaccess_oqylyq/oqylyq_api_url',
        get_string('setting:api_url', 'quizaccess_oqylyq'),
        get_string('setting:api_url_desc', 'quizaccess_oqylyq'),
        'https://api.oqylyq.kz/api',
        PARAM_URL));

    $settings->add(new admin_setting_configtext('quizaccess_oqylyq/oqylyq_api_key',
        get_string('setting:api_key', 'quizaccess_oqylyq'),
        get_string('setting:api_key_desc', 'quizaccess_oqylyq'),
        NULL,
        PARAM_TEXT));
}
