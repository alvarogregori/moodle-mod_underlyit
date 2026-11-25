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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace mod_underlyit\event;

/**
 * Event fired when a user views an Underly.it activity.
 *
 * @package    mod_underlyit
 * @copyright  2026 Álvaro Gregori <50322409+alvarogregori@users.noreply.github.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_module_viewed extends \core\event\course_module_viewed {
    /**
     * Initialises the event data.
     *
     * @return void
     */
    protected function init() {
        parent::init();
        $this->data['objecttable'] = 'underlyit';
    }

    /**
     * Returns the localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('eventcoursemoduleviewed', 'underlyit');
    }

    /**
     * Returns a non-localised description of the event.
     *
     * @return string
     */
    public function get_description() {
        return "The user with id '{$this->userid}' viewed the Underly.it activity with course module id " .
            "'{$this->contextinstanceid}'.";
    }

    /**
     * Maps the object ID when restoring logs.
     *
     * @return array
     */
    public static function get_objectid_mapping() {
        return ['db' => 'underlyit', 'restore' => 'underlyit'];
    }
}
