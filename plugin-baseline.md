# Plugin baseline

## Versions

- WordPress: 7.1.5.
- PHP: confirm in LocalWP.
- Storefront: 4.6.2; free official-repository parent theme.
- Storefront Child: 1.0.0; presentation and thumbnail fixes.

## Required plugins

- WooCommerce 11.3.1: products, cart, checkout and orders.
- Stripe Gateway 11.2.0: card payments and sandbox tests.
- Yoast SEO 28.9: editable titles and meta descriptions.
- Google Analytics for WooCommerce 2.4.5: page and shopping events.

## Rules

- These are tested versions; check updates before reuse.
- Keep only the chosen gateway active; retain historical orders.
- PayPal and WooPayments were evaluated, not selected for this baseline.
- Configure currency, shipping, taxes, webhooks and credentials per client.
- Keep secrets outside Git and test Analytics separate from production.
- Leave advertising support off unless required; confirm visitor consent rules.
