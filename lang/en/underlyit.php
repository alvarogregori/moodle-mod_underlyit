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
 * English strings for the Underly.it activity.
 *
 * @package    mod_underlyit
 * @copyright  2026 Álvaro Gregori <50322409+alvarogregori@users.noreply.github.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['analytics'] = 'Highlighting report';
$string['analyticstitle'] = 'Highlighting report: {$a}';
$string['blue'] = 'Blue';
$string['calculationheading'] = 'How these figures are calculated';
$string['charactercount'] = '{$a} characters';
$string['comparedaverage'] = 'on avg';
$string['completiondisabled'] = 'Do not require';
$string['completionmatch'] = 'Minimum reference match';
$string['completionmatch_help'] = 'The activity is complete when the learner’s highlighting reaches this match with manager reference highlights. A reference must exist. When the tutor changes the reference, learners\' completion is recalculated in the background by the next cron run.';
$string['completionmatchdesc'] = 'Reach at least {$a}% match with the reference highlighting';
$string['completionpercentage'] = '{$a}%';
$string['completionprogress'] = 'Minimum reading progress';
$string['completionprogress_help'] = 'The activity is complete when the learner’s furthest highlight reaches at least this percentage of the document.';
$string['completionprogressdesc'] = 'Reach at least {$a}% of the document through highlighting';
$string['containshighlights'] = 'This section contains highlights';
$string['courseaveragedetail'] = 'Course average detail';
$string['deletehighlight'] = 'Delete selected highlight';
$string['deletehighlightconfirm'] = 'Delete this highlight?';
$string['detail'] = 'Amount highlighted';
$string['detailcalculation'] = 'the percentage of the document text highlighted by the student.';
$string['detaillevel'] = 'Amount highlighted';
$string['documentlength'] = 'Document length';
$string['documentnotmeasured'] = 'The document has not been measured yet. Open the activity once as a teacher so that its length is registered; the report needs it to calculate the percentages.';
$string['documentoutline'] = 'Document outline';
$string['documentprocesserror'] = 'The document could not be processed.';
$string['documents'] = 'Documents';
$string['documents_help'] = 'The PDF, EPUB, DOCX, HTML or plain-text document to read. Replacing it with a different file removes the highlights made on the previous one.';
$string['downloaddocumenterror'] = 'The document could not be downloaded.';
$string['eventcoursemoduleviewed'] = 'Underly.it activity viewed';
$string['eventhighlightcreated'] = 'Highlight created';
$string['exittocourse'] = 'Return to course';
$string['extra'] = 'Extra';
$string['extractingdocument'] = 'Extracting document content…';
$string['extractingpage'] = 'Extracting page {$a->page} of {$a->total}…';
$string['f1calculation'] = 'an overall score balancing relevance and coverage using their harmonic mean.';
$string['f1score'] = 'Balance';
$string['fullreading'] = 'Full reading';
$string['green'] = 'Green';
$string['hideoutline'] = 'Hide document outline';
$string['hidereference'] = 'Hide tutor reference from learners';
$string['hidereferenceview'] = 'Hide tutor highlighting';
$string['hidetechnical'] = 'Hide technical columns';
$string['highlightcolor'] = 'Highlight colour';
$string['highlights'] = 'Highlights';
$string['illustration'] = 'Document illustration';
$string['illustrationpage'] = 'Illustration on page {$a}';
$string['interpretationhigh'] = 'Good balance: identifies much of the key content without over-highlighting.';
$string['interpretationlow'] = 'Needs review: the selection differs substantially from the tutor reference.';
$string['interpretationmedium'] = 'Developing: review the selection and any important content that was missed.';
$string['interpretationnone'] = 'Not enough data: the student has not highlighted anything yet.';
$string['invaliddocx'] = 'The DOCX does not contain document.xml.';
$string['invalidepub'] = 'The EPUB does not contain a valid OPF package.';
$string['jaccard'] = 'Overall match';
$string['jszipunavailable'] = 'JSZip is unavailable.';
$string['loadingdocument'] = 'Loading document…';
$string['matchbreakdown'] = 'Matched, extra and missing highlighted characters';
$string['matchcalculation'] = 'the overall similarity between the student and tutor highlights.';
$string['matched'] = 'Matched';
$string['missing'] = 'Missing';
$string['modulename'] = 'Underly.it';
$string['modulename_help'] = 'The Underly.it activity lets learners read a document and highlight it inside Moodle. Teachers can highlight a reference, compare each learner\'s highlighting with it in a report, and use reading progress or the match with the reference as completion conditions.';
$string['modulenameplural'] = 'Underly.it activities';
$string['nodocument'] = 'This activity does not have a document yet.';
$string['noheadings'] = 'This document has no headings.';
$string['noreference'] = 'No reference';
$string['noreferencehelp'] = 'There is no reference highlighting yet. Open the document with a manager account, make sure Reference highlighting mode (✓) is active, and highlight the reference passages.';
$string['nostudents'] = 'There are no enrolled students with permission to highlight.';
$string['nosummaryhighlights'] = 'There are no highlights yet for summary reading.';
$string['orange'] = 'Orange';
$string['originaldocument'] = 'Original document';
$string['outline'] = 'Contents';
$string['pdfjsunavailable'] = 'PDF.js is unavailable.';
$string['pink'] = 'Pink';
$string['pluginadministration'] = 'Underly.it administration';
$string['pluginname'] = 'Underly.it';
$string['precision'] = 'Relevance';
$string['precisioncalculation'] = 'of what the student highlighted, how much matches what the tutor considered important.';
$string['privacy:metadata:core_files'] = 'The activity stores the document uploaded by the teacher.';
$string['privacy:metadata:selectedtext'] = 'The highlighted text.';
$string['privacy:metadata:timecreated'] = 'When the record was created.';
$string['privacy:metadata:underlyit_document'] = 'Stores document metadata and uploader identity.';
$string['privacy:metadata:underlyit_highlight'] = 'Stores highlights made by learners.';
$string['privacy:metadata:userid'] = 'The Moodle user ID.';
$string['progresscalculation'] = 'how far the student has reached while highlighting.';
$string['progressestimate'] = 'Reading progress is an estimate based on highlighting, not confirmation that the content was read.';
$string['readertools'] = 'Reading tools';
$string['readingreached'] = 'Document progress';
$string['recall'] = 'Coverage of key content';
$string['recallcalculation'] = 'how much of the tutor-highlighted content the student captured.';
$string['referencecolorhint'] = 'Reference highlights are always shown as a blue underline. Switch to personal highlighting to choose a colour.';
$string['referencemode'] = 'Use personal highlighting';
$string['referencemodeactive'] = 'Reference highlighting mode is active; new highlights form part of the reference';
$string['referencesummary'] = 'The reference contains {$a} highlighted characters.';
$string['reportguideaverage'] = 'The comparison indicators show the difference from the class average.';
$string['reportguidebalance'] = 'Balance: an overall score combining both measures.';
$string['reportguidecoverage'] = 'Coverage: does the student miss important content?';
$string['reportguideheading'] = 'How to read this report';
$string['reportguiderelevance'] = 'Relevance: does the student highlight well or highlight too much?';
$string['selectedcolor'] = 'Selected colour';
$string['showoutline'] = 'Show document outline';
$string['showreference'] = 'Show tutor reference to learners';
$string['showtechnical'] = 'Show technical columns';
$string['simpleview'] = 'Simple view';
$string['statusdeveloping'] = 'Developing';
$string['statusgood'] = 'Good balance';
$string['statuslegend'] = 'Status bands: reading progress is green from 75% and amber from 40%; the remaining percentages are green from 50% and amber from 25%. Colours are indicative and do not replace the exact values.';
$string['statusnodata'] = 'No data';
$string['statusreview'] = 'Needs review';
$string['student'] = 'Student';
$string['summaryreading'] = 'Summary reading';
$string['taskrefreshcompletion'] = 'Recalculate Underly.it completion after the reference changes';
$string['togglefullscreen'] = 'Toggle full screen';
$string['underlyit:addhighlight'] = 'Add highlights';
$string['underlyit:addinstance'] = 'Add a new Underly.it activity';
$string['underlyit:manageannotations'] = 'Manage the tutor reference and all annotations';
$string['underlyit:view'] = 'View Underly.it activities';
$string['underlyitname'] = 'Activity name';
$string['viewreference'] = 'Show tutor highlighting';
$string['yellow'] = 'Yellow';
