## 0.17.2

- The GitHub repository is now `moodle-mod_underlyit`, as the Plugins directory recommends.
- Renamed the activity view event to `\mod_underlyit\event\course_module_viewed`, the class name the Plugins directory requires. New tests cover both view events.

## 0.17.1

- Fixed the highlighting report printing part of its template documentation: the example context closed the Mustache comment early. A new test renders every template with its example context.

## 0.17.0

- Renamed the component from `mod_studymark` to `mod_underlyit` before the first public release. This is a new plugin for Moodle: it installs in `mod/underlyit` with fresh tables and does not upgrade earlier `mod_studymark` installations.
- Now requires Moodle 4.5 or later.
- Backup and restore now include the files of the activity description, and links to the activity are encoded.
- "Display description on course page" now works.
- Added capability names, activity chooser help, a monochrome icon and the collaboration purpose.
- Completion rules support the suffixed form elements used by Moodle 4.3 and later.
- External functions validate their parameters; author names include all name fields.
- Privacy API: declared stored files and every exported field, exported data in readable form and anonymised uploads on deletion.
- Added the course module instance list viewed event.
- PDF.js runs with `isEvalSupported` disabled.
- Removed group sharing, notes, comments and document deletion from this release: the web services existed without an interface, group mode could stop the reader from loading, and comments could reveal private highlights. The `addcomment`, `sharehighlight` and `managefiles` capabilities and the comment table are gone; the activity no longer supports group mode.
- The highlighting report is rendered on the server with the `mod_underlyit/report` and `mod_underlyit/metric` templates; it no longer downloads and parses the document in the browser, and warns when the document length has not been registered yet.
- The reader toolbar and layout come from the `mod_underlyit/reader` template and the outline from `mod_underlyit/outline`; the JavaScript no longer builds HTML strings.
- The activity description is shown once, in the standard activity header.
- In reference mode the colour palette is disabled and explains that the reference is always a blue underline; it is enabled again in personal mode.
- Changes to the tutor reference or to the document length no longer recalculate every learner's completion inside the request: they queue a `refresh_completion` ad hoc task (identical pending tasks are merged) that runs with cron. A learner's own highlighting is still recalculated at once.
- Added a data generator and PHPUnit tests for the completion task, the highlight external functions and backup/restore (with and without user data: description files, document file, highlights and links to the activity). The test classes declare their coverage with PHPUnit attributes as well as `@covers` tags, so they run without deprecation notices on Moodle 5.0 and 5.1 (PHPUnit 11) and still on Moodle 4.5 (PHPUnit 9).
- Removed empty-string defaults from required text columns in `install.xml`, which XMLDB reported during installation.
- New highlights are validated on the server: non-empty text of at most 20,000 characters, bounded heading and selector lengths, and non-negative positions.
- The AMD modules are built with Moodle's Grunt (Babel, source maps) and pass Moodle's ESLint and stylelint rules; the plugin's own Gruntfile and npm files were removed. The JavaScript was restructured into documented functions without changing the extracted text, so existing highlight offsets still apply.
- "Extracting page … of …" and the PDF illustration caption are single language strings with placeholders, so they can be translated whole.
- Status badges carry both the Bootstrap 4 (`badge-*`) and Bootstrap 5 (`text-bg-*`) classes, for Moodle 4.5 and 5.x.
- Deleting a highlight asks for confirmation with a Moodle dialog instead of the browser's confirm box.
- Reference highlights no longer get an inline background colour, so the stylesheet needs no `!important`.
- Applied the Moodle coding style throughout, added the GPL boilerplate to the JavaScript sources and removed language packs other than English (translations go through AMOS).

## 0.16.0

- Renamed the visible plugin brand to Underly.it while retaining the mod_studymark component for upgrade compatibility.
- Updated user-facing language strings, documentation, event descriptions and development metadata.

## 0.15.1

- Added illustrations as non-text blocks in the reading flow.
- Preserved embedded images from DOCX and EPUB documents and safe images from HTML.
- Added approximate per-page raster image extraction for PDF documents.
- Kept illustration captions and alternative text outside highlighting offsets and reading metrics.
## 0.15.0

- Changed the declared maturity from alpha to beta.
- Added Moodle GPL, package, copyright and license headers to PHP and AMD source files.
- Added reproducible provenance documentation and checksums for PDF.js and JSZip.
- Added a Grunt build workflow and regenerated genuinely minified AMD distribution files.
- Adopted the conventional `moodle-mod_studymark` repository name.
## 0.14.2

- Added a learner control to show or hide the tutor reference when the tutor makes it available.
- Rendered tutor reference highlighting as a translucent underline layer so personal highlighting remains visually dominant.

## 0.14.1

- Renamed tutor report metrics using plain educational language.
- Added report guidance, per-student interpretation and an overall status badge.
- Reports now sort learners by Balance (F1) by default.
- Added a simple view that hides technical columns, with accessible explanations on metric headings.

# Changes

## 0.14.0

- Made tutor reference highlights private to managers by default.
- Added a persistent manager control to show or hide the reference for learners.
- Prevented hidden reference intervals from being sent to learner browsers.

## 0.13.1

- Shortened the course-average comparison label to keep report cells compact.

## 0.13.0

- Added traffic-light status badges and position markers to tutor-report metrics.
- Added course-average comparisons for progress, detail, Precision, Recall, F1 and Jaccard.
- Added a Jaccard breakdown showing matched, extra and missing highlighted characters.

## 0.12.1

- Enabled explicit reference highlighting mode by default for managers.
- Clarified that the reference-mode control must be active when creating reference highlights.

## 0.12.0

- Added Precision, Recall and F1-score to the tutor analytics report.
- Centralised comparison formulas and added deterministic test coverage.
- Kept the existing Jaccard reference match as a separate metric and completion criterion.

## 0.11.1

- Existing editable highlights can now be selected and recoloured from the palette.
- Replaced click-to-delete with an explicit delete button for the selected highlight.

## 0.11.0

- Added an accessible five-colour highlight palette for new annotations.
- Refined the reader toolbar, outline and typography using Moodle/Bootstrap theme variables.
- Improved responsive toolbar behaviour on tablets and phones.

## 0.10.0

- Fixed Moodle custom completion rule discovery and descriptions.
- Made document replacement content-hash aware and destructive for stale annotations.
- Removed student control over normalized document length and validated selectors/colours.
- Added explicit reference-highlighting mode and visible reference highlights.
- Added structured HTML/TXT extraction and malformed EPUB handling.
- Fixed selection/delete interaction and read-only highlight rendering.
- Raised the minimum supported Moodle version to 4.2.
- Added normalization fixtures and corrected architecture documentation.

# Change log

## 0.9.2 — 2026-10-19

- Mark document outline sections that already contain highlights.
- Add an accessible toolbar control to collapse and reopen the document outline.
- Update outline progress immediately after highlights are created or deleted.
## 0.9.1 — 2026-10-19

- Moved all reader, document extraction and analytics UI text to Moodle language strings.
- Added complete English and Spanish string sets with matching keys.
- Localised the legacy PDF viewer controls and accessibility labels.
## 0.1.0 — 2026-10-18

- Initial installable MVP.
- Native Moodle identity, contexts, roles, groups and groupings.
- File API documents and XMLDB annotation tables.
- AJAX document, highlight and comment services.
- Events, privacy provider, backup and restore.
- Reused text-offset highlighting approach from the standalone Underly.it frontend.
