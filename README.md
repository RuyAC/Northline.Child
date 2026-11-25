# Northline reusable store base

- Version: 1.0.0.
- Purpose: reuse Storefront fixes and setup across similar stores.

## Code and guides

- `storefront-child/`: custom CSS and product thumbnail filter.
- [Plugin baseline](#plugin-baseline): versions and plugin purposes.
- [New site checklist](#new-site-checklist): repeatable installation steps.
- [Environment workflow](#environment-workflow): releases, backups and rollback.
- [Validation record](#validation-record): completed checks and missing evidence.

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
- Follow [Contributing](#contributing) for checks and pull requests.
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

## Plugin baseline

### Versions

- WordPress: 7.1.5.
- PHP: confirm in LocalWP.
- Storefront: 4.6.2; free official-repository parent theme.
- Storefront Child: 1.0.0; presentation and thumbnail fixes.

### Required plugins

- WooCommerce 11.3.1: products, cart, checkout and orders.
- Stripe Gateway 11.2.0: card payments and sandbox tests.
- Yoast SEO 28.9: editable titles and meta descriptions.
- Google Analytics for WooCommerce 2.4.5: page and shopping events.

### Rules

- These are tested versions; check updates before reuse.
- Keep only the chosen gateway active; retain historical orders.
- PayPal and WooPayments were evaluated, not selected for this baseline.
- Configure currency, shipping, taxes, webhooks and credentials per client.
- Keep secrets outside Git and test Analytics separate from production.
- Leave advertising support off unless required; confirm visitor consent rules.

## New site checklist

### Install and configure

- [ ] Record WordPress, PHP, theme and plugin versions.
- [ ] Install the parent, child theme and baseline plugins.
- [ ] Set client branding, timezone, currency, shipping and taxes.
- [ ] Use sample products only for testing.
- [ ] Assign Shop, Cart, Checkout and My account pages.
- [ ] Assign one menu to Primary and Handheld locations.
- [ ] Add unique descriptions and meaningful product image alternatives.
- [ ] Configure sandbox payments and reachable test webhooks.
- [ ] Configure a separate GA4 test property.
- [ ] Restrict local/staging access; keep Coming Soon and noindex enabled.

### Verify

- [ ] Test successful, declined, retried and canceled payments.
- [ ] Verify GA4 page, product, cart, checkout and purchase events.
- [ ] Match purchase ID, currency and value to the order.
- [ ] Test Shop, product, Cart and Checkout in two browsers and three sizes.
- [ ] Check keyboard focus, Narrator labels and Lighthouse findings.
- [ ] Recheck contrast when changing colors or backgrounds.
- [ ] Retest the thumbnail filter if product-link markup changes.
- [ ] Export privately, restore separately and check the restored site.

### Configuration boundary

- Theme files do not copy database settings; repeat this checklist per site.
- Noindex does not restrict access; use access controls too.

## Environment workflow

### Environments

- Local: LocalWP, sample data, sandbox payments, test GA4 and captured email.
- Staging: separate database, restricted access, sanitized data, test integrations and email sink.
- Production: real orders, verified live gateway, separate GA4 and approved email delivery.
- Keep local/staging non-indexed; enable production indexing only at launch.
- Verified so far: local site and restored copy. Hosted staging/production are not deployed.

### Local to staging

- Work on a small branch; edit only custom code.
- Bump the child version and update the changelog.
- Check PHP syntax, user flows, accessibility and responsive layouts.
- Review changes and scan for secrets; tag the tested release.
- Back up staging; deploy the same release with its own settings.
- Before testing copied data, restrict access, sanitize it and disable live integrations.
- Use WordPress-aware URL replacement to preserve serialized values.
- Repeat payment, webhook, SEO and Analytics checks; obtain acceptance.

### Staging to production

- Agree on release time, acceptance and rollback owner.
- Confirm HTTPS, consent, policies, shipping, taxes and live webhooks.
- Back up files and database; record the previous release.
- Deploy code and selected settings, not the staging database over live orders.
- Test migrations on staging; use maintenance time when required.
- Clear caches; verify checkout, email, payments, webhooks and Analytics.
- Run live purchase/refund checks only with merchant authorization.
- Enable indexing at launch; monitor errors and failed payments.

### Backups

- Completed: private Local export and separate restore confirmed by tester.
- Agree recovery time and acceptable data loss with the client.
- Proposed: daily encrypted files/database backup plus a pre-release copy.
- Keep seven daily and four weekly copies in separate restricted storage.
- Adjust database frequency to order volume; stay within free-tier capacity.
- Test restores before launch and after backup changes.
- Scheduled cloud backups are not yet configured.

### Rollback

- Code only: deploy the previous tag, clear caches and retest checkout.
- Database migration: follow the tested vendor recovery procedure.
- Preserve new orders and gateway records before database recovery.
- Reconcile transactions; record the incident before retrying.

### Shared fixes

- Fix the base once; test the same release for each client.
- Promote sites separately; record version, date and result.
- Preserve client changes; do not edit parent themes or nest child themes.
- Apply security updates promptly with focused checks and rollback available.

## Contributing

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

## Validation record

### Confirmed by tester

- Export saved privately and imported as a separate Local site.
- Restored Shop, product images and active child theme work.
- Edge and Brave passed at laptop, tablet and mobile sizes.
- Pages checked: Shop, Beanie, Cart and Checkout.
- Problem 2 evidence is stored separately from public code.

### Capture evidence

- Original and restored sites in Local.
- Restored Shop and active child theme.
- Clean new site using the reusable base.
- Public repository files and release tag.

### Pending

- Confirm PHP version and run the PHP syntax check.
- Complete clean-site installation; a restore is a separate check.
- Confirm final product-name behavior in Narrator.
- Tag the public release after validation.
- Hosted deployments, scheduled cloud backups and rollback remain untested.

### Release record

- Northline local: existing 1.0.0; packaged release installation pending.
- Restore copy: restored snapshot; restore confirmed by tester.
- For future sites, record client, environment, release, date and result.

## Changelog

### 1.0.0

- Packaged the existing child theme; running site unchanged.
- Included price contrast and closed search/cart visibility fixes.
- Included thumbnail filter; final Narrator verification pending.
- Added setup, plugin, deployment, backup and rollback guides.
- Recorded the confirmed restore and remaining checks.
- Public release tag: pending.
