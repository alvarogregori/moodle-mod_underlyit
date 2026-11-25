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
 * Tests the events of the Underly.it activity.
 *
 * @package    mod_underlyit
 * @category   test
 * @copyright  2026 Álvaro Gregori <50322409+alvarogregori@users.noreply.github.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \mod_underlyit\event\course_module_viewed
 * @covers     \mod_underlyit\event\course_module_instance_list_viewed
 */
#[\PHPUnit\Framework\Attributes\CoversClass(\mod_underlyit\event\course_module_viewed::class)]
#[\PHPUnit\Framework\Attributes\CoversClass(\mod_underlyit\event\course_module_instance_list_viewed::class)]
final class events_test extends \advanced_testcase {
    /**
     * The course module viewed event carries the activity and its context.
     *
     * @return void
     */
    public function test_course_module_viewed(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $student = $this->getDataGenerator()->create_and_enrol($course, 'student');
        $activity = $this->getDataGenerator()->create_module('underlyit', ['course' => $course->id]);
        $context = \context_module::instance($activity->cmid);
        $this->setUser($student);

        $sink = $this->redirectEvents();
        course_module_viewed::create(['objectid' => $activity->id, 'context' => $context])->trigger();
        $events = $sink->get_events();
        $sink->close();

        $this->assertCount(1, $events);
        $event = reset($events);
        $this->assertInstanceOf(course_module_viewed::class, $event);
        $this->assertInstanceOf(\core\event\course_module_viewed::class, $event);
        $this->assertEquals($context, $event->get_context());
        $this->assertEquals($activity->id, $event->objectid);
        $this->assertEquals('underlyit', $event->objecttable);
        $this->assertEquals($student->id, $event->userid);
        $this->assertEquals('r', $event->crud);
        $this->assertNotEmpty($event->get_name());
        $this->assertStringContainsString((string) $activity->cmid, $event->get_description());
        $this->assertEquals(new \moodle_url('/mod/underlyit/view.php', ['id' => $activity->cmid]), $event->get_url());
        $this->assertEventContextNotUsed($event);
    }

    /**
     * The instance list viewed event is triggered in the course context.
     *
     * @return void
     */
    public function test_course_module_instance_list_viewed(): void {
        $this->resetAfterTest();
        $course = $this->getDataGenerator()->create_course();
        $context = \context_course::instance($course->id);

        $sink = $this->redirectEvents();
        course_module_instance_list_viewed::create(['context' => $context])->trigger();
        $events = $sink->get_events();
        $sink->close();

        $this->assertCount(1, $events);
        $event = reset($events);
        $this->assertInstanceOf(course_module_instance_list_viewed::class, $event);
        $this->assertEquals($context, $event->get_context());
        $this->assertEventContextNotUsed($event);
    }
}
