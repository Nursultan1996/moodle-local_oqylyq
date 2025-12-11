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
 * Strings for the quizaccess_oqylyq plugin.
 *
 * @package    quizaccess_oqylyq
 * @author     Eduard Zaukarnaev <eduard.zaukarnaev@gmail.com>
 * @copyright  2020 Ertumar LLP
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_config'] = 'Proctoring config cache';
$string['cachedef_configkey'] = 'Proctoring config key cache';
$string['cachedef_quizsettings'] = 'Proctoring quiz settings cache';

$string['conflictingsettings'] = 'You don\'t have permission to update existing Proctoring settings.';
$string['content'] = 'Template';
$string['description'] = 'Description';
$string['disabledsettings'] = 'Disabled settings.';
$string['disabledsettings_help'] = 'Proctoring quiz settings can\'t be changed if the quiz has been attempted. To change a setting, all quiz attempts must first be deleted.';

$string['enabled'] = 'Enabled';
$string['event:accessprevented'] = "Quiz access was prevented";

$string['invalid_hash_key'] = "Invalid Proctoring hash key";

$string['missingrequiredsettings'] = 'Config settings are missing some required values.';
$string['name'] = 'Oqylyq Proctoring';
$string['pluginname'] = 'Proctoring Access Rules';
$string['privacy:metadata:quizaccess_oql_quizsettings'] = 'Proctoring settings for a quiz. This includes the ID of the last user to create or modify the settings.';
$string['privacy:metadata:quizaccess_oql_quizsettings:quizid'] = 'ID of the quiz the settings exist for.';
$string['privacy:metadata:quizaccess_oql_quizsettings:timecreated'] = 'Unix time that the settings were created.';
$string['privacy:metadata:quizaccess_oql_quizsettings:timemodified'] = 'Unix time that the settings were last modified.';
$string['privacy:metadata:quizaccess_oql_quizsettings:usermodified'] = 'ID of user who last created or modified the settings.';
$string['quizsettings'] = 'Quiz settings';
$string['restoredfrom'] = '{$a->name} (restored via cmid {$a->cmid})';
$string['oqylyq'] = 'Proctoring Plugin';

$string['oqylyq:manage_oqylyq_main_camera_record'] = 'Change Proctoring quiz setting: Frontal camera record';
$string['oqylyq:manage_oqylyq_screen_share_record'] = 'Change Proctoring quiz setting: Screen record';
$string['oqylyq:manage_oqylyq_second_camera_record'] = 'Change Proctoring quiz setting: Second camera record';
$string['oqylyq:manage_oqylyq_photo_head_identity'] = 'Change Proctoring quiz setting: Head identity';
$string['oqylyq:manage_oqylyq_id_verification'] = 'Change Proctoring quiz setting: ID Verification';
$string['oqylyq:manage_oqylyq_display_checks'] = 'Change Proctoring quiz setting: Display checks';
$string['oqylyq:manage_oqylyq_fullscreen_mode'] = 'Change Proctoring quiz setting: Fullscreen mode';
$string['oqylyq:manage_oqylyq_focus_detector'] = 'Change Proctoring quiz setting: Focus Detector';
$string['oqylyq:manage_oqylyq_extension_detector'] = 'Change Proctoring quiz setting: Extension Detector';

$string['oqylyq_help'] = 'Setup quiz to use the Proctoring Plugin.';
$string['oqylyq_proctoring'] = 'Require the use of Proctoring Plugin';
$string['oqylyq_proctoring_help'] = 'If enabled, students can only attempt the quiz using the Proctoring Application.';
$string['oqylyq_main_camera_record'] = 'Frontal camera record';
$string['oqylyq_main_camera_record_help'] = 'Frontal camera device';
$string['oqylyq_screen_share_record'] = 'Screen record';
$string['oqylyq_screen_share_record_help'] = 'Screen Share';
$string['oqylyq_second_camera_record'] = 'Second camera record';
$string['oqylyq_second_camera_record_help'] = 'Use mobile camera';
$string['oqylyq_photo_head_identity'] = 'Face Identity';
$string['oqylyq_photo_head_identity_help'] = 'Face Identity';
$string['oqylyq_application'] = 'Application Type';
$string['oqylyq_application_help'] = 'Browser or TrayApp or Desktop Application';
$string['oqylyq_id_verification'] = 'ID verification';
$string['oqylyq_id_verification_help'] = 'Face verification by ID';
$string['oqylyq_display_checks'] = 'Second Display Check';
$string['oqylyq_display_checks_help'] = 'TV, Monitor';
$string['oqylyq_hdcp_checks'] = 'Mirror Mode check';
$string['oqylyq_hdcp_checks_help'] = 'HDCP Check';
$string['oqylyq_content_protect'] = 'Content Protection';
$string['oqylyq_content_protect_help'] = 'Hide Content for Screenshots, Remote Control, etc.';
$string['oqylyq_fullscreen_mode'] = 'Fullscreen mode';
$string['oqylyq_fullscreen_mode_help'] = 'Fullscreen mode';
$string['oqylyq_extension_detector'] = 'Extension detector';
$string['oqylyq_extension_detector_help'] = 'Browser extension detect (ex: Grammarly)';
$string['oqylyq_focus_detector'] = 'Mouse (focus) seeker';
$string['oqylyq_focus_detector_help'] = 'Mouse focus detector';

$string['setting:api_url'] = 'API URL';
$string['setting:api_url_desc'] = '';
$string['setting:api_key'] = 'Secret Key';
$string['setting:api_key_desc'] = '';

$string['launch_button'] = 'Launch';
$string['proctoring_required'] = "This quiz has been configured so that students may only attempt it using the Proctoring.";$string['setting:supportedversions'] = 'Please note that the following minimum versions of the Safe Exam Browser client are required to use the config key feature: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Due to there being at least one quiz attempt, the Proctoring settings can no longer be updated.';
$string['unknown_reason'] = "Unknown reason";
$string['used'] = 'In use';
