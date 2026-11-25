# Northline WooCommerce starter

Use this fork to build a WooCommerce store with the Northline Storefront child theme. The theme provides sale-price contrast, mobile search and mini-cart visibility rules, and product thumbnail labels.

## What you need

- Git, LocalWP and WordPress admin access to a fresh local site. Select PHP 8.2.29 in LocalWP to match Northline.
- A Stripe sandbox for the project, a webhook URL reachable by Stripe, and access to a GA4 test property.
- Client settings for currency, timezone, shipping zones and rates, and taxes.
- Use the Northline versions below as a reference when selecting compatible versions for the new store.

| Component | Northline version |
| --- | --- |
| WordPress | 7.1.5 |
| PHP | 8.2.29 |
| Storefront / Storefront Child | 4.6.2 / 1.0.0 |
| WooCommerce | 11.3.1 |
| WooCommerce Stripe Gateway | 11.2.0 |
| Yoast SEO | 28.9 |
| Google Analytics for WooCommerce | 2.4.5 |

## Set up the store

1. Fork and clone the repo. Create a fresh site in LocalWP. Install Storefront and the four plugins listed above.
2. Copy `storefront-child/` into `wp-content/themes/`. Activate **Storefront Child** and keep its parent installed. Make theme changes in the child theme.
3. Apply the client settings. Assign Shop, Cart, Checkout and My Account. Assign the same menu to Primary and Handheld. Import WooCommerce sample products for local testing.
4. Enable Stripe test mode, connect the project's sandbox and configure its webhook. A LocalWP export can carry over the original store's Stripe settings. Check the connected account if you restore an export.
5. Configure the GA4 test property. Add unique titles and descriptions for Shop and product pages, and descriptive alt text for informative images.


## Local → Staging → Production

1. **Local.** Develop in the child theme on PHP 8.2.29. Run the acceptance checks with test accounts. Review staged files and commit the tested changes. Publish only custom code and guides. Keep exports, databases, uploads, logs, credentials and preview links private.
2. **Staging.** Back up staging and deploy the local commit. Restrict access, disable indexing and sanitize copied data. Use sandbox payments and captured email. Run the acceptance checks on the release you plan to deploy.
3. **Production.** After staging approval, record the current production commit and back up files and database. Deploy the exact commit approved on staging. Keep the live order database in place. Verify HTTPS, live payments, webhooks, email and Analytics. Enable indexing at launch.
## Backup and rollback

- Agree on backup frequency, keep encrypted copies in restricted storage and test a restore. For a code rollback, deploy the previous version and retest checkout. For database recovery, preserve recent orders and reconcile them with Stripe.

## Handoff status

- The tester confirmed that a private LocalWP export restored the Shop, images and active theme. They also checked the four store pages in both browsers at all three sizes.
- PHP 8.2.29 reported no syntax errors in storefront-child/functions.php.
- Before tagging a release, install from a fresh fork and verify product-name announcements in Narrator.
- Hosted deployment, scheduled backups and rollback still need validation.
