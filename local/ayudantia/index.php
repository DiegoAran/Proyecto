<?php
<?php
require_once(dirname(__FILE__) . '/../../config.php'); //obligatorio
require_once($CFG->dirroot.'/local/ayudantia/forms.php');// IMPOORTANMTE
global $PAGE, $CFG, $OUTPUT, $DB, $USER;
$url = new moodle_url('/local/ayudantia/index.php');
$context = context_system::instance();
$PAGE->set_url($url);
$PAGE->set_context($context);
$PAGE->set_pagelayout('standard');
$PAGE->set_heading('Titulo');
$PAGE->navbar->add('Titulo');
$PAGE->navbar->add('index');
echo $OUTPUT->header();
echo $OUTPUT->heading('heading');


echo $OUTPUT->footer();
?>