<?php
// This file is part of Moodle - http://moodle.org/.
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License...

namespace quizaccess_oqylyq\privacy;

defined('MOODLE_INTERNAL') || die();

use core_privacy\local\metadata\collection;
use core_privacy\local\request\writer;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\contextlist;

/**
 * Privacy provider for quizaccess_oqylyq plugin.
 *
 * @package   quizaccess_oqylyq
 */
class provider implements 
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\plugin\provider {

    /**
     * Describe stored personal data in database tables AND external API.
     *
     * @param collection $collection
     * @return collection
     */
    public static function get_metadata(collection $collection) : collection {

        // quizaccess_oql_quizsettings
        $collection->add_database_table(
            'quizaccess_oql_quizsettings',
            [
                'userid' => 'User who modified settings',
                'usermodified' => 'User who last updated settings',
                'timecreated' => 'Time created',
                'timemodified' => 'Time modified'
            ],
            'Stores quiz-level Oqylyq settings'
        );

        // quizaccess_oql_quizurls
        $collection->add_database_table(
            'quizaccess_oql_quizurls',
            [
                'userid' => 'User for whom the URL belongs',
                'usermodified' => 'User who modified record',
                'timecreated' => 'Time created',
                'timemodified' => 'Time modified'
            ],
            'Stores generated quiz URLs for Oqylyq'
        );

        // External API fields (link_generator.php → student/group data)
        $collection->add_external_location(
            'oqylyq_api',
            [
                'student.external_id' => 'User id sent to Oqylyq',
                'student.firstname' => 'First name',
                'student.lastname' => 'Last name',
                'student.email' => 'Email address',
                'student.password' => 'Generated password (hash)',
            ],
            'Personal data sent to external Oqylyq service'
        );

        return $collection;
    }

    /**
     * Lists contexts related to a user.
     */
    public static function get_contexts_for_userid(int $userid) : contextlist {
        $contextlist = new contextlist();

        $sql = "
            SELECT ctx.id
              FROM {context} ctx
              JOIN {quizaccess_oql_quizsettings} s ON s.userid = ?
        ";
        $contextlist->add_from_sql($sql, [$userid]);

        $sql2 = "
            SELECT ctx.id
              FROM {context} ctx
              JOIN {quizaccess_oql_quizurls} u ON u.userid = ?
        ";
        $contextlist->add_from_sql($sql2, [$userid]);

        return $contextlist;
    }

    /**
     * Export user data.
     */
    public static function export_user_data(approved_contextlist $contextlist) {
        global $DB;

        $userid = $contextlist->get_user()->id;

        foreach ($contextlist as $context) {

            // Export quizsettings
            $settings = $DB->get_records('quizaccess_oql_quizsettings', ['userid' => $userid]);
            writer::with_context($context)->export_data(
                ['quizsettings'],
                (object)['records' => $settings]
            );

            // Export quizurls
            $urls = $DB->get_records('quizaccess_oql_quizurls', ['userid' => $userid]);
            writer::with_context($context)->export_data(
                ['quizurls'],
                (object)['records' => $urls]
            );
        }
    }

    /**
     * Delete personal data for user.
     */
    public static function delete_data_for_user(approved_contextlist $contextlist) {
        global $DB;

        $userid = $contextlist->get_user()->id;

        $DB->delete_records('quizaccess_oql_quizsettings', ['userid' => $userid]);
        $DB->delete_records('quizaccess_oql_quizurls', ['userid' => $userid]);
    }

    /**
     * Delete all data in context (e.g. course deletion)
     */
    public static function delete_data_for_all_users_in_context(\context $context) {
        global $DB;

        $DB->delete_records('quizaccess_oql_quizsettings', []);
        $DB->delete_records('quizaccess_oql_quizurls', []);
    }
}

