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

/**
 * Displays the Underly.it reader.
 *
 * @package    mod_underlyit
 * @copyright  2026 Álvaro Gregori <50322409+alvarogregori@users.noreply.github.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
$id = optional_param('id', 0, PARAM_INT);
$s = optional_param('s', 0, PARAM_INT);
if ($id) {
    $cm = get_coursemodule_from_id('underlyit', $id, 0, false, MUST_EXIST);
    $activity = $DB->get_record('underlyit', ['id' => $cm->instance], '*', MUST_EXIST);
} else {
    $activity = $DB->get_record('underlyit', ['id' => $s], '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('underlyit', $activity->id, $activity->course, false, MUST_EXIST);
}
$course = $DB->get_record('course', ['id' => $cm->course], '*', MUST_EXIST);
require_login($course, true, $cm);
$context = context_module::instance($cm->id);
require_capability('mod/underlyit:view', $context);
$PAGE->set_url('/mod/underlyit/view.php', ['id' => $cm->id]);
$PAGE->set_title(format_string($activity->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->activityheader->set_attrs(['hidecompletion' => false]);
$PAGE->requires->js(new moodle_url('/mod/underlyit/thirdparty/pdfjs/pdf.min.js'), true);
$PAGE->requires->js(new moodle_url('/mod/underlyit/thirdparty/jszip/jszip.min.js'), true);
$canhighlight = has_capability('mod/underlyit:addhighlight', $context);
$canmanage = has_capability('mod/underlyit:manageannotations', $context);
$showreference = !empty($activity->showreference);
$PAGE->requires->js_call_amd('mod_underlyit/app', 'init', [[
    'cmid' => (int) $cm->id,
    'canhighlight' => $canhighlight,
    'canmanage' => $canmanage,
    'showreference' => $showreference,
    'pdfworkerurl' => (new moodle_url('/mod/underlyit/thirdparty/pdfjs/pdf.worker.min.js'))->out(false),
]]);
\mod_underlyit\event\course_module_viewed::create(['objectid' => $activity->id, 'context' => $context])->trigger();

$colors = [];
$palette = ['yellow' => '#fff176', 'blue' => '#90caf9', 'green' => '#a5d6a7', 'pink' => '#f8bbd0', 'orange' => '#ffcc80'];
foreach ($palette as $name => $value) {
    $colors[] = ['value' => $value, 'name' => get_string($name, 'underlyit'), 'selected' => $name === 'yellow'];
}

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('mod_underlyit/reader', [
    'canhighlight' => $canhighlight,
    'canmanage' => $canmanage,
    'showreference' => $showreference,
    'learnerreferencetoggle' => !$canmanage && $showreference,
    'colors' => $colors,
    'reporturl' => (new moodle_url('/mod/underlyit/report.php', ['id' => $cm->id]))->out(false),
    'courseurl' => (new moodle_url('/course/view.php', ['id' => $course->id]))->out(false),
]);
echo $OUTPUT->footer();
