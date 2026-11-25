# Environment workflow

## Environments

- Local: LocalWP, sample data, sandbox payments, test GA4 and captured email.
- Staging: separate database, restricted access, sanitized data, test integrations and email sink.
- Production: real orders, verified live gateway, separate GA4 and approved email delivery.
- Keep local/staging non-indexed; enable production indexing only at launch.
- Verified so far: local site and restored copy. Hosted staging/production are not deployed.

## Local to staging

- Work on a small branch; edit only custom code.
- Bump the child version and update the changelog.
- Check PHP syntax, user flows, accessibility and responsive layouts.
- Review changes and scan for secrets; tag the tested release.
- Back up staging; deploy the same release with its own settings.
- Before testing copied data, restrict access, sanitize it and disable live integrations.
- Use WordPress-aware URL replacement to preserve serialized values.
- Repeat payment, webhook, SEO and Analytics checks; obtain acceptance.

## Staging to production

- Agree on release time, acceptance and rollback owner.
- Confirm HTTPS, consent, policies, shipping, taxes and live webhooks.
- Back up files and database; record the previous release.
- Deploy code and selected settings, not the staging database over live orders.
- Test migrations on staging; use maintenance time when required.
- Clear caches; verify checkout, email, payments, webhooks and Analytics.
- Run live purchase/refund checks only with merchant authorization.
- Enable indexing at launch; monitor errors and failed payments.

## Backups

- Completed: private Local export and separate restore confirmed by tester.
- Agree recovery time and acceptable data loss with the client.
- Proposed: daily encrypted files/database backup plus a pre-release copy.
- Keep seven daily and four weekly copies in separate restricted storage.
- Adjust database frequency to order volume; stay within free-tier capacity.
- Test restores before launch and after backup changes.
- Scheduled cloud backups are not yet configured.

## Rollback

- Code only: deploy the previous tag, clear caches and retest checkout.
- Database migration: follow the tested vendor recovery procedure.
- Preserve new orders and gateway records before database recovery.
- Reconcile transactions; record the incident before retrying.

## Shared fixes

- Fix the base once; test the same release for each client.
- Promote sites separately; record version, date and result.
- Preserve client changes; do not edit parent themes or nest child themes.
- Apply security updates promptly with focused checks and rollback available.
