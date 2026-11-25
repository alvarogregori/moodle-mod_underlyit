# Underly.it (`mod_underlyit`)

Underly.it is a Moodle activity plugin for active and collaborative document reading.

## Install

Copy this directory to `mod/underlyit`, visit **Site administration > Notifications**, then add an Underly.it activity to a course. Each activity accepts one PDF, EPUB, DOCX, HTML or TXT document.

This release is a public beta. See `docs/ARCHITECTURE.md` for implemented behaviour, limitations and the Marketplace roadmap.

## Requirements

- Moodle 4.5 or later.
- A PHP and database version supported by the selected Moodle release.

## Translations

The plugin ships only English strings. Translations are contributed through [AMOS](https://lang.moodle.org/).

## License

GPL-3.0-or-later.

## Development build

The AMD modules in `amd/build` (minified files and source maps) are generated from `amd/src` with Moodle's own Grunt, from the root of a Moodle 4.5 checkout with its Node dependencies installed (`npm ci`) and this plugin in `mod/underlyit`:

```bash
npx grunt amd --root=mod/underlyit
npx stylelint mod/underlyit/styles.css
```

The plugin has no Gruntfile or npm configuration of its own. Moodle administrators do not need Node.js, npm or Grunt to install the plugin.

## Release package

Build the ZIP from a committed tree; `.gitattributes` keeps development files out of it:

```bash
git archive --format=zip --prefix=underlyit/ -o ../mod_underlyit-0.17.0.zip HEAD
```

## Third-party libraries

Underly.it bundles PDF.js 3.11.174 and JSZip 3.10.1. Their licenses, exact upstream sources, reproduction steps and SHA-256 checksums are documented in each library's `readme_moodle.txt` and in `thirdpartylibs.xml`.

## Source, issues and documentation

- Source: https://github.com/alvarogregori/moodle-mod_underlyit
- Issues: https://github.com/alvarogregori/moodle-mod_underlyit/issues
- Architecture: `docs/ARCHITECTURE.md`
