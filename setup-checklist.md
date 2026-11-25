# New site checklist

## Install and configure

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

## Verify

- [ ] Test successful, declined, retried and canceled payments.
- [ ] Verify GA4 page, product, cart, checkout and purchase events.
- [ ] Match purchase ID, currency and value to the order.
- [ ] Test Shop, product, Cart and Checkout in two browsers and three sizes.
- [ ] Check keyboard focus, Narrator labels and Lighthouse findings.
- [ ] Recheck contrast when changing colors or backgrounds.
- [ ] Retest the thumbnail filter if product-link markup changes.
- [ ] Export privately, restore separately and check the restored site.

## Configuration boundary

- Theme files do not copy database settings; repeat this checklist per site.
- Noindex does not restrict access; use access controls too.
