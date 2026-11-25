# Northline WooCommerce starter

Use this fork to build a WooCommerce store with the Northline Storefront child theme. The theme provides sale-price contrast, mobile search and mini-cart visibility rules, and product thumbnail labels.

## What you need

- Git, LocalWP and WordPress admin access to a fresh local site. Record the PHP version shown in LocalWP.
- A Stripe sandbox for the project, a webhook URL reachable by Stripe, and access to a GA4 test property.
- Client settings for currency, timezone, shipping zones and rates, and taxes.
- Use the Northline versions below as a reference when selecting compatible versions for the new store.

| Component | Northline version |
| --- | --- |
| WordPress | 7.1.5 |
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

## Acceptance checks

- [ ] Run `php -l storefront-child/functions.php` from the repo root with the site's PHP version. Confirm it reports no syntax errors.
- [ ] Open Shop, a product, Cart and Checkout in Edge and Brave at 1366×768, 768×1024 and 390×844. Confirm controls remain visible, usable and free of overlap.
- [ ] Navigate with the keyboard and Narrator. Verify visible focus, a usable skip link, and a single product-name announcement per product link. Check that closed search and cart controls stay out of the focus order.
- [ ] Save Lighthouse accessibility and SEO results for Shop and one product. Record remaining findings.
- [ ] In Stripe test mode, complete a purchase, decline a payment, retry the failed order and cancel authentication. Record each WooCommerce status and Stripe result. Verify successful webhook delivery.
- [ ] As a signed-out shopper, trigger product view, add-to-cart, checkout and purchase events. Confirm the GA4 purchase ID, value and currency match the WooCommerce order.

## Release and recovery

- **Git.** Review staged files. Publish only custom code and guides. Keep exports, databases, uploads, logs, credentials and preview links private.
- **Staging.** Back up the site, restrict access, disable indexing and sanitize copied data. Use sandbox payments and captured email. Run the acceptance checks on the release you plan to deploy.
- **Production.** After approval, back up files and database. Deploy the tested code while preserving live orders. Verify HTTPS, live payments, webhooks, email and Analytics. Enable indexing at launch.
- **Recovery.** Agree on backup frequency, keep encrypted copies in restricted storage and test a restore. For a code rollback, deploy the previous version and retest checkout. For database recovery, preserve recent orders and reconcile them with Stripe.

## Handoff status

- The tester confirmed that a private LocalWP export restored the Shop, images and active theme. They also checked the four store pages in both browsers at all three sizes.
- Still open before tagging a release: confirm PHP, run the syntax check, install from a fresh fork and verify product-name announcements in Narrator.
- Hosted deployment, scheduled backups and rollback still need validation.
