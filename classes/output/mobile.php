<?php 

namespace format_buttons\output;
 
use context_module;
use format_buttons_external;


class mobile {
 
    /**
    * Main course page.
    *
    * @param array $args Standard mobile web service arguments
    * @return array
    */
    public static function mobile_course_view($args) {
        global $OUTPUT, $CFG;

        $course = get_course($args['courseid']);
        require_login($course);
        $angularTemplate = $CFG->dirroot . '/course/format/buttons/templates/mobile_course.html';
        $data = [];

        /*return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => $OUTPUT->render_from_template('format_buttons/mobile_course', $data),
                ]
            ]
        ];*/
        return [];
    }
} ?>