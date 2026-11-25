# Northline WooCommerce starter

A Storefront child theme with fixes for sale-price contrast, mobile search, cart visibility and product thumbnail labels.

## Start a store

1. Fork and clone this repository. Create a fresh WordPress site in LocalWP.
2. Install Storefront and the plugins listed below. Copy `storefront-child/` into `wp-content/themes/` and activate **Storefront Child**.
3. Set the store currency, timezone, shipping and taxes. Assign the WooCommerce pages and select the same menu for Primary and Handheld.
4. Import sample products for testing. Add product descriptions and image alt text.
5. Connect your own Stripe sandbox and test webhook. Connect a separate GA4 test property. A private LocalWP export includes database settings and can carry over the original Stripe connection.

## Northline versions

- WordPress 7.1.5, Storefront 4.6.2 and Storefront Child 1.0.0.
- WooCommerce 11.3.1 and WooCommerce Stripe Gateway 11.2.0.
- Yoast SEO 28.9 and Google Analytics for WooCommerce 2.4.5.

## Test a change

- Edit the child theme on a branch. Run `php -l storefront-child/functions.php` with the site's PHP version.
- Check Shop, product, Cart and Checkout in two browsers at laptop, tablet and mobile sizes. Check keyboard focus, Narrator labels and Lighthouse accessibility and SEO results.
- Test a successful payment, a decline, a retry and canceled authentication. Verify order status and webhook delivery.
- Verify GA4 product views, add-to-cart, checkout and purchase events. Match the purchase ID, value and currency to the order.
- Review staged files before pushing. Publish only custom code and guides. Keep exports, databases, uploads, logs, credentials and preview links private.

## Deploy and recover

- **Staging.** Back up the site and deploy the reviewed code. Restrict access, disable indexing, sanitize copied data and use sandbox payments and captured email. Repeat the checks above for each client.
- **Production.** After approval, back up files and database. Deploy the tested code and preserve live orders. Verify HTTPS, live gateway settings, webhooks, email and Analytics. Enable indexing at launch.
- **Backups.** Keep encrypted copies in restricted storage. Set the frequency based on how many orders the client can afford to lose. Test a restore before launch.
- **Rollback.** Redeploy the previous version and retest checkout. If database recovery is needed, preserve new orders and reconcile them against gateway transactions.

## Validation

- The tester confirmed the private LocalWP export restored the Shop, images and active theme. They also checked Shop, Beanie, Cart and Checkout in Edge and Brave at all three screen sizes.
- Before tagging a release, confirm the PHP version, run the syntax check, test a fresh install from the fork and recheck product-name repetition in Narrator.
- Hosted deployment, scheduled backups and rollback still need validation.
