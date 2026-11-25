# Northline reusable store base

- Version: 1.0.0.
- Purpose: reuse Storefront fixes and setup across similar stores.

## Files

- `storefront-child/`: custom CSS and product thumbnail filter.
- `plugin-baseline.md`: versions and plugin purposes.
- `setup-checklist.md`: repeatable installation steps.
- `environment-workflow.md`: releases, backups and rollback.
- `validation-record.md`: completed checks and missing evidence.

## Install

- Fork this repository on GitHub, then clone your fork.
- Repository: https://github.com/RuyAC/Northline.Child
- Create a branch such as `codex/client-setup` before editing.
- Create a clean LocalWP site; confirm its PHP version.
- Install Storefront and the baseline plugins from official sources.
- Copy `storefront-child` into `wp-content/themes/`.
- Activate Storefront Child; keep Storefront installed.
- Follow the setup checklist and test before release.
- Storefront already loads child CSS; no extra loader is needed.

## Work from your fork

- Treat `storefront-child/` in Git as the source of custom code.
- Copy changed theme files into LocalWP to test; copy back any edits made in LocalWP before committing.
- Commit only reviewed code and documentation; keep database exports private.
- Add the original repository as the `upstream` remote and review shared updates before merging.
- Follow [CONTRIBUTING.md](CONTRIBUTING.md) for checks and pull requests.
- Record client settings with the checklist; this repository does not install WordPress or copy database settings.

## Reuse

- Reuse native product grids, product pages, cart, checkout and menus.
- Keep shared fixes in this repository; version each release.
- Test each release on every client's staging site before production.
- Keep client branding and content separate; merge client code deliberately.
- Use separate payment accounts, Analytics properties and business settings.
- No custom plugin is needed for the current requirements.

## Public repository

- Include only custom code and guides.
- Exclude exports, databases, uploads, logs, credentials and preview links.
- Review staged files; ignore rules do not remove committed secrets.
- Public repository: https://github.com/RuyAC/Northline.Child
- Release tag: pending validation.
