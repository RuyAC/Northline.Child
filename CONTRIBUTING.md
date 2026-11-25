# Contributing

- Fork and clone the repository; create a small feature branch.
- Keep reusable fixes separate from client branding and settings.
- Edit the child theme only; leave core, parent theme and vendor plugins unchanged.
- Run `php -l storefront-child/functions.php` with the site's PHP version.
- Copy the theme into LocalWP and check the affected journey.
- Check keyboard access and mobile layout for visual changes.
- For payment changes, repeat sandbox success, failure, retry and webhook checks.
- Update the child version and changelog for a release.
- Review staged files for credentials and client data.
- Open a pull request with the problem, change and test evidence.
- Merge only after review; test the same version on each client staging site.
